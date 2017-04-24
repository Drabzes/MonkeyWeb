<?php
/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 7:39
 */

    Class Model_Person extends CI_Model {

        public function __construct()
        {
            parent:: __construct();
        }

        public function getHello()
        {
            $query = 'Hello Giel';
            return $query;
        }
    }
