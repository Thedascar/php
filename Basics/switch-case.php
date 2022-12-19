<?php

abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

$input = 'multi';

switch($input){
    case 'single':
        $question = new Single();
        break;
    case 'multi':
        $question = new Multiple();
        break;
    default:
    throw new Exception('Invalid question type');
}
var_dump($question);