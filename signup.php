<?php 
  $db = mysqli_connect('localhost', 'id14363596_register', '2~s*]6Y*jSVw=z3', 'id14363596_register');

  
  $errors=['name'=>'','email'=>'','password'=>''];
  if (isset($_POST['submit'])){
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
    $name = "";
  $email = "";
  $password="";
    $sql = "SELECT id, email_id,name,password FROM register";
    $sql_n = "SELECT * FROM register WHERE name='$name'";
  	$sql_e = "SELECT * FROM register WHERE email_id='$email'";
  	$res_n = mysqli_query($db, $sql_n);
    $res_e = mysqli_query($db, $sql_e);
    $result = mysqli_query($db, $sql);
    $register= mysqli_fetch_all($result,MYSQLI_ASSOC);
      
    if (mysqli_num_rows($res_n) > 0) {
  	  $errors['name'] = "Username already exists"; 	
    }if(empty($_POST['name'])){
        $errors['name']= "A name is required <br/>";
    }
    if(mysqli_num_rows($res_e) > 0){
        $errors['email'] = "Email already exists"; 
    }else if(empty($_POST['email'])){
        $errors['email']= 'An email is required <br/>';
    }else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email=($_POST['email']);
        $errors['email']= "Please enter a valid email<br/>";
    }
    if(empty($_POST['password'])){
        $errors['password']= 'A password is required <br/>';
    }
   if(array_filter($errors)){
       //;
    }else{
           $email=mysqli_real_escape_string($db,$_POST['email']);
           $password=mysqli_real_escape_string($db,$_POST['password']);
           $name=mysqli_real_escape_string($db,$_POST['name']);
           $sql = "INSERT INTO  register (name, email_id, password) 
                    VALUES ('$name', '$email', '$password')";
           $insert = $db->query($sql);
           alert("Account successfully created");
           header("Location:add.php");
      }
mysqli_free_result($result);
mysqli_close($db); 
  	
}
?>
<!DOCTYPE html>
<html>
<style>
  .bg {
  background-image: url("Assets/jsign.gif");
  height: 100vh; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.formg{
    background-image:url("Assets/jslogo.jpg");
    height:70%;
    width:850px;
    padding:50px 50px ;
    opacity:0.8;
    top:60%;
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

<head>
  <title>JUSTICE LEAGUE</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="bg">

<section class="container white-text">
<form class="formg" action="signup.php" method="POST">
<h4 class="center" style="margin-top:-5%;">JL Quizzingo</h4>
<label>Name</label>
<input type="text" name="name" value="<?php  echo htmlspecialchars ($name)?>"><br>
<div class="red-text" style='height:10'><?php  echo htmlspecialchars ($errors['name']);?></div>
<label>Email Address</label><br>
<input type="text" name="email" value="<?php  echo htmlspecialchars ($email)?>"><br>
<div class="red-text"><?php  echo htmlspecialchars ($errors['email']);?></div>
<label>Password</label><br>
<input type="password" name="password" id="myInput" value="<?php  echo htmlspecialchars ($password )?>"><br>
<div class="red-text" style='height:10'><?php  echo htmlspecialchars ($errors['password']);?></div>
<br/> <div >
<input type="submit" name="submit" value="Log In" class="btn  z-depth-0" style="padding:1px 30px;">
<br><a href="add.php" style="text-decoration:underline;">Already have an account?Log In</a>

</form>
</div>
</section>
</div> 
</body>
</html>