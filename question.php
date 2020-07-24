<?php
//quiz1
$quiz1_1=array(
            array('question'=>('Name this superhero!'),
            'img'=>('Assets/easy-01.jpg'),
            'options'=>array('Super girl','Black Canary','Wonder Woman','Power Girl'),
            'correct'=>'3','chosen'=>array('1','2','3','4',)),
            array('question'=>("What's Superman's dad's name?"),
            'img'=>('Assets/easy2.jpg'),
            'options'=>array('Orlando','Jack Kent','Kerilion','Jor-El'),
            'correct'=>'4','chosen'=>array('1','2','3','4')));
$quiz1_2=array(
            array('question'=>("What is The Flash's true identity?"),
            'img'=>('Assets/easy3.jpg'),
            'options'=>array('Hal Jordan','Alan Walker','Barry Allen','Jason Todd'),
            'correct'=>3,'chosen'=>array('1','2','3','4')),
            array('question'=>('What is the true identity of the Green Lantern we know best?'),
            'img'=>('Assets/easy4.jpg'),
            'options'=>array('Hal Jordan','Kal-El','Barry Allen','Jor-El'),
            'correct'=>'1','chosen'=>array('1','2','3','4')));
//quiz2
$quiz2_1=array(
            array('question'=>("Who was Batman's main rival in Batman Returns?"),
            'img'=>('Assets/med1.jpg'),
            'options'=>array('Catwoman','Max Power','The Penguin','The Scarecrow'),
            'correct'=>'3','chosen'=>array('1','2','3','4')),
            array('question'=>("Aquaman was trained by"),
            'img'=>('Assets/med2.jpg'),
            'options'=>array('Vulko','Atlanna',' Mera','Nerexus'),
            'correct'=>'1','chosen'=>array('1','2','3','4')));
$quiz2_2=array(
                array('question'=>("What Is Cyborg's Real Name?"),
                'img'=>('Assets/med3.jpg'),
                'options'=>array('Silas Stone','Victor Stone',' Slade Stone','Samuel Stone'),
                'correct'=>'2','chosen'=>array('1','2','3','4')),
                array('question'=>(" When Is Oliver Queen's Birthday?"),
                'img'=>('Assets/med4.jpg'),
                'options'=>array('January 21, 1985','May 16, 1985','August 19, 1985','October 10, 1985'),
                'correct'=>'2','chosen'=>array('1','2','3','4')));
    //quiz3
$quiz3_1=array(
                array('question'=>("Who has been lucky enough to be both a member of The Avengers and the Justice League?"),
                'img'=>('Assets/hard1.jpg'),
                'options'=>array('Iron Man','Batman','Hawkeye','Spider-Man'),
                'correct'=>'3','chosen'=>array('1','2','3','4')),
                array('question'=>("How many Justice Leauge movies are there?"),
                    'img'=>('Assets/hard2.jpg'),
                    'options'=>array('10','19',' 20','23'),
                    'correct'=>'4','chosen'=>array('1','2','3','4')));
$quiz3_2=array(
                array('question'=>("What is Two Face's true identity?"),
                        'img'=>('Assets/hard3.jpg'),
                        'options'=>array('Hal Jordan',' Barry Alan',' Aaron Eckhart','Harvey Dent'),
                        'correct'=>'4','chosen'=>array('1','2','3','4')),
                array('question'=>(" Which DC hero has made more appearances than any other?"),
                        'img'=>('Assets/hard4.jpg'),
                        'options'=>array('Superman','Batman','Wonder Woman','The Flash'),
                        'correct'=>'2','chosen'=>array('1','2','3','4')));
$quiz4_1=array(
            array('question'=>("Which Justice League member formed the Justice League Dark in the film of the same name?"),
            'img'=>('Assets/imp1.jpg'),
            'options'=>array('Batman','Zatanna','Martian Manhunter','Doctor Fate'),
            'correct'=>'1','chosen'=>array('1','2','3','4')),
            array('question'=>("Who was the villain in Justice League: War?"),
            'img'=>('Assets/imp2.jpeg'),
            'options'=>array('Darkseid',' Mongol',' Steppenwolfe','Doomsday'),
            'correct'=>'1','chosen'=>array('1','2','3','4')));
$quiz4_2=array(
            array('question'=>("Who became the Joker in Flashpoint Paradox?"),
            'img'=>('Assets/imp3.jpg'),
            'options'=>array('Barry Allen','Bruce Wayne',' Jim Gordon','Martha Wayne'),
            'correct'=>'4','chosen'=>array('1','2','3','4')),
            array('question'=>(" In the television series Young Justice, who are the four young heros who wanted to join the Justice League?"),
            'img'=>('Assets/imp4.jpeg'),
            'options'=>array('Robin, Cyborg, Raven, Zatanna',' Robin, Speedy, Aqualad, Beast Boy','Aqualad, Robin, Kid Flash, Speedy',' Robin, Aqualad, Kid Flash, Starfire'),
            'correct'=>'3','chosen'=>array('1','2','3','4')));
$quiz1=array($quiz1_1,$quiz1_2);
$quiz2=array($quiz2_1,$quiz2_2);
$quiz3=array($quiz3_1,$quiz3_2);
$quiz4=array($quiz4_1,$quiz4_2);

?>