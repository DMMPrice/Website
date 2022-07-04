<!DOCTYPE html>
<html>
    <head>
        <title>Run a function when the query button is clicked</title>
    </head>
        </body style="text-align:center;">

        <h1 style="color:red;">Hi Aniruddha,Arya,Devasmita,Pranjal</h1>

        <?php

        if(array_key_exists('read', $_POST)) 
        {
            button();
        }

        function button()
        {
            echo "Lazy Barsha didn't make anything else yet";
        }

        ?>

 <form method="post">
            <input type="submit" name="read" value="Query">
        </form>
    </body>
    </html>
