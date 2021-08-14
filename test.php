<?php

require './vendor/autoload.php';

use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

try {
    $value = Yaml::parse(file_get_contents('test.yml'));
    // $value = ['foo' => 'bar']
  
    var_dump($value);
} catch (ParseException $ex) {
    //throw $th;
    printf($ex->getMessage());
}
