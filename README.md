#StringProcessor

Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be capitalized only if the original word was capitalized.

Examples
```php
toCamelCase("the-stealth-warrior"); // returns "theStealthWarrior" 
toCamelCase("The_Stealth_Warrior"); // returns "TheStealthWarrior"
 ```
 
 Use 
 ```php
 $stringprocessor = new StringProcessor();
 $result=$stringprocessor->toCamelCase("hello_world"));
 //$result ==> helloWorld
 ```
 