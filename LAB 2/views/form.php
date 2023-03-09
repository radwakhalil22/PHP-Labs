<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>Contact Us</h1>
        <center><h5><?php echo $error; ?></h5></center>
        <input type="text" name="name" id="" placeholder="Name" value = "<?php echo remember_Var("name"); ?>">
        <br>
        <br>
        <input type="input" name="email"  placeholder="email" value = "<?php echo remember_Var("email"); ?>">
        <br>
        <br>
        <textarea name="textarea" cols="30" rows="10" ><?php echo remember_Var("textarea"); ?></textarea>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>