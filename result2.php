<?php
session_start();
ob_start();
include("question.php");
include("quiz3.php");
$_SESSION['totalCorrect2_1']=0;
$_SESSION['totalCorrect2_2']=0;
$_SESSION['totalCorrect2_3']=0;
$_SESSION['totalCorrect2_4']=0;
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
    $_SESSION['totalCorrect']+=($_SESSION['totalCorrect2_1']+$_SESSION['totalCorrect2_2']+
    $_SESSION['totalCorrect2_3']+$_SESSION['totalCorrect2_4']);
    ?>