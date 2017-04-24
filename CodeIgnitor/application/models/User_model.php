<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 7:49
 */
class User_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //My constructors

    }

    public function getHello()
    {
        $query = 'Hello Giel';
        return $query;
    }
}