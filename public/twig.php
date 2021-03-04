<?php

//$loader = new Twig_Loader_Array([
//    'index' => 'Hello World!'
//]);

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../twig_templates');

$twig = new Twig_Environment($loader);

//echo $twig->render('variaveis.html.twig', ['name' => 'Thiago Luna']);
//echo $twig->render('operadores.html.twig', ['name' => 'Thiago Luna']);
//echo $twig->render('arrays.html.twig', ['name' => 'Thiago Luna']);
//echo $twig->render('estrutura_repeticao.html.twig', ['name' => 'Thiago Luna']);
//echo $twig->render('estruturas_condicionais.html.twig', ['name' => 'Thiago Luna']);
//echo $twig->render('outros_operadores.html.twig', ['name' => 'Thiago Luna']);

$client = new \SON\Client();
$client->id = 1;
$client->name = "Thiago Luna";

echo $twig->render('objects.html.twig', ['client' => $client]);
