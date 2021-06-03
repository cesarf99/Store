<?php
include ('Models\User.php');

$a = new User();
$a->GetAll();
var_dump($a);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Store</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>

    <body>

        <!-- Header Section -->
        <header>
            <div class="head1">Money4Clothes Store</div>
            <div class="head2">Low Prices High Quality Clothes</div>
        </header>

        <!-- Menu Navigation Bar -->
        <div class="menu">
            <a href="#home">HOME</a>
            <a href="#news">NEWS</a>
            <a href="#notification">NOTIFICATIONS</a>
            <div class="menu-log">
                <a href="#login">LOGIN</a>
            </div>
        </div>

        <!-- Body section -->
        <div class = "body_sec">
            <section id="Content">
                <h3>Content section</h3>
            </section>
        </div>

        <!-- Footer Section -->
        <footer>Clothing Store , Vila Real 2021</footer>
    </body>
</html>
