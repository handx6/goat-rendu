<?php
// title H1
function titleH1($title)
{
    echo "<h1 class='text-3xl font-black text-center pb-6'>{$title}</h1>";
}

// debug array
function debug_array($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

// print error message
function errorMsg($name)
{
    global $error;
    if (isset($error[$name])) {
        echo $error[$name];
    }
}

// show value of input
function showInputValue($name)
{
    if (isset($_POST[$name])) {
        echo $_POST[$name];
    }
}

function showUpdateInputValue($name, $goat)
{
    if (isset($goat[$name])) {
        echo $goat[$name];
    }
}

// clean input
function cleanInput($string)
{
    return trim(htmlspecialchars($string));
}

// show value of select
function showSelectValue($name, $value)
{
    if (!(empty($_POST[$name])) && $_POST[$name] == $value) {
        echo "selected";
    }
}

function showUpdateSelectValue($name, $value, $goat)
{
    if (!(empty($goat[$name])) && $goat[$name] == $value) {
        echo "selected";
    }
}
