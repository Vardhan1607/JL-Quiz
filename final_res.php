<?php
include("result.php");
include("question.php");
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<body>
<div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-borderless  table-dark mb-0">
        <thead>
            <tr>
                <th>Level</th>
                <th>Question</th>
                <th>Status</th>
                <th>Correct Answer</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td class="bg-primary">Easy</td>
                <td>

                    <table >


                                    <tr class="<?php
                                    if(!isset($_POST['quiz1_1'])){echo "bg-warning";}
                                    else if($quiz1[0][0]['correct']==$answer1_1){echo "bg-success ";}
                                    else{echo "bg-danger ";}?>">
                                    <td><?php echo $quiz1[0][0]['question']?></td></tr>
                                    <tr class="<?php
                                    if(!isset($_POST['quiz1_2'])){echo "bg-warning";}
                                    else if($quiz1[0][1]['correct']==$answer1_2){echo "bg-success";}
                                    else{echo "bg-danger";}?>">
                                    <td><?php echo $quiz1[0][1]['question']?></td></tr>
                                    <tr class="<?php
                                    if(!isset($_POST['quiz1_3'])){echo "bg-warning";}
                                    else if($quiz1[1][0]['correct']==$answer1_3){echo "bg-success";}
                                    else{echo "bg-danger";}?>">
                                    <td><?php echo $quiz1[1][0]['question']?></td></tr>
                                    <tr class="<?php
                                    if(!isset($_POST['quiz1_4'])){echo "bg-warning";}
                                    else if($quiz1[1][1]['correct']==$answer1_4){echo "bg-success";}
                                    else{echo "bg-danger";}?>">
                                    <td><?php echo $quiz1[1][1]['question']?></td></tr>

                    </table>

                </td>
                <td colspan='1' rowspan='1'><table class="table table-bordered table-dark " style="margin:auto auto">
<tr ><td>
<?php
        echo "<td>".$answer1_1."</td>";
    
        ?></td></tr>
<tr ><td >
<?php
        echo "<td>".$answer1_2."</td>";?>
</td></tr>
<tr ><td >
<?php
        echo "<td>".$answer1_3."</td>";?>
</td></tr>

<tr ><td >
<?php
        echo "<td>".$answer1_4."</td>";
    
        ?></td></tr>
</table></td>
<td>
<table class="table table-bordered table-dark" style="margin:auto auto">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz1[$i][$j]['correct']."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            <td>
<table class="table table-bordered table-dark" style="text-align:center;">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$totalCorrect."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            </tr>
            <tr>
                <td>Medium</td>
                <td>

                    <table class="table table-bordered table-dark">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz2[$i][$j]['question']."</td></tr>";
                                }
                            }?>
                    </table>

                </td>
                <td><table class="table table-bordered table-dark " style="margin:auto auto">

<?php
        echo "<tr><td>".$answer2_1."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer2_2."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer2_3."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer2_4."</td></tr>";
    
?>
</table></td>
<td>
<table class="table table-bordered table-dark" style="margin:auto auto">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz2[$i][$j]['correct']."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            <td>
<table class="table table-bordered table-dark" style="text-align:center;">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$totalCorrect."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            </tr>
            <tr>
                <td>Hard</td>
                <td>

                    <table class="table table-bordered table-dark ">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz3[$i][$j]['question']."</td></tr>";
                                }
                            }?>
                    </table>

                </td>
                <td><table class="table table-bordered table-dark " style="margin:auto auto">

<?php
        echo "<tr><td>".$answer3_1."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer3_2."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer3_3."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer3_4."</td></tr>";
    
?>
</table></td>
<td>
<table class="table table-bordered table-dark" style="margin:auto auto">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz3[$i][$j]['correct']."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            <td>
<table class="table table-bordered table-dark" style="text-align:center;">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$totalCorrect."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            </tr>
            <tr>
                <td>Impossible</td>
                <td>

                    <table class="table table-bordered table-dark ">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz4[$i][$j]['question']."</td></tr>";
                                }
                            }?>
                    </table>

                </td>
                <td><table class="table table-bordered table-dark " style="margin:auto auto">

<?php
        echo "<tr><td>".$answer4_1."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer4_2."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer4_3."</td></tr>";
    
?>
<?php
        echo "<tr><td>".$answer4_4."</td></tr>";
    
?>
</table></td>
<td>
<table class="table table-bordered table-dark" style="margin:auto auto">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$quiz4[$i][$j]['correct']."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            <td>
<table class="table table-bordered table-dark" style="text-align:center;">

                            <?php for($i=0;$i<2;$i++){
                                for($j=0;$j<2;$j++){
                                    echo "<tr><td>".$totalCorrect."</td></tr>";
                                }
                            }?>
                    </table>
            </td>
            </tr>
        </tbody>
    </table>

</div>
</body>
</html>
