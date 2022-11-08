<?php

  // generate an href using the existing first and last name variables, so the welcome message doesn't disappear
  function nav_url($query_name) {
    $link = (isset($_GET['first_name']) && isset($_GET['last_name'])) ?
      '?first_name=' . $_GET['first_name'] . '&last_name=' . $_GET['last_name'] . '&' . $query_name:
      '?' . $query_name;

    return $link;
  }

?>

<nav>
  <a href="<?php echo nav_url('DisplayNames'); ?>">Display Names</a>
  <a href="<?php echo nav_url('EmployeeDepartment'); ?>">Employee Department</a>
  <a href="<?php echo nav_url('EmployeeLastS'); ?>">Employee LastS</a>
  <a href="<?php echo nav_url('EmployeePF'); ?>">Employee PF</a>
  <a href="<?php echo nav_url('EmployeeSalaries10000'); ?>">Employee Salaries 10000</a>
  <a href="<?php echo nav_url('TotalSalaries'); ?>">Total Salaries</a>
</nav>
