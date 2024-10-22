<?php
/**
 * Place la base de la page web
 * 
 * @return void
 */
function placeBase()
{
?>
    <header>
        <label class="bar" for="check">
            <input type="checkbox" id="check" onclick="handleBurgerMenu()">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </label>
        <h1 id="titlePage" onclick='window.location.href = "./index.php"'>Ludosphere.ch</h1>
        <a href="https://donate.stripe.com/9AQaHLb5xfbB9nGbII" class="donate" target="_blank">Donate</a>
        <img src="./img/logoExample.png" alt="logo">
    </header>
    <aside>
        <div id="contact" onclick='window.location.href = "./contact.php"'>Contact me</div>
    </aside>
<?php
}
?>