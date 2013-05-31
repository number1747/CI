

<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../css/phpMM.css" rel="stylesheet" type="text/css" />
 </head>

 <body>
  <div id="header"><h1>林老師的書籍借閱記錄</h1></div>
  <div id="example">HELLO!</div>

  <div id="content">
    <h1>歡迎使用此系統</h1>
    <p>請輸入以下資料:</p>
 
 <?php if($errors){?>
 <div style="background:red:color:white;">
 <?php echo $errors?>   
 
<?php 
/*
echo form_open('book/post');


$field_array = array('name','studentID');

foreach($field_array as $field)
{
  echo '<p>' . $field.': ';
  echo form_input(array('name' => $field)) . '</p>';
}

// not setting the value attribute omits the submit from the $_POST array
  
 


		echo form_submit('', '登入'); 
echo form_close();

*/

?>
	 <?php  echo form_open('book/login');?>
 <h5>Username</h5>
<input type="text" name="name" value="" size="50" />

<h5>Password</h5>
<input type="text" name="studentID" value="" size="50" />



<div><input type="submit" value="Submit" /></div>

</form>
     
      
   
      <p>初次使用此系統,請先至下面申請學生帳戶! </p>
      <p>
        
        <a href="student5.html" title="學生">新增學生資料</a>
     
      </p>
     

   
    </form>
  </div>

  <div id="footer"></div>
 


 </body>
</html>
