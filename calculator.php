<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <link rel="stylesheet" href="./calculator.css">
</head>
<body>
    <div class="main">
        <div class="main-box">
            <div class="heading">
                Here is our Calculator
            </div>
            <form method="POST">
                <input type="number" name="number1" value="0" placeholder="Enter the value1">
                <input type="number" name="number2" value="0" placeholder="Enter the value2">

                <select name="operator" class="operator">
                    <option value="add">ADDITION</option>
                    <option value="sub">SUBTRACTION</option>
                    <option value="mul">MULTIPLICATION</option>
                    <option value="div">DIVISION</option>
                </select>
                <br>
                <button type="submit" name="submit">ANSWER</button>
            </form>

            <div class="answer">
                <p>
                    <?php

                        if(isset($_POST['submit']))
                        {
                            $val1 = $_POST['number1'];
                            $val2 = $_POST['number2'];
                            $operator = $_POST['operator'];

                            switch($operator){
                                case "add":
                                    $val3 = $val1+$val2;
                                    echo "The addition of two number is: ";
                                    echo $val3;
                                break;
                                case "sub": 
                                    echo "The subration of two number is: ";
                                    echo $val1-$val2;break;
                                case "mul": 
                                    echo "The multipliation of two number is: ";
                                    echo $val1* $val2;break;
                                case "div": 
                                    echo "The division of two numbers is: ";
                                    echo $val1/$val2; break;
                                default: echo "invalid";
                            }
                        }

                    ?>
                </p>
            </div>
        </div>
    </div>

</body>
</html>