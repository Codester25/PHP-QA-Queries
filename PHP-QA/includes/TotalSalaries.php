<?php

  include 'display_results_table.php';

  $question = 'Question 6: Write a query to get the total salaries of all employees in the employees table.  
			   Label the output as Total Salaries and make sure the value is in currency format. ';

  $sql = "SELECT concat('$', SUM(SALARY)) AS 'Total Salaries' FROM employees"; 

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);