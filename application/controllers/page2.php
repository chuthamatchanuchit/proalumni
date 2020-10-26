<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page2 extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Student');
  }

  public function index()
  {
    $this->load->view("enroll");
  }

  public function enroll()
  {
    // $studentid =  $this->input->post("la");
    // $endstudent =  $this->input->post("pe");
    // echo $studentid."</br>";
    // echo $endstudent;


    $data = array(

      'stu_id' => $this->input->post("stu_id"),
      'name' => $this->input->post("name"),
      'lastname' => $this->input->post("lastname"),
      'gender' => $this->input->post("gender"),
      'p_num' => $this->input->post("p_num"),
      'date' => $this->input->post("date"),
      's_pe' => $this->input->post("s_pe"),
      'session' => $this->input->post("session"),
      'password' => $this->input->post("password"),

    );

    $data1 = array(

      'h_number' => $this->input->post("h_number"),
      'swine' => $this->input->post("swine"),
      'h_dis' => $this->input->post("h_dis"),
      'h_per' => $this->input->post("h_per"),
      'hpro' => $this->input->post("hpro"),
      'h_code' => $this->input->post("h_code"),
    );

    $data2 = array(

      'email' => $this->input->post("email"),
      'phone' => $this->input->post("phone"),
      'facebook' => $this->input->post("facebook"),
      'line' => $this->input->post("line"),
    );

    $data3 = array(

      'w_ps' => $this->input->post("w_ps"),
      'w_name' => $this->input->post("w_name"),
      'w_code' => $this->input->post("w_code"),
      'w_mu' => $this->input->post("w_mu"),
      'w_tum' => $this->input->post("w_tum"),
      'w_per' => $this->input->post("w_per"),
      'w_por' => $this->input->post("w_por"),
      'w_pai' => $this->input->post("w_pai"),

    );

    $this->Student->about_insert($data);
    $this->Student->abouthome_insert($data1);
    $this->Student->connect_insert($data2);
    $this->Student->work_insert($data3);
    redirect('page2/show_re');
  }

  public function show_index()
  {
    $this->load->view("index");
  }

  public function show_re()
  {
    $this->load->view("ok");
  }


  public function showall()
  {
    $data['query'] = $this->Student->showall();
    // print_r($data);
    $this->load->view("show", $data);
  }

  public function show()
  {
    $id = $this->session->userdata('id');
    $data['query'] = $this->Student->show($id);
    // print_r($data);
    $this->load->view("profile", $data);
  }

  public function show_login()
  {
    $this->load->view("login");
  }

  public function login()
  {
    // echo 'test1';
    if ($this->input->post('stu_id')) {
      // echo 'test2';
      $stu_id = $this->input->post('stu_id');
      $password = $this->input->post('password');
      $check = $this->Student->check_login($stu_id, $password);

      if ($check['message'] == true) {
        // echo 'test3';
        $array = json_decode(json_encode($check['data']), true);
        $this->session->set_userdata($array[0]);

        $data['query'] = $this->Student->showall();
        redirect('page2/showall', $data);
        // $this->load->view('show', $data);
        // print_r($stu_id);
      } else {
        redirect('page2/index');
      }
    }
  }

  public function logout()
  {
    $this->session->sess_destroy();
    redirect('page2/index');
  }

  public function search()
  {
    $search = $this->input->post('search');
    $data['query'] = $this->Student->model_search($search);
    $this->load->view('search', $data);
  }

  public function profile()
  {
    $id = $this->session->userdata('id');
    $data['query'] = $this->Student->show($id);

    $this->load->view("profile", $data);
  }

  public function editprofile()
  {
    $id = $this->session->userdata('id');
    $data['query'] = $this->Student->show($id);

    $this->load->view("editprofile", $data);
  }

  public function edit()
  {
    $data = array(

      'stu_id' => $this->input->post("stu_id"),
      'name' => $this->input->post("name"),
      'lastname' => $this->input->post("lastname"),
      'gender' => $this->input->post("gender"),
      'p_num' => $this->input->post("p_num"),
      'date' => $this->input->post("date"),
      's_pe' => $this->input->post("s_pe"),
      'session' => $this->input->post("session"),
      'password' => $this->input->post("password"),

    );

    $data1 = array(

      'h_number' => $this->input->post("h_number"),
      'swine' => $this->input->post("swine"),
      'h_dis' => $this->input->post("h_dis"),
      'h_per' => $this->input->post("h_per"),
      'hpro' => $this->input->post("hpro"),
      'h_code' => $this->input->post("h_code"),
    );

    $data2 = array(

      'email' => $this->input->post("email"),
      'phone' => $this->input->post("phone"),
      'facebook' => $this->input->post("facebook"),
      'line' => $this->input->post("line"),
    );

    $data3 = array(

      'w_ps' => $this->input->post("w_ps"),
      'w_name' => $this->input->post("w_name"),
      'w_code' => $this->input->post("w_code"),
      'w_mu' => $this->input->post("w_mu"),
      'w_tum' => $this->input->post("w_tum"),
      'w_per' => $this->input->post("w_per"),
      'w_por' => $this->input->post("w_por"),
      'w_pai' => $this->input->post("w_pai"),

    );

    $id = $this->input->post('id');
    $this->session->set_userdata($data, $data1, $data2, $data3);
    $this->Student->update($data, $id);
    $this->Student->update1($data1, $id);
    $this->Student->update2($data2, $id);
    $this->Student->update3($data3, $id);
    redirect('page2/profile');
  }
}
