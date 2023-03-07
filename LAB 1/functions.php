<?php 
function validate_form(){
    $name = isset($_POST["name"]) ? $_POST["name"]: "";
    $email = isset($_POST["email"])? $_POST["email"]: "";
    $textarea = isset($_POST["textarea"])? $_POST["textarea"]: "";

    if(empty($name) || empty($email)){
        return  " A field is empty";
    }
    elseif (empty($textarea)) {
        return "Message Can't be empty";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format";
    }
    else{
        return "";
    }
}

function remember_Var($var)
{
    if(isset($_POST[$var]) && !empty($_POST[$var])){
        return $_POST[$var];
    }
}
?>