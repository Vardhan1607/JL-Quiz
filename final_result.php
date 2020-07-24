<?php
include('question.php');

?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<style>
    .bg{
        background-image:url("Assets/scores.gif");
        height:100vh;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        }
</style>
<body>
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
</table><div style="text-align:center">
<button  style="padding:10px 10px;color:white;background:black"onClick="<?php session_destroy();
header('Location:add.php')?>">Log out</button></div>
</div>
</div>

