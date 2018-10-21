"use strict";

function openImageWindow(src) {
    let image = new Image();
    image.src = src;
    window.open(src,"Image");
}