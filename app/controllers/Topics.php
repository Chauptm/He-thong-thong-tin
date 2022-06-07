<?php
    class Topics extends Controller{
        public function __construct() {
            // $this->userModel = $this->model('User');
        }
    
        public function topics() {  
            $this->view('topics/topics');
        }
        public function createAdmin() {
            $this->view('topics/create');
        }

        public function editAdmin(){
            $this->view('topics/edit');
        }

        public function deleteAdmin(){
            
        }


    }
?>