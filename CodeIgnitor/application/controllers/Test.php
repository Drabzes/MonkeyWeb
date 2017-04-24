<?php
/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 7:20
 */

    class Test extends CI_Controller {

        public function index(){
            $data['title'] = "My Real Title";
            $data['heading'] = "My Real Heading";

            $this->load->model('User_model');
            $this->load->view('test', $data);
        }

        public function hello(){
            echo "This is the hello function Giel!";
        }
    }