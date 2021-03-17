<?php

$link = mysqli_connect('localhost', 'root', 'root', 'dobrodel');

function escapeString($link, $stringToEscape)
{
    return mysqli_real_escape_string($link, $stringToEscape);
}