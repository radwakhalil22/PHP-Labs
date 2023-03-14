<?php
     use Aws\S3\S3Client;
    class S3 {
        private $_s3;
        public function __construct(){
            if(!empty($_FILES)){
                if($this->IsValidSize($_FILES["fileToUpload"]["size"]) && $this->IsValidType($_FILES["fileToUpload"]["type"],"image")){
                    $this->S3_factory(__KEY__, __SECRET__, 'us-east-1', 'latest');
                     try{
                        $this->put_object();
                        echo "File Uploaded successfully!"; 
                     }
                     catch (Aws\S3\Exception\S3Exception $e) {
                        echo "Can't Upload this file.\n";
                    }
                }
            }
        }

        public function IsValidSize ($file){

            if($file > 3000000){
                print_r("File Size is too big, Try uploading another file");
                return false;
            }
            return true;
        }
        public function IsValidType ($file, $type){
            if(!strstr($file, $type) ){
                print_r("Unsupported file type");
                return false;
            }
            return true;
        }
        public function S3_factory ($key, $secret,$region,$version){
           $this->_s3 = S3Client::factory(array(
                'credentials' => array(
                    'key' => $key,
                    'secret' => $secret
                ),'region' => $region,
                'version' => $version
            ));
        }

        public function put_object(){
           $this->_s3->putObject([
                'Bucket' => 'php-s3',
                'Key'    => uniqid(),
                'SourceFile' => $_FILES["fileToUpload"]["tmp_name"]		
            ]);
        }
    }

?>