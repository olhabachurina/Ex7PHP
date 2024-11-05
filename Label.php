<?php
require_once 'Control.php';

// Класс Label добавляет метку к элементам управления.
class Label extends Control {
    private $for;

    // Метод для получения значения for
    public function getParentName() {
        return $this->for;
    }

    // Метод для установки значения for, принимает объект класса Button или Text
    public function setParentName($control) {
        $this->for = $control->getName();
    }

    // Конструктор для инициализации параметров
    public function __construct($background, $width, $height, $forControl) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setParentName($forControl);
    }
}
?>