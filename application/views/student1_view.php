

<html> 
 <head> 
  <link href="../../css/phpMM.css" rel="stylesheet" typ e="text/css" /> 
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 </head> 
 
 <body> 
  <div id="header"><h1>林老師的圖書記錄</h1></div> 
  <div id="example">Hello!</div> 
   <form action="student4.php" method="POST"> 
  <?php
   require '../../scripts/database_connection.php';
  mysql_query("SET NAMES 'utf-8'");
  
  foreach ($query->result_array() as $row)
  	
  	{
  		echo $row['studentid'];
  		echo $row['name'];
  	}
  
 
  
  /*$query = "SELECT * FROM studentrecord where studentid='$ID' and name = '$sname' " ;
  $result0 = mysql_query($query); 
if(!$result0){
    die("<p>Error in executing the SQL query " . $query . ": " .
        mysql_error() . "</p>");
  }
  $row0 = mysql_fetch_row($result0);
  if ($row0){
  
    echo'你已成功登入系統,以下是您的資料:</p>';
  } 
  else{
	  echo "<font size=\"5\" color=\"#FF0000\">以下資料資料為空白!!!  您的借書資料有誤,請再次檢查您輸入之資料!</font>";
  } 
 ?>
  
	  <p>Here's a record of what information you submitted:</p>
      <p>
      
      名字: <?php echo $row0[0] ; ?><br />
      學號: <?php echo $row0[1] ; ?><br />
      學校: <?php echo $row0[2] ; ?><br />
      系級: <?php echo $row0[3] ; ?><br />
      借閱紀錄:<br />
 <?php 
	 $sql = "SELECT * FROM newrecord where studentid='$ID' and  che like 'N'   " ;
     $result1 = mysql_query($sql); 
if(!$result1){
    die("<p>Error in executing the SQL query1 " . $query . ": " .
        mysql_error() . "</p>");
  }
  $row1 = mysql_fetch_row($result1);
  
  ?>    
  <form name="checkbox" action="student4.php" method="POST">  
 <table  border="3">

<tr>
      
<td>ID      </td> 
<td>書名      </td>       
<td>借書日期      </td>
<td>歸還期限      </td>
<td>借書許可      </td>
<td>checkbox      </td>
</tr>

<tr>
<?php 
for($j=0;$j<mysql_num_rows($result1);$j++)
{
 
 
 for ($k=0;$k<mysql_num_fields($result1);$k++)
 {
	 if($k==2){
	$bookid[]=mysql_result($result1,$j,$k);
  
	 }
    }
}



 $sp = sprintf("SELECT * FROM bookrecord where bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' OR bookid='%u' ",$bookid[0],$bookid[1],$bookid[2],$bookid[3],$bookid[4],$bookid[5],$bookid[6],$bookid[7],$bookid[8],$bookid[9],$bookid[10],$bookid[11] );
     $str="$sp";
	 $result2 = mysql_query($str); 
if(!$result2){
    die("<p>Error in executing the SQL query2 " . $query . ": " .
        mysql_error() . "</p>");
  }
  $row2 = mysql_fetch_row($result2);


for ($k=0;$k<mysql_num_rows($result1);$k++)
{
		echo "<TR>";
		
		$idnumber=mysql_result($result1,$k,0);
		
		echo "<TD>".mysql_result($result1,$k,0)."</TD>";
	 $book=mysql_result($result2,$k,1);
		echo "<TD>".$book."</TD>";
		
		echo "<TD>".mysql_result($result1,$k,3)."</TD>";
		echo "<TD>".mysql_result($result1,$k,4)."</TD>";
		echo "<TD>".mysql_result($result1,$k,6)."</TD>";
		  ?>
         <td> <input type="checkbox" value="<?php echo $idnumber;?>" name="idnumber[]"/></td>
 <?php
 
 echo "</TR>";
}
echo "</TABLE>"

	
  ?>
 
	
   
    </p>

如果借書許可通過(Y),麻煩至老師辦公室取書,謝謝!!
 </fieldset>
      <br />
    <fieldset class="center">
     <br />
          <input type="submit" value="確認還書" />
          <input type="reset" value="Clear and Restart" />
        </p>
     <fieldset class="center">
     </form>
      <p>
        
       <a href="../book/student2.php" title="借書">借閱其他書籍</a>
       
      </p>
      
   
      
  </fieldset>
  <div id="content"> 
  
 
  </div> 
 
  <div id="footer"></div> 
</body> 
</html>
