<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/ScrabbleScore.php';

    use Symfony\Component\Debug\Debug;
    Debug::enable();
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));
    $app['debug'] = true;

    $app->get('/', function() use ($app) {
      return $app['twig']->render('homepage.html.twig');
    });

    $app->post('/scrabbleGame', function() use ($app) {
      $newScrabble = new ScrabbleScore;
      $input = $_POST['word'];
      if ($input == "") {
        return $app['twig']->render('homepage.html.twig');
      }
      $result = $newScrabble->generateScore($input);
      return $app['twig']->render('result.html.twig', array('result'=>$result));
    });

    return $app;
?>
