<?php
    require_once("vendor/autoload.php");
    require_once("views/upload.php");


    // if(!empty($_FILES)){
    //     if($_FILES["fileToUpload"]["size"] > 3000000){
    //         die("File Size is too big, Try uploading another file");
    //     }
    //     elseif(!strstr($_FILES["fileToUpload"]["type"], "image") ){
    //         die("Unsupported file type");
    //     }
    //     else{
    //         $s3 = S3Client::factory(array(
    //             'credentials' => array(
    //                 'key' => __KEY__,
    //                 'secret' => __SECRET__
    //             ),'region' => 'us-east-1',
    //             'version' => 'latest'
    //         ));
        
    //         try {
    //             $result = $s3->putObject([
    //                 'Bucket' => 'php-s3',
    //                 'Key'    => uniqid(),
    //                 'SourceFile' => $_FILES["fileToUpload"]["tmp_name"]		
    //             ]);
    //             echo "File Uploaded successfully!";  
    //         } catch (Aws\S3\Exception\S3Exception $e) {
    //             echo "Can't Upload this file.\n";
    //         }
    //     }
    // }
        $s3 = new S3();

    // if(!empty($_FILES)){
        
    //     $s3->check_file_size($_FILES["fileToUpload"]["size"]);
    //     $s3->check_file_type($_FILES["fileToUpload"]["type"], "image");

    //     $s3->S3_factory(__KEY__, __SECRET__, 'us-east-1', 'latest');
    //         try {
    //             $result = $s3->S3:putObject([
    //                 'Bucket' => 'php-s3',
    //                 'Key'    => uniqid(),
    //                 'SourceFile' => $_FILES["fileToUpload"]["tmp_name"]		
    //             ]);
    //             echo "File Uploaded successfully!";  
    //         } catch (Aws\S3\Exception\S3Exception $e) {
    //             echo "Can't Upload this file.\n";
    //         }
    // }   
?>