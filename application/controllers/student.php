<?php

class Student extends CI_Controller {

  function __construct()
  {
    parent::__construct(); 
  }
  
  function index()
  {
    // display information for the view
    $data['title'] = "Classroom: Home Page";
    $data['headline'] = "Welcome to the Classroom Management System";
    $data['include'] = 'student_index';

    $this->load->view('template', $data);
  }
  function add()
  {
  	$this->load->helper('form');
  
  	// display information for the view
  	$data['title'] = "Classroom: Add Student";
  	$data['headline'] = "Add a New Student";
  	$data['include'] = 'student_add';
  
  	$this->load->view('template', $data);
  }
  function create()
  {
  	$this->load->helper('url');
  
  	$this->load->model('MStudent','',TRUE);
  	$this->MStudent->addStudent($_POST);
  	redirect('student/add','refresh');
  }
}

/* End of file student.php */
/* Location: ./application/controllers/student.php */