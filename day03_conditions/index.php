<?php 

$age = 20;

# conditional operators
# if , elseif , else

if ($age < 18) {
    echo "You are a minor.";
} elseif ($age >= 18 && $age < 65) {
    echo "You are an adult.";
} else {
    echo "You are a senior citizen.";
}


# switch statement
# weak days

switch (date('D')) {
    case 'Mon':
        echo "Today is Monday.";
        break;
    case 'Tue':
        echo "Today is Tuesday.";       
        break;
    case 'Wed':
        echo "Today is Wednesday.";
        break;
    case 'Thu':
        echo "Today is Thursday.";
        break;
    case 'Fri':
        echo "Today is Friday.";
        break;
    case 'Sat':
        echo "Today is Saturday.";
        break;
    case 'Sun':
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
        break;
}


# ternary operator
$is_logged_in = true;
$message = $is_logged_in ? "Welcome back!" : "Please log in.";  
echo $message;


# mini project time 
if(time() % 2 == 0){
    echo "The current timestamp is even.";
} else {
    echo "The current timestamp is odd.";
}



?>