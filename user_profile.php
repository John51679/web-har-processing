<?php session_start();?>
<html>

<head>
	<title>User Profile</title>
	<link rel = "stylesheet" type = "text/css" href = "user_profile.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

<div class = "profile_info">
<h1 id ="info-id">User Information:</h1>
<form id="profile_form">
	<p id = "username">
		<label>Username:</label><br>
		<input type="text" id="username_text" name="username_text" readonly value= <?php echo $_SESSION['username']; ?> />
	</p>
	<p id = "password">
		<label>Password:</label><br>
		<input type="text" id="password_text" name="password_text" readonly value= <?php echo $_SESSION['password']; ?> />
	</p>
</form>

	<p id = "last_upload">
		<label>Last upload date:</label><br>
		<input type="text" id="last_upload" name="last_upload" readonly value= <?php echo $_SESSION["last_upload"]; ?> />
	</p>
	<p id = "numberOfUploads">
		<label>Number of uploads:</label><br>
		<input type="text" id="numberOfUploads" name="numberOfUploads" readonly value= <?php echo $_SESSION["count"]; ?> />
	</p>


<div class ="change_save_buttons">
<button id="chbut" name="chbut">Change Username/Password</button>
<button id="savebut" name="savebut" style="display: none;">Save Changes</button>
</div>
</div>
<script>
$(document).ready(function()
{
 $('#chbut').click(function()
 {
   $("input[name='username_text']").removeAttr("readonly");  
   $("input[name='password_text']").removeAttr("readonly");  
   $("button[name = 'chbut']").attr('style','display: none;');
   $("button[name='savebut']").removeAttr("style");  
   
 });
 });
 
 
  $('#savebut').click(function()
 {
	$.ajax({
		type: "POST",
		url: "updateprof.php",
		data: { username: profile_form.username_text.value , password: profile_form.password_text.value  }
  }).done(function( msg ) {
  console.log(msg );})
   $("input[name='username_text']").prop('readonly',true);  
   $("input[name='password_text']").prop('readonly',true);
   $("button[name = 'savebut']").attr('style','display: none;');
   $("button[name='chbut']").removeAttr("style");  
    
 });

 </script>
</body>
</html>

