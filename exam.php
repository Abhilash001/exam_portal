<?php
    $q_id=1;

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <title>Exam Portal</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Custom styles for this template 
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript">
        angular.bootstrap(document.getElementById("quest"), ['ng_questions']);

    </script>

    <style type="text/css">
        body{
                   color:#000;
                   background-color:#fff;
          }

           #container{
                  /*Styling for any element with the id="container" */
                          width:1366px; /* The width is fixed by pixels */
                           height:768px; /* The height is fixed by pixels*/
                           
            }
    </style>
</head>

    
<body >
    <div id="container">
        <nav style="position: absolute; width: 1366px;">
            <ul>
                <li><a href="#"><img id="logo" src="images/stcet_logo2.png" style="float: left;"></a></li>
                <b><li id="demo" class="timer1" style="position:absolute;"></li></b>
                <li><button id="submit" class="button" style="vertical-align:middle"> <b><span>Submit </span></b> </button></li>
            </ul>
        </nav>
        <p style="font-size: 11px; color: #FF0000; padding-left: 800px; padding-top: 82px;"><b>Hours &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMinutes&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSeconds</b></p>
        <!-- count particles -->
        <div id="sidebar" class="vl" ng-app="myApp" ng-controller="Main">
            <br>
            <div id="physics" class="w3-container"> 
                <b>&nbsp&nbsp&nbspPhysics</b><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(1,10)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(11,20)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(21,25)">{{n}}</button>
            </div>
            <br>
            <div id="chemistry" class="w3-container"> 
                <b>&nbsp&nbspChemistry</b><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(26,35)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(36,45)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(46,50)">{{n}}</button>
            </div>
            <br>
            <div id="maths" class="w3-container"> 
                <b>&nbsp&nbsp&nbspMaths</b><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(51,60)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(61,70)">{{n}}</button><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(71,80)">{{n}}</button>
            </div>
            <br>
            <div id="english" class="w3-container"> 
                <b>&nbsp&nbsp&nbspEnglish</b><br>
                <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(81,90)">{{n}}</button><br>
               <button id="q{{getId(n)}}" class="qbtn" ng-repeat="n in range(91,100)">{{n}}</button> 
            </div>
        </div>

        <div id="quest" ng-app="ng_questions" ng-controller="myController">

            <!-- I will add a div here later for the mark, previous, next buttons -->


            <!-- Question div comes after this line -->
            <p> Here the questions go. </p>
            <div ng-repeat="question in questions">
            <p>{{question.text}}</p>
            <p ng-repeat="option in question.options">&nbsp;&nbsp;&nbsp;{{option}}</p>

        
            
        </div>

        <p>Question:</p>
       <div id="quest1"><b></b></div>
    
        <div method="post" action="exam.php">
            
                <button type="nextbtn" name="next" class="btn1" onclick="showQuestion()">Next</button>
           
        </div>

        

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="js/script.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    </div>
</body>
</html>