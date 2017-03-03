<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/pingpong.php";

    session_start();                          // For global variable, saving in browser cache
    if (empty($_SESSION['array_of_tasks'])) {
        $_SESSION['array_of_tasks'] = array();
    }

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));
  // End Red Tape

  // 1. Route for home page
    

    return $app;

?>
