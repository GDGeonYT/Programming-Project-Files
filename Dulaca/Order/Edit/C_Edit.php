<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>
<body>
    <?php
    include "connect.php";

    if (isset($_POST['submit'])) {
        $C_ID = $_POST['C_ID'];
        $C_Name = $_POST['C_Name'];
        $C_Gender = $_POST['C_Gender'];
        $C_Birthday = $_POST['C_Birthday'];
        $C_Address = $_POST['C_Address'];

        $sql = "UPDATE `customer` SET `C_Name`='$C_Name',`C_Gender`='$C_Gender',`C_Birthday`='$C_Birthday',`C_Address`='$C_Address' WHERE C_ID='$C_ID'";

        if ($conn->query($sql) === TRUE) {
            echo '
                <body>
                    <div class="alert alert-success text-white text-center bg-success" style="margin-top: 10%; padding: 15px">
                    <strong> <h1>Customer Modified</h1> </strong>
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