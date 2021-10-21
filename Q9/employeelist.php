<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q9</title>

    <?php
        if ($_POST['login'] == 'Arjun' || $_POST['login'] == 'arjun') {
            echo 'Employee List <br><br>';

            include "connect.php";
                
            $sql = "SELECT * FROM employee";

            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["employee_id"]. " - Name: " . $row["employee_name"]. "<form action='action.php' method='post'>
                <input type='submit' value='View Record'><input type='hidden'  name='id'  value='".$row["employee_id"]."'/></form>
                <form action='edit.php' method='post'>
                <input type='submit' value='Edit Record'><input type='hidden'  name='id'  value='".$row["employee_id"]."'/></form> <br>";
            }
            } else {
            echo "0 results";
            }
            
            mysqli_close($conn);

        } else {
            
            header("location:index.php");
        }
        
        
    ?>
</head>
<body>

</body>
</html>