<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
    <?php
    include 'connect.php';
    
    if (isset($_POST['submit'])) {
        $P_ID = $_POST['P_ID'];
        $P_Name = $_POST['P_Name'];
        $P_SKU = $_POST['P_SKU'];
        $P_Brand = $_POST['P_Brand'];
        $P_Type = $_POST['P_Type'];
        $P_Price = $_POST['P_Price'];
    
        $sql = "UPDATE `products` SET `P_Name`='$P_Name',`P_SKU`='$P_SKU',`P_Brand`='$P_Brand',`P_Type`='$P_Type',`P_Price`='$P_Price' WHERE P_ID='$P_ID'";
    
        if ($conn->query($sql) === TRUE) {
            echo '  
                <body>
                    <div class="alert alert-success text-white text-center bg-success" style="margin-top: 10%; padding: 15px">
                    <strong> <h1>Product Modified</h1> </strong>
                    </div>
                    
                    <div class="text-center bg-primary text-white"><button class="btn" onclick="Go_Back()"> Back to Home </button></div>
                </body>';
            
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    ?>

    <script>
        function Go_Back() {
            window.open("../../Home.php");
            window.close(this);
        }
    </script>
</body>
</html>
<?php