<?php

/* 
    This page to edit,
    1- Exam name on page quiz.php
    2- Choices in multiple choice questions
    3- True and False in True and False Questions
    4- questions
    5- Exam name on page result.php
    6- correct answer
    7- Answer details
*/

// Exam name on page quiz.php
$quiz_name_main = " C++ Programming ";

// true & false & Multiple choice &  total Correct answer  /* don't need to change it */

/* Used to Format Questions only  */
$ans_true = "True"; 
$ans_false = "False";
$ans_a = "A)";
$ans_b = "B)";
$ans_c = "C)";
$ans_d = "D)";

/* Used for if statement  */
$mlt_A = "A";
$mlt_B = "B";
$mlt_C = "C";
$mlt_D = "D";
$mlt_T = "true";
$mlt_F = "false";

/* Calculate the correct answers */
$totalCorrect = 0; // default 0


// Multiple options for question 1
$question1_option_A = $ans_a . " 7var_name ";
$question1_option_B = $ans_b . " 7VARNAME";
$question1_option_C = $ans_c . " VAR_1234";
$question1_option_D = $ans_d . " -var_name";

// Multiple options for question 2
$question2_option_A = $ans_a . " * ";
$question2_option_B = $ans_b . " &";
$question2_option_C = $ans_c . " - ";
$question2_option_D = $ans_d . " % ";

// Multiple options for question 3
$question3_option_A = $ans_a . " // comment ";
$question3_option_B = $ans_b . " /* comment */ ";
$question3_option_C = $ans_c . " both // comment or /* comment */";
$question3_option_D = $ans_d . "  // comment */ ";

// Multiple options for question 4
$question4_option_A = $ans_a . " cin.get(ch) ";
$question4_option_B = $ans_b . " getline(ch) ";
$question4_option_C = $ans_c . " read(ch) ";
$question4_option_D = $ans_d . " scanf(ch) ";

// Multiple options for question 5
$question5_option_A = $ans_a . " << ";
$question5_option_B = $ans_b . " >> ";
$question5_option_C = $ans_c . " > ";
$question5_option_D = $ans_d . " < ";

// True and False for question 6 /* don't need to change it */
$question6_option_A = $ans_true;
$question6_option_B = $ans_false;

// True and False for question 7 /* don't need to change it */
$question7_option_A = $ans_true;
$question7_option_B = $ans_false;

// True and False for question 8 /* don't need to change it */
$question8_option_A = $ans_true;
$question8_option_B = $ans_false;

// True and False for question 9 /* don't need to change it */
$question9_option_A = $ans_true;
$question9_option_B = $ans_false;

// True and False for question 10 /* don't need to change it */
$question10_option_A = $ans_true;
$question10_option_B = $ans_false;

/***************************** Here the questions are changed *****************************/
$qus_1  =  " Which of the following is a correct identifier in C++? "; //question 1
$qus_2  =  " Which of the following is called address operator? "; // question 2
$qus_3  =  " Which of the following is used for comments in C++? "; // question 3
$qus_4  =  " Which function is used to read a single character from the console in C++? "; // question 4
$qus_5  =  " Which of the following is called extraction/get from operator? "; // question 5 
$qus_6  =  " Boolean operator for (OR) is \" || \" "; // question 6
$qus_7  =  " Boolean operator for (AND) is \" ++ \" "; // question 7
$qus_8  =  " To print using C++ we use Cout<< "; // question 8
$qus_9  =  " in c++ the sign is used: At the end of the code line programing  "; // question 9 
$qus_10 =  " The variables that can be used only within the function in which it is declared is called as Local Variables"; // question 10

// *************************************************************************************** //

// Exam name on page result.php /* If you want the same name, do not change  */
$name_quiz_result = $quiz_name_main  ;


// Correct answer (summary) /* Need to change */ 
$ans_1_s =  $question1_option_C;
$ans_2_s =  $question2_option_B;
$ans_3_s =  $question3_option_C;
$ans_4_s =  $question4_option_A;
$ans_5_s =  $question5_option_B;
$ans_6_s =  $ans_true;
$ans_7_s =  $ans_false;
$ans_8_s =  $ans_true;
$ans_9_s =  $ans_false;
$ans_10_s = $ans_true;

// User answer details  det_1 = question 1 ... // 
$ans_det_1 =  "  <p> The rules for writing an identifier is as follows: i) may contain lowercase/uppercase letters, digits or underscore(_) only  ii) should start with a non-digit character  iii) should not contain any special characters like @, $, etc. </p> ";
$ans_det_2 =  "  <p> & operator is called address operator and is used to access the address of a variable. </p> ";
$ans_det_3 =  "  <p> Both the ways are used for commenting in C++ programming. // is used for single line comments and /* … */ is used for multiple line comments. </p> ";
$ans_det_4 =  "  <p> C++ provides cin.get() function to read a single character from console whereas others are used to read either a single or multiple characters. </p> ";
$ans_det_5 =  "  <p> >> operator is called extraction or get from operator i.e. extract/get things from console/files. </p>";
$ans_det_6 =  "  <p> sign || used for opraitor OR  </p> ";
$ans_det_7 =  "  <p> sign && used for opraitor AND </p>";
$ans_det_8 =  "  <p> The cout object, together with the << operator, is used to output values/print text </p>";
$ans_det_9 =  "  <p> All C++ statements must end with a semicolon character \";\"</p> ";
$ans_det_10 = "  <p> Local Variables can be used only within the function in which it is declared  </p>";

?>
