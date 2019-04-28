<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="assign2.css" type="text/css" rel="stylesheet"/>
        <title>Clothier</title>
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
            <h2>Display Products</h2>
            <?php
                /* Including the displayTable.php page. */
                include("displayTable.php");
            ?>
        </div>

        <footer>
            COPYRIGHT © 2019, CLOTHIER CLOTHING BOUTIQUE
        </footer>
    </body>

</html>