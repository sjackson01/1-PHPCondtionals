<?php
/* !PHP Conditionals */
$a = 5;
$b = 4;

// Negation Operators
 if($a)
{
    echo 'true';
}

if(!a)
{
    echo 'false';
}

if($a == false)
{
    echo 'false';
}

if($a != true)
{
    echo 'false';

}

if($a != $b)
{
    echo 'values are NOT equal.';
}

if($a !== $b)
{
    echo 'Not Identical';
}


if($a == $b)
{}
else 
{
    echo 'Values are not equal';
}

if(($a == $b) == false)
{
    echo 'value are Not Equal';
}

if ($a <> $b)
{
    echo 'values are not equal.';
}


//
if($a == $b)
{
    echo ' values are euqal';
}
elseif($a <  $b)
{
    echo '$a is less than $b';    
}
elseif($a > $b)
{ 
    echo '$a is greater than $b';
}
else 
{
    echo ' values are NOT equal ';
}


// Greater than or equal conditionals 
$score = 59; 

if($score >= 59)
{
    echo 'You completed the level';
}
elseif($score <= 30)
{
    echo 'You should practice some more before trying this level again.';
}
else
{
    echo 'Please try again.';
}

// Trick questoin see the operator
$a = "Alena"; 
if ($a = "Treehouse") { 
echo "Hello Alena, "; 
} 
echo "Welcome to Treehouse!"; 


//Nested Condtionals
$num = 1001;

if($num >= 10){
    if($num <= 1000){
        echo 'Your number is within the range';
    } else {
         echo 'Your number is greater than 1000, not within the range.';
    }
} else {
    echo ' Your number is less than 10 not within the range.';
}


//Interesting Example doesn't echo anything
//Second if statement is not connected to else
//This makes it a dead end if $username = Treehouse
//If not it will echo Hello $username

$username = "Treehouseee";
if ($username) {
    if ($username != "Treehouse") {
        echo "Hello $username";
    }
} else {
    echo "You must be logged in";
}



// Echos Too Much Keep Trying 
// Since second condtional evaluates as false
// And else statement is executed
$num = 20; 
if ($num >= 5) {
    if ($num < 20) {
        echo 'Range Met';
    } else {
        echo 'TOO  MUCH!';
    }
    echo 'Keep Trying';
}
// Evaluates as true because 
// 5 does not equal 6    

var_dump(5<>6); 

//Nested Conditionals with Logical Operators
$num = 1001;

if($num >= 10 && $num <= 1000)
    {
        echo 'Your number is within the range';
    } else {
        echo ' Your number is not within the range.';
}


//Evaluates as a string
//Echo 10 or string
$num = '20';

if ($num == 10 || is_string($num)){
    echo '10 or string';
} else {
    echo ' NOT 10 or string';
}

//False is assigned first
$var1 = (true && false); //False && higher precedence =
//True is assigned first
($var2 = true) AND false;//True = higher precedence &&
var_dump($var1,$var2);

// Intersting Conditionals
$username = 'sketchings';
//Available roles: author, editor, admin
$role = 'editor';

//add conditional statement
if($username == true && $role != 'admin')
{
echo "You do not have access to this page. Please contact your administrator.";
}


//Switch Statement

switch (date('l')) {
    case "Monday":
        echo "Wash on Monday";
        break;
    case "Tuesday":
        echo "Iron on Tuesday";
        break;
    case "Wednesday":
        echo "Mend on Wednesday";
        break;
    case "Thursday":
        echo "Churn on Thursday";
        break;
    case "Friday":
        echo "Clean on Friday";
        break;
    case "Saturday":
        echo "Bake on Saturday";
    case "Sunday":
        echo "Rest on Sunday";
        break;
    default:
        echo "I don't know what day it is";
        break;
 }

 switch ("Saturday") {
    case "Monday":
        echo "Wash on Monday";
        break;
    case "Tuesday":
        echo "Iron on Tuesday";
        break;
    case "Wednesday":
        echo "Mend on Wednesday";
        break;
    case "Thursday":
        echo "Churn on Thursday";
        break;
    case "Friday":
        echo "Clean on Friday";
        break;
    case "Saturday":
    case "Sunday":
        echo "Rest on the Weekend";
        break;
    default:
        echo "I don't know what day it is";
        break;
 }

?> 