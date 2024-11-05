<?php
// Функция convertToHTML генерирует HTML-код для объектов Button, Text и Label.
function convertToHTML($element) {
    if ($element instanceof Button) {
        return "<input type='button' name='{$element->getName()}' value='{$element->getValue()}' style='width:{$element->getWidth()}; height:{$element->getHeight()}; background-color:{$element->getBackground()};'>";
    } elseif ($element instanceof Text) {
        return "<input type='text' name='{$element->getName()}' placeholder='{$element->getPlaceholder()}' style='width:{$element->getWidth()}; height:{$element->getHeight()}; background-color:{$element->getBackground()};'>";
    } elseif ($element instanceof Label) {
        return "<label for='{$element->getParentName()}' style='width:{$element->getWidth()}; height:{$element->getHeight()}; background-color:{$element->getBackground()};'>Label1</label>";
    } else {
        // Если тип объекта не поддерживается, возвращаем пустой комментарий
        return "<!-- Unsupported element type -->";
    }
}
?>