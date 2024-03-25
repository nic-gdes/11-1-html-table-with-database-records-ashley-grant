<?php

    require('./config/products.php'); 

    $sql = "SELECT id,name,price FROM items";

    // query the DB and add the result to a php array
    $result = mysqli_query($conn, $sql);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free resultfrom memory and close SQL connection
    mysqli_free_result($result);
    mysqli_close($conn);
    
?>



<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Products</title>
</head>
<body>

<main>
    <h1>OUR PRODUCTS</h1>

    <table>

        <tr class="columns">
            <th>Name</th>
            <th>Price</th>
        </tr>

        <tr>  
            <?php foreach ($items as $item) :  ?>
        <th>
            <?php echo $item["name"]; ?>  
        <th>
            <?php echo $item["price"]; ?>      
        </th>

        </tr>

        <?php endforeach ?>
    </table>
</main>

</body>
</html>