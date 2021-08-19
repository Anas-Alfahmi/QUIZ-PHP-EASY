<?php 

 /* require for variables 
     /\/\/\/\/\/\/\/\/\/\/\/\/ { Only the answer is changed from here } \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
     
    This page is to display the results to the user, here the answers are changed by a Conditional statements   (if) ,
    On each line, the end of the variable is changed to the correct answer , (three times ) To facilitate modification,
    please look at the variables var.php . 

    
 
 
 */

    require_once "var.php";
  ?>

<!DOCTYPE html>
<html>
<head>
<!-- meta -->
 <meta charset="UTF-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=0.8">
 <meta name="description" content=" test yourself" />
 <meta name="keywords" content="test,exam">

 <!-- css -->
 <link rel="stylesheet" type="text/css" href="style.css" />

 <!-- title -->
 <title> <?php  echo $name_quiz_result ?>  </title>
</head>
 
<body>
<?php error_reporting(0); ?>
<div class="wrapper">
    <a href="../exam.html"><span> Main </span></a>
</div>
 <div id="page-wrap">
      
 
        <?php


        /* title body page */
        echo " <h1> Result : " . $name_quiz_result . "</h1> ";



        /* correct answer Web page * |It does not need to be changed|  */
        $cur_ans_1  = " <details>  <summary> $ans_1_s  </summary> $ans_det_1  </details> ";
        $cur_ans_2  = " <details>  <summary> $ans_2_s  </summary> $ans_det_2  </details> ";
        $cur_ans_3  = " <details>  <summary> $ans_3_s  </summary> $ans_det_3  </details> ";
        $cur_ans_4  = " <details>  <summary> $ans_4_s  </summary> $ans_det_4  </details> ";
        $cur_ans_5  = " <details>  <summary> $ans_5_s  </summary> $ans_det_5  </details> ";
        $cur_ans_6  = " <details>  <summary> $ans_6_s  </summary> $ans_det_6  </details> ";
        $cur_ans_7  = " <details>  <summary> $ans_7_s  </summary> $ans_det_7  </details> ";
        $cur_ans_8  = " <details>  <summary> $ans_8_s  </summary> $ans_det_8  </details> ";
        $cur_ans_9  = " <details>  <summary> $ans_9_s  </summary> $ans_det_9  </details> ";
        $cur_ans_10 = " <details>  <summary> $ans_10_s </summary> $ans_det_10 </details> ";

        /* Start div section default sec_false */
        echo "<div class='cent'>";

        /* section default sec_false  */
        $sec_false = "<span class='tr'>  False  &#10060 </span>" . "<p class='prag'>  The answre True is : </p> ";
        $answer_1  = $sec_false. $cur_ans_1  . "<br> </div>";
        $answer_2  = $sec_false. $cur_ans_2  . "<br> </div>";
        $answer_3  = $sec_false. $cur_ans_3  . "<br> </div>";
        $answer_4  = $sec_false. $cur_ans_4  . "<br> </div>";
        $answer_5  = $sec_false. $cur_ans_5  . "<br> </div>";
        $answer_6  = $sec_false. $cur_ans_6  . "<br> </div>";
        $answer_7  = $sec_false. $cur_ans_7  . "<br> </div>";
        $answer_8  = $sec_false. $cur_ans_8  . "<br> </div>";
        $answer_9  = $sec_false. $cur_ans_9  . "<br> </div>";
        $answer_10 = $sec_false. $cur_ans_10 . "<br> </div>";

         /* End div section default sec_false */
        echo "</div>";

        $answer1  = $_POST["question-1"];
        $answer2  = $_POST["question-2"];
        $answer3  = $_POST["question-3"];
        $answer4  = $_POST["question-4"];
        $answer5  = $_POST["question-5"];
        $answer6  = $_POST["question-6"];
        $answer7  = $_POST["question-7"];
        $answer8  = $_POST["question-8"];
        $answer9  = $_POST["question-9"];
        $answer10 = $_POST["question-10"];



        /* section default sec_true */
        $sec_true = "<span> True &#9989</span> </div>" ;
        $yourans  = " Your answre is :  ";
        
        /* section if answer true * use span to change color correct answer to Green */
        // if answer Multiple choice Change the last variable with the correct letter. Please see the Variables page var.php 
        // in answer true use $mlt_T and $question8_option_A || false use $mlt_F and $question8_option_B 

        // ************************************* Just Change the answer ************************************************ // 
        if ($answer1  == $mlt_C)   {$totalCorrect++ . ($answer_1  = $sec_true) . $question1_option_C  = "<span>".$question1_option_C  ."</span>" ;}
        if ($answer2  == $mlt_B)   {$totalCorrect++ . ($answer_2  = $sec_true) . $question2_option_B  = "<span>".$question2_option_B  ."</span>";}
        if ($answer3  == $mlt_C)   {$totalCorrect++ . ($answer_3  = $sec_true) . $question3_option_C  = "<span>".$question3_option_C  ."</span>";}
        if ($answer4  == $mlt_A)   {$totalCorrect++ . ($answer_4  = $sec_true) . $question4_option_A  = "<span>".$question4_option_A  ."</span>";}
        if ($answer5  == $mlt_B)   {$totalCorrect++ . ($answer_5  = $sec_true) . $question5_option_B  = "<span>".$question5_option_B  ."</span>";}
        if ($answer6  == $mlt_T)   {$totalCorrect++ . ($answer_6  = $sec_true) . $question6_option_A  = "<span>".$question6_option_A  ."</span>";}
        if ($answer7  == $mlt_F)   {$totalCorrect++ . ($answer_7  = $sec_true) . $question7_option_B  = "<span>".$question7_option_B  ."</span>";}
        if ($answer8  == $mlt_T)   {$totalCorrect++ . ($answer_8  = $sec_true) . $question8_option_A  = "<span>".$question8_option_A  ."</span>";}
        if ($answer9  == $mlt_F)   {$totalCorrect++ . ($answer_9  = $sec_true) . $question9_option_B  = "<span>".$question9_option_B  ."</span>";}
        if ($answer10 == $mlt_T)   {$totalCorrect++ . ($answer_10 = $sec_true) . $question10_option_A = "<span>".$question10_option_A ."</span>";}
  
        //  It does not need to be changed  , this part for view all answer in result 
 
        $all_question1  = "<div class ='textr'>" . " <ul> " . "<li>" . $question1_option_A .  " </li> " . "<li>" . $question1_option_B . " </li> " . "<li>" . $question1_option_C . " </li> " . "<li>" . $question1_option_D . " </li> " . "</ul>" . "</div>";
        $all_question2  = "<div class ='textr'>" . " <ul> " . "<li>" . $question2_option_A .  " </li> " . "<li>" . $question2_option_B . " </li> " . "<li>" . $question2_option_C . " </li> " . "<li>" . $question2_option_D . " </li> " . "</ul>" . "</div>";
        $all_question3  = "<div class ='textr'>" . " <ul> " . "<li>" . $question3_option_A .  " </li> " . "<li>" . $question3_option_B . " </li> " . "<li>" . $question3_option_C . " </li> " . "<li>" . $question3_option_D . " </li> " . "</ul>" . "</div>";
        $all_question4  = "<div class ='textr'>" . " <ul> " . "<li>" . $question4_option_A .  " </li> " . "<li>" . $question4_option_B . " </li> " . "<li>" . $question4_option_C . " </li> " . "<li>" . $question4_option_D . " </li> " . "</ul>" . "</div>";
        $all_question5  = "<div class ='textr'>" . " <ul> " . "<li>" . $question5_option_A .  " </li> " . "<li>" . $question5_option_B . " </li> " . "<li>" . $question5_option_C . " </li> " . "<li>" . $question5_option_D . " </li> " . "</ul>" . "</div>";
        $all_question6  = "<div class ='textr'>" . " <ul> " . "<li>" . $question6_option_A .  " </li> " . "<li>" . $question6_option_B . " </li> " . "</ul>" . "</div>";
        $all_question7  = "<div class ='textr'>" . " <ul> " . "<li>" . $question7_option_A .  " </li> " . "<li>" . $question7_option_B . " </li> " . "</ul>" . "</div>";
        $all_question8  = "<div class ='textr'>" . " <ul> " . "<li>" . $question8_option_A .  " </li> " . "<li>" . $question8_option_B . " </li> " . "</ul>" . "</div>";
        $all_question9  = "<div class ='textr'>" . " <ul> " . "<li>" . $question9_option_A .  " </li> " . "<li>" . $question9_option_B . " </li> " . "</ul>" . "</div>";
        $all_question10 = "<div class ='textr'>" . " <ul> " . "<li>" . $question10_option_A . " </li> " . "<li>" . $question10_option_B . " </li> " . "</ul>" . "</div>";
        
        /* section answer result */
        echo " <div id='results'> $totalCorrect / 10  </div>";
        echo " <div class='res'> ";
        $div_b = " <div class='bord'> <p> ";

        // this section for display all answer and user answer
        echo "<p class='qus'> 1-  " ." $qus_1  " . " </p>  " . $all_question1  .  $div_b .  $yourans  . $answer_1  . " </p>";
        echo "<p class='qus'> 2-  " ." $qus_2  " . " </p>  " . $all_question2  .  $div_b .  $yourans  . $answer_2  . " </p>";
        echo "<p class='qus'> 3-  " ." $qus_3  " . " </p>  " . $all_question3  .  $div_b .  $yourans  . $answer_3  . " </p>";
        echo "<p class='qus'> 4-  " ." $qus_4  " . " </p>  " . $all_question4  .  $div_b .  $yourans  . $answer_4  . " </p>";
        echo "<p class='qus'> 5-  " ." $qus_5  " . " </p>  " . $all_question5  .  $div_b .  $yourans  . $answer_5  . " </p>";
        echo "<p class='qus'> 6-  " ." $qus_6  " . " </p>  " . $all_question6  .  $div_b .  $yourans  . $answer_6  . " </p>";
        echo "<p class='qus'> 7-  " ." $qus_7  " . " </p>  " . $all_question7  .  $div_b .  $yourans  . $answer_7  . " </p>";
        echo "<p class='qus'> 8-  " ." $qus_8  " . " </p>  " . $all_question8  .  $div_b .  $yourans  . $answer_8  . " </p>";
        echo "<p class='qus'> 9-  " ." $qus_9  " . " </p>  " . $all_question9  .  $div_b .  $yourans  . $answer_9  . " </p>";
        echo "<p class='qus'> 10- " ." $qus_10 " . " </p>  " . $all_question10 .  $div_b .  $yourans  . $answer_10 . " </p>";
        echo " </div> ";
        ?>
 
        <!-- button back  -->
        <br> 
        <button class="button"> <a href="quiz.php"> Back </a> </button>
        
 </div>
 
</body>
 

</html>
