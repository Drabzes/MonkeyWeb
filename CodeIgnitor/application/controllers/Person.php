<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 8:59
 */
class Person extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        /*
        $this->load->database();
        if ($this->db->get('person'))
        {
            echo 'connected! ';
            $query = $this->db->get('person');
            foreach ($query->result() as $row)
            {
                echo $row->id;
                echo $row->name;
            }
        }else{
            echo 'not connected ';
        }
        */
        $this->load->model('Person_model');
    }

    public function index()
    {
            /*
            $query = $this->Person_model->getPersons();
            foreach ($query->result() as $row)
            {
                echo $row->id;
                echo $row->name;
            }
        */
            $data['persons'] = $this->Person_model->getPersons();
            $data ['title'] = 'Person collection';

            $this->load->view('person', $data);
    }

    public function person_by_id($id)
    {

        $query = $this->Person_model->getPerson($id);

        $data['person'] = $query->result_array();







        /*
        $data['$person_item'] = $this->Person_model->getPerson($id);
        $data ['title'] = 'Person';
        */
        $this->load->view('personview', $data);

    }

    public function data_submitted()
    {
        $data = array(
            'id' => $this->input->post('u_id'),
            'name' => $this->input->post('u_name')
        );

        $this->Person_model->updatePerson($data);
        echo 'success';

    }
}