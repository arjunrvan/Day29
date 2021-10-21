<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">  
        <!-- <select id="users" name="users">
            <option value="" disabled selected>Choose option</option>
            <option value="user1">User 1</option>
            <option value="user2">User 2</option>
            <option value="user3">User 3</option>
        </select><br><br> -->

        <label for="user1">User 1:</label><br>
        <label for="num1">Number 1:</label><br>
        <input type="int" id="num1" name="num1"><br>
        <label for="num2">Number 2:</label><br>
        <input type="int" id="num2" name="num2"><br>
        <label for="num3">Number 3:</label><br>
        <input type="int" id="num3" name="num3"><br>
        <label for="num4">Number 4:</label><br>
        <input type="int" id="num4" name="num4"><br>
        <label for="num5">Number 5:</label><br>
        <input type="int" id="num5" name="num5"><br>

        <label for="user2">User 2:</label><br>
        <label for="num6">Number 1:</label><br>
        <input type="int" id="num6" name="num6"><br>
        <label for="num7">Number 2:</label><br>
        <input type="int" id="num7" name="num7"><br>
        <label for="num8">Number 3:</label><br>
        <input type="int" id="num8" name="num8"><br>
        <label for="num9">Number 4:</label><br>
        <input type="int" id="num9" name="num9"><br>
        <label for="num10">Number 5:</label><br>
        <input type="int" id="num10" name="num10"><br>

        <label for="user3">User 3:</label><br>
        <label for="num11">Number 1:</label><br>
        <input type="int" id="num11" name="num11"><br>
        <label for="num12">Number 2:</label><br>
        <input type="int" id="num12" name="num12"><br>
        <label for="num13">Number 3:</label><br>
        <input type="int" id="num13" name="num13"><br>
        <label for="num14">Number 4:</label><br>
        <input type="int" id="num14" name="num14"><br>
        <label for="num15">Number 5:</label><br>
        <input type="int" id="num15" name="num15"><br>

        <input type="submit" name="submit" value="Submit"/><br>
    </form>



    <?php
        if(isset($_POST['submit'])){
                echo 'Output: <br>';

                if (!empty($_POST['num1']) && !empty($_POST['num2']) && !empty($_POST['num3']) && !empty($_POST['num4']) && !empty($_POST['num5']) && !empty($_POST['num6']) && !empty($_POST['num8']) && !empty($_POST['num9']) && !empty($_POST['num10']) && !empty($_POST['num11']) && !empty($_POST['num12']) && !empty($_POST['num13']) && !empty($_POST['num14']) && !empty($_POST['num15'])) {

                    $numArray1 = [$_POST['num1'],$_POST['num2'],$_POST['num3'],$_POST['num4'],$_POST['num5']];
                    $numArray2 = [$_POST['num10'],$_POST['num6'],$_POST['num7'],$_POST['num8'],$_POST['num9']];
                    $numArray3 = [$_POST['num11'],$_POST['num12'],$_POST['num13'],$_POST['num14'],$_POST['num15']];
                    user1($numArray1);
                    user2($numArray2);
                    user3($numArray1,$numArray3);

                } else {
                    echo 'Please fill in all the numbers.';
                }

                
            } else {
                echo 'Please select the user.';

        }
        
        

        function user1 ($numArray1) {

            echo 'User 1: <br>';
            for ($i = 0; $i < 5; $i++) {
                if ($numArray1[$i] >= 5) {
                    echo $numArray1[$i]. '<br>';
                }
            }
        }

        function user2 ($numArray2) {
            echo 'User 2: <br>';
            for ($i = 0; $i < 5; $i++) {
                if ($numArray2[$i] <= 5) {
                    echo $numArray2[$i]. '<br>';
                }
            }
        }

        function user3($numArray1,$numArray3) {
            echo 'User 3: <br>';

            for ($i = 0; $i < 3; $i++) {
                $max[$i] = max($numArray3);
                $maxInd = array_search($max[$i],$numArray3);
                array_splice($numArray3,$maxInd,1);
                echo $max[$i]. '<br>';
            }

            if (max($max) > max($numArray1)) {
                echo 'User 3 largest number is bigger than User 1 largest number.';
            } else if (max($numArray3) > max($numArray1)) {
                echo 'User 1 and User 3 have the same largest number.';
            } else {
                echo 'User 3 largest number is smaller than User 1 largest number.';
            }




        }
    
    
    ?>
    
</body>
</html>