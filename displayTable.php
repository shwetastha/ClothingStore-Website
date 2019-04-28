<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="assign2.css" type="text/css" rel="stylesheet"/>
        <title>Clothier</title>
        <?php 
            // function to pad 0 on the left of the productCode.
            function padding($id){
                return str_pad($id, 6, 0, STR_PAD_LEFT);
            }
        ?>
        
    </head>
    <body>
        <table>
            <?php
                include("connect.php");
                $query = "select * from products;";
                $result = mysql_query($query, $dbh);
               
                // retrieve the result returned by the server
                // if table has some records, print data in table
                if ($myrow = mysql_fetch_array($result)){
                
                    do{

                        echo "<tr>
                        <td><img class='displayTable' src=".$myrow[4]." alt=".$myrow[1]."/></td>\n";
                        echo "<td class='left_alignment'>
                        
                        <strong>Product Code:</strong> ".padding($myrow[0])."<br>
                        <strong>Product Description:</strong> ".$myrow[1]."<br>
                        <strong>In Stock:</strong> ".$myrow[2]."<br>
                        <strong>Price:</strong> $".$myrow[3]."
                        
                        </td>
                        </tr>";
                    
                    }while ($myrow = mysql_fetch_array($result));
                }
                else // else if table is empty, give error message
                echo "There are no products to show.";
            ?>
        </table>
    </body>

</html>