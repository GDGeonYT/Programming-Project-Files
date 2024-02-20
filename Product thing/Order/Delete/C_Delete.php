<?php
require "connect.php";

if(isset($_POST['Delete'])) {
    $C_ID = $_POST['C_ID'];
    
    $sql = "DELETE FROM customer WHERE C_ID = '$C_ID'";
    
        if ($conn->query($sql) === TRUE) {
            echo '  
                <body class="bg-dark text-white">
                    <div class="alert alert-success text-white text-center bg-success" style="margin-top: 10%; padding: 15px">
                    <strong> <h1> Task Failed Successfuly </h1> </strong>
                    </div>
                    
                    <div class="text-center bg-success text-white"><button class="btn" onclick="Go_Back()"> Back to Home </button></div>
                </body>';
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
}