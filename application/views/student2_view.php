<?php
$this->load->library('session');
$this->load->helper('array');
$session_data = $this->session->userdata('logged_in');
$name = $session_data['name'];
$studentid = $session_data['studentid'];
$school = $session_data['school'];
$department = $session_data['department'];
$grade = $session_data['grade'];

/*
 $name = $this->session->userdata('logged_in','name');
$studentid = $this->session->userdata('logged_in','studentid');
$school = $this->session->userdata('school');
$department = $this->session->userdata('department');
$grade = $this->session->userdata('grade');
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Simple Login with CodeIgniter - Private Area</title>
</head>
<body>
	<h1>林老師的書籍借閱記錄</h1>
	<h2>
		Welcome
		<?php echo $name; ?>
		!
	</h2>
	名字:
	<?php echo $name ; ?>
	<br /> 學號:
	<?php echo $studentid ; ?>
	<br /> 學校:
	<?php echo $school ; ?>
	<br /> 科系:
	<?php echo $department ; ?>
	<br /> 年級:
	<?php echo $grade ; ?>
	<br />






	<?php
	//var_dump($query);
	/*
	 foreach ($query as $row)
	 {
	echo"</TR>";
	echo "<TD>".$row->bookid."<TD>";
	echo "<TD>".$row->book."<TD>";
	echo "<TD>".$row->author."<TD>";
	echo "<TD>".$row->borrow."<TD>";
	}
	*/
	$this->load->library('table');
	$this->load->helper('form');
	echo form_open('book/check');

	$this->table->set_heading("<td>".'bookid'."</td>", "<td>".'書名'."</td>","<td>". '作者'."</td>", "<td>".'在庫'."</td>","<td>". 'checkbox'."</td>");
	foreach ($query as $row)
	{
		$borrowed = FALSE;
		if ($row->borrow == 'Y')
		{
			$borrowed = TRUE;
		}
		$borrow_check = form_checkbox('borrow', 'Y', $borrowed);
		
		//$this->table->add_row("<td>".$row->bookid."</td>","<td>".$row->book."</td>", "<td>".$row->author."</td>","<td>".$row->borrow."</td>");
			
		$this->table->add_row("<td>".$row->bookid."</td>","<td>".$row->book."</td>", "<td>".$row->author."</td>","<td>".$borrow_check."</td>");
			
			
		//$this->table->add_row('Mary', 'Red', 'Large');
		//$this->table->add_row('John', 'Green', 'Medium');
	}
	echo $this->table->generate();

	echo form_submit('submit', 'Save');
	
	echo form_close();
	/*

	for($j=0;$j<mysql_num_rows($query);$j++)
	{
	echo "<TR>";

	for ($k=0;$k<mysql_num_fields($query);$k++)
	{
	if($k==0){
	$bookid=mysql_result($query,$j,$k);}
	echo "<TD>".mysql_result($query,$j,$k)."</TD>";
	}


	?>
	<td> <input type="checkbox" value="<?php echo $bookid;?>" name="bookrecordid[]"/></td>

	<?php

	echo "</TR>";
	}
	echo "</TABLE>"
	?>
	</form>
	*/
	?>
	<a href="home/logout">Logout</a>
</body>
</html>


