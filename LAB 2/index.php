<style> <?php include './views/style.css' ?> </style>
<?php 
    require_once("vendor/autoload.php");

    $error = "";
    if(!empty($_POST)){
       $error =  validate_form();
        $name = trim(strtolower($_POST["name"]));
        $email = trim(strtolower($_POST["email"]));
        $textarea = trim(strtolower($_POST["textarea"]));
        $submit_Date = date("D M j G:i:s T Y");

       if(empty($error))
       {
        save_to_File();
        print_confirmation_page();
        exit();
       }
    }

    $parameter = isset($_GET["page"])? $_GET["page"]: "contact" ;
    if($parameter == "contact")
    require_once("views/form.php");
    else
    require_once("views/users.php");

    
?>