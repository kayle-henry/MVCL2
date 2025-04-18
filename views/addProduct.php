<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  

                            <form action="controller.php" method="GET">
                            <input type="hidden" name="page" value="list">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS 2033 | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Product List</h5>
                        <p class="card-text">Add a new product to the list.</p>
                        <form action="controller.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="categoryID" class="form-label">categoryID</label>
                            <input type="text" class="form-control mb-3" id="categoryID" name="categoryID" placeholder="Enter the category ID" required>
                            <label for="productCode" class="form-label">Product Code</label>
                            <input type="text" class="form-control mb-3" id="productCode" name="productCode" placeholder="Enter the product code" required>
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control mb-3" id="productName" name="productName" placeholder="Enter the product name" required>
                            <label for="listPrice" class="form-label">List Price</label>
                            <input type="text" class="form-control mb-3" id="listPrice" name="listPrice" placeholder="Enter the product price" required>
                            <button type="submit" class="btn btn-primary">Submit</button>  
                        </form>
                            <form action="controller.php" method="GET">
                                <input type="hidden" name="page" value="list">
                                <button type="submit" class="btn btn-secondary">Cancel</button>
                            </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
