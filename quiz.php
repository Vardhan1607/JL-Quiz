<?php
    $quiz1_1=array(
        array('question'=>('Name this superhero!'),
        'img'=>('Assets/easy-01.jpg'),
        'options'=>array('Super girl','Black Canary','Wonder Woman','Power Girl'),
        'correct'=>'3','chosen'=>array('1','2','3','4',),'id'=>'wonder'),
        array('question'=>("What's Superman's dad's name?"),
        'img'=>('Assets/easy2.jpg'),
        'options'=>array('Orlando','Jack Kent','Kerilion','Jor-El'),
        'correct'=>4,'chosen'=>array('1','2','3','4'),'id'=>'super'));
    $quiz1_2=array(
            array('question'=>("What is The Flash's true identity?"),
            'img'=>('Assets/easy3.jpg'),
            'options'=>array('Hal Jordan','Alan Walker','Barry Allen','Jason Todd'),
            'correct'=>3,'chosen'=>array('1','2','3','4'),'id'=>'flas'),
            array('question'=>('What is the true identity of the Green Lantern we know best?'),
            'img'=>('Assets/easy4.jpg'),
            'options'=>array('Hal Jordan','Kal-El','Barry Allen','Jor-El'),
            'correct'=>1,'chosen'=>array('1','2','3','4'),'id'=>'super'));
    
    //shuffle($quiz1_1);
    //shuffle($quiz1_2);
    $quiz1=array($quiz1_1,$quiz1_2);
    //shuffle($quiz1);
    ?>
<!DOCTYPE html>

<head>
	
	<title>PHP QUIZ</title>
</head>
 
<body>

		
	<form action="result.php" method="POST" id="quiz">
    <ol>
                <li>
                    <div>
                    <input type="radio" id="<?php echo $quiz1[0][0]['chosen'][0]?>" name="quiz1_1" 
                             value="A">
                            <label for='<?php echo $quiz1[0][0]['chosen'][0]?>'><?php echo $quiz1[0][0]['options'][0]?></label>
                        </div>
                        <div>

                            <input type="radio" id="<?php echo $quiz1[0][0]['chosen'][1]?>" name="quiz1_1" value="<?php echo $quiz1[0][0]['chosen'][1]?>">
                            <label for='<?php echo $quiz1[0][0]['chosen'][1]?>' ><?php echo $quiz1[0][0]['options'][1]?></label>
                        </div>

                            <input type="radio" id="<?php echo $quiz1[0][0]['chosen'][2]?>" name="quiz1_2" value="<?php echo $quiz1[0][0]['chosen'][2]?>">
                            <label for='<?php echo $quiz1[0][0]['chosen'][2]?>'><?php echo $quiz1[0][0]['options'][2]?></label>
                        </div>
                        <div>
                            <input type="radio" id="<?php echo $quiz1[0][0]['chosen'][3]?>" name="quiz1_2" value="<?php echo $quiz1[0][0]['chosen'][3]?>">
                            <label for='<?php echo $quiz1[0][0]['chosen'][3]?>'><?php echo $quiz1[0][0]['options'][3]?></label>
                        </div>

                    </div>
                
                </li>
            
            <input type="submit" value="Submit"/>
		
		</form>
	
	</div>
 
 
</body>
 
</html>