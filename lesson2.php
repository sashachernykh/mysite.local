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
                <li><a href="lesson2.php">Lesson 2</a></li>
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
                            $prod = $i*$k;
                            $prod = "$prod";

                            if($i == 1) {
                                echo "<font color= red> $i </font>";
                            } else if ($i == 2) {
                                echo "<font color= green> $i </font>";
                            } else if ($i == 3) {
                                echo "<font color= yellow> $i </font>";
                            } else if ($i == 4) {
                                echo "<font color= blue> $i </font>";
                            } else if ($i >= 5) {
                                echo "<font color= black> $i </font>";
                            }

                            if ($k == 1) {
                                echo "*"."<font color= red> $k </font>"."=";
                            } else if ($k == 2) {
                                echo "*"."<font color= green> $k </font>"."=";
                            } else if ($k == 3) {
                                echo "*"."<font color= yellow> $k </font>"."=";
                            } else if ($k == 4) {
                                echo "*"."<font color= blue> $k </font>"."=";
                            } else if ($k >= 5) {
                                echo "*"."<font color= black> $k </font>"."=";
                            }

                             if($prod[0] == 1) {
                                echo "<font color= red> $prod[0] </font>";
                            } else if ($prod[0] == 2) {
                                echo "<font color= green> $prod[0] </font>";
                            } else if ($prod[0] == 3) {
                                echo "<font color= yellow> $prod[0] </font>";
                            } else if ($prod[0] == 4) {
                               echo "<font color= blue> $prod[0] </font>";         
                            } else if ($prod[0] >= 5) {
                              echo "<font color= black> $prod[0] </font>";
                            }
                           
                            if($prod[1] == 1) {
                                echo "<font color= red> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 2) {
                                echo "<font color= green> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 3) {
                                echo "<font color= yellow> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 4) {
                               echo "<font color= blue> $prod[1] </font>"."<br>";         
                            } else if ($prod[1] >= 5 or $prod[1] == 0) {
                              echo "<font color= black> $prod[1] </font>"."<br>";
                            }
                        }
                }
                ?>
            </tr>




            <tr>
                <?php
                for ($i = 6; $i <=10; $i++) {
                echo "<td>";
                    
                        for ($k = 1; $k <=10; $k++) {
                            $prod = $i*$k;
                            $prod = "$prod";

                            if($i == 1) {
                                echo "<font color= red> $i </font>";
                            } else if ($i == 2) {
                                echo "<font color= green> $i </font>";
                            } else if ($i == 3) {
                                echo "<font color= yellow> $i </font>";
                            } else if ($i == 4) {
                                echo "<font color= blue> $i </font>";
                            } else if ($i >= 5) {
                                echo "<font color= black> $i </font>";
                            }

                            if ($k == 1) {
                                echo "*"."<font color= red> $k </font>"."=";
                            } else if ($k == 2) {
                                echo "*"."<font color= green> $k </font>"."=";
                            } else if ($k == 3) {
                                echo "*"."<font color= yellow> $k </font>"."=";
                            } else if ($k == 4) {
                                echo "*"."<font color= blue> $k </font>"."=";
                            } else if ($k >= 5) {
                                echo "*"."<font color= black> $k </font>"."=";
                            }

                             if($prod[0] == 1) {
                                echo "<font color= red> $prod[0] </font>";
                            } else if ($prod[0] == 2) {
                                echo "<font color= green> $prod[0] </font>";
                            } else if ($prod[0] == 3) {
                                echo "<font color= yellow> $prod[0] </font>";
                            } else if ($prod[0] == 4) {
                               echo "<font color= blue> $prod[0] </font>";         
                            } else if ($prod[0] >= 5) {
                              echo "<font color= black> $prod[0] </font>";
                            }
                           
                            if($prod[1] == 1) {
                                echo "<font color= red> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 2) {
                                echo "<font color= green> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 3) {
                                echo "<font color= yellow> $prod[1] </font>"."<br>";
                            } else if ($prod[1] == 4) {
                               echo "<font color= blue> $prod[1] </font>"."<br>";         
                            } else if ($prod[1] >= 5 or $prod[1] == 0) {
                              echo "<font color= black> $prod[1] </font>"."<br>";
                            }
                        }
                }
                ?>
            </tr>
        </table>
    </div>

</main>

</body>
</html>