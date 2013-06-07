
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class book extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('users','',TRUE);
   $this->load->helper('url');
 }

 function index()
 {
 	//接收form值
   $this->load->helper(array('form'));
   $this->load->view('login_view');
 }

//取出model之QUERY
function bookrecord()
{
	$this->load->library('table');
	$this->load->model('users','',TRUE);
	//$this->load->library('table');
	//$result = $this->user->bookrecord();
	$data['query'] = $this->users->bookrecord();
	//$result = $this->users->bookrecord();
	//var_dump($data);
	
	/*
	if($result)
	{
		$data['query'] = array();
		foreach($result as $row)
		{
			$data['query'] = array(
					 
					'bookid' => $row->bookid,
					'book' => $row->book,
					'author' => $row->author,
					'borrow' => $row->borrow,
					
			);
			//$this->session->set_userdata('logged_in', $sess_array);
		}
		//return TRUE;
	}
	else
	{
		 die("<p>Error in executing the SQL query " . $query . ": " .
        mysql_error() . "</p>");
	}
	*/
	//$data['query']=$this->db->query($query);
	
	$this->load->view('student2_view', $data);
	

}
}

?>