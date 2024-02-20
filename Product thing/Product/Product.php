<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../node_modules/bootstrap-icons/font/bootstrap-icons.css" />
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4>Product Form</h4>
            </div>
            <div class="card-body">
                <form id="Unrelated" action="mid.php" method="post">
                    <div class="row">
                        <div class="col-lg-12 mb-2">
                            <label for="P_Name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="P_Name" name="P_Name" required />
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="P_SKU" class="form-label">SKU</label>
                            <input type="text" class="form-control" id="P_SKU" name="P_SKU" required />
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="P_Brand" class="form-label">Brand</label>
                            <input type="text" class="form-control" id="P_Brand" name="P_Brand" required />
                            
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="P_Type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="P_Type" name="P_Type" required />
                        </div>
                        <div class="col-lg-12 mb-2">
                            <label for="P_Price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="P_Price" name="P_Price" required />
                        </div>
                    </div>
                    <hr/>
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