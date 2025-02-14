<?php 
require_once 'information.php';
$level = $_GET['lvl'];
$number = 1;
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
    <title><?= $titleNameList[$level]; ?></title>
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
            <h1 class="main__title">
                <?= $titleNameList[$level]; ?>
            </h1>
            <section class="main__test-content">
                <form action="result.php?lvl=<?= $level; ?>" method="POST">
                    <?php 
                        foreach($testQuestionsList[$level] as $question => $answers) {
                            echo "<h3 class='title'>$question</h3>";
                            echo '<div class="main__test-answers-block">';
                            $i = 97;
                            foreach($answers as $answer) {
                                echo "<label>
                                    <input type='radio' name='q{$number}' value='". chr($i)."' required>{$answer} 
                                </label>";
                                $i++;
                            }
                            echo '</div>';
                            $number++;
                        }
                    ?>
                    <br>
                    <input class="submit-btn" type="submit" value="Получить результаты">
                </form>
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