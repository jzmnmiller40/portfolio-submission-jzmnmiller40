
<?php

//defined variables with empty values 
$name="";
$food="";
$age ="";
$email ="";


function validate_input ($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;

}

if(isset($_POST['submit'])) {
    $name = $_POST['name'];    
    $food = $_POST['food'];
    $age = $_POST['age'];
    $email = $_POST['email'];

}

if (empty($name)) {
        echo "Name field empty <br>";
    }


if (empty($food)) {
        echo "Food field empty <br>"; 
    }
  


if (empty($age)) {
        echo "Age field empty <br>";
    }
  

if (empty($email)) {
        echo "Email field empty <br>";
    }

 
    
// results when user has entered information 
ECHO "<H2> Results from Submission</H2>";

echo "$name";
echo "<br>";
 
echo "$food";
echo "<br>";

echo "$age";
echo "<br>";

echo "$email";
echo "<br>";
