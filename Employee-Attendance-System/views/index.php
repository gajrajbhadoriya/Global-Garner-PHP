<?php
 session_start();
 include '../views/includes/header.php';

 use App\Controllers\EmployeeController;

 $employees = new EmployeeController();
 $employees = $employees->index();

 $emps = new EmployeeController();
 $employee = $emps->attendance();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <h1>Employee List</h1>
    <form method="post" action="actions/add.php">
        <input type="text" name="emp_name" placeholder="Enter employee Name">
        <input type="text" name="emp_roll" placeholder="Enter employee Roll">
        <button type="submit">Add Employee</button>
    </form>
    <br>
    <table>
        <thead>
            <tr>
                <th>EmpID</th>
                <th>EmpName</th>
                <th>EmpRoll</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // echo '<pre>';
            //  echo var_dump($employees);
            //  echo'</pre>';
            //  exit;
             ?>
            <?php foreach ($employees as $emp): ?>
            <tr>
            <td><?php echo $emp['emp_id']; ?></td>
                <td><?php echo $emp['emp_name']; ?></td>
                <td><?php echo $emp['emp_roll']; ?></td>
                <?php foreach ($employee as $emp): ?>
                <td>
                    <form method="post" action="actions/changeStatus.php">
                        <input type="hidden" name="id" value="<?php echo $emp['id']; ?>">
                        <select name="attendance" onchange="this.form.submit()">
                            <option value="0" <?php if ($emp['attendance'] === 0) {
                                echo "selected";
                            } ?>>Absense</option>
                            <option value="1" <?php if ($emp['attendance'] === 1) {
                                echo "selected";
                            } ?>>Prasent</option>
                        </select>
                    </form>
                </td>
            <?php endforeach; ?>
                <td>
                    <form method="post" action="actions/delete.php">
                        <input type="hidden" name="id" value="<?php echo $emp['id']; ?>">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
            <form method="post" action="actions/signout.php">
                        <input type="hidden" name="id">
                        <button type="submit">Logout</button>
                    </form>
        </tbody>
    </table>
</body>
</html>