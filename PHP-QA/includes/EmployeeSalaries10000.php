<?php

  include 'display_results_table.php';

  $question = 'Question 5: Write a query to get the employee ID, names (first_name, last_name), 
			   salary from the employees table in ascending order of salary.  Limit the output 
			   to only those employees with a salary greater than or equal to $10,000 only. ';

  $sql = "
	SELECT EMPLOYEE_ID, FIRST_NAME, LAST_NAME, concat('$', SALARY) AS SALARY
    FROM `employees`
    WHERE SALARY >= 10000
    ORDER BY SALARY ASC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);