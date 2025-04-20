<?php
    class ProductList implements ControllerAction{

        function processGET(){
            $productDAO = new ProductDAO();
            $products = $productDAO->getProducts();
            include "views/listProducts.php";
        }

        function processPOST(){
            return;
        }

    }

    class ProductAdd implements ControllerAction{

        function processGET(){
            include "views/addProduct.php";
        }

        function processPOST(){
            $productID=$_POST['productID'];
            $categoryID=$_POST['categoryID'];
            $productCode=$_POST['productCode'];
            $productName=$_POST['productName'];
            $listPrice=$_POST['listPrice'];

            $product = new Product();
            $product->setProductID($productID);
            $product->setCategoryID($categoryID);
            $product->setProductCode($productCode);
            $product->setProductName($productName);
            $product->setListPrice($listPrice);

            $productDAO = new ProductDAO();
            $productDAO->addProduct($product);
            header("Location: controller.php?page=list");
            exit;
        }

    }

    class ProductUpdate implements ControllerAction{
        function processGET(){
            include "views/updateProduct.php";
        }

        function processPOST(){
            $productID=$_POST['productID'];
            echo $productID;
            $listPrice = $_POST['listPrice'];
            echo $listPrice;
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $productDAO = new ProductDAO();
                $productDAO->updateProduct($productID,$listPrice);
            }
            header("Location: controller.php?page=list");
            exit;

        }

    }

   /* class ProductDelete implements ControllerAction{

        function processGET(){
            $productID = $_GET['productID'];
            include 'views/delProduct.php';

        }

        function processPOST(){
            $productID=$_POST['productID'];
            $submit=$_POST['submit'];
            if($submit=='CONFIRM'){
                $productDAO = new ProductDAO();
                $productDAO->deleteProduct($productID);
            }
            header("Location: controller.php?page=list");
            exit;
        }

    }*/
?>
