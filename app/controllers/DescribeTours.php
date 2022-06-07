<?php
    class DescribeTours extends Controller{
        public function __construct() {
            // $this->userModel = $this->model('User');
        }
    
        public function describetours() {  
            $this->view('describetours/describetours');
        }
        public function createAdmin() {
            $this->view('describetours/create');
        }

        public function editAdmin(){
            $this->view('describetours/edit');
        }

        public function deleteAdmin(){
            
        }


    }
?>