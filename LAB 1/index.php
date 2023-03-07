<style> <?php include './views/style.css' ?> </style>
<?php 
    require_once("config.php");
    require_once("functions.php");
    $error = "";
    if(!empty($_POST)){
       $error =  validate_form();
        $name = trim(strtolower($_POST["name"]));
        $email = trim(strtolower($_POST["email"]));
        $textarea = trim(strtolower($_POST["textarea"]));
        $submit_Date = date("D M j G:i:s T Y");

       if(empty($error))
       {
        die("<center><H3>"._THANK_YOU_."</H3></center>". "<br>" ."Your Information was updated on $submit_Date". "<br>" . "name = ". $name. "<br>" . "email = ". $email .  "<br>" . "Message = ". $textarea);
       }
    }

    $parameter = isset($_GET["page"])? $_GET["page"]: "contact" ;
    if($parameter == "contact")
    require("views/form.php");
    else
    require("views/login.php");

    define("", "")

    
?>