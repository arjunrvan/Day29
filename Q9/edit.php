<?php

    include "connect.php";

    $passedId = $_POST['id'];

    echo 'Employee ID: '.$passedId.'<br><br>';
    echo 'Check In Records: <br>';

    $sql = "SELECT * FROM employee_attendance WHERE employee_id = $passedId";

    $result = $conn->query($sql);

    

    if ($result->num_rows > 0) {
        // output data of each row
        echo "<form action='lastfile.php' method='post'>
        <select id='edit' name='edit'> <option value='' disabled selected>Choose date</option>";
        while($row = $result->fetch_assoc()) {
            echo "<option value=".$row["attendance_id"].">".$row["attendance_date"]."</option>";
        }

        echo "</select><input type ='text' name = 'newDate'/> <input type='submit' name='submit' value='Update'/><input type='hidden'  name='id'  value='".$passedId."'/></form>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);

?>