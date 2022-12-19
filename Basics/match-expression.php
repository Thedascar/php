<?php

abstract class Question {}
class Single extends Question {}
class Multiple extends Question {}

$input = 'asas';

$question = match ($input){
    'single' => new Single(),
    'multi','multiple' => new Multiple()
};

var_dump($question);