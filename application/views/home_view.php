
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
   
   
   
   <p>
        
       <a href="book/bookrecord" title="借書">借閱其他書籍</a>
       
      </p>
 </body>
</html>


