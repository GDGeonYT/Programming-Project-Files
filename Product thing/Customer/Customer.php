<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Customer Form</h4>
            </div>
            <div class="card-body">
                <form id="SongsForm" action="mid.php" method="post">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <label for="C_Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="C_Name" name="C_Name" required />
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="C_Gender" class="form-label">Gender</label>
                            <select id="C_Gender" name="C_Gender" class="form-select">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="C_Birthday" class="form-label">Birthday</label>
                            <input type="date" class="form-control" id="C_Birthday" name="C_Birthday" required />
                            
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="C_Address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="C_Address" name="C_Address" required />
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="SUBMIT" class="form-control btn btn-primary" name="submit" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr />
    </div>
</body>
</html>