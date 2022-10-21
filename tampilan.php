<?php 
include 'koneksi.php'; 
 
require 'simpan.php'; 
if(isset($_SESSION["id"])){ 
 header("Location: tampilan.php"); 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
 <link rel="stylesheet" href="style.css"> 
</head> 
<body> 
<div class="main" id="container">  	
		
			<div class="signup" >
				<form  action="simpan.php" method="post">
					<label id="signup">Sign up</label>
					<input type="text" name="fullname" placeholder="Fullname" />
					<input type="text" name="username" placeholder="Username" /> 
     <input type="password" name="password" placeholder="Password" /> 
     <button name="simpan" style="margin-top: 20px;" onclick="sumbitData();">Sign Up</button> 
    
				</form>
			</div>

			<div class="login">
				<form action="#">
				<a href="#labell">	<label id="labell">Login</label></a>
					<input type="text" name="username" placeholder="Username" id="nama"/> 
					<input type="password" name="pswd" placeholder="Password" required="">
          <a href="game2.html"><button onclick="sumbitData()">Sign In</button></a> 
          <span>or use your account <a href="signup" id="aref">Sign Up</a>  </span>
				
				</form>
			</div>
	</div>
    <!-- <div class="signup" id="container"> 
      <form action="simpan.php" method="post" > 
      <label>Sign Up</label> 
      
      <input type="text" name="fullname" placeholder="Fullname" /> 
      <input type="text" name="username" placeholder="Username" /> 
      <input type="password" name="password" placeholder="Password" /> 
      <button name="simpan" style="margin-top: 20px;" onclick="sumbitData();">Sign Up</button> 
      <span>or use your email for registration</span> 
      </form> 
    
    <div class="login"> 
      <form action="#"> c
      <label>Login</label> 
        
      <input type="text" name="username" placeholder="Username" id="nama"/> 
      <input type="password" name="password" placeholder="Password" /> 
      <span>or use your account</span>
      
      <a href="game2.html"><button onclick="sumbitData()">Sign In</button></a> 
      <a href="#">Forgot your password?</a> 
        <button class="ghost" id="signIn" >Sign In</button> 
        
      
    
        <button class="ghost" id="signUp">Sign Up</button> 
      </form> 
    </div> 
    <div class="overlay-container"> 
      <div class="overlay"> 
      
      
      </div> 
      </div> 
    </div> 
    </div>  -->
 
   
 
   <script> 
    const signUpButton = document.getElementById('signUp'); 
   const signInButton = document.getElementById('signIn'); 
   const container = document.getElementById('container'); 
 
   signUpButton.addEventListener('click', () => { 
    container.classList.add("right-panel-active"); 
   }); 
 
   signInButton.addEventListener('click', () => { 
    container.classList.remove("right-panel-active"); 
   }); 
 
   // //validasi 
   // var eror =document.getElementById("eror_username"); 
   // if(nama.value.length < 1){ 
   //  eror_username.style.display ="inline-block" 
   //  nama.style.border="1px solid blue" 
   //  return false; 
   // } 
 
    
   </script> 
</body> 
</html>