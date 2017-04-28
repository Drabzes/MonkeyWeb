<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 8:23
 */
class Person_model extends CI_Model
{
    // constructor van het personen model
    public function  __construct()
    {
        // overerving
        parent:: __construct();
        // database connectie maken.
        $this->load->database();
    }

    // specifieke persoon laden uit de database
    public function getPerson($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('person');

        return $query;
    }

    // lijst van personen halen uit de databank
    public function getPersons()
    {
        $query = $this->db->get('person');
        return $query->result_array();
    }

    // persoon met id updaten in de database
    public function updatePerson($data)
    {
        $this->db->replace('person', $data);
    }


}