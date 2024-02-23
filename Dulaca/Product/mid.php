<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.css" />
</head>
<body>
    <?php
    include 'connect.php';
    
    if (isset($_POST['submit'])) {
        $P_Name = $_POST['P_Name'];
        $P_SKU = $_POST['P_SKU'];
        $P_Brand = $_POST['P_Brand'];
        $P_Type = $_POST['P_Type'];
        $P_Price = $_POST['P_Price'];
    
        $sql = "INSERT INTO products (P_Name, P_SKU, P_Brand, P_Type, P_Price)
                VALUES ('$P_Name','$P_SKU','$P_Brand','$P_Type','$P_Price')";
    
        if ($conn->query($sql) === TRUE) {
            echo '  
                <body class="text-white">
                    <div class="alert alert-success text-white text-center bg-primary" style="margin-top: 10%; padding: 15px">
                    <strong> <h1>Product Added</h1> </strong>
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
            window.open("../Home.php");
            window.close(this);
        }
    </script>
</body>
</html>
<?php
