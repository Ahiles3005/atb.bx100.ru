"use strict";


import * as THREE from "three";
import { OrbitControls } from "orbitcontrolls";
import { GLTFLoader } from "gltfloader";





// 1. СОЗДАНИЕ РЕНДЕРА, СЦЕНЫ И КАМЕРЫ

const canvas = document.querySelector(".cd-hero--canvas");
const renderer = new THREE.WebGLRenderer({antialias: true, canvas, alpha: true});
const scene = new THREE.Scene ();
const camera = new THREE.PerspectiveCamera (75, window.innerWidth / window.innerHeight, 0.1, 1000);




// 2. СОХРАНЕНИЕ ЧЕТКОСТИ ИЗОБРАЖЕНИЯ В Т.Ч. ПРИ РЕСАЙЗЕ

function resizeRendererToDisplaySize(renderer) {
    const canvas = renderer.domElement;
    const width = canvas.clientWidth;
    const height = canvas.clientHeight;
    const needResize = canvas.width !== width || canvas.height !== height;
    if (needResize) {
      renderer.setSize(width, height, false);
    }
    return needResize;
}

resizeRendererToDisplaySize(renderer);

camera.aspect = canvas.clientWidth / canvas.clientHeight;
camera.updateProjectionMatrix();


function cdHero3dDebounce (cB, time) {
    let idTimer;
    return function () {
        clearTimeout (idTimer);
        idTimer = setTimeout (() => {
            cB();
        }, time);
    }
}

const cdHero3dDebounce1 = cdHero3dDebounce (() => {
    resizeRendererToDisplaySize(renderer);

    camera.aspect = canvas.clientWidth / canvas.clientHeight;
    camera.updateProjectionMatrix();
}, 100);

window.addEventListener ("resize", cdHero3dDebounce1);




// 3. ЗАГРУЗЧИК МОДЕЛЕЙ ФОРМАТА GLTF (GLB) И ЗАГРУЗКА МОДЕЛИ

const loader = new GLTFLoader();
loader.load ('3d/images/car2.glb', function (gltf) {
    scene.add(gltf.scene);
});




// 4. ОСВЕЩЕНИЕ ДВУХ ВИДОВ

const ambientLight = new THREE.AmbientLight(0x404040, 10.6);

const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
directionalLight.position.set(5, 5, 5);

scene.add(ambientLight, directionalLight);




// 5. ВИЗУАЛИЗАЦИЯ ИСТОЧНИКА "СОЛНЕЧНОГО" ОСВЕЩЕНИЯ (РАСКОММЕНТИРОВАТЬ ПРИ НЕОБХОДИМОСТИ)

// const lightHelper = new THREE.DirectionalLightHelper(directionalLight);
// scene.add(lightHelper);




// 6. УПРАВЛЕНИЕ С ПОМОЩЬЮ МЫШИ

const controls = new OrbitControls(camera, canvas);
camera.position.z = 5;




// 7. РЕНДЕРИНГ С УСТАНОВЛЕННОЙ ВОЗМОЖНОСТЬЮ АНИМАЦИИ

function animate() {
      requestAnimationFrame(animate)
    
      controls.update();
    
      renderer.render (scene, camera);
}

animate ();