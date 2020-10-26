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

    function showall()
    {
        // $result = $this->db->select('*')
        //     ->from('profile')

        //     ->join('home', 'home.id = profile.id')
        //     ->join('cons', 'cons.id = profile.id')
        //     ->join('work', 'work.id = profile.id')

        //     ->where('profile.id')
        //     ->get();
        // return $result;
        $query = $this->db->get('profile');
        return $query;
    }

    function show($id)
    {
        $result = $this->db->select('*')
            ->from('profile')

            ->join('home', 'home.id = profile.id')
            ->join('cons', 'cons.id = profile.id')
            ->join('work', 'work.id = profile.id')

            ->where('profile.id', $id)
            ->get();
        return $result;
    }

    function check_login($stu_id, $password)
    {
        // $this->db->select('email,password');
        $this->db->where('stu_id', $stu_id);
        $this->db->where('password', $password);
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
        $this->db->or_like('name', $search);
        $this->db->or_like('s_pe', $search);
        $this->db->or_like('session', $search);
        $this->db->or_like('hpro', $search);

        $this->db->join('home', 'home.id = profile.id');

        $result = $this->db->get('profile');
        return $result->result();
    }

    function update($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('profile', $data);
    }

    function update1($data1, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('home', $data1);
    }

    function update2($data2, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('con', $data2);
    }

    function update3($data3, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('work', $data3);
    }
}
