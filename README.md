# php-kata-snacks

## Descrizione

### Snack 1

1. Define a class called Person.
2. Since all Persons are of the species "Homo Sapiens", make that a class constant
3. Declare (but do not define yet) the 3 class properties $name, $age and $occupation. *They should all be *public.
4. Define a class constructor which accepts exactly three arguments in the following order: $name, $age, $occupation and store them in their respective properties.
5. Define a method called introduce which accepts no arguments and returns a string of the format "Hello, my name is NAME_HERE"
6. Define another method called describe_job which accepts no arguments and returns a string of the format "I am currently working as a(n) OCCUPATION_HERE" (NOTE: The "a(n)" part of the string is literal which means you do not have to create conditionals to check whether "a" or "an" should be used.)
7. When extraterrestrials arrive on Earth, all Persons are expected to greet them in exactly the same way. Therefore, define a static class method called greet_extraterrestrials which accepts an argument $species and returns a string of the format "Welcome to Planet Earth SPECIES_NAME_HERE!"

### Snack 2

Given an array of integers.

Return an array, where the first element is the count of positives numbers and the second element is sum of negative numbers. 0 is neither positive nor negative.

If the input is an empty array or is null, return an empty array.

Example
For input ```[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, -11, -12, -13, -14, -15]```, you should return ```[10, -65]```.

### Snack 3

In this kata we are going to mimic a software versioning system.

You have to implement a ```VersionManager``` class.

It should accept an optional parameter that represents the initial version. The input will be in one of the following formats: ```"{MAJOR}", "{MAJOR}.{MINOR}"```, or ```"{MAJOR}.{MINOR}.{PATCH}"```. More values may be provided after PATCH but they should be ignored. If these 3 parts are not decimal values, an exception with the message ```"Error occured while parsing version!"``` should be thrown. If the initial version is not provided or is an empty string, use ```"0.0.1"``` by default.

This class should support the following methods, all of which should be chainable (except release):

- ```major()``` - increase ```MAJOR``` by ```1```, set ```MINOR``` and ```PATCH``` to ```0```
- ```minor()``` - increase ```MINOR``` by ```1```, set ```PATCH``` to ```0```
- ```patch()``` - increase ```PATCH``` by ```1```
- ```rollback()``` - return the MAJOR, MINOR, and PATCH to their values before the previous major/minor/patch call, or throw an exception with the message```"Cannot rollback!"``` if there's no version to roll back to. Multiple calls to rollback() should be possible and restore the version history
- ```release()``` - return a string in the format ```"{MAJOR}.{MINOR}.{PATCH}"```
May the binary force be with you!


### Snack 4
The code provided is supposed replace all the dots```"."``` in the specified String str with dashes ```"-"```

But it's not working properly.

Task
Fix the bug so we can all go home early.

Notes
String str will never be null.


### Snack 5
Determine if the poker hand is flush, meaning if the five cards are of the same suit.

Your function will be passed a list/array of 5 strings, each representing a poker card in the format "5H" (5 of hearts), meaning the value of the card followed by the initial of its suit (Hearts, Spades, Diamonds or Clubs). No jokers included.

Your function should return true if the hand is a flush, false otherwise.

The possible card values are ```2, 3, 4, 5, 6, 7, 8, 9, 10, J, Q, K, A```

Examples
```["AS", "3S", "9S", "KS", "4S"]  ==> true```

```["AD", "4S", "7H", "KS", "10S"] ==> false```