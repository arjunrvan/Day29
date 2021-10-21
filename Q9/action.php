<?php

    include "connect.php";

    $passedId = $_POST['id'];

    echo 'Employee ID: '.$passedId.'<br><br>';
    echo 'Check In Records: <br>';

    $sql = "SELECT * FROM employee_attendance WHERE employee_id = $passedId";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo $row["attendance_date"]. " <br>";
        }
    } else {
        echo "0 results";
    }

    mysqli_close($conn);




?>