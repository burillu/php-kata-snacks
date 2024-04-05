<?php
/* 
Snack 1`
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


/* 
Snack 2`
Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

Example
For input [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15], you should return [10, -65].

 */

 function countPositivesSumNegatives($input) {
    // se l'array è vuoto ritorno un array vuoto
    if (empty($input)){
      return [];
    }
    
    $count_positive = 0;
    $sum_negative = 0;
    // ciclo sull'array in input
    foreach ($input as $number){
      //se il numero è positivo lo conto
      if ($number > 0){
       $count_positive++; 
      } else {
        // se il numero è negativo lo sommo 
        $sum_negative += $number;
      }
    }
    
      return array($count_positive, $sum_negative);
  }


/* 
In this kata we are going to mimic a software versioning system.

You have to implement a VersionManager class.

It should accept an optional parameter that represents the initial version. The input will be in one of the following formats: "{MAJOR}", "{MAJOR}.{MINOR}", or "{MAJOR}.{MINOR}.{PATCH}". More values may be provided after PATCH but they should be ignored. If these 3 parts are not decimal values, an exception with the message "Error occured while parsing version!" should be thrown. If the initial version is not provided or is an empty string, use "0.0.1" by default.

This class should support the following methods, all of which should be chainable (except release):

major() - increase MAJOR by 1, set MINOR and PATCH to 0
minor() - increase MINOR by 1, set PATCH to 0
patch() - increase PATCH by 1
rollback() - return the MAJOR, MINOR, and PATCH to their values before the previous major/minor/patch call, or throw an exception with the message "Cannot rollback!" if there's no version to roll back to. Multiple calls to rollback() should be possible and restore the version history
release() - return a string in the format "{MAJOR}.{MINOR}.{PATCH}"

May the binary force be with you!
*/

class VersionManager 
{
  public $major = 0;
  public $minor = 0;
  public $patch = 0;
  public $history = [];
  //public $fail = 'Error occured while parsing version!';
  
  public function __construct($string = '0.0.1')
  {
    var_dump($string);
    if(empty($string)){
        $string = '0.0.1';
        //throw new Exception('Error occured while parsing version!');
    }
    //var_dump($string);
   //var_dump($string);
    for ($i=0; $i < strlen($string) ; $i++) {
        if($string[$i] != '.' && !is_int((int) $string[$i])){
          throw new Exception('Error occured while parsing version!');
          
        } 
      
        $this->major = (int) $string[0];
        if($i == 2){
           $this->minor =  (int) $string[$i] ;
        } 
        if($i == 4){
            $this->patch = (int) $string[$i]; 
        }
        //$this->history[]= $this->release();        
    }

  }
  
  public function major()
  {
    var_dump($this->release());
    $this->history[] = $this->release();
    $this->major++;
    $this->minor = 0;
    $this->patch = 0;
    
    
  }
   public function minor()
  {
    $this->history[] = $this->release();
    $this->minor++;
    $this->patch = 0;
    
  }
   public function patch()
  {
    $this->history[] = $this->release();
    $this->patch++;
    
  }
  public function rollback()
  {
    $element_history = count($this->history);
    if( $element_history < 1){
       return throw new Exception('Cannot rollback!');
    }
    //prendo l'ultimo elemento
    $last_element = $this->history[$element_history - 1];
    //assegno i precedenti valori contenuti nello storico
    $this->major = $last_element[0];
    $this->minor = $last_element[2];
    $this->patch = $last_element[4];
    array_pop($this->history);

  }
  public function release()
  {
    return "$this->major.$this->minor.$this->patch";
  }
}

/*
Snack 4
The code provided is supposed replace all the dots . in the specified String str with dashes -

But it's not working properly.

Task
Fix the bug so we can all go home early.

Notes
String str will never be null.


*/


function replace_dots(string $str): string {
    return str_replace('.', '-', $str);
  }











?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $version = new VersionManager('6.9.5');  
    //var_dump("Ciucciala")
    var_dump($version);
    //var_dump($version->history[0]);

    $version->major();

    var_dump($version);

    $version->rollback();

    var_dump($version);
    
    ;
    ?>
</body>
</html>