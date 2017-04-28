<?php

/**
 * Created by PhpStorm.
 * User: Jafar
 * Date: 24/04/2017
 * Time: 8:59
 */
class Person extends CI_Controller
{
    //constructor
    public function __construct()
    {
        parent::__construct();
        //model laden
        $this->load->model('Person_model');
    }

    public function index()
    {
            try{
                // persoon doorgeven
                $data['persons'] = $this->Person_model->getPersons();
                //title van de het blad
                $data ['title'] = 'Person collection';

                //view laden
                $this->load->view('person', $data);
            }
            catch (Exception $e)
            {
                echo $e->getMessage();
            }

    }

    public function person_by_id($id)
    {

        $query = $this->Person_model->getPerson($id);

        $data['person'] = $query->result_array();

        $this->load->view('personview', $data);

    }
    // update database
    public function data_submitted()
    {
        try
        {
            //data dat moet toegevoegd worden aan de database
            $data = array(
                'id' => $this->input->post('u_id'),
                'name' => $this->input->post('u_name')
            );
            //fucntie aanropen uit het model persoon
            $this->Person_model->updatePerson($data);
            //view openen als de update gelukt is.
            $this->load->view('updatesucces');
        }
        catch (Exception $e )
        {
            echo $e;
        }


    }
}