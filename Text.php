<?php
require_once 'Input.php';

// Класс Text строит текстовое поле на странице.
class Text extends Input {
    private $placeholder;

    // Метод для получения значения placeholder
    public function getPlaceholder() {
        return $this->placeholder;
    }

    // Метод для установки значения placeholder
    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    // Конструктор для инициализации параметров
    public function __construct($background, $width, $height, $name, $value, $placeholder) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setPlaceholder($placeholder);
    }
}
?>