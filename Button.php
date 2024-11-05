<?php
require_once 'Input.php';

// Класс Button строит кнопку на странице.
class Button extends Input {
    private $isSubmit;

    // Метод для получения состояния isSubmit
    public function getSubmitState() {
        return $this->isSubmit;
    }

    // Метод для установки состояния isSubmit
    public function setSubmitState($isSubmit) {
        $this->isSubmit = $isSubmit;
    }

    // Конструктор для инициализации параметров
    public function __construct($background, $width, $height, $name, $value, $isSubmit) {
        $this->setBackground($background);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setName($name);
        $this->setValue($value);
        $this->setSubmitState($isSubmit);
    }
}
?>