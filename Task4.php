<?php
//task 7 
session_start();

if (!isset($_SESSION['page_views'])) {
    $_SESSION['page_views'] = 0;
}
$_SESSION['page_views']++;
$pageViews = $_SESSION['page_views'];
if (!isset($_SESSION['unique_visitors'])) {
    $_SESSION['unique_visitors'] = array();
}
//task 7 
//task 8 
$visitor_ip = $_SERVER['REMOTE_ADDR'];

if (!in_array($visitor_ip, $_SESSION['unique_visitors'])) {
   
    $_SESSION['unique_visitors'][] = $visitor_ip;
}
$num_visitors = count($_SESSION['unique_visitors']);
//task 8
//-------------------------
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}
if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $_SESSION['tasks'][] = $task;
    header("Location: " . "http://localhost/Demo/PHPSuperGlobal/Task4.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinanceTrackerPHP - Task Manager</title>
</head>
<body>
<div>
        <h1>To-Do List</h1>
        <form action="Task4.php" method="POST">
            <input type="text" name="task" placeholder="Enter task..." >
            <button type="submit" name="submit">Add Task</button>
            <p>Page views: <?php echo $pageViews; ?></p>
            <p>Number of unique visitors: <?php echo $num_visitors; ?></p>
        </form>
        <ul>
        <?php 
       
        foreach($_SESSION['tasks'] as $_task){
            echo '<li>' . htmlspecialchars($_task) ;
            
        }
        //Task 5
        $currentFile = $_SERVER['PHP_SELF']; // or $_SERVER['SCRIPT_NAME']; 
echo "<br>";

echo "The current file name is: " . basename($currentFile);
//Task 5
//Task 6
echo "<br>";
$requestTime = $_SERVER['REQUEST_TIME'];
echo "Page requested at: " . date('Y-m-d H:i:s', $requestTime);
//Task 6
        ?>
        </ul>
       
</body>
</html>
<?php 



?>