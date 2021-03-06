<?php
    class Pages extends Controller {
        public function __construct(){

        }

        public function index(){
            if(isLoggedIn()){
                redirect('posts/index');
            }
            $data = [
                'title'=> 'POST',
                'description' => 'Social network built on the PHP_MVC_FRAMEWORK',
            ];
            $this->view('pages/index', $data);
        }

        public function about(){
            $data = [
                'title'=> 'About Us',
                'description' => 'App to Post with other users',
            ];
            $this->view('pages/about', $data);
        }
    }
?>

