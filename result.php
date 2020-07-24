<?php
include('question.php');
?>
<!DOCTYPE html>
<html>
 
<head>
	<meta charset="UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
		
        <?php
             $_SESSION['totalCorrect'] = 0;
             $_SESSION['totalCorrect1_1']=0;
             $_SESSION['totalCorrect1_2']=0;
             $_SESSION['totalCorrect1_3']=0;
             $_SESSION['totalCorrect1_4']=0;
             $_SESSION['totalCorrect2_1']=0;
             $_SESSION['totalCorrect2_2']=0;
             $_SESSION['totalCorrect2_3']=0;
             $_SESSION['totalCorrect2_4']=0;
             $_SESSION['totalCorrect3_1']=0;
             $_SESSION['totalCorrect3_2']=0;
             $_SESSION['totalCorrect3_3']=0;
             $_SESSION['totalCorrect3_4']=0;
             $_SESSION['totalCorrect4_1']=0;
             $_SESSION['totalCorrect4_2']=0;
             $_SESSION['totalCorrect4_3']=0;
             $_SESSION['totalCorrect4_4']=0;
             //quiz1_1
            if(isset($_POST['quiz1_1'])){
            $_SESSION['answer1_1'] = $_POST['quiz1_1'];
            if ($_SESSION['answer1_1']== $quiz1[0][0]['correct']) { $_SESSION['totalCorrect1_1']+=10;}
            if ($_SESSION['answer1_1']!= $quiz1[0][0]['correct']) { $_SESSIOn['totalCorrect1_1']-=5;}}
            else{
                $_SESSION['answer1_1'] = 'NA';
                $_SESSION['totalCorrect1_1']=0;
            }
            //quiz1_2
            if(isset($_POST['quiz1_2'])){
                $_SESSION['answer1_2'] = $_POST['quiz1_2'];
                if ($_SESSION['answer1_2']== $quiz1[0][1]['correct']) { $_SESSION['totalCorrect1_2']+=10;}
                if ($_SESSION['answer1_2']!= $quiz1[0][1]['correct']) { $_SESSION['totalCorrect1_2']-=5;}}
                else{
                    $_SESSION['answer1_2'] = 'NA';
                    $_SESSION['totalCorrect1_2']=0;
                }
            //quiz1_3
            if(isset($_POST['quiz1_3'])){
                $_SESSION['answer1_3'] = $_POST['quiz1_3'];
                if ($_SESSION['answer1_3']== $quiz1[1][0]['correct']) { $_SESSION['totalCorrect1_3']+=10;}
                if ($_SESSION['answer1_3']!= $quiz1[1][0]['correct']) { $_SESSION['totalCorrect1_3']-=5;}}
                else{
                    $_SESSION['answer1_3'] = 'NA';
                    $_SESSION['totalCorrect1_3']=0;
                }
            //quiz1_4
            if(isset($_POST['quiz1_4'])){
                $_SESSION['answer1_4'] = $_POST['quiz1_4'];
                if ($_SESSION['answer1_4']== $quiz1[1][1]['correct']) { $_SESSION['totalCorrect1_4']+=10;}
                if ($_SESSION['answer1_4']!= $quiz1[1][1]['correct']) { $_SESSION['totalCorrect1_4']-=5;}}
                else{
                    $_SESSION['answer1_4'] = 'NA';
                    $_SESSION['totalCorrect1_4']=0;
                }
            //quiz2_1
            if(isset($_POST['quiz2_1'])){
                $_SESSION['answer2_1'] = $_POST['quiz2_1'];
                if ($_SESSION['answer2_1']== $quiz2[0][0]['correct']) { $_SESSION["totalCorrect2_1"]+=20;}
                if ($_SESSION['answer2_1']!= $quiz2[0][0]['correct']) { $_SESSION['totalCorrect2_1']-=12;}}
                else{
                    $_SESSION['answer2_1'] = 'NA';
                    $_SESSION['totalCorrect2_1']=0;
                }
            //quiz2_2
            if(isset($_POST['quiz2_2'])){
                $_SESSION['answer2_2'] = $_POST['quiz2_2'];
                if ($_SESSION['answer2_2']== $quiz2[0][1]['correct']) { $_SESSION['totalCorrect2_2']+=20;}
                if ($_SESSION['answer2_2']!= $quiz2[0][1]['correct']) { $_SESSION['totalCorrect2_2']-=12;}}
                else{
                    $_SESSION['answer2_2'] = 'NA';
                    $_SESSION['totalCorrect2_2']=0;
                }
            //quiz2_3
            if(isset($_POST['quiz2_3'])){
                $_SESSION['answer2_3'] = $_POST['quiz2_3'];
                if ($_SESSION['answer2_3']== $quiz2[1][0]['correct']) { $_SESSION['totalCorrect2_3']+=20;}
                if ($_SESSION['answer2_3']!= $quiz2[1][0]['correct']) { $_SESSION['totalCorrect2_3']-=12;}}
                else{
                    $_SESSION['answer2_3'] = 'NA';
                    $_SESSION['totalCorrect2_3']=0;
                }
            //quiz2_4
            if(isset($_POST['quiz2_4'])){
                $_SESSION['answer2_4'] = $_POST['quiz2_4'];
                if ($_SESSION['answer2_4']== $quiz2[1][1]['correct']) { $_SESSION['totalCorrect2_4']+=20;}
                if ($_SESSION['answer2_4']!= $quiz2[1][1]['correct']) { $_SESSION['totalCorrect2_4']-=12;}}
                else{
                    $_SESSION['answer2_4'] = 'NA';
                    $_SESSION['totalCorrect2_4']=0;
                }
            //quiz3_1
            if(isset($_POST['quiz3_1'])){
                $_SESSION['answer3_1'] = $_POST['quiz3_1'];
                if ($_SESSION['answer3_1']== $quiz3[0][0]['correct']) { $_SESSION["totalCorrect3_1"]+=20;}
                if ($_SESSION['answer3_1']!= $quiz3[0][0]['correct']) { $_SESSION['totalCorrect3_1']-=12;}}
                else{
                    $_SESSION['answer3_1'] = 'NA';
                    $_SESSION['totalCorrect3_1']=0;
                }
            //quiz3_2
            if(isset($_POST['quiz3_2'])){
                $_SESSION['answer3_2'] = $_POST['quiz3_2'];
                if ($_SESSION['answer3_2']== $quiz3[0][1]['correct']) { $_SESSION['totalCorrect3_2']+=20;}
                if ($_SESSION['answer2_2']!= $quiz3[0][1]['correct']) { $_SESSION['totalCorrect3_2']-=12;}}
                else{
                    $_SESSION['answer3_2'] = 'NA';
                    $_SESSION['totalCorrect3_2']=0;
                }
            //quiz3_3
            if(isset($_POST['quiz3_3'])){
                $_SESSION['answer3_3'] = $_POST['quiz3_3'];
                if ($_SESSION['answer3_3']== $quiz2[1][0]['correct']) { $_SESSION['totalCorrect3_3']+=20;}
                if ($_SESSION['answer2_3']!= $quiz2[1][0]['correct']) { $_SESSION['totalCorrect3_3']-=12;}}
                else{
                    $_SESSION['answer3_3'] = 'NA';
                    $_SESSION['totalCorrect3_3']=0;
                }
            //quiz3_4
            if(isset($_POST['quiz3_4'])){
                $_SESSION['answer3_4'] = $_POST['quiz3_4'];
                if ($_SESSION['answer3_4']== $quiz3[1][1]['correct']) { $_SESSION['totalCorrect3_4']+=20;}
                if ($_SESSION['answer3_4']!= $quiz3[1][1]['correct']) { $_SESSION['totalCorrect3_4']-=12;}}
                else{
                    $_SESSION['answer3_4'] = 'NA';
                    $_SESSION['totalCorrect3_4']=0;
                }
            //quiz4_1
            if(isset($_POST['quiz4_1'])){
                $_SESSION['answer4_1'] = $_POST['quiz4_1'];
                if ($_SESSION['answer4_1']== $quiz2[0][0]['correct']) { $_SESSION["totalCorrect4_1"]+=20;}
                if ($_SESSION['answer4_1']!= $quiz2[0][0]['correct']) { $_SESSION['totalCorrect4_1']-=12;}}
                else{
                    $_SESSION['answer4_1'] = 'NA';
                    $_SESSION['totalCorrect4_1']=0;
                }
            //quiz4_2
            if(isset($_POST['quiz4_2'])){
                $_SESSION['answer4_2'] = $_POST['quiz4_2'];
                if ($_SESSION['answer4_2']== $quiz2[0][1]['correct']) { $_SESSION['totalCorrect4_2']+=20;}
                if ($_SESSION['answer4_2']!= $quiz2[0][1]['correct']) { $_SESSION['totalCorrect4_2']-=12;}}
                else{
                    $_SESSION['answer4_2'] = 'NA';
                    $_SESSION['totalCorrect4_2']=0;
                }
            //quiz2_3
            if(isset($_POST['quiz2_3'])){
                $_SESSION['answer2_3'] = $_POST['quiz2_3'];
                if ($_SESSION['answer4_3']== $quiz4[1][0]['correct']) { $_SESSION['totalCorrect4_3']+=20;}
                if ($_SESSION['answer4_3']!= $quiz4[1][0]['correct']) { $_SESSION['totalCorrect4_3']-=12;}}
                else{
                    $_SESSION['answer4_3'] = 'NA';
                    $_SESSION['totalCorrect4_3']=0;
                }
            //quiz3_4
            if(isset($_POST['quiz4_4'])){
                $_SESSION['answer4_4'] = $_POST['quiz4_4'];
                if ($_SESSION['answer4_4']== $quiz4[1][1]['correct']) { $_SESSION['totalCorrect4_4']+=20;}
                if ($_SESSION['answer4_4']!= $quiz4[1][1]['correct']) { $_SESSION['totalCorrect4_4']-=12;}}
                else{
                    $_SESSION['answer4_4'] = 'NA';
                    $_SESSION['totalCorrect4_4']=0;
                }
$_SESSION['totalCorrect']=($_SESSION['totalCorrect1_1']+$_SESSION['totalCorrect1_2']+$_SESSION['totalCorrect1_3']+$_SESSION['totalCorrect1_4'])+
($_SESSION['totalCorrect2_1']+$_SESSION['totalCorrect2_2']+$_SESSION['totalCorrect2_3']+$_SESSION['totalCorrect2_4'])+
($_SESSION['totalCorrect3_1']+$_SESSION['totalCorrect3_2']+$_SESSION['totalCorrect3_3']+$_SESSION['totalCorrect3_4'])+
            ($_SESSION['totalCorrect4_1']+$_SESSION['totalCorrect4_2']+$_SESSION['totalCorrect4_3']+$_SESSION['totalCorrect4_4']);
        ?>
	
	</div>
 
</body>
 
</html>