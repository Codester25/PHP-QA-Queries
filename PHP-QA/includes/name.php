<?php 
 if (isset($_GET['first_name']) && isset($_GET['last_name']))  {
    $first_name = htmlspecialchars($_GET['first_name']);
    $last_name = htmlspecialchars($_GET['last_name']);
    $prof_first_name = 'Laurie';
    $prof_last_name = 'Crawford';

    $welcome_message = 'Welcome to my site, ';

    if ($first_name == $prof_first_name && $last_name == $prof_last_name) {
      $welcome_message .= 'Professor!';
    } else {
      $welcome_message .= $first_name . ' ' . $last_name . '!';
    }
    echo $welcome_message;
  } else {
    include 'name.html';
  }
  
?>
