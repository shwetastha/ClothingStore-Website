<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="assign2.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="validation.js"></script>
        <title>Clothier</title>
    </head>
    <body>
        <!-- Consistent header -->
        <header>
            <a href="assign2.html"><img class="logo" src="res/logo/2.PNG" alt="Clothier Logo"/></a>
            <nav>
                <a href="add.php">Add</a>
                <a href="display.php">Display</a>
                <a href="delete.php">Delete</a>
                <a href="contact.html">Contact</a>
            </nav>
        </header>

        <div class="body-center">
            <h2>Add Products</h2>
            <?php
            // page that will add the items in the database.
                include("addItem.php");
            ?>
            <form name="addForm" action="add.php" method="post" onsubmit="return formValidation()" 
            enctype="multipart/form-data">
                <table class="left_alignment">
                    <tr>
                        <td>
                            <label>Product ID:</label>
                        </td>
                        <td>
                            <input type="text" name="productId" placeholder="6 digit ID"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Product Name:</label>
                        </td>
                        <td>
                            <input type="text" name="productDesc" placeholder="Product Name"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>In Stock Quantity:</label>
                        </td>
                        <td>
                            <input type="text" name="quantity" placeholder="0"/>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Price:</label>
                        </td>
                        <td>
                            <input type="text" name="price" placeholder="0.00" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Select an image to upload:</label>
                        </td>
                        <td>
                            <input type="file" name="imageToUpload" id="imageToUpload">
                        </td>
                    </tr>
                    <tr>    
                        <td>
                            <input type="submit" value="Add Item" name="submit"> 
                        </td>   
                    </tr>
                </table>
            </form>
            <h2>Display Products</h2>
            <?php
            // include page that display the products.
                include("displayTable.php");
            ?>
        </div>
        

        <footer>
            COPYRIGHT © 2019, CLOTHIER CLOTHING BOUTIQUE
        </footer>
    </body>

</html>