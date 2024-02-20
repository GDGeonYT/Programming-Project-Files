<?php
    require_once('connect.php');

    //For Customer and Product
    $customer = "select * from customer";
    $product = "select * from product";

    //For logic w/ previous variables
    $C_result = mysqli_query($conn,$customer);
    $P_result = mysqli_query($conn,$product);

    if (isset($_GET['id'])) {
        echo $_GET['id'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>:D</title>
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" />


    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#Customer_Table").DataTable();
            $("#Product_Table").DataTable();
        })
    </script>

</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header" style="text-align:center; font-size: 16px;">
                        <div>
                            <h3 class="text-center bg-primary text-white">Customer Table</h3>
                        </div>
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="Customer_Table" class="table text-center table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <td class="bg-primary text-white">No</td>
                                                    <td class="bg-primary text-white">Name</td>
                                                    <td class="bg-primary text-white">Gender</td>
                                                    <td class="bg-primary text-white">Brithday</td>
                                                    <td class="bg-primary text-white">Address</td>
                                                    <td class="bg-primary text-white"></td>
                                                    <td class="bg-primary text-white"></td>
                                                    <td class="bg-primary text-white">Action</td>
                                                    <td class="bg-primary text-white"></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php while($C_row = mysqli_fetch_assoc($C_result)) 
                                                        {
                                                    ?>
                                                    <td><?php echo $C_row['C_ID']; ?></td>
                                                    <td><?php echo $C_row['C_Name']; ?></td>
                                                    <td><?php echo $C_row['C_Gender']; ?></td>
                                                    <td><?php echo $C_row['C_Birthday']; ?></td>
                                                    <td><?php echo $C_row['C_Address']; ?></td>
                                                    <td>
                                                        <td><button class="btn btn-primary C_Select" style="font-size: 10px">Select</button></td>
                                                        <td>
                                                            <form action="Delete/C_Delete.php" method="post">
                                                            <input type="hidden" name="C_ID" value="<?php echo $C_row['C_ID']?>">
                                                            <button type="submit" name="C_Delete" class="btn btn-danger C_Delete" style="font-size: 10px">Delete</button>
                                                            </form>
                                                        </td>
                                                        <td><button class="btn btn-success C_Edit" style="font-size: 10px">Edit</button></td>
                                                    </td>
                                                </tr>
                                                    <?php
                                                        }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card-header" style="text-align:center; font-size: 16px;">
                        <div>
                            <h3 class="text-center bg-primary text-white">Product Table</h3>
                        </div>
                        <div class="container-fluid">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <table id="Product_Table" class="table text-center table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <td class="bg-primary text-white">No</td>
                                                    <td class="bg-primary text-white">Name</td>
                                                    <td class="bg-primary text-white">SKU</td>
                                                    <td class="bg-primary text-white">Type</td>
                                                    <td class="bg-primary text-white">Brand</td>
                                                    <td class="bg-primary text-white">Price</td>
                                                    <td class="bg-primary text-white"></td>
                                                    <td class="bg-primary text-white"></td>
                                                    <td class="bg-primary text-white">Action</td>
                                                    <td class="bg-primary text-white"></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        while($P_row = mysqli_fetch_assoc($P_result))
                                                        {
                                                    ?>
                                                    <td><?php echo $P_row['P_ID']; ?></td>
                                                    <td><?php echo $P_row['P_Name']; ?></td>
                                                    <td><?php echo $P_row['P_SKU']; ?></td>
                                                    <td><?php echo $P_row['P_Type']; ?></td>
                                                    <td><?php echo $P_row['P_Brand']; ?></td>
                                                    <td><?php echo $P_row['P_Price']; ?></td>
                                                    <td>
                                                        <td><button class="btn btn-primary P_Select" style="font-size: 10px">Select</button></td>
                                                        <td>
                                                            <form action="Delete/P_Delete.php" method="post">
                                                            <input type="hidden" name="P_ID" value="<?php echo $P_row['P_ID']?>">
                                                            <button type="submit" name="P_Delete" class="btn btn-danger P_Delete" style="font-size: 10px">Delete</button>
                                                            </form>
                                                        </td>
                                                        <td><button class="btn btn-success P_Edit" style="font-size: 10px">Edit</button></td>
                                                    </td>
                                                </tr>
                                                    <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <form action="mid.php" method="post">
            
            <input type="hidden" name="C_ID" id="C_ID">
            <input type="hidden" name="P_ID" id="P_ID">
            <input type="hidden" name="Quantity" id="Quantity">
            <input type="hidden" name="Amount" id="Amount">
            
            <div class="card">
                <div class="card-header">
                    <h1 class="label text-center">Invoice</h1>
                </div>
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 id="Name">Customer Name:</h3>
                            </div>
                            <div class="col-lg-12">
                                <table class="table table-bordered table-striped text-center">
                                    <thead>
                                        <tr>
                                            <td class="bg-primary text-white">No</td>
                                            <td class="bg-primary text-white">Name</td>
                                            <td class="bg-primary text-white">Brand</td>
                                            <td class="bg-primary text-white">Price</td>
                                            <td class="bg-primary text-white">Quantity</td>
                                            <td class="bg-primary text-white">Cost</td>
                                        </tr>
                                    </thead>
                                    <tbody id="Invoice_Table">

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <h3 id="Total">Total:</h3>
                        
                <button id="submit" name="submit" value="submit"
                class="btn btn-primary">Purchase</button>
            </div>
        </form>
    </div>
    <script src="../../../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let keep = 0;
        $('.C_Select').click(function() {
            let C_ID = document.getElementById("C_ID");
            let Customer_Table = document.getElementById("Customer_Table");
            let Name = document.getElementById("Name");
            let index = $(this).parent().parent().index() + 1;

            Name.innerHTML = "Customer Name: " + Customer_Table.rows[index].cells[1].innerHTML
            C_ID.value = Customer_Table.rows[index].cells[0].innerHTML;
        })

        $('.C_Edit').click(function() {
            let Customer_Table = document.getElementById("Customer_Table");
            let index = $(this).parent().parent().index() + 1;

            let C_ID = Customer_Table.rows[index].cells[0].innerHTML;
            let C_Name = Customer_Table.rows[index].cells[1].innerHTML;
            let C_Gender = Customer_Table.rows[index].cells[2].innerHTML;
            let C_Birthday = Customer_Table.rows[index].cells[3].innerHTML;
            let C_Address = Customer_Table.rows[index].cells[4].innerHTML;

            let C_ID_Data = C_ID;
            let C_Name_Data = C_Name;
            let C_Gender_Data = C_Gender;
            let C_Birthday_Data = C_Birthday;
            let C_Address_Data = C_Address;

            localStorage.setItem('C_ID_Data', C_ID_Data);
            localStorage.setItem('C_Name_Data', C_Name_Data);
            localStorage.setItem('C_Gender_Data', C_Gender_Data);
            localStorage.setItem('C_Birthday_Data', C_Birthday_Data);
            localStorage.setItem('C_Address_Data', C_Address_Data);

            window.open("Edit/Customer_Edit.php");
            window.close(this);
        })

        $('.P_Select').click(function() {
            let pop = prompt("How many items would you like?", "");
            let number;

            if(pop == null || pop == "") {
            stop;
            } else {
                // Declarations for use
                number = pop;
                const Product_Table = document.getElementById("Product_Table");
                const Invoice_Table = document.getElementById("Invoice_Table");
                const Total = document.getElementById("Total");
                const index = $(this).parent().parent().index() + 1;
                const Next_Index = Invoice_Table.rows.length;

                //declarations for database
                const P_ID = document.getElementById("P_ID");
                const Quantity = document.getElementById("Quantity");
                const Amount = document.getElementById("Amount");

                // Insert stuff :D
                Invoice_Table.insertRow();
                Invoice_Table.rows[Next_Index].insertCell();
                Invoice_Table.rows[Next_Index].insertCell();
                Invoice_Table.rows[Next_Index].insertCell();
                Invoice_Table.rows[Next_Index].insertCell();
                Invoice_Table.rows[Next_Index].insertCell();
                Invoice_Table.rows[Next_Index].insertCell();

                const No = parseInt(Product_Table.rows[index].cells[0].textContent);
                Invoice_Table.rows[Next_Index].cells[0].innerHTML = No;
                P_ID.value = No
                
                const Name = Product_Table.rows[index].cells[1].textContent;
                Invoice_Table.rows[Next_Index].cells[1].innerHTML = Name;

                const Brand = Product_Table.rows[index].cells[2].textContent;
                Invoice_Table.rows[Next_Index].cells[2].innerHTML = Brand;

                const Price = parseInt(Product_Table.rows[index].cells[3].textContent);
                Invoice_Table.rows[Next_Index].cells[3].innerHTML = Price;

                Invoice_Table.rows[Next_Index].cells[4].innerHTML = number;
                Quantity.value = number

                const Cost = Price * number;
                Invoice_Table.rows[Next_Index].cells[5].innerHTML = Cost;
                
                keep = keep + Cost;

                Total.innerHTML = "Total: " + keep;
                Amount.value = keep;
            }
        })

        $('.P_Edit').click(function() {
            let Product_Table = document.getElementById("Product_Table");
            let index = $(this).parent().parent().index() + 1;

            let P_ID = Product_Table.rows[index].cells[0].innerHTML;
            let P_Name = Product_Table.rows[index].cells[1].innerHTML;
            let P_SKU = Product_Table.rows[index].cells[2].innerHTML;
            let P_Type = Product_Table.rows[index].cells[3].innerHTML;
            let P_Brand = Product_Table.rows[index].cells[4].innerHTML;
            let P_Price = Product_Table.rows[index].cells[5].innerHTML;

            let P_ID_Data = P_ID;
            let P_Name_Data = P_Name;
            let P_SKU_Data = P_SKU;
            let P_Type_Data = P_Type;
            let P_Brand_Data = P_Brand;
            let P_Price_Data = P_Price;

            localStorage.setItem('P_ID_Data', P_ID_Data);
            localStorage.setItem('P_Name_Data', P_Name_Data);
            localStorage.setItem('P_SKU_Data', P_SKU_Data);
            localStorage.setItem('P_Type_Data', P_Type_Data);
            localStorage.setItem('P_Brand_Data', P_Brand_Data);
            localStorage.setItem('P_Price_Data', P_Price_Data);

            window.open("Edit/Product_Edit.php");
        })
    </script>
    <script src="Edit/C_Edit.js"></script>
    <script src="Edit/P_Edit.js"></script>
</body>
</html>