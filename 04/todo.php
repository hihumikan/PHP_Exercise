<?php

error_reporting(E_ALL);

ini_set('display_errors', "Off");

$file_contents = @file('data/todo.txt');

if ($file_contents === false) {
    echo("data/todo.txtを読み込めませんでした");
    exit();
}

$todo_over_list = array();
$todo_upcoming_list = array();
$today_date = date("Y/m/d");

foreach ($file_contents as $line) {
    $todo = explode(",", $line);
    if ($todo[1] < $today_date) {
        $todo_over_list[] = $todo;
    } else {
        $todo_upcoming_list[] = $todo;
    }
}
