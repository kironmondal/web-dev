<?php
  include('layout_manager.php');
  include('content_function.php');
?>
<html>
<head><title>Inki's php forum tutorial</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet"/>
<body>
   <div class="pane">
      <div class="header"><h1><a href="/forum-tutorial">ONLINE QUESTION ANSWER PLATFORM</a></h1></div>
	  <div class="loginpane">
          <?php 
		       session_start();
		      if(isset($_SESSION['username']))
			  {
				  logout();
				  
			  }	else{
				  if(isset($_GET['status'])){
					  if($_GET['status'] =='reg_success'){
						  echo "<h1 style='color: green;'>new user registered successfully!</h1>";
					  }else if($_GET['status'] == 'login_fail') {
						  echo "<h1 style='color: red;'>invalid username or password</h1>";
					  }
				  }
				  loginform();
			  }		  
		  ?>
	  </div>
	  <div class="forumdesc">
	   <p>WELCOME TO THE ONLINE DISCUSSION TABLE</P>
      </div
	  
      <div class="content">
           <?php
                 if (isset($_SESSION['username'])) {
					 echo "<form action='/forum-tutorial/addnewtopic.php?cid=".$_GET['cid']."&scid=".$_GET['scid']."'
					       method='POST'>
						   <p>Title: </p>
						   <input type='text' name='topic' id='topic' size='100' />
						   <p>Content: </p>
						   <textarea id='content' name='content'></textarea><br />
						   <input type='submit' value='add new post' /></form>";
						   
				 } else {
					 echo "<p>please login 1st or <a href='/forum-tutorial/register.html'</a> to register</p>";
				 }
		   ?>
      </div>
   </div>	  
</body>
</html>