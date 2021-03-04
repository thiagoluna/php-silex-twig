<?php

$site = $app['controllers_factory'];
$site->get('/home', function () use ($app) {
    return $app['twig']->render('home.html');
});

$site->get('/fale-conosco', function () use ($app) {
    return $app['twig']->render('fale.conosco.html.twig');

});
return $site;