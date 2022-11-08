<section>

  <?php

    if (isset($_GET['DisplayNames'])) {
      include 'DisplayNames.php';
    } else if (isset($_GET['EmployeeDepartment'])) {
      include 'EmployeeDepartment.php';
    } else if (isset($_GET['EmployeeLastS'])) {
      include 'EmployeeLastS.php';
    } else if (isset($_GET['EmployeePF'])) {
      include 'EmployeePF.php';
    } else if (isset($_GET['EmployeeSalaries10000'])) {
      include 'EmployeeSalaries10000.php';
    } else if (isset($_GET['TotalSalaries'])) {
      include 'TotalSalaries.php';
    }
  ?>

</section>
