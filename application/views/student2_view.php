
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
 </head>
 <body>
   <h1>林老師的書籍借閱記錄</h1>
   <h2>Welcome <?php echo $name; ?>!</h2>
     名字: <?php echo $name ; ?><br />
     學號: <?php echo $studentid ; ?><br />
     學校: <?php echo $school ; ?><br />
     科系: <?php echo $department ; ?><br />
     年級: <?php echo $grade ; ?><br />
   <a href="home/logout">Logout</a>
   
   <form name="checkbox" action="student3.php" method="POST">
<table  border="1">

<tr>

<td>bookid       </td>

<td>書名  </td>

<td>作者</td>
<td>在庫  </td>
<td>checkbox      </td>
</tr>

<?php
for($j=0;$j<mysql_num_rows($result0);$j++)
{
 echo "<TR>";
 
 for ($k=0;$k<mysql_num_fields($result0);$k++)
 {
	 if($k==0){
	$bookid=mysql_result($result0,$j,$k);}
   echo "<TD>".mysql_result($result0,$j,$k)."</TD>";
    }
	
	
  ?> 
<td> <input type="checkbox" value="<?php echo $bookid;?>" name="bookrecordid[]"/></td>

 <?php
 
 echo "</TR>";
}
echo "</TABLE>"
  ?>
   
   <p>
        
      
       
      </p>
 </body>
</html>


