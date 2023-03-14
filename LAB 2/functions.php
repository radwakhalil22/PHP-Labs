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

function print_confirmation_page(){
    echo "<center><h2>"._THANK_YOU_."</h2></center>";
    echo str_repeat("*", 50);
    foreach($_POST as $key=>$value){
        if($key != "password"){
            $value = strtolower(trim($value));
            echo "<br/><strong> $key </strong> : $value";
        }
    }
}

function save_to_File(){
    $fp = fopen(_Saving_File_, "a+");
    $written_string = date("M d Y h:i a").",".$_SERVER["REMOTE_ADDR"].",".$_POST["name"]. ",".$_POST["email"];
    fwrite($fp,  $written_string.PHP_EOL);
    fclose($fp);
}

function convert_file_to_array(){
    return file(_Saving_File_);
}

function read_from_external_site($site){
    $site = trim($site, "/");
    $site = strstr($site, "robots.txt") ? $site : $site."/robots.txt";
}
?>