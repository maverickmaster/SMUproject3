<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Quiz</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/">

    <!-- Bootstrap core CSS (works only if you have downloaded Bootstrap; if not, paste over from a Bootstrap website) -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">


</head>


<body>
    <!-- Bring in the company's header. -->
    <?php
    include("qheader.php");
    ?>

    <h2>The Quiz! </h2>

    <form action="" method="GET" id="quiz">
        <!-- Q1 -->
        <div class="row" id="question1>">
            <div class="col sm-12">
                <div class="qntxtbox">


                    <img class="col-sm-6" src="Q1.jpg">


                    <h4>Question 1</h4>
                    <P> What are the colors of the Singaporean flag? </P>


                    <div class="col-sm-3">
                        <p> A. Red & White </p>
                        <p> B. Pink & White </p>
                    </div>

                    <div class="col-sm-3">

                        <p> C. Red </p>
                        <p> D. White</p>
                    </div>
                </div>



                <input class="ans" type="text" name="answer-1" placeholder="Answer here" />
            </div>
        </div>
        <br>
        <hr>
        <!-- //Q2  -->
        <div class="row" id="question2>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="col-sm-6" src="Q2.jpg">
                    <h4>Question 2</h4>
                    <p> Who was the first elected president of Singapore? </P>
                    <div class="col-sm-3">
                        <p> A. Lee Kuan Yew </p>
                        <p> B. Halimah Yacob </p>
                    </div>
                    <div class="col-sm-3">
                        <p> C. Ong Teng Cheong </p>
                        <p> D. SR Nathan </p>
                    </div>
                </div>
                <input class="ans" type="text" name="answer-2" placeholder="Answer here" />
            </div>
        </div>
        <br>
        <hr>
        <!-- Q3 -->
        <div class="row" id="question3>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="col-sm-6" src="Q3.jpg">
                    <h4>Question 3</h4>
                    <P> What day did Singapore gain its independence?</P>
                    <div class="col-sm-3">
                        <p> A. August 9, 1965 </P>
                        <P> B. July 1, 1965 </p>
                    </div>
                    <div class="col-sm-3">
                        <p> C. August 9, 1918
                            <p> D. July 4, 1819
                    </div>
                </div>
                <input class="ans" type="text" name="answer-3" placeholder="Answer here" />
            </div>
        </div>
        <br>
        <hr>
        <!-- Q4 -->
        <div class="row" id="question4>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="col-sm-6" src="Q4.jpg">

                    <h4>Question 4</h4>
                    <p> What is the highest point in the island Singapore?</p>
                    <div class="col-sm-3">
                        <p> A. Red Hill </P>
                        <p> B. Fort Canning Hill </p>
                    </div>
                    <div class="col-sm-3">
                        <p> C. Mount Faber</p>
                        <p> D. Bukit Timah Hill</P>
                    </div>
                </div>
                <input class="ans" type="text" name="answer-4" placeholder="Answer here" />
            </div>
        </div>
        <br>
        <hr>
        <!-- Q5 -->
        <div class="row" id="question-5>">
            <div class="col sm-12">
                <div class="qntxtbox">
                    <img class="col-sm-6" src="Q5.jpg">
                    <h4>Question 5</h4>
                    <p>What is the maximum height of skyscrapers allowed in Singapore?</p>
                    <div class="col-sm-3">
                        <p> A. 250 Meters </p>
                        <p> B. 280 Meters </p>
                    </div>
                    <div class="col-sm-3">
                        <p> C. 300 Meters </p>
                        <p> D. 350 Meters </p>
                    </div>
                </div>
                <input class="ans" type="text" name="answer-5" placeholder="Answer here" />
            </div>
        </div>
        <br>
        <hr>
        </div>
        <input type="submit" value="Submit Quiz">
    </form>
    <!-- </body> -->
    <br>
    <hr>

    <h3>Let See how well you did in the Singapore Trivia Quiz?</h3>
    <?php

    $q1 = $_GET["answer-1"];
    $q2 = $_GET["answer-2"];
    $q3 = $_GET["answer-3"];
    $q4 = $_GET["answer-4"];
    $q5 = $_GET["answer-5"];

    // calculate total score 
    $totalCorrect = 0;
    if ($q1 == A || $q1 == a) {
        $totalCorrect++;
    }
    if ($q2 == C || $q2 == c) {
        $totalCorrect++;
    }
    if ($q3 == A || $q3 == a) {
        $totalCorrect++;
    }
    if ($q4 == D || $q4 == d) {
        $totalCorrect++;
    }
    if ($q5 == B || $q5 == b) {
        $totalCorrect++;
    }
    echo "<div id='results'> Your Score is $totalCorrect / 5 correct</div>";

    // Check Answer and empty method
    // Q1 Answer 
    if ($q1 == A || $q1 == a) {
        echo "Question 1 answer is Correct \"A. Red & White\"!";
    } elseif (empty($q1) == true) {
        echo "Question 1 has not been Answered!";
    } else {
        echo "Question 1 answer is Wrong!";
    }
    echo "<br>";

    // Q2 Answer 
    if ($q2 == C || $q2 == c) {
        echo "Question 2 answer is Correct \"C. Ong Teng Cheong\"!";
    } elseif (empty($q2) == true) {
        echo "Question 2 has not been Answered!";
    } else {
        echo "Question 2 answer is Wrong!";
    }
    echo "<br>";

    // Q3 Answer 
    if ($q3 == A || $q3 == a) {
        echo "Question 3 answer is Correct \"A. August 9, 1965\"!";
    } elseif (empty($q3) == true) {
        echo "Question 3 has not been Answered!";
    } else {
        echo "Question 3 answer is Wrong!";
    }
    echo "<br>";

    // Q4 Answer 
    if ($q4 == D || $q4 == d) {
        echo "Question 4 answer is Correct \"D. Bukit Timah Hill\"!";
    } elseif (empty($q4) == true) {
        echo "Question 4 has not been Answered!";
    } else {
        echo "Question 4 answer is Wrong!";
    }
    echo "<br>";

    // Q5 Answer 
    if ($q5 == B || $q5 == b) {
        echo "Question 5 answer is Correct \"B. 280 Meters\"!";
    } elseif (empty($q5) == true) {
        echo "Question 5 has not been Answered!";
    } else {
        echo "Question 5 answer is Wrong!";
    }
    // calculateAns($_Get["answer-1"], $_GET["answer-2"], $_GET["answer-3"], $_GET["answer-4"], $_GET["answer-5"]);
    echo "<br>";
    ?>


    <hr>
    <!-- Bring in the copyright footer -->
    <?php
    include("qfooter.php");
    ?>
</body>

</html>