<?php
session_start();
include('question.php');
include("quiz4.php");
$_SESSION['totalCorrect3_1']=0;
$_SESSION['totalCorrect3_2']=0;
$_SESSION['totalCorrect3_3']=0;
$_SESSION['totalCorrect3_4']=0;
  //quiz3_1
  if(isset($_POST['quiz3_1'])){
    $_SESSION['answer3_1'] = $_POST['quiz3_1'];
    if ($_SESSION['answer3_1']== $quiz3[0][0]['correct']) { $_SESSION['totalCorrect3_1']+=30;}
    if ($_SESSION['answer3_1']!= $quiz3[0][0]['correct']) { $_SESSION['totalCorrect3_1']-=20;}}
    else{
        $_SESSION['answer3_1'] = 'NA';
        $_SESSION['totalCorrect3_1']=0;
    }
    //quiz3_2
    if(isset($_POST['quiz3_2'])){
        $_SESSION['answer3_2'] = $_POST['quiz3_2'];
        if ($_SESSION['answer3_2']== $quiz3[0][1]['correct']) { $_SESSION['totalCorrect3_2']+=30;}
        if ($_SESSION['answer3_2']!= $quiz3[0][1]['correct']) { $_SESSION['totalCorrect3_2']-=20;}}
        else{
            $_SESSION['answer3_2'] = 'NA';
            $_SESSION['totalCorrect3_2']=0;
        }
    //quiz3_3
    if(isset($_POST['quiz3_3'])){
        $_SESSION['answer3_3'] = $_POST['quiz3_3'];
        if ($_SESSION['answer3_3']== $quiz3[1][0]['correct']) { $_SESSION['totalCorrect3_3']+=30;}
        if ($_SESSION['answer3_3']!= $quiz3[1][0]['correct']) { $_SESSION['totalCorrect3_3']-=20;}}
        else{
            $_SESSION['answer3_3'] = 'NA';
            $_SESSION['totalCorrect3_3']=0;
        }
    //quiz3_4
    if(isset($_POST['quiz3_4'])){
        $_SESSION['answer3_4'] = $_POST['quiz3_4'];
        if ($_SESSION['answer3_4']== $quiz3[1][1]['correct']) { $_SESSION['totalCorrect3_4']+=30;}
        if ($_SESSION['answer3_4']!= $quiz3[1][1]['correct']) { $_SESSION['totalCorrect3_4']-=20;}}
        else{
            $_SESSION['answer3_4'] = 'NA';
            $_SESSION['totalCorrect3_4']=0;
        }
        $_SESSION['totalCorrect']+=($_SESSION['totalCorrect3_1']+$_SESSION['totalCorrect3_2']+
        $_SESSION['totalCorrect3_3']+$_SESSION['totalCorrect3_4']);
        
        ?>