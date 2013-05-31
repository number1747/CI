<?php

Class user extends CI_Model
{
	//資料庫登入確認
 function login($name,$studentid )
{
   $this -> db -> select('studentid, name,school,department,grade');
   $this -> db -> from('studentrecord');
   $this -> db -> where('name', $name);
   $this -> db -> where('studentid', $studentid);
   $this -> db -> limit(1);
$query = $this -> db -> get();

   if($query -> num_rows() == 1)

   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
}
//挑出書單
function bookreccord( )
{
	
	
	
	$query = $this->db->query("select * from bookrecord where borrow like 'Y' ");
	
	
		return $query->result();
	

}
?>
