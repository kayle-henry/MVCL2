<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Products Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .btns {
        margin-bottom: 20px;
        display: flex;
        gap: 10px;
    }
    h1 {
        margin-bottom: 20px;
        padding-top: 20px;
    }
</style>
<body>
    <h1><center>Product Database</center></h1>
    <div class="container">
        <div class="col">
            <form action="controller.php" method="GET">
            <div class="btns">
            <button class="btn btn-primary" type="submit" name="page" value="add">Add Product</button>
            <button class="btn btn-primary" type="submit" name="page" value="update">Update Product Price</button>
            </div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Select</th>
                        <th>Product ID</th>
                        <th>Category ID</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Price</th>
                    </tr>    
                </thead>
                <tbody>
                    <?php
                        $products = $productDAO->getProducts();
                        if (empty($products)) {
                            echo "<tr><td colspan='5'>No products found.</td></tr>";
                        }else{
                            //echo "<tr><td colspan='5'>".count($products)." products found.</td></tr>";
                        }
                        for($index=0;$index<count($products);$index++){
                            echo "<tr>";
                            echo "<td><input type=\"radio\" name=\"productID\" value=\"".$products[$index]->getProductID()."\"></td>";
                            echo "<td>".$products[$index]->getProductID()."</td>";
                            echo "<td>".$products[$index]->getCategoryID()."</td>";
                            echo "<td>".$products[$index]->getProductCode()."</td>";
                            echo "<td>".$products[$index]->getProductName()."</td>";
                            echo "<td>".$products[$index]->getListPrice()."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>        
            </table>  
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
