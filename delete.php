<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="assign2.css" type="text/css" rel="stylesheet"/>
        <script type="text/javascript" src="validation.js"></script>
        <title>Clothier</title>
        <?php 
            // padding 0 on the left of productCode.
            function padding($id){
                return str_pad($id, 6, 0, STR_PAD_LEFT);
            }
        ?>
    </head>
    <body>
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
            <h2>Delete Products</h2>
            <?php
                if (isset($_POST['id'])){
                    include("connect.php");
                    $query = "delete from products where productCode = $_POST[id];";
                    $result = mysql_query($query, $dbh);
                    if($result){
                        echo "<h3>Product ID ".$_POST['id']." has been deleted!</h3>";
                    }
                }
            ?>
            <table>
                
                <?php
                    include("connect.php");
                    $query = "select * from products;";
                    $result = mysql_query($query, $dbh);
                
                    // retrieve the result returned by the server
                    // if table has some records, print data in table
                    if ($myrow = mysql_fetch_array($result)){
                        // echo "<tr><th>Delete Button</th><th>Product Image</td><td>Product Description</td></tr>";
                        do{

                            echo "<tr>
                            <form action='#' method='post' onSubmit='return confirmationForDeletion()'>
                            
                            <td><img class='displayTable' src=".$myrow[4]." alt=".$myrow[1]."/></td>\n";
                            echo "<td class='left_alignment'>
                            
                            <strong>Product Code:</strong> ".padding($myrow[0])."<br>
                            <strong>Product Description:</strong> ".$myrow[1]."<br>
                            <strong>In Stock:</strong> ".$myrow[2]."<br>
                            <strong>Price:</strong> $".$myrow[3]."<br><br>
                            <input type='hidden' name='id' value='".$myrow[0]."'/>
                            <button type='submit'>Delete</button>
                            </td>
                            
                            </form>
                            </tr>";
                        
                        }while ($myrow = mysql_fetch_array($result));
                    }
                    else // else if table is empty, give error message
                    echo "The table is empty";
                ?>
            </table>
        </div>

        <footer>
            COPYRIGHT © 2019, CLOTHIER CLOTHING BOUTIQUE
        </footer>
    </body>

</html>