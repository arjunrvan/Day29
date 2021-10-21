<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q8</title>

    <?php

        include "index.php";

        $id = $_POST['id'];
     
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "day9";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }
        
        $sql = "INSERT INTO employee_attendance(employee_id) VALUES ('$id')";
        
        if (mysqli_query($conn, $sql)) {
          echo "Attendance logged succesfully!";
        } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        mysqli_close($conn);
      
    ?>
</head>
<body>
    
</body>
</html>