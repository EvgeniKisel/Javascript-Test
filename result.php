<?php 
require_once 'information.php';
$level = $_GET['lvl'];
$score = 0;
for($i = 1; $i <= 10; $i++) {
    if($correctAnswers[$level]["$i"] == $_POST["q{$i}"]) $score++;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <title>Ваш результат</title>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="container">
                <div class="logo">
                    <a href="index.html">JS Test</a>
                </div>
            </div>
        </div>
    </header>
    <main class="main__test">
        <div class="container">
            <h1 class="main__title">Ваш результат</h1>
            <section class="main__result">
                <h2 class="result-score">
                    <?php
                        echo "Вы ответили правильно на ". $score*10 . " % вопросов";
                    ?>
                </h2>
                <a href="index.html" class="to-main-page-btn">Вернуться на главную страницу</a>
            </section>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <p class="footer__text">
                    &copy; 2025 JS Test. Все права защищены.
                </p>
                <p class="footer__text">
                    Свяжитесь с нами: <a href="mailto:evgksl2000@gmail.com">evgksl2000@gmail.com</a>
                </p>
            </div>
        </div>
    </footer>
</body>
</html>