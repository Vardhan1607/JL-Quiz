<?php
session_start();
ob_start();
include("question.php");
include("quiz2.php");
$_SESSION['totalCorrect'] = 0;
$_SESSION['totalCorrect1_1']=0;
$_SESSION['totalCorrect1_2']=0;
$_SESSION['totalCorrect1_3']=0;
$_SESSION['totalCorrect1_4']=0;
     //quiz1_1
     if(isset($_POST['quiz1_1'])){
        $_SESSION['answer1_1'] = $_POST['quiz1_1'];
        if ($_SESSION['answer1_1']== $quiz1[0][0]['correct']) { $_SESSION['totalCorrect1_1']+=10;}
        if ($_SESSION['answer1_1']!= $quiz1[0][0]['correct']) { $_SESSION['totalCorrect1_1']-=5;}}
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
            $_SESSION['totalCorrect']+=($_SESSION['totalCorrect1_1']+$_SESSION['totalCorrect1_2']+
            $_SESSION['totalCorrect1_3']+$_SESSION['totalCorrect1_4']);
?>