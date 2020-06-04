<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mysite Local</title>
</head>
<body>
<header class="header" id="header">
    <div class="container">
        <nav class="nav">
            <a href="index.php">Home</a>
            <ul class="menu-list">
                <li><a href="lesson1.php">Lesson 1</a></li>
                <li><a href="#">Lesson 2</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="container">
        <table>

            <tr>
                <?php
                for ($i = 1; $i <=5; $i++) {
                    echo "<td>";
                    for ($k = 1; $k <=10; $k++) {
                        echo $i."*".$k."=".$i*$k."<br>";
                    }
                }
                ?>
            </tr>
            <tr>
                <?php
                for ($i = 6; $i <=10; $i++) {
                    echo "<td>";
                    for ($k = 1; $k <=10; $k++) {
                        echo $i."*".$k."=".$i*$k."<br>";
                    }
                }
                ?>
            </tr>

        </table>
    </div>
</main>

</body>
</html>