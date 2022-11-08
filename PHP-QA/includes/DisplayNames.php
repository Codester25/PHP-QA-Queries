<?php

  include 'display_results_table.php';

  $question = 'Question 1: Write a query to display the names (last_name, first_name) 
  from the employees table using an alias for the last_name “Last Name", 
  and first_name "First Name". Order the results by last name in ascending order, 
  then first name in ascending order.';

  $sql = "
	SELECT last_name AS 'Last Name', first_name AS 'First Name'
	FROM employees
	ORDER BY last_name ASC, first_name ASC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);