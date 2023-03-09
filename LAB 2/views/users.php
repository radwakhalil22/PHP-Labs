<?php 
    $users = convert_file_to_array();
    foreach($users as $user){
        $user_detail = explode(",", $user);
        echo "<b> New User </b> <br/>";
        echo str_repeat("=", 20);
        echo "<div>"
        ."<h5> $user_detail[0] </h5>"
        ."<h5> $user_detail[1] </h5>"
        ."<h5> $user_detail[2] </h5>"
        ."<h5> $user_detail[3] </h5>"
        ."</div>";
    }
    
?>