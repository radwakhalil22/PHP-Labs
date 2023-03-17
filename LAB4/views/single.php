<?php
    $id = (isset($_GET["id"]))? (int)($_GET["id"]) : 0;
    $current_item = $db->get_records_by_id($id);
    // var_dump($current_item);
    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $current_item["product_name"]?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    </head>
 <body class="d-flex justify-content-center mt-5"> 
    <table class="table-responsive container text-center table-success table table-striped">
        <caption>
            <?php echo "Product Name:  ". $current_item["product_name"]?></caption>
            <tbody>
                <tr>
                    <td colspan="1" ><?php echo "Type: " . $current_item["category"];?></td>
                    <td rowspan="5" >
                        <img src="<?php echo "images/" . $current_item["photo"]; ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="1" > <?php echo "Price: " . $current_item["list_price"]; ?></td>
                </tr>
                <tr >
                    <td colspan="1" >
                        Details
                        <br><?php echo "code:" .$current_item["product_code"]; ?>
                        <br><?php echo "Item id:" .$current_item["id"]; ?>
                        <br><?php echo "rating:" .$current_item["rating"]; ?>
                    </td>
                    
                </tr>
                <tr >
                    
                </tr>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

 </body>
</html>