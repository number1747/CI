<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('users','',TRUE);
 }

 function index()
 {
   //This method will have the credentials validation
   $this->load->library('form_validation');

   $this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
   $this->form_validation->set_rules('studentid', 'studentid', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.&nbsp; User redirected to login page
     $this->load->view('login_view');
   }
   else
   {
     //Go to private area
     redirect('home', 'refresh');
   }

 }

 function check_database($studentid)
 {
   //Field validation succeeded.&nbsp; Validate against database
   $name = $this->input->post('name');
   $studentid = $this->input->post('studentid');
   //query the database
   $result = $this->users->login($name, $studentid);
  //取出MODEL之RESULT值
   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
       		
         'studentid' => $row->studentid,
         'name' => $row->name,
       		'school' => $row->school,
       		'department' => $row->department,
       		'grade' => $row->grade
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid name or studentid');
     return false;
   }
 }
 
 
}
?>
