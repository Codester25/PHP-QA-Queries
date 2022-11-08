<?php

  include 'display_results_table.php';

  $question = 'Question 4: Write a query to get the names (last_name, first_name), salary, 
			   PF of all the employees (PF is calculated as 12% of salary) from the employees table.  
			   Order the results by last name in ascending order, then by first name in ascending order.';

  $sql = "
	SELECT LAST_NAME, FIRST_NAME, concat('$',SALARY) AS SALARY, concat('$', format(SALARY*.12, 2)) AS 'PF'
    FROM employees
	ORDER BY LAST_NAME ASC, FIRST_NAME ASC";

  $get_names = mysqli_query($conn, $sql);

  echo '<p><i>' . $question . '</i></p>' .
       '<pre>' . $sql .'</pre>' .
        display_results_table($get_names);