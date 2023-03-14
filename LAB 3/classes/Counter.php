<?php
    class Counter implements counter_interface {
        private $_count;
        public function __construct(){
            $this->_count = $this->get_count();
        }

        public function get_count(){
            if(file_exists(__counter_file__)){
                return intval(file_get_contents(__counter_file__));
            }
            else{
                return 0;
            }
        }

        public function increment(){
            if(!isset($_SESSION[_SESSION_KEY_COUNTER_])){
                $this->_count++;
                $_SESSION[_SESSION_KEY_COUNTER_] = true;
                return $this->_count;
            }
            else{
                return false;
            }
        }

        private function update_counter(){
            $fp = fopen(__counter_file__, "w+");
            fwrite($fp, $this->_count);
            fclose($fp);
        }

        public function increment_and_update (){
            if($this->increment()!= false){
                $this->update_counter();
            }
        }
    }
?>