<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 8:40
 */
class PersonController extends CI_Controller
{
    public function index()
    {
        $data = $this->load->model('Person_model');
        $this->load->view('personView', $data);
    }

}