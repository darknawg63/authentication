<?php

$app->get('/', function() use ($app) {

    echo $app->randomlib->generateString(128);

    $app->render('home.php');
})->name('home');
