<!-- |******************************************| -->
<!-- |Created by : Anas Alfahmi                 | -->
<!-- |github : https://github.com/Anas-Alfahmi  | -->
<!-- |twitter: https://twitter.com/Anas_4x      | -->
<!-- |******************************************| -->



<?php 
/* require for variables 
   This page contains user testing,
   to modify the questions and answers go to the var.php page,
   on this page you do not need to modify anything  */

    require_once "php/var.php"; // Variables are called
  ?>


<!DOCTYPE html>
<html lang="en">

<!-- meta -->
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=0.8">
<meta name="description" content=" test yourself" />
<meta name="keywords" content="test,exam">

<!-- title To change title , go to var.php  -->
<title> <?php echo $quiz_name_main ?> </title> 
<link rel="stylesheet" type="text/css" href="css/style.css" />
<script src="js/script.js"></script>
</head>

<body>
    

<?php 
   echo "<div>";
      echo "  <h1> exam :  " . $quiz_name_main . "  </h1>" ; ?>
    <div class='bordb'>
        <form action="php/result.php" method="post" id="quiz">
            <ol>
                <li>
                <?php echo " <h3> " .  $qus_1 . "</h3> " ;?>
                    <div>
                        <input class="green" type="radio" name="question-1" id="qus1-ansA" value="A"  />
                        <label for="qus1-ansA"> <?php echo $question1_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1" id="qus1-ansB" value="B"  />
                        <label for="qus1-ansB"> <?php echo $question1_option_B ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1" id="qus1-ansC" value="C" />
                        <label for="qus1-ansC"><?php echo $question1_option_C ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1" id="qus1-ansD" value="D"  />
                        <label for="qus1-ansD"> <?php echo $question1_option_D ?> </label>
                    </div>

                </li>

                <li>
                <?php echo " <h3> " .  $qus_2 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-2" id="qus2-ansA" value="A"  />
                        <label for="qus2-ansA"> <?php echo $question2_option_A ?>  </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2" id="qus2-ansB" value="B" />
                        <label for="qus2-ansB"> <?php echo $question2_option_B ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2" id="qus2-ansC" value="C" />
                        <label for="qus2-ansC"> <?php echo $question2_option_C ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2" id="qus2-ansD" value="D" />
                        <label for="qus2-ansD"> <?php echo $question2_option_D ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_3 . "</h3> " ;?>
                    <div>
                        <input type="radio" name="question-3" id="qus3-ansA" value="A" />
                        <label for="qus3-ansA"> <?php echo $question3_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3" id="qus3-ansB" value="B" />
                        <label for="qus3-ansB"> <?php echo $question3_option_B ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3" id="qus3-ansC" value="C" />
                        <label for="qus3-ansC"> <?php echo $question3_option_C ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-3" id="qus3-ansD" value="D" />
                        <label for="qus3-ansD"> <?php echo $question3_option_D ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_4 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-4" id="qus4-ansA" value="A" />
                        <label for="qus4-ansA"> <?php echo $question4_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4" id="qus4-ansB" value="B" />
                        <label for="qus4-ansB"> <?php echo $question4_option_B ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4" id="qus4-ansC" value="C" />
                        <label for="qus4-ansC"> <?php echo $question4_option_C ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-4" id="qus4-ansD" value="D" />
                        <label for="qus4-ansD"> <?php echo $question4_option_D ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_5 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-5" id="qus5-ansA" value="A" />
                        <label for="qus5-ansA"> <?php echo $question5_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5" id="qus5-ansB" value="B" />
                        <label for="qus5-ansB"> <?php echo $question5_option_B ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5" id="qus5-ansC" value="C" />
                        <label for="qus5-ansC"> <?php echo $question5_option_C ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-5" id="qus5-ansD" value="D" />
                        <label for="qus5-ansD"> <?php echo $question5_option_D ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_6 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-6" id="qus6-ansA" value="true" />
                        <label for="qus6-ansA"> <?php echo $question6_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-6" id="qus6-ansB" value="false" />
                        <label for="qus6-ansB"> <?php echo $question6_option_B ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_7 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-7" id="qus7-ansA" value="true" />
                        <label for="qus7-ansA"> <?php echo $question7_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-7" id="qus7-ansB" value="false" />
                        <label for="qus7-ansB"> <?php echo $question7_option_B ?> </label>
                    </div>
                </li>

                <li>

                <?php echo " <h3> " .  $qus_8 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-8" id="qus8-ansA" value="true" />
                        <label for="qus8-ansA"> <?php echo $question8_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-8" id="qus8-ansB" value="false" />
                        <label for="qus8-ansB"> <?php echo $question8_option_B ?> </label>
                    </div>

                </li>

                <li>

                <?php echo " <h3> " .  $qus_9 . "</h3> " ;?>

                    <div>
                        <input type="radio" name="question-9" id="qus9-ansA" value="true" />
                        <label for="qus9-ansA"> <?php echo $question9_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-9" id="qus9-ansB" value="false" />
                        <label for="qus9-ansB"> <?php echo $question9_option_B ?> </label>
                    </div>



                </li>

                <li>

                <?php echo " <h3> " .  $qus_10 . "</h3> " ;?>
                  
                    <div>
                        <input type="radio" name="question-10" id="qus10-ansA" value="true" />
                        <label for="qus10-ansA"> <?php echo $question10_option_A ?> </label>
                    </div>

                    <div>
                        <input type="radio" name="question-10" id="qus10-ansB" value="false" />
                        <label for="qus10-ansB"> <?php echo $question10_option_B ?> </label>
                    </div>



                </li>
            </ol>
            </div> 
                        <input type="submit" value="Send"  onclick="clicked();" class="submitbtn" />

        </form>

    </div>
  

</body>

</html>