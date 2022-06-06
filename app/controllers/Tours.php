<?php
    class Tours extends Controller{
        public function __construct() {
            // $this->userModel = $this->model('User');
        }
    
        public function tours() {  
            $this->view('tours/tours');
        }
    }
?>