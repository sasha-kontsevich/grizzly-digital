<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Grizzly test</title>
</head>


<?php
include_once "phone-checker.php";
?>

<body>
    <h2>Задание 1</h2>
    <form method="POST" action="index.php">
        <label for="phone-number">
            Phone number
            <input id="phone-number" name="phone-number" type="text">
        </label>
        <button type="submit">Check</button>
    </form>

    <?php echo country_from_phone($_POST["phone-number"]) ?>


    <h2>Задание 2</h2>

    <button id="clear-cookies-button">Clear cookies</button>
    <div class="cookies-popup hidden" id="cookies-popup">
        <span>This site use cookies</span>
        <button id="accept-cookies-button">Accept</button>
        <button id="decline-cookies-button">Decline</button>
    </div>

    <h2>Задание 3</h2>

    <div class="container-fluid section-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 panel">
                    <h1>Оперативная доставка на маркетплейсы</h1>
                    <ul>
                        <li>Работаем без выходных 7 дней в неделю</li>
                        <li>Доставляем "сегодня на сегодня"</li>
                        <li>Заберём и доставим день в день ваш товар до склада ВБ в Минске</li>
                        <li>Доставим ваш товар из Минска в Коледино (Россия) по схемам FBO или FBS</li>
                    </ul>
                    <button>Подробнее</button>
                </div>
            </div>
        </div>
        <div class="container-fluid  bg-img-r">
            <div class="row">
                <div class="col-lg-7 offset-lg-5  col-md-12">
                    <div class="bg-img"> </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="cookies.js"></script>

</html>