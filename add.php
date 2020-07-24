<?php
   session_start();
   $username='id14363596_register';
   $password='2~s*]6Y*jSVw=z3';
   $dsn="localhost";
   $dbname="id14363596_register";
   
   
   $conn=mysqli_connect($dsn,$username,$password,$dbname);
   $sql = "SELECT id, email_id FROM register"; 
   $email='';
   $password='';
   $errors=['email'=>'','password'=>'','final'=>''];
   $result = mysqli_query($conn, $sql);
   $quiz= mysqli_fetch_all($result,MYSQLI_ASSOC);
   
   if(isset($_POST['submit'])){
       //email
   if(empty($_POST['email'])){
       $errors['email']= 'An email is required <br/>';
   }else{
     $email =($_POST['email']);
     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['email']= "Please enter a valid email<br/>";   
     }
   }
   //password
   if(empty($_POST['password'])){
       $errors['password']='Password is required <br/>';
   }else{
    $password=($_POST['password']);}
    if($email!='' && $password!=''){
        $query="SELECT * FROM register WHERE email_id='$email' && password='$password'";
        $res=mysqli_query($conn,$query);
        $total=mysqli_num_rows($res);
        if($total==0){
            $errors['final']='Email Id or Password is Invalid';
        }
    }
   if(array_filter($errors)){
       //sdg;
   }else{
       $email=mysqli_real_escape_string($conn,$_POST['email']);
       $password=mysqli_real_escape_string($conn,$_POST['password']);
       $sql="INSERT INTO register(email_id,password) VALUES('$email','$password')";
       header("Location:quiz1.php");
       mysqli_free_result($res);
   }}
   
   mysqli_free_result($result);
   mysqli_close($conn);  
   
   ?>

<!DOCTYPE html>
<title>JUSTICE LEAGUE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<html>
<style>
  .bg {
  background-image: url("Assets/jsmain.gif");
  height: 100vh; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.formg{
    background-image:url("Assets/formg.jpg");
    height:70%;
    width:600px;
    padding:50px 50px ;
    opacity:0.8;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    position:absolute;
    background-repeat:no-repeat;
}
label{
    color:white;
}
input{
    color:white;
}
  </style>
  <body>
  <div class="bg">

  <section class="container white-text">
  <form class="formg" action="add.php" method="POST">
  <h4 class="center" style="margin-top:-5%;">JL Quizzingo</h4>
  <div class="red-text" style='height:10'><?php echo $errors['final'];?></div>
  <label>Email Address</label><br>
  <input type="text" name="email" value="<?php echo $email?>"><br>
  <div class="red-text"><?php echo $errors['email'];?></div>
  <label>Password</label><br>
  <input type="password" name="password" id="myInput" value="<?php echo $password ?>"><br>
  <div class="red-text" style='height:10'><?php echo $errors['password'];?></div>
 <br/> <div >
  <input type="submit" name="submit" value="Log In" class="btn  z-depth-0" style="padding:1px 30px;">
  <br><a href="signup.php" style="text-decoration:underline;">Don't have an account?Sign In</a>

  </form>
  </div>
  </section>
  </div> 

  </body>
  </html>