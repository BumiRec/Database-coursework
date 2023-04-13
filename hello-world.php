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

<p>GET METHOD</p>
<form action="prework.php" method= "GET">
Name: <input type="text" name="name" />
Age: <input type= "text" name="age" />
<input type="submit" name="submit" />
</form>

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
    

// $name = 'John';
// $surname = 'Doe';
// function printName()
// {
// global $name, $surname, $fullName;
// $fullName = $name . ' ' . $surname;
// return $fullName;
// }
// echo printName()."<br>";
// echo $fullName;
    
// echo "this is an update to github";

// echo "this is an update to github  2";
    
// echo "this is push update to main";



if(isset($_GET[ 'submit']))
{
if( $_GET["name"] || $_GET["age" ] )
{
echo "Welcome ". $_GET['name']. "<br />";
echo "You are ". $_GET['age' ]. " years old.";
}
}

    
    
    
    
    
    ?>
    </body>
    </html>