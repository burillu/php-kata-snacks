<?php
/* 
Define a class called Person.
Since all Persons are of the species "Homo Sapiens", make that a class constant
Declare (but do not define yet) the 3 class properties $name, $age and $occupation. *They should all be *public.
Define a class constructor which accepts exactly three arguments in the following order: $name, $age, $occupation and store them in their respective properties.
Define a method called introduce which accepts no arguments and returns a string of the format "Hello, my name is NAME_HERE"
Define another method called describe_job which accepts no arguments and returns a string of the format "I am currently working as a(n) OCCUPATION_HERE" (NOTE: The "a(n)" part of the string is literal which means you do not have to create conditionals to check whether "a" or "an" should be used.)
When extraterrestrials arrive on Earth, all Persons are expected to greet them in exactly the same way. Therefore, define a static class method called greet_extraterrestrials which accepts an argument $species and returns a string of the format "Welcome to Planet Earth SPECIES_NAME_HERE!" */


class Person
{
  const  species = "Homo Sapiens";
  public  $name;
  public  $age;
  public  $occupation;
  public function __construct($name, $age, $occupation)
  {
    $this->name = $name;
    $this->age = $age;
    $this->occupation = $occupation;
  }
  public function introduce()
  {
    $hello_message = "Hello, my name is ";
    return $hello_message . $this->name;
  }
  public function describe_job()
  {
    $intro = "I am currently working as a(n) ";
      return $intro . $this->occupation;
  }
  public static function greet_extraterrestrials(string $species)
    {
     $greet = "Welcome to Planet Earth ";
    return $greet . $species . '!';
  }
}

?>