<?php

/**
 * Affiche le header de la page
 */
function buildHeader(): void
{
?>
    <header>
        <label class="bar" for="check">
            <input type="checkbox" id="check">
            <span class="top"></span>
            <span class="middle"></span>
            <span class="bottom"></span>
        </label>
        <h1>Ludoit.ch</h1>
        <a href="https://donate.stripe.com/9AQaHLb5xfbB9nGbII" class="donate" target="_blank">Donate</a>
        <img src="./img/logoExample.png" alt="logo">
    </header>
<?php
}
?>