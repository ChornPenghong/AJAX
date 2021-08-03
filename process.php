<?php 
    //connect to a database
    $conn = mysqli_connect('localhost', 'root', '', 'phppractice');
    echo "Processing...";
    //check for C variable

    // PHP $_POST is a PHP super global variable which is used to collect form data after submitting 
    // an HTML form with method="post". $_POST is also widely used to pass variables.
    if(isset($_POST['name'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        echo 'POST: Your name is ' . $_POST['name'];
        $query = "Insert into users(name) values('$name')";

        if(mysqli_query($conn, $query)){
            echo 'User Added..';
        }else{
            echo 'Error: ' . mysqli_error($conn);
        }
    }
    //check for GET variable
   if(isset($_GET['name'])){
       echo 'GET: Your name is ' . $_GET['name'];
   }
?>