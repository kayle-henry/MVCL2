<?php
    include 'product.php';

    class ProductDAO {

        public function getConnection(){
            $mysqli = new mysqli("127.0.0.1", "cs2033user", "cs2033pass", "prodDB");
            if ($mysqli->connect_errno) {
                $mysqli=null;
            }
            return $mysqli;
        }

        public function addProduct($product){
            $categoryID = $product->getCategoryID();
            $productCode = $product->getProductCode();
            $productName = $product->getProductName();
            $listPrice = $product->getListPrice();


            $connection=$this->getConnection();
            $stmt = $connection->prepare("INSERT INTO products (categoryID, productCode, productName, listPrice) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("issd",$categoryID, $productCode, $productName, $listPrice); // "i" for integer (categoryID), "s" for string (productCode, productName), "d" for double (listPrice)
            $stmt->execute();
            $productID = $connection->insert_id;
            $stmt->close();
            $connection->close();
            return $productID;
        }

        public function deleteProduct($productID){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("DELETE FROM products WHERE productID = ?");
            $stmt->bind_param("i", $productID);
            $stmt->execute();
            $stmt->close();
            $connection->close();
        }

        public function updateProduct($productID, $listPrice){
            $connection=$this->getConnection();
            if ($connection) {
                $stmt = $connection->prepare("UPDATE products SET listPrice = ? WHERE productID = ?");
                $stmt->bind_param("di", $listPrice, $productID); // "d" for double (listPrice), "i" for integer (productID)
                $stmt->execute();
                $stmt->close();
                $connection->close();
            } else {
                throw new Exception("Database connection failed.");
            }
        }

        public function getProducts(){
            $connection=$this->getConnection();
            $stmt = $connection->prepare("SELECT * FROM products;"); 
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                $product = new Product();
                $product->load($row);
                $products[]=$product;
            }    
            if (!$stmt) {
                throw new Exception("Failed to prepare statement: " . $connection->error);
            }
            $stmt->close();
            $connection->close();
            return $products;
        }
        public function getProductNameByID($productID) { //used in updateProduct for UI
            $connection = $this->getConnection();
            $stmt = $connection->prepare("SELECT productName FROM products WHERE productID = ?");
            $stmt->bind_param("i", $productID);
            $stmt->execute();
            $stmt->bind_result($productName);
            $stmt->fetch();
            $stmt->close();
            $connection->close();
            return $productName;
        }
    }
?>
