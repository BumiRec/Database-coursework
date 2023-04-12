<!DOCTYPE html>
<html>
    <head>
        <meta charser="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Hello World
</title>
</head>
<body>
    <?php
//     echo "Hello World!"; 
//     $name = "John";
// $surname = "Doe";
// $age = 32;
// echo "I" . " am" . " using" . " concatenation.<br>";
// $sentence = "My name is " . $name . " " . $surname . ", and I am " . $age . " years
// old.<br>";
// echo $sentence;
// echo gettype($age) . "<br>";
// echo gettype($sentence);
    

$name = 'John';
$surname = 'Doe';
function printName()
{
global $name, $surname, $fullName;
$fullName = $name . ' ' . $surname;
return $fullName;
}
echo printName()."<br>";
echo $fullName;
    
echo "this is an update to github commit"
    
    
    
    
    
    
    
    
    ?>
    </body>
    </html>