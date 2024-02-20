<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" />
</head>
<body>
    <?php
    include 'connect.php';
    
    if (isset($_POST['submit'])) {
        $C_ID = $_POST['C_ID'];
        $P_ID = $_POST['P_ID'];
        $Quantity = $_POST['Quantity'];
        $Amount = $_POST['Amount'];

        // $stmt = $connection->prepare('INSERT into services_list (servicename, price) values (?, ?)');
        // $stmt->bind_param('ss', $value, $price);  

        // foreach ($service as $item) {
        //     $value = $item['service'];
        //     $price = $item['price'];
        //     $stmt->execute();
        // }
        // $stmt->close();
    
        $sql = "INSERT INTO c_p_order (C_ID, P_ID, Quantity, Amount)
                VALUES ($C_ID, $P_ID, $Quantity, $Amount)";
    
        if ($conn->query($sql) === TRUE) {
            echo '  
                <body>
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
    ?>

    <script>
        function Go_Back() {
            window.open("../Home.php");
            window.close(this);
        }
    </script>
</body>
</html>