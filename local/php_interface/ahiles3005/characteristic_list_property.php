<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Loader;

Loc::loadMessages(__FILE__);

/**
 * Список характеристик для инфоблока
 * Поддерживает группы с названием и несколькими значениями
 */
class CharacteristicList
{
	const USER_TYPE = 'CharacteristicList';

	/**
	 * Регистрация типа свойства
	 */
	public static function GetIBlockPropertyDescription()
	{
		return [
			'PROPERTY_TYPE' => 'S',
			'USER_TYPE' => self::USER_TYPE,
			'DESCRIPTION' => 'Список характеристик (группы)',
			'CHECK_CREDENTIALS' => 'N',
			'ConvertFromDB' => [__CLASS__, 'ConvertFromDB'],
			'ConvertToDB' => [__CLASS__, 'ConvertToDB'],
			'GetPropertyFieldHTML' => [__CLASS__, 'GetPropertyFieldHTML'],
			'GetPropertyFieldHtmlMulty' => [__CLASS__, 'GetPropertyFieldHtmlMulty'],
			'GetAdminListViewHTML' => [__CLASS__, 'GetAdminListViewHTML'],
			'GetSettingsHTML' => [__CLASS__, 'GetSettingsHTML'],
			'PrepareSettings' => [__CLASS__, 'PrepareSettings'],
		];
	}

	/**
	 * Регистрация обработчика
	 */
	public static function RegisterHandler()
	{
		\AddEventHandler('iblock', 'OnIBlockPropertyBuildList', [__CLASS__, 'GetIBlockPropertyDescription']);
	}

	/**
	 * Подготовка настроек свойства
	 */
	public static function PrepareSettings($arProperty)
	{
		$settings = [
			'title' => trim($arProperty['USER_TYPE_SETTINGS']['title'] ?? 'Характеристики'),
			'max_groups' => intval($arProperty['USER_TYPE_SETTINGS']['max_groups'] ?? 50),
			'max_values' => intval($arProperty['USER_TYPE_SETTINGS']['max_values'] ?? 10),
		];

		if ($settings['max_groups'] < 1) $settings['max_groups'] = 50;
		if ($settings['max_values'] < 1) $settings['max_values'] = 10;

		return $settings;
	}

	/**
	 * HTML настроек свойства
	 */
	public static function GetSettingsHTML($arProperty, $strHTMLControlName, &$arPropertyFields)
	{
		$settings = self::PrepareSettings($arProperty);

		$html = '';

		// Заголовок группы
		$html .= '<tr>';
		$html .= '<td>Заголовок:</td>';
		$html .= '<td>';
		$html .= '<input type="text" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[title]" ';
		$html .= 'value="' . htmlspecialchars($settings['title']) . '" style="width: 300px;">';
		$html .= '<br><small class="note">Название для группы (например: Характеристики, Опции)</small>';
		$html .= '</td>';
		$html .= '</tr>';

		// Макс. количество групп
		$html .= '<tr>';
		$html .= '<td>Макс. групп:</td>';
		$html .= '<td>';
		$html .= '<input type="number" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[max_groups]" ';
		$html .= 'value="' . $settings['max_groups'] . '" min="1" max="100" style="width: 100px;">';
		$html .= '<br><small class="note">Максимальное количество групп (1-100)</small>';
		$html .= '</td>';
		$html .= '</tr>';

		// Макс. значений в группе
		$html .= '<tr>';
		$html .= '<td>Макс. значений:</td>';
		$html .= '<td>';
		$html .= '<input type="number" name="' . htmlspecialchars($strHTMLControlName['NAME']) . '[max_values]" ';
		$html .= 'value="' . $settings['max_values'] . '" min="1" max="50" style="width: 100px;">';
		$html .= '<br><small class="note">Макс. количество значений в одной группе (1-50)</small>';
		$html .= '</td>';
		$html .= '</tr>';

		return $html;
	}

	/**
	 * Конвертация из БД
	 */
	public static function ConvertFromDB($arProperty, $value)
	{
		if (!is_array($value)) {
			$value = unserialize($value, ['allowed_classes' => false]);
			if (!is_array($value)) {
				$value = [];
			}
		}

		return $value;
	}

	/**
	 * Конвертация в БД
	 */
	public static function ConvertToDB($arProperty, $value)
	{
		if (!is_array($value)) {
			$value = [];
		}

		return serialize($value);
	}

	/**
	 * HTML для НЕ множественного свойства
	 */
	public static function GetPropertyFieldHTML($arProperty, $value, $strHTMLControlName)
	{
		$settings = self::PrepareSettings($arProperty);
		$fieldName = htmlspecialchars($strHTMLControlName['VALUE']);

		// Получаем текущие значения
		$groups = [];
		if (!empty($value['VALUE'])) {
			if (is_array($value['VALUE'])) {
				$groups = $value['VALUE'];
			} else {
				$unserialized = unserialize($value['VALUE'], ['allowed_classes' => false]);
				if (is_array($unserialized)) {
					$groups = $unserialized;
				}
			}
		}

		// Если нет групп, добавляем одну пустую
		if (empty($groups)) {
			$groups[] = ['name' => '', 'values' => ['']];
		}

		ob_start();
		?>
		<div class="characteristic-list-wrapper" data-max-groups="<?php echo $settings['max_groups']; ?>" data-max-values="<?php echo $settings['max_values']; ?>">
			<div class="groups-container">
				<?php foreach ($groups as $groupIndex => $group): ?>
					<?php
					$groupName = $group['name'] ?? '';
					$values = $group['values'] ?? [''];
					if (!is_array($values)) $values = [$values];
					?>
					<div class="characteristic-group" data-group-index="<?php echo $groupIndex; ?>">
						<div class="group-header">
							<input
								type="text"
								class="group-name-input"
								name="<?php echo $fieldName; ?>[<?php echo $groupIndex; ?>][name]"
								value="<?php echo htmlspecialchars($groupName); ?>"
								placeholder="Название характеристики"
								style="width: 300px;"
							>
							<button type="button" class="delete-group-btn">Удалить группу</button>
						</div>
						<div class="group-values">
							<?php foreach ($values as $valueIndex => $val): ?>
								<div class="value-item">
									<input
										type="text"
										class="value-input"
										name="<?php echo $fieldName; ?>[<?php echo $groupIndex; ?>][values][<?php echo $valueIndex; ?>]"
										value="<?php echo htmlspecialchars($val); ?>"
										placeholder="Значение"
										style="width: 400px;"
									>
									<button type="button" class="delete-value-btn">×</button>
								</div>
							<?php endforeach; ?>
							<button type="button" class="add-value-btn">+ Добавить значение</button>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
			<button type="button" class="add-group-btn">+ Добавить группу</button>
		</div>

		<style>
			.characteristic-list-wrapper {
				margin: 10px 0;
			}
			.groups-container {
				margin-bottom: 15px;
			}
			.characteristic-group {
				border: 1px solid #d0d0d0;
				border-radius: 5px;
				padding: 15px;
				margin-bottom: 15px;
				background: #f9f9f9;
			}
			.group-header {
				display: flex;
				gap: 10px;
				align-items: center;
				margin-bottom: 10px;
				padding-bottom: 10px;
				border-bottom: 1px solid #e0e0e0;
			}
			.group-name-input {
				flex: 1;
			}
			.delete-group-btn {
				background: #ff5757;
				color: white;
				border: none;
				padding: 5px 10px;
				border-radius: 3px;
				cursor: pointer;
				font-size: 12px;
			}
			.delete-group-btn:hover {
				background: #e64545;
			}
			.group-values {
				margin-left: 10px;
			}
			.value-item {
				display: flex;
				gap: 10px;
				margin-bottom: 8px;
				align-items: center;
			}
			.value-input {
				flex: 1;
			}
			.delete-value-btn {
				background: #ff5757;
				color: white;
				border: none;
				width: 24px;
				height: 24px;
				border-radius: 3px;
				cursor: pointer;
				font-size: 16px;
				line-height: 1;
			}
			.delete-value-btn:hover {
				background: #e64545;
			}
			.add-value-btn {
				background: #2fc6f6;
				color: white;
				border: none;
				padding: 5px 10px;
				border-radius: 3px;
				cursor: pointer;
				font-size: 12px;
				margin-top: 5px;
			}
			.add-value-btn:hover {
				background: #1db5e5;
			}
			.add-group-btn {
				background: #2fc6f6;
				color: white;
				border: none;
				padding: 8px 15px;
				border-radius: 3px;
				cursor: pointer;
				font-size: 14px;
			}
			.add-group-btn:hover {
				background: #1db5e5;
			}
		</style>

		<script>
			(function() {
				const wrapper = document.querySelector('.characteristic-list-wrapper');
				if (!wrapper) return;

				const container = wrapper.querySelector('.groups-container');
				const addGroupBtn = wrapper.querySelector('.add-group-btn');
				const maxGroups = parseInt(wrapper.dataset.maxGroups) || 50;
				const maxValues = parseInt(wrapper.dataset.maxValues) || 10;

				let groupIndex = wrapper.querySelectorAll('.characteristic-group').length;

				// Добавление новой группы
				addGroupBtn.addEventListener('click', function() {
					if (wrapper.querySelectorAll('.characteristic-group').length >= maxGroups) {
						alert('Достигнут максимум групп!');
						return;
					}

					const newGroup = document.createElement('div');
					newGroup.className = 'characteristic-group';
					newGroup.dataset.groupIndex = groupIndex;

					const fieldNameBase = wrapper.querySelector('.group-name-input').name.match(/^(.+)\[\d+\]\[name\]$/)[1];

					newGroup.innerHTML = `
						<div class="group-header">
							<input
								type="text"
								class="group-name-input"
								name="${fieldNameBase}[${groupIndex}][name]"
								value=""
								placeholder="Название характеристики"
								style="width: 300px;"
							>
							<button type="button" class="delete-group-btn">Удалить группу</button>
						</div>
						<div class="group-values">
							<div class="value-item">
								<input
									type="text"
									class="value-input"
									name="${fieldNameBase}[${groupIndex}][values][0]"
									value=""
									placeholder="Значение"
									style="width: 400px;"
								>
								<button type="button" class="delete-value-btn">×</button>
							</div>
							<button type="button" class="add-value-btn">+ Добавить значение</button>
						</div>
					`;

					container.appendChild(newGroup);
					groupIndex++;
				});

				// Удаление группы
				container.addEventListener('click', function(e) {
					if (e.target.classList.contains('delete-group-btn')) {
						const group = e.target.closest('.characteristic-group');
						if (container.querySelectorAll('.characteristic-group').length > 1) {
							group.remove();
						} else {
							alert('Должна остаться минимум одна группа!');
						}
					}
				});

				// Добавление значения
				container.addEventListener('click', function(e) {
					if (e.target.classList.contains('add-value-btn')) {
						const groupValues = e.target.closest('.group-values');
						if (groupValues.querySelectorAll('.value-item').length >= maxValues) {
							alert('Достигнут максимум значений!');
							return;
						}

						const fieldNameBase = groupValues.querySelector('.value-input').name.match(/^(.+)\]\[values\]\[\d+\]$/)[1];
						const valueIndex = groupValues.querySelectorAll('.value-item').length;

						const newValue = document.createElement('div');
						newValue.className = 'value-item';
						newValue.innerHTML = `
							<input
								type="text"
								class="value-input"
								name="${fieldNameBase}[values][${valueIndex}]"
								value=""
								placeholder="Значение"
								style="width: 400px;"
							>
							<button type="button" class="delete-value-btn">×</button>
						`;

						e.target.insertAdjacentElement('beforebegin', newValue);
					}
				});

				// Удаление значения
				container.addEventListener('click', function(e) {
					if (e.target.classList.contains('delete-value-btn')) {
						const valueItem = e.target.closest('.value-item');
						const groupValues = valueItem.closest('.group-values');
						if (groupValues.querySelectorAll('.value-item').length > 1) {
							valueItem.remove();
						} else {
							valueItem.querySelector('.value-input').value = '';
						}
					}
				});
			})();
		</script>
		<?php
		return ob_get_clean();
	}

	/**
	 * HTML для множественного свойства
	 */
	public static function GetPropertyFieldHtmlMulty($arProperty, $values, $strHTMLControlName)
	{
		return self::GetPropertyFieldHTML($arProperty, ['VALUE' => $values], $strHTMLControlName);
	}

	/**
	 * HTML для отображения в списке админки
	 */
	public static function GetAdminListViewHTML($arProperty, $value, $strHTMLControlName)
	{
		if (empty($value['VALUE'])) {
			return '';
		}

		$values = $value['VALUE'];
		if (!is_array($values)) {
			$values = unserialize($values, ['allowed_classes' => false]);
		}

		if (!is_array($values) || empty($values)) {
			return '';
		}

		$count = count($values);
		$firstGroup = $values[0];

		$result = '<strong>' . $count . ' групп(ы)</strong><br>';

		if (!empty($firstGroup['name'])) {
			$result .= htmlspecialchars($firstGroup['name']) . ': ';
		}

		$vals = $firstGroup['values'] ?? [];
		if (!is_array($vals)) $vals = [$vals];

		$filtered = array_filter($vals, function($v) { return trim($v) !== ''; });
		if (!empty($filtered)) {
			$result .= implode(' | ', array_map('htmlspecialchars', array_slice($filtered, 0, 2)));
			if (count($filtered) > 2) {
				$result .= ' ...';
			}
		}

		return $result;
	}
}

// Регистрация обработчика
\CharacteristicList::RegisterHandler();
