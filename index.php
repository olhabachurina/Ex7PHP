<?php
require_once 'Button.php';
require_once 'Text.php';
require_once 'Label.php';
require_once 'functions.php';
// Создаем объект Button
$button = new Button('red', '200px', '50px', 'button1', 'Button1', true);
echo convertToHTML($button);

echo "<br>";

// Создаем объект Text
$text = new Text('white', '100px', '50px', 'text1', '', 'Enter your text here');
echo convertToHTML($text);

// Создаем объект Label, связанный с объектом Text
$label = new Label('orange', '100px', '50px', $text);
echo convertToHTML($label);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex7PHP</title>
    <style>

        .moving-image {
            position: fixed;
            bottom: 10px;
            right: -200px;
            width: 100px;
            height: auto;
            animation: moveLeft 10s linear infinite;
        }


        @keyframes moveLeft {
            from {
                right: -200px;
            }
            to {
                right: 100%;
            }
        }
    </style>
</head>
<body>

<img src="php.jpg" alt="PHP Logo" class="moving-image">
</body>
</html>
