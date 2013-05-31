
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
   <title>林老師的圖書庫</title>
 </head>
 <body>
   <h1>歡迎使用此系統</h1>
   <p>請輸入以下資料</p>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
     <label for="name">name:</label>
     <input type="text" size="20" id="name" name="name"/>
     <br/>
     <label for="studentid">studentid:</label>
     <input type="studentid" size="20" id="studentid" name="studentid"/>
     <br/>
     <input type="submit" value="Login"/>
   </form>
 </body>
</html>

