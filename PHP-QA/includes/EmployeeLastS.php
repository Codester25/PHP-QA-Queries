<?php

  include 'display_results_table.php';

  $question = 'Question 3: Write a query to get all employee details from the 
			   employees table for employees whose last names start with an S or T.  
			   Order by last name, descending then by first name, descending.';

  $sql = "
	SELECT * FROM employees
	WHERE LAST_NAME LIKE 'S%' OR LAST_NAME LIKE 'T%'
	ORDER BY LAST_NAME DESC, FIRST_NAME DESC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);