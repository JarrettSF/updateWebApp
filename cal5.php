<?php

$time = $reminder = $gs = $party = $note = $apt = $email = "";

$email = $timeErr = $reminderErr = $gsErr = $partyErr = $noteErr = $aptErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $time = test_input($_POST["time"]);
  $reminder = test_input($_POST["reminder"]);
  $gs = test_input($_POST["gs"]);
  $note = test_input($_POST["note"]);
  $apt = test_input($_POST["apt"]);
    $party = test_input($_POST["party"]);
    $email = test_input($_POST["email"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["time"])) {
    $timeErr = "The time is required or the form cannot be submitted";
  } else {
   $timeErr =   "Input is good.";
    $time = test_input($_POST["time"]);
  }
    
    $email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
    
    
    if (strlen($apt) < 3)
{
        unset($_SESSION['apt']);
   $aptErr = "Input is too short, minimum is 3 characters.";
        
}
else {
    $apt = test_input($_POST["apt"]);
    $aptErr = "Input is good.";
  }
    
    
    

  if (empty($_POST["reminder"])) {
    $reminderErr = "Please set a reminder to submit form";
  } else {
        $reminderErr =   "Input is good.";
    $reminder = test_input($_POST["reminder"]);
  }

    

$number = range(2,50); 
    
    $int_value = intval( $gs );
    
     if ( $int_value < 2)
{
        unset($_SESSION['gs']);
   $gsErr = "between 2 and 50 guest to submit form please.";
        
} elseif ($int_value > 50){
         
           unset($_SESSION['gs']);
   $gsErr = "between 2 and 50 guest to submit form please.";
           
     }
else {
    $gs = test_input($_POST["gs"]);
    $gsErr = "Input is good.";
  }
    

  if (empty($_POST["note"])) {
    $noteErr = "Please add a note or the form cannot be submitted";
  } else {
       $noteErr =   "Input is good.";
    $note = test_input($_POST["note"]);
  }
    
    if (empty($_POST["party"])) {
    $partyErr = "Please add a birthday or the form cannot be submitted";
  } else {
         $partyErr =   "Input is good.";
    $party = test_input($_POST["party"]);
  }

  
}
?>