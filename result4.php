<?php
session_start();
include("question.php");
            $_SESSION['totalCorrect4_1']=0;
             $_SESSION['totalCorrect4_2']=0;
             $_SESSION['totalCorrect4_3']=0;
             $_SESSION['totalCorrect4_4']=0;
             //quiz4_1
  if(isset($_POST['quiz4_1'])){
    $_SESSION['answer4_1'] = $_POST['quiz4_1'];
    if ($_SESSION['answer4_1']== $quiz4[0][0]['correct']) { $_SESSION['totalCorrect4_1']+=40;}
    if ($_SESSION['answer4_1']!= $quiz4[0][0]['correct']) { $_SESSION['totalCorrect4_1']-=35;}}
    else{
        $_SESSION['answer4_1'] = 'NA';
        $_SESSION['totalCorrect4_1']=0;
    }
    //quiz4_2
    if(isset($_POST['quiz4_2'])){
        $_SESSION['answer4_2'] = $_POST['quiz4_2'];
        if ($_SESSION['answer4_2']== $quiz4[0][1]['correct']) { $_SESSION['totalCorrect4_2']+=40;}
        if ($_SESSION['answer4_2']!= $quiz4[0][1]['correct']) { $_SESSION['totalCorrect4_2']-=35;}}
        else{
            $_SESSION['answer4_2'] = 'NA';
            $_SESSION['totalCorrect4_2']=0;
        }
    //quiz4_3
    if(isset($_POST['quiz4_3'])){
        $_SESSION['answer4_3'] = $_POST['quiz4_3'];
        if ($_SESSION['answer4_3']== $quiz4[1][0]['correct']) { $_SESSION['totalCorrect4_3']+=40;}
        if ($_SESSION['answer4_3']!= $quiz4[1][0]['correct']) { $_SESSION['totalCorrect4_3']-=35;}}
        else{
            $_SESSION['answer4_3'] = 'NA';
            $_SESSION['totalCorrect4_3']=0;
        }
    //quiz4_4
    if(isset($_POST['quiz4_4'])){
        $_SESSION['answer4_4'] = $_POST['quiz4_4'];
        if ($_SESSION['answer4_4']== $quiz4[1][1]['correct']) { $_SESSION['totalCorrect4_4']+=40;}
        if ($_SESSION['answer4_4']!= $quiz4[1][1]['correct']) { $_SESSION['totalCorrect4_4']-=35;}}
        else{
            $_SESSION['answer4_4'] = 'NA';
            $_SESSION['totalCorrect4_4']=0;
        }
        $_SESSION['totalCorrect']+=($_SESSION['totalCorrect4_1']+$_SESSION['totalCorrect4_2']+
        $_SESSION['totalCorrect4_3']+$_SESSION['totalCorrect4_4']);

        ?>
        <html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
    .bg{
        background-image:url("Assets/res.gif");
        height:200vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
        .btn{
margin-left:20%;
  width: 60%;
  height: 60px;
  line-height: 40px;
  font-size: 14px;
  font-family: sans-serif;
  text-decoration: none;
  color: #fff;
  letter-spacing: 2px;
  text-align: center;
  position: relative;
  transition: all .35s;
}

.btn span{
  position: relative;
  z-index: 100;
}

.btn:after{
  position: absolute;
  content: "";
  top: 0;
  left: 0;
  width: 0;
  height: 100%;
  background: #ff003b;
  transition: all .35s;
}

.btn:hover{
  color: #fff;
}

.btn:hover:after{
  width: 100%;
}
.ins {
	  display: none; 
	  position: fixed; 
	  z-index: 1; 
	  padding-top: 100px; 
	  left: 0;
	  top: 0;
	  width: 100%; 
	  height: 100%; 
	  overflow: auto; 
	  background-color: #444444; 
	  background-color: rgba(0,0,0,0.4); 
	}
	.ins-content {
	  background-image:url('Assets/backs.jpg');
	  margin: auto;
	  background-position: center;
	  background-repeat: no-repeat;
	  background-size: cover;
	  padding: 20px;
	  border: 1px solid #888;
	  width: 50%;
	  min-height:50%;
	  border-radius:20px;
	  color:white;
	}
	.close {
	  color: #aaaaaa;
	  float: right;
	  font-size: 28px;
	  font-weight: bold;
	}
	
	.close:hover,
	.close:focus {
	  color: #000;
	  text-decoration: none;
	  cursor: pointer;
	}
	.new{
	  transition: all 0.5s;
	  cursor: pointer;
	  margin: 5px;
	  background-color:blue;
	  border-radius:20px;
	  padding:10px 60px;
	  color:white;
	  animation-name:mayam;
	  animation-duration:3s;
	}
	@keyframes mayam{
	  from{
	    opacity:0;
	  }
	  to {opacity:1;}
	}
	.new:hover{
	  background:none;
	}
	.navbar .navbar-brand {
	  font-size: 30px;
	}
	.navbar .nav-item {
	  padding: 10px 20px;
	}
	.navbar .nav-link {
	  font-size: 20px;
	  margin-left: 10px;
	}
	.fa-bars {
	  color: #007bff;
	  font-size: 30px;
	}
	input[type="radio"]:checked +label {
	color:blue;
	font-size:20px;
	}
	input:checked{
	    height:20px;
	    width:25px;
	}
	.container1{
	  display: flex;
	height:50%;
	  width: 100%;
	  padding: 4% 2%;
	  box-sizing: border-box;
	  height: 100vh;
	}
	
	.box {
	  flex: 1;
	  overflow: hidden;
	  transition: .5s;
	  margin: 0 1%;
	  box-shadow: 0 20px 30px rgba(0,0,0,.1);
	  line-height: 0;
	}
	
	.box > img {
	  width: 100%;
	  height: calc(100% - 30vh);
	  object-fit: cover; 
	  transition: .5s;
	}
	
	.box > span {
	  font-size: 3vh;
	  display: block;
	  text-align: center;
	  height: 6vh;
	  line-height: 2.6;
	}
	
	
	.box:hover { flex: 1 1 50%; }
	.box:hover > img {
	  width: 100%;
	  height: 100%;
	}
</style>

<body>
	<div class="bg">
	<nav class="navbar sticky-top navbar-expand-lg " style="background-color:black;">
		<div class="container">
			<img src="justice.jpg" width="25%">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto w-100 justify-content-end">
					<li class="nav-item">
						<div class="dropright show"> <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Know your Heroes
  </a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:black;width:300px;">
								<a class="nav-link" href="https://www.supermanhomepage.com/" traget="_blank">
									<img src="download.png">Flash</a>
								<a class="nav-link" href="https://www.supermanhomepage.com/" traget="_blank">
									<img src="amlogo.jpeg">Superman</a>
								<a class="nav-link" href="https://www.warnerbros.com/movies/batman-begins">
									<img src="bats.jpg">Batman</a>
								<a class="nav-link" href="https://www.aquamanmovie.com/trailer2" target="_blank">
									<img src="aqua.jpg">Aquaman</a>
								<a class="nav-link" href="https://www.warnerbros.com/movies/wonder-woman/" target="_blank">
									<img src="wwlogo.jpg">Wonder Woman</a>
							</div>
						</div>
					</li>
					<li class="nav-item"><a id="btn" href="#" class="nav-link"><span>Instructions</span></a>
						<div id="instruct" class="ins">
							<div class="ins-content"> <span class="close">&times;</span>
								<p>
									<h2 style="text-align:center;">Check Your Results</h2>
								<ul>	<li>No instructions</li><br>
                                                                        <li>Your profile does'nt load you anywhere.Just put up to cover space</li></ul>
	
									</p>
								</p>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropright show"> <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Privacy
  </a>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:black"> 
                                        
								<a class=" nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a>
                                                                <a class=" nav-link" href="#">Your Profile</a>							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<div class='bg'>
<div style="max-height:500px;max-width:700px;margin:auto auto;">
    <table class="table table-borderless  table-dark " >
        <thead>
            <tr >
                <th>Level</th>
                <th>Question</th>
                <th>Status</th>
                <th>Correct Answer</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
        <th rowspan='5' colspan='1'>Easy</th>
        <tr>
                    <td class="<?php
                    if($_SESSION['answer1_1']=='NA'){echo "bg-warning";}
                    else if($quiz1[0][0]['correct']==$_SESSION['answer1_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz1[0][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer1_1']=='NA'){echo "bg-warning";}
                    else if($quiz1[0][0]['correct']==$_SESSION['answer1_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer1_1'];
    
?></td>

    <td>
<?php echo $quiz1[1][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect1_1']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer1_2']=='NA'){echo "bg-warning";}
                    else if($quiz1[0][1]['correct']==$_SESSION['answer1_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz1[0][1]['question']?></td>
<td class="<?php
                    if($_SESSION['answer1_2']=='NA'){echo "bg-warning";}
                    else if($quiz1[0][1]['correct']==$_SESSION['answer1_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer1_2'];
    
?></td>
<?php echo "<td class='text-align:center;'>".$quiz1[0][1]['correct']."</td>"?>
<?php
        echo "<td>".$_SESSION['totalCorrect1_2']."</td>";
     
?></tr>

<tr>
                    <td class="<?php
                    if($_SESSION['answer1_3']=='NA'){echo "bg-warning";}
                    else if($quiz1[1][0]['correct']==$_SESSION['answer1_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz1[1][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer1_3']=='NA'){echo "bg-warning";}
                    else if($quiz1[1][0]['correct']==$_SESSION['answer1_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer1_3'];
    
?></td>

    <td>
<?php echo $quiz1[1][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect1_3']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer1_4']=='NA'){echo "bg-warning";}
                    else if($quiz1[1][1]['correct']==$_SESSION['answer1_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz1[1][1]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer1_4']=='NA'){echo "bg-warning";}
                    else if($quiz1[1][1]['correct']==$_SESSION['answer1_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer1_4'];
    
?></td>

    <td>
<?php echo $quiz1[1][1]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect1_4']."</td>";
    
?></tr>
  <th rowspan='5' colspan='1'>Medium</th>
        <tr>
                    <td class="<?php
                    if($_SESSION['answer2_1']=='NA'){echo "bg-warning";}
                    else if($quiz2[0][0]['correct']==$_SESSION['answer2_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz2[0][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer2_1']=='NA'){echo "bg-warning";}
                    else if($quiz2[0][0]['correct']==$_SESSION['answer2_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer2_1'];
    
?></td>

    <td>
<?php echo $quiz2[0][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect2_1']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer2_2']=='NA'){echo "bg-warning";}
                    else if($quiz2[0][1]['correct']==$_SESSION['answer2_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz2[0][1]['question']?></td>
<td class="<?php
                    if($_SESSION['answer2_2']=='NA'){echo "bg-warning";}
                    else if($quiz2[0][1]['correct']==$_SESSION['answer2_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer2_2'];
    
?></td>
<?php echo "<td class='text-align:center;'>".$quiz2[0][1]['correct']."</td>"?>
<?php
        echo "<td>".$_SESSION['totalCorrect2_2']."</td>";
     
?></tr>

<tr>
                    <td class="<?php
                    if($_SESSION['answer2_3']=='NA'){echo "bg-warning";}
                    else if($quiz2[1][0]['correct']==$_SESSION['answer2_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz2[1][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer2_3']=='NA'){echo "bg-warning";}
                    else if($quiz2[1][0]['correct']==$_SESSION['answer2_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer2_3'];
    
?></td>

    <td>
<?php echo $quiz2[1][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect2_3']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer2_4']=='NA'){echo "bg-warning";}
                    else if($quiz2[1][1]['correct']==$_SESSION['answer2_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz2[1][1]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer2_4']=='NA'){echo "bg-warning";}
                    else if($quiz2[1][1]['correct']==$_SESSION['answer2_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer2_4'];
    
?></td>

    <td>
<?php echo $quiz3[1][1]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect2_4']."</td>";
    
?></tr>
  <th rowspan='5' colspan='1'>Hard</th>
        <tr>
                    <td class="<?php
                    if($_SESSION['answer3_1']=='NA'){echo "bg-warning";}
                    else if($quiz3[0][0]['correct']==$_SESSION['answer3_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz3[0][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer3_1']=='NA'){echo "bg-warning";}
                    else if($quiz3[0][0]['correct']==$_SESSION['answer3_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer3_1'];
    
?></td>

    <td>
<?php echo $quiz3[0][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect3_1']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer3_2']=='NA'){echo "bg-warning";}
                    else if($quiz3[0][1]['correct']==$_SESSION['answer3_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz3[0][1]['question']?></td>
<td class="<?php
                    if($_SESSION['answer3_2']=='NA'){echo "bg-warning";}
                    else if($quiz3[0][1]['correct']==$_SESSION['answer3_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer3_2'];
    
?></td>
<?php echo "<td class='text-align:center;'>".$quiz3[0][1]['correct']."</td>"?>
<?php
        echo "<td>".$_SESSION['totalCorrect3_2']."</td>";
     
?></tr>

<tr>
                    <td class="<?php
                    if($_SESSION['answer3_3']=='NA'){echo "bg-warning";}
                    else if($quiz3[1][0]['correct']==$_SESSION['answer3_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz3[1][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer3_3']=='NA'){echo "bg-warning";}
                    else if($quiz3[1][0]['correct']==$_SESSION['answer3_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer3_3'];
    
?></td>

    <td>
<?php echo $quiz3[1][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect3_3']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer3_4']=='NA'){echo "bg-warning";}
                    else if($quiz3[1][1]['correct']==$_SESSION['answer3_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz3[1][1]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer3_4']=='NA'){echo "bg-warning";}
                    else if($quiz3[1][1]['correct']==$_SESSION['answer3_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer3_4'];
    
?></td>

    <td>
<?php echo $quiz3[1][1]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect3_4']."</td>";
    
?></tr>
  <th rowspan='5' colspan='1'>Impossible</th>
        <tr>
                    <td class="<?php
                    if($_SESSION['answer4_1']=='NA'){echo "bg-warning";}
                    else if($quiz4[0][0]['correct']==$_SESSION['answer4_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz4[0][0]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer4_1']=='NA'){echo "bg-warning";}
                    else if($quiz4[0][0]['correct']==$_SESSION['answer4_1']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer4_1'];
    
?></td>

    <td>
<?php echo $quiz4[0][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect4_1']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer4_2']=='NA'){echo "bg-warning";}
                    else if($quiz4[0][1]['correct']==$_SESSION['answer4_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz4[0][1]['question']?></td>
<td class="<?php
                    if($_SESSION['answer4_2']=='NA'){echo "bg-warning";}
                    else if($quiz4[0][1]['correct']==$_SESSION['answer4_2']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer4_2'];
    
?></td>
<?php echo "<td class='text-align:center;'>".$quiz4[0][1]['correct']."</td>"?>
<?php
        echo "<td>".$_SESSION['totalCorrect4_2']."</td>";
     
?></tr>

<tr>
                    <td class="<?php
                    if($_SESSION['answer4_3']=='NA'){echo "bg-warning";}
                    else if($quiz4[1][0]['correct']==$_SESSION['answer4_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz4[1][0]['question']?></td>
<td  class="<?php
                    if(($_SESSION['answer4_3'])=='NA'){echo "bg-warning";}
                    else if($quiz4[1][0]['correct']==$_SESSION['answer4_3']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer4_3'];
    
?></td>

    <td>
<?php echo $quiz4[1][0]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect4_3']."</td>";
    
?></tr>
<tr>
                    <td class="<?php
                    if($_SESSION['answer4_4']=='NA'){echo "bg-warning";}
                    else if($quiz4[1][1]['correct']==$_SESSION['answer4_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>"><?php echo $quiz4[1][1]['question']?></td>
<td  class="<?php
                    if($_SESSION['answer4_4']=='NA'){echo "bg-warning";}
                    else if($quiz4[1][1]['correct']==$_SESSION['answer4_4']){echo "bg-success ";}
                    else{echo "bg-danger ";}?>">
<?php
        echo $_SESSION['answer4_4'];
    
?></td>

    <td>
<?php echo $quiz4[1][1]['correct']?></td>
<?php
        echo "<td>".$_SESSION['totalCorrect4_4']."</td>";
    
?></tr>
<tr>
<td colspan="2" ></td>
<td ></td>
<td colspan="1">Your Score</td>
<td><?php echo $_SESSION['totalCorrect']; ?></td>
</tr>
<tbody>
</table>
<div style="">
<button class='btn' style="color:white;background:black"onClick="<?php session_destroy();?>">
<a href='add.php' style='color:white'><span>Log out</span></a></button></div>
</div>
</div>
</div>
<script>
		var modal = document.getElementById("instruct");
		var btn = document.getElementById("btn");
		
		var span = document.getElementsByClassName("close")[0];
		 
		btn.onclick = function() {
		  modal.style.display = "block";
		}
		span.onclick = function() {
		  modal.style.display = "none";
		}
		window.onclick = function(event) {
		  if (event.target == modal) {
		    modal.style.display = "none";
		  }
		}
	</script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>