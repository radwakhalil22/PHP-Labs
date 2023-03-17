<?php 
    $current_index = isset($_GET["next"]) && is_numeric($_GET["next"])? (int)$_GET["next"]: 0;
    $rowCount = $db->getCount("items");
    $next_index = $current_index + __RECORDS_PER_PAGE__ <= $rowCount? $current_index + __RECORDS_PER_PAGE__: $current_index;
    $previous_index = ($current_index - __RECORDS_PER_PAGE__ > 0)? $current_index - __RECORDS_PER_PAGE__ : 0;
    $items = $db->get_all_records_paginated(array(), $current_index);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;" >
    <div class="table-responsive container text-center">
        <table class="table table-hover caption-top table-success table-striped">
                <caption class="text-center h1" style="font-family:'Courier New', Courier, monospace;">Items</caption>
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Details</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // $index = $current_index;
                foreach($items as $item){
                    echo "<tr class=\"table-dark\" > <td>". $item["id"] . "</td>";
                    echo "<td>" . $item["product_name"] ."</td>";
                    echo "<td><a class=\"text-light\" href='" . $_SERVER["PHP_SELF"] . "?id=". $item["id"] . "' > View item </a> </td> </tr> ";
                    // $index++;
                }
                
                ?>
                </tbody>

        </table>
        <div class="d-flex justify-content-center gap-2" >
            <button class="btn btn-dark border-warning">
                <a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$previous_index; ?>" class="text-light"> << Previous</a>
            </button>
            <button class=" btn btn-dark border-warning" >        
                <a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$next_index; ?>" class="text-light">Next >></a>
            </button>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>