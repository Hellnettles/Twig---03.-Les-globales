<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';


$name = 'Wilder';

echo $twig->render('home.html.twig', ['name' => $name]);

//On ajoute la globale author à l'initialisation de l'objet Twig
$mail = 'gcouffy@gmail.com';
$twig->addGlobal('contactEmail', $mail);
