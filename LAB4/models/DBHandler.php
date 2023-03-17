<?php
    interface DbHandler {
        public function connect ();
        public function get_all_records_paginated($fields = array(), $start = 0 );
        public function get_records_by_id($id);
        public function get_results($sql);
        public function getCount ($table);
    }


 ?>