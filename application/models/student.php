<?php
class Student extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function about_insert($data)
    {
        $this->db->insert('profile', $data);
    }

    function abouthome_insert($data1)
    {
        $this->db->insert('home', $data1);
    }

    function connect_insert($data2)
    {
        $this->db->insert('cons', $data2);
    }

    function work_insert($data3)
    {
        $this->db->insert('work', $data3);
    }

    function show()
    {
        $query = $this->db->get('profile');
        return $query->result();
    }

    function check_login($stu_id)
    {
        // $this->db->select('email,password');
        $this->db->where('stu_id', $stu_id);
        $result = $this->db->get('profile');
        $message = '';

        if ($result->num_rows() > 0) {
            $message = true;

            // $this->load->view('list');

        } else {
            $message = false;
        }
        $data = array(
            "message" => $message, "data" => $result->result()

        );
        return $data;
    }

    function model_search($search)
    {
        $this->db->like('stu_id', $search);
        $result = $this->db->get('profile');
        return $result->result();
    }
}
