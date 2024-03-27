<?php

    require('./config/products.php'); 

    $sql = "SELECT id,name,price FROM items";
    //* means selects all so technically don't need id,name,price

    // query the DB and add the result to a php array
    $result = mysqli_query($conn, $sql);
    $products = mysqli_fetch_all($result, MYSQLI_ASSOC);
    
    // free resultfrom memory and close SQL connection
    mysqli_free_result($result);
    mysqli_close($conn);
    
?>



<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>

    <main>
        <h1>OUR PRODUCTS</h1>

        <table>

            <thead>
                <tr class="columns">
                    <td>Name</td>
                    <td>Price</td>
                </tr>

                <!-- <tr class="columns">
                    <th>Name</th>
                    <th>Price</th>
                </tr> -->
            </thead>

            <tbody>

                <?php foreach ($products as $product) : ?>

                    <tr>
                        <td><?php echo $product["name"]; ?></td>
                        <td><?php echo "$" . $product["price"]; ?></td>
                    </tr>

            </tbody>

            <?php endforeach ?>

        </table>

    </main>

</body>
</html>