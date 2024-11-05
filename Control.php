<?php
// Класс Control описывает базовые атрибуты стиля для HTML-элемента.
class Control {
    private $background;
    private $width;
    private $height;

    // Метод для получения значения background
    public function getBackground() {
        return $this->background;
    }

    // Метод для установки значения background
    public function setBackground($background) {
        $this->background = $background;
    }

    // Метод для получения значения width
    public function getWidth() {
        return $this->width;
    }

    // Метод для установки значения width
    public function setWidth($width) {
        $this->width = $width;
    }

    // Метод для получения значения height
    public function getHeight() {
        return $this->height;
    }

    // Метод для установки значения height
    public function setHeight($height) {
        $this->height = $height;
    }
}
?>