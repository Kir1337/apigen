<?php

error_reporting(E_ALL);

define('BASE_PATH', dirname(__DIR__));
define('MODELS_PATH', BASE_PATH . '/models');
define('AUTOLOAD_PATH', BASE_PATH . '/vendor/autoload.php');

require_once AUTOLOAD_PATH;

use gossi\codegen\generator\CodeGenerator;
use gossi\codegen\model\PhpClass;
use gossi\codegen\model\PhpMethod;
use gossi\codegen\model\PhpParameter;

$class = new PhpClass();
$class
  ->setQualifiedName('my\\cool\\Tool')
  ->setMethod(
    PhpMethod::create('__construct')
      ->addParameter(
        PhpParameter::create('target')
          ->setType('string')
          ->setDescription('Creates my Tool')
      )
  );

$filename = MODELS_PATH . "/tool.php";
$generator = new CodeGenerator();
$code = $generator->generate($class);

file_put_contents(
  $filename,
  "<?php\n\n" . $code
);

echo var_dump($code);
