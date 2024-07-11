<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator Result</title>
</head>
<body>
    <h1>Calculator Result</h1>
    
    <?php
    
    if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        switch ($operation) {
            case 'add':
                $result = $num1 + $num2;
                echo "<p>$num1 + $num2 = $result</p>";
                break;
            case 'subtract':
                $result = $num1 - $num2;
                echo "<p>$num1 - $num2 = $result</p>";
                break;
            case 'multiply':
                $result = $num1 * $num2;
                echo "<p>$num1 * $num2 = $result</p>";
                break;
           
            default:
                echo "<p>Error: Invalid operation</p>";
        }
    } else {
        echo "<p>Error: Missing input fields</p>";
    }
    ?>

</body>
</html>
