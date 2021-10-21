<?php

    include "connect.php";

    $passedId = $_POST['id'];
    $attendanceID = $_POST['edit'];
    $newDate = $_POST['newDate'];

    $sql = "UPDATE employee_attendance SET attendance_date='$newDate' WHERE attendance_id = $attendanceID";

    if (mysqli_query($conn, $sql)) {
        echo 'Updated Record for Employee ID: '.$passedId.'<br><br>';
        echo "<a href='employeelist.php'>Return</a>";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }

    mysqli_close($conn);

    

?>