<?php
  include('CharacterGenerator.php');

  class Character{
    public $name;
    public $race;
    public $class;
    public $height;
    public $eye_color;
    public $hair_color;
    public $build;
    public $stats;

    public function __construct(){
      $this->name = CharacterGenerator::generateName();
      
      $this->race = CharacterGenerator::generateAttribute('race');
      $this->class = CharacterGenerator::generateAttribute('class');
      $this->height = CharacterGenerator::generateAttribute('height');
      $this->eye_color = CharacterGenerator::generateAttribute('eyecolor');
      $this->hair_color = CharacterGenerator::generateAttribute('haircolor');
      $this->build = CharacterGenerator::generateAttribute('build');

      $this->stats = CharacterGenerator::generateStats();

    }
  }