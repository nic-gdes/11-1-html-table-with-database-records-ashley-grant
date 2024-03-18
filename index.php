<?php

    $conn = mysqli_connect("db:3306", "root", "root", "products");

    if(mysqli_connect_errno()) {
        echo "Database error: " . mysqli_connect_error();
        exit();
    }

    $sql = "SELECT id,name,price FROM products";


    // query the DB and add the result to a php array
    $result = mysqli_query($conn,$sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free result from memory and close SQL coonnection
    mysqli_free_result($result);
    mysqli_close($conn);


?>



<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    
    <table>


        <tr>
            <?php   
            foreach($name as $products) :
            ?>
                <td><?php echo $products['name']; ?></td>
            <?php endforeach ?>
        </tr>


    </table>

</body>
</html>