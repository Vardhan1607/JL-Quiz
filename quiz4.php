<?php
include('question.php');

?>
<!DOCTYPE html>
<html>
   
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
   <style>
      .bg{
      background-image:url("Assets/bcks.jpg");
      height:100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
      .bg1{
      background-image:url("Assets/bg4.gif");
      height:100vh;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      }
      .card{
          border-radius:10px;
      }
      img{
          border-radius:10px;
      }
input[type="radio"]:checked +label {
color:blue;
font-size:20px;
}
input:checked{
    height:20px;
    width:25px;
}
.button {
  border-radius: 4px;
  background-color: green;
  border: none;
  text-align: center;
  font-size: 20px;
  padding: 15px;
  width: 120%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  border-radius:10px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color:white
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.anim1{
animation-name:drive1;
animation-duration:2s;
animation-fill-mode:reverse;
}
@keyframes drive1 {
  from {
    transform:translate(3000px,3000px);
    opacity:0;
  } 
  to {
    opacity:1;
    transform:translate(5%,5%);
    color: black;
  }
}
.anim2{
animation-name:drive2;
animation-duration:2s;
animation-fill-mode:reverse;
}
@keyframes drive2 {
  from {
    transform:translate(-3000px,3000px);
    opacity:0;
  } 
  to {
    opacity:1;
    transform:translate(5%,5%);
    color: black;
  }
}
.anim3{
animation-name:drive3;
animation-duration:2s;
animation-fill-mode:reverse;
}
@keyframes drive3 {
  from {
    transform:translate(3000px,3000px);
    opacity:0;
  } 
  to {
    opacity:1;
    transform:translate(5%,5%);
    color: black;
  }
}
.anim4{
animation-name:drive4;
animation-duration:2s;
animation-fill-mode:reverse;
}
@keyframes drive4 {
  from {
    transform:translate(-3000px,3000px);
    opacity:0;
  } 
  to {
    opacity:1;
    transform:translate(5%,5%);
    color: black;
  }
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
.new{
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
  background-color:red;
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
  color:white;
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
.container1{
  display: flex;
  height:60%;
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
  height: calc(100% - 35vh);
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


.box:hover { flex: 1 1 35%; }
.box:hover > img {
  width: 100%;
  height: 100%;
}

    </style>
    <body>
    <div class="bg1">
    <h1 style="text-align:center;font-family:courier new;color:white;">Unite the Seven</h1>
    <h5 style="text-align:center;font-family:courier new;color:white;">(Your Quiz Awaits you,Scroll Down)</h5>
<div class="container1">
  <div class="box">
    <img src="main3/jill1.jpg" style="border-radius:10px;">
    <span style="color:white;font-family:courier new;
">Superman</span>
  </div>
  <div class="box">
    <img src="main3/jl2.jpg" style="border-radius:10px;">
    <span style="color:white; font-family:courier new;
">Batman</span>
  </div>
  <div class="box">
    <img src="main3/jl3.jpg" style="border-radius:10px;">
    <span style="color:white; font-family:courier new;
">Green Lartern</span>
  </div>
  <div class="box">
    <img src="main3/jl4.jpg" style="border-radius:10px;">
    <span style="color:white ;font-family:courier new;">Aquaman</span>
  </div>
  <div class="box">
    <img src="main3/jl5.jpg" style="border-radius:10px;">
    <span style="color:white ;font-family:courier new;">Flash</span>
  </div>
  
  <div class="box">
    <img src="main3/jl6.jpg" style="border-radius:10px;">
    <span style="color:white ;font-family:courier new;">Wonder Woman</span>
  </div>
  <div class="box">
    <img src="main3/jl7.jpg" style="border-radius:10px;">
    <span style="color:white ;font-family:courier new;">Shazam</span>
  </div>
  </div>
</div>
   
   
   <nav class="navbar sticky-top navbar-expand-lg " style="background-color:black;">
    <div class="container">
      <img src="justice.jpg" width="25%">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
   <i class="fas fa-bars"></i>
  </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto w-100 justify-content-end">
        <li class="nav-item">
        <div class="dropright show">
  <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Know your Heroes
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:black;width:300px;">
  <a class="nav-link" href="https://www.supermanhomepage.com/" traget="_blank">
  <img src="download.png">Flash</a>
  <a class="nav-link" href="https://www.supermanhomepage.com/" traget="_blank">
  <img src="amlogo.jpeg">Superman
  </a>
  <a class="nav-link" href="https://www.warnerbros.com/movies/batman-begins" >
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
  <div class="ins-content">
    <span class="close">&times;</span>

    <p><h2 style="text-align:center;">Level:Impossible</h2>
    <ul>
<li> This section contains <b>FOUR (04)</b> questions.</li>
<li>Each question has <b>FOUR</b> options</li>
<li><b>ONLY ONE</b> of these four options is the correct answer.</li>
<li>For each question, choose the option corresponding to the correct answer. </li>
<li>Answer to each question will be evaluated according to the following marking scheme<br>
<i>Full Marks</i> : +40 If ONLY the correct option is chosen<br>
<i>Zero Marks</i> : 0 If none of the options is chosen (ie the question is unanswered)<br>
<i>Negative Marks</i> : -35 In all other cases. 
</li>
</ul>
<p style='text-align:center'><i>“The world has grown dark, and while we have reasons to 
fear we have the strength not to. There are heroes among us, to remind us that only 
from fear, comes courage. That only from the darkness, can we truly feel the light.”</i></p>
</p>
</div>
</div></li>
<li class="nav-item">
<div class="dropright show">
  <a class=" dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Privacy
  </a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color:black">
  <a class=" nav-link" href="#">Your Profile</a>
  <a  class=" nav-link" href="add.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a>
    
  </div>
</div>
                </li>
        </ul>
      </div>
    </div>
  </nav>
        <div class="bg">
        <form method="POST" action="result4.php" id='quiz'>
            <div class="card-deck">
                <div class="card anim1" style="min-width:30%;margin-left:5%;margin-top:5%;margin-right:5%;">
                    <img class="card-img-top" src="<?php echo $quiz4[0][0]['img']?>">
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $quiz4[0][0]['question']?></b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][0]['chosen'][0]?>" name="quiz4_1" 
                             value="<?php echo $quiz4[0][0]['chosen'][0]?>">
                            <label for='<?php echo $quiz4[0][0]['chosen'][0]?>'><?php echo $quiz4[0][0]['options'][0]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][0]['chosen'][1]?>" name="quiz4_1" 
                             value="<?php echo $quiz4[0][0]['chosen'][1]?>">
                            <label for='<?php echo $quiz4[0][0]['chosen'][1]?>'><?php echo $quiz4[0][0]['options'][1]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][0]['chosen'][2]?>" name="quiz4_1" 
                             value="<?php echo $quiz4[0][0]['chosen'][2]?>">
                            <label for='<?php echo $quiz4[0][0]['chosen'][2]?>'><?php echo $quiz4[0][0]['options'][2]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][0]['chosen'][3]?>" name="quiz4_1" 
                             value="<?php echo $quiz4[0][0]['chosen'][3]?>">
                            <label for='<?php echo $quiz4[0][0]['chosen'][3]?>'><?php echo $quiz4[0][0]['options'][3]?></label>
                        </li>
                    </ul>
                </div>
                <div class="card anim2" style="min-width:30%;margin-right:5%;margin-top:5%;margin-left:5%;">
                    <img class="card-img-top" src="<?php echo $quiz4[0][1]['img']?>">
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $quiz4[0][1]['question']?></b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][1]['chosen'][0]?>" name="quiz4_2" 
                             value="<?php echo $quiz4[0][1]['chosen'][0]?>">
                            <label for='<?php echo $quiz4[0][1]['chosen'][0]?>'><?php echo $quiz4[0][1]['options'][0]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][0]['chosen'][1]?>" name="quiz4_2" 
                             value="<?php echo $quiz4[0][1]['chosen'][1]?>">
                            <label for='<?php echo $quiz4[0][1]['chosen'][1]?>'><?php echo $quiz4[0][1]['options'][1]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][1]['chosen'][2]?>" name="quiz4_2" 
                             value="<?php echo $quiz4[0][1]['chosen'][2]?>">
                            <label for='<?php echo $quiz4[0][1]['chosen'][2]?>'><?php echo $quiz4[0][1]['options'][2]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[0][1]['chosen'][3]?>" name="quiz4_2" 
                             value="<?php echo $quiz4[0][1]['chosen'][3]?>">
                            <label for='<?php echo $quiz4[0][1]['chosen'][3]?>'><?php echo $quiz4[0][1]['options'][3]?></label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="bg">
            <div class="card-deck">
                <div class="card anim3" style="min-width:30%;margin-left:5%;margin-top:5%;margin-right:5%">
                    <img class="card-img-top" src="<?php echo $quiz4[1][0]['img']?>" >
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $quiz4[1][0]['question']?></b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][0]['chosen'][0]?>" name="quiz4_3" 
                             value="<?php echo $quiz4[1][0]['chosen'][0]?>">
                            <label for='<?php echo $quiz4[1][0]['chosen'][0]?>'><?php echo $quiz4[1][0]['options'][0]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][0]['chosen'][1]?>" name="quiz4_3" 
                             value="<?php echo $quiz4[1][0]['chosen'][1]?>">
                            <label for='<?php echo $quiz4[1][0]['chosen'][1]?>'><?php echo $quiz4[1][0]['options'][1]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][0]['chosen'][2]?>" name="quiz4_3" 
                             value="<?php echo $quiz4[1][0]['chosen'][2]?>">
                            <label for='<?php echo $quiz4[1][0]['chosen'][2]?>'><?php echo $quiz4[1][0]['options'][2]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][0]['chosen'][3]?>" name="quiz4_3" 
                             value="<?php echo $quiz4[1][0]['chosen'][3]?>">
                            <label for='<?php echo $quiz4[1][0]['chosen'][2]?>'><?php echo $quiz4[1][0]['options'][3]?></label>
                        </li>
                    </ul>
                </div>
                <div class="card anim4" style="min-width:30%;margin-right:5%;margin-top:5%;margin-left:5%;">
                    <img class="card-img-top" src="<?php echo $quiz4[1][1]['img']?>" >
                    <div class="card-body">
                        <p class="card-text"><b><?php echo $quiz4[1][1]['question']?></b></p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][1]['chosen'][0]?>" name="quiz4_4" 
                             value="<?php echo $quiz4[1][1]['chosen'][0]?>">
                            <label for='<?php echo $quiz4[1][1]['chosen'][0]?>'><?php echo $quiz4[1][1]['options'][0]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][1]['chosen'][1]?>" name="quiz4_4" 
                             value="<?php echo $quiz4[1][1]['chosen'][1]?>">
                            <label for='<?php echo $quiz4[1][1]['chosen'][1]?>'><?php echo $quiz4[1][1]['options'][1]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][1]['chosen'][2]?>" name="quiz4_4" 
                             value="<?php echo $quiz4[1][1]['chosen'][2]?>">
                            <label for='<?php echo $quiz4[1][1]['chosen'][2]?>'><?php echo $quiz4[1][1]['options'][2]?></label>
                        </li>
                        <li class="list-group-item">
                            <input type="radio" id="<?php echo $quiz4[1][1]['chosen'][3]?>" name="quiz4_4" 
                             value="<?php echo $quiz4[1][1]['chosen'][3]?>">
                            <label for='<?php echo $quiz4[1][1]['chosen'][3]?>'><?php echo $quiz4[1][1]['options'][3]?></label>
                        </li>
                    </ul>
                </div>
                </div>
                <div style="text-align:center;">
                <input type="submit" value="Submit" name="submit" class="new"></input>
                </div></form>
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

        </div>
        </div>
        </div>
    </body>
</html>