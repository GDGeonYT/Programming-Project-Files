<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" />
    <title>Document</title>
</head>
<body>
<?php
require "../connect.php";

if(isset($_POST['P_Delete'])) {
    $P_ID = $_POST['P_ID'];
    
    $sql = "DELETE FROM products WHERE P_ID = '$P_ID'";
    
        if ($conn->query($sql) === TRUE) {
            echo '  
                <body class="text-white">
                    <div class="alert alert-success text-white text-center bg-warning" style="margin-top: 10%; padding: 15px">
                    <strong> <h1>Deleted Product Data</h1> </strong>
                    </div>
                    
                    <div class="text-center bg-primary text-white"><button class="btn" onclick="Go_Back()"> Back to Home </button></div>
                </body>';
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
}
?>
</body>
</html>
