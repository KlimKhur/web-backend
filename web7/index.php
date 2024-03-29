<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Task7</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.toggle-button').click(function() {
            var parentDiv = $(this).next('.imgs');
            parentDiv.slideToggle('slow', function() {
                var buttonText = parentDiv.is(':visible') ? 'Закрыть код' : 'Открыть код';
                $(this).prev('.toggle-button').text(buttonText);
            });
        });
    });
    </script>
</head>
<body>

    <h1>Отчёт о безопасности</h1>
    <p>Переделаны задания №5 и №6</p>
    <h2>Защита от XSS</h2>
    <p>Используются функции <b>htmlspecialchars()</b> и <b>strip_tags()</b> при выводе данных в форму. Это помогает предотвратить внедрение HTML- и JavaScript-кода, защищая от XSS-атак.</p>
    <button class="toggle-button">Открыть код</button>
    <div id="xss" class="imgs" style="display: none;">
        <img src="img/1.png" alt="xss1">
        <br>
        <img src="img/2.png" alt="xss2">
    </div>

    <h2>Защита от SQL Injection</h2>
    <p>Используются подготовленные запросы <b>$db->prepare()</b> и <b>$stmt->execute()</b> для выполнения запросов к базе данных. Это позволяет избежать SQL-инъекций путем корректной обработки параметров запроса.</p>
    <button class="toggle-button">Открыть код</button>
    <div id="injection" class="imgs" style="display: none;">
        <img src="img/3.png" alt="injection">
    </div>

    <h2>Защита от CSRF</h2>
    <p>Генерируется <b>токен</b> в сессии и проверяется его наличие и соответствие при обработке запросов. Это помогает предотвратить CSRF-атаки, гарантируя, что запросы отправлены только с моего веб-сайта.</p>
    <button class="toggle-button">Открыть код</button>
    <div id="csrf" class="imgs" style="display: none;">
        <img src="img/4.png" alt="csrf1">
        <br>
        <img src="img/5.png" alt="csrf2">
    </div>

    <h2>Защита от Include и Upload уязвимости</h2>
    <p>Указывается путь к файлу в операторе <b>include()</b> вручную. Это помогает предотвратить включение нежелательных файлов.</p>
    <button class="toggle-button">Открыть код</button>
    <div id="include" class="imgs" style="display: none;">
        <img src="img/6.png" alt="include">
    </div>

</body>
</html>
