
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Home extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }
//把學生資料儲存至SESSION
 function index()
 {
   if($this->session->userdata('logged_in'))
   {
     $session_data = $this->session->userdata('logged_in');
     $data['name'] = $session_data['name'];
     $data['studentid'] = $session_data['studentid'];
     $data['school'] = $session_data['school'];
     $data['department'] = $session_data['department'];
     $data['grade'] = $session_data['grade'];
     $this->load->view('home_view', $data);
   }
   else
   {
     //If no session, redirect to login page
     redirect('book', 'refresh');
   }
 }
//登出清除session
 function logout()
 {
   $this->session->unset_userdata('logged_in');
   session_destroy();
   redirect('home', 'refresh');
 }

}

?>

