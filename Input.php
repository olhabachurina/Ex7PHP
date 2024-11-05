<?php
require_once 'Control.php';

// Класс Input описывает базовые атрибуты тега <input>.
class Input extends Control {
    private $name;
    private $value;

    // Метод для получения значения name
    public function getName() {
        return $this->name;
    }

    // Метод для установки значения name
    public function setName($name) {
        $this->name = $name;
    }

    // Метод для получения значения value
    public function getValue() {
        return $this->value;
    }

    // Метод для установки значения value
    public function setValue($value) {
        $this->value = $value;
    }
}
?>