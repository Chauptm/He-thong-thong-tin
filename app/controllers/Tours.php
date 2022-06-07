<?php
    class Tours extends Controller{
        public function __construct() {
            // $this->userModel = $this->model('User');
        }
    
        public function tours() {  
            $this->view('tours/tours');
        }
        public function detail() {  
            $this->view('tours/detail');
        }

        public function createAdmin() {
            $this->view('tours/create');
        }

        public function editAdmin(){
            $this->view('tours/edit');
        }

        public function detailAdmin(){
            $this->view('tours/detailAdmin');
        }

        public function deleteAdmin(){
            
        }


    }
?>