<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<div class="header">
    <div class="row" style="background-color:#f4511e;">
        <div class="col-lg-6">
            <span class="logo"></span>
        </div>
        <div class="col-md-4 col-md-offset-2">
            <?php
            //include_once '../models/dbConnection.php';
            session_start();
            if (!(isset($_SESSION['email']))) {
                header("location:index.php");
            } else {
                $name = $_SESSION['name'];
                $email = $_SESSION['email'];

                //include_once '../models/dbConnection.php';
                echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Welcome,</span> <a href="views/account.php?q=1" class="log log1">' . $name . '</a>&nbsp;|&nbsp;<a href="views/logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>';
            } ?>
        </div>
    </div>
</div>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PARAKH</title>
    <link rel="stylesheet" href="views/css/bootstrap.min.css" />
    <link rel="stylesheet" href="views/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="views/css/main.css">
    <link rel="stylesheet" href="views/css/font.css">
    <script src="views/js/jquery.js" type="text/javascript"></script>


    <script src="views/js/bootstrap.min.js" type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <!--alert message-->
    <?php if (@$_GET['w']) {
        echo '<script>alert("' . @$_GET['w'] . '");</script>';
    }
    ?>
    <!--alert message end-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <style>
        /* Header styles */
        .header {
            background-color: #f4511e;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            /* Center-align header content */
        }

        .header h1 {
            font-size: 36px;
            font-weight: bold;
            margin: 0;
        }

        /* Navigation menu styles */
        .navbar {
            background-color: #4D648D;
            border: none;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 16px;
            font-weight: bold;
            letter-spacing: 2px;
            text-transform: uppercase;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar .navbar-brand {
            color: #f4511e !important;
            font-size: 24px;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar .navbar-brand:hover {
            color: #f4511e;
            text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
        }

        .navbar .navbar-nav>li>a {
            color: #f4511e;
            padding: 20px;
            transition: all 0.5s;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar .navbar-nav>li>a:hover {
            color: #f4511e;
            background-color: #1E3A8A;
            transform: scale(1.1);
        }

        .navbar .dropdown-menu {
            background-color: #4D648D;
            border: none;
            border-radius: 0;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar .dropdown-menu>li>a {
            color: #fff;
            padding: 10px 20px;
            transition: all 0.5s;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .navbar .dropdown-menu>li>a:hover {
            color: #f4511e;
            background-color: #1E3A8A;
            transform: scale(1.1);
        }

        /* Container styles */
        .container {
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        /* Button styles */
        .btn-primary {
            background-color: #f4511e;
            border: none;
            color: #fff;
            padding: 12px 24px;
            /* Increase button padding */
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff6f3d;
            /* Highlight button on hover */
        }

        /* Form styles */
        .form-horizontal label {
            font-weight: bold;
            font-size: 18px;
            /* Increase label font size */
        }

        /* Add animation to the form */
        .form-animation {
            animation: fadeIn 1s;
        }

        /* Custom styles for the question and options */
        .question {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .options label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
        }

        /* Additional styles for the result section */
        .result {
            font-size: 24px;
            font-weight: bold;
            margin-top: 20px;
        }

        /* Add a subtle border to input radio buttons */
        input[type="radio"] {
            border: 2px solid #f4511e;
            border-radius: 50%;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            vertical-align: middle;
        }

        /* Style label */
        label {
            /* display: block; */
            /* position: relative; */
            /* padding-left: 30px; */
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 18px;
            color: #333;
        }

        label:before {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 2px;
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            border-radius: 50%;
        }

        /* Customize the selected radio button */
        input[type="radio"]:checked+label:before {
            background-color: #FFC300;
            border-color: #FFC300;
        }

        /* Style submit button */
        .submit {
            grid-row: 3 / 4;
            text-align: center;
        }

        button {
            background-color: #FFC300;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #333;
        }
    </style>

</head>

<body>

    <div class="bg">

        <!--navigation menu-->
        <nav class="navbar navbar-default title1">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="account.php?q=1"><b>Dashboard - Student</b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar left">
                        <li <?php if (@$_GET['q'] == 1) echo 'class="active"'; ?>><a href="views/account.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
                        <li <?php if (@$_GET['q'] == 2) echo 'class="active"'; ?>><a href="views/account.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
                        <li <?php if (@$_GET['q'] == 3) echo 'class="active"'; ?>><a href="views/account.php?q=3"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Ranking</a></li>

                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav><!--navigation menu closed-->


        <div class="container">
            <center>
                <h2>Quiz Section</h2>
            </center>
            <?php if (!empty($diff)) {
                echo "<p>Prediction: " . $diff . "</p>";
            } ?>
            <?php if (isset($userData) && !empty($userData)) {
                echo "<p>Prev Qn Stat: ";
                print_r($userData);
                echo "</p>";
            } ?>
            <?php echo "<p>Current Difficulty: " . $qn_diff . "</p>"; ?>
            <form action="router.php" method="post">
                <div class="grid-container">
                    <div class="question">
                        <h3><?php echo $question; ?></h3>
                    </div>
                    <?php
                    $cnt = 1;

                    foreach ($options as $option) {

                        echo '<div class="option">';
                        echo '<input type="radio" id="option' . $cnt . '" name="answer" value="' . $cnt . '">';
                        echo '<label for="option' . $cnt . '">' . $option . '</label>';
                        echo '</div>';
                        $cnt++;
                    }
                    ?>
                    <div class="submit">
                        <input type="hidden" name="qn_num" value="<?php echo $qn_num; ?>">
                        <input type="hidden" name="qn_id" value="<?php echo $qn_id; ?>">
                        <input type="hidden" id="page_load_time" name="page_load_time" value="<?php echo time(); ?>">
                        <button type="submit">Next Question</button>
                    </div>
                </div>
            </form>
        </div>

        <script>
            document.getElementById("page_load_time").value = Math.floor((new Date()).getTime() / 1000);
        </script>

        <div class="container"><!--container start-->
            <div class="row">
                <div class="col-md-12">






                    <!--home start-->
                    <?php if (@$_GET['q'] == 1) {
                        echo '
              <div>
        <form action="../router.php" method="post">
            <input type="hidden" name="test_start" >
            <button type="submit">Click here to start the Test</button>
        </form>
        </form>
    </div>
              ';

                        //             $result = mysqli_query($con, "SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                        //             echo  '<div class="panel"><table class="table table-striped title1">
                        // <tr style="color:black"><td><b>S.N.</b></td><td><b>Topic</b></td><td><b>Total question</b></td><td><b>Marks</b></td><td><b>positive</b></td><td><b>negative</b></td><td><b>Time limit</b></td><td></td><td></td></tr>';
                        //             $c = 1;
                        //             while ($row = mysqli_fetch_array($result)) {
                        //               $title = $row['title'];
                        //               $total = $row['total'];
                        //               $sahi = $row['sahi'];
                        //               $wrong = $row['wrong'];
                        //               $time = $row['time'];
                        //               $eid = $row['eid'];
                        //               // $id = $row['id'];
                        //               $q12 = mysqli_query($con, "SELECT score FROM history WHERE eid='$eid' AND email='$email'") or die('Error98');
                        //               $rowcount = mysqli_num_rows($q12);
                        //               if ($rowcount == 0) {
                        //                 echo '<tr><td>' . $c++ . '</td><td>' . $title . '</td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $sahi . '</td><td>' . $wrong . '</td><td>' . $time . '&nbsp;min</td>
                        //   <td><a title="Open quiz description" href="account.php?q=1&fid=' . $eid . '"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>
                        //   <td><b><a href="account.php?q=quiz&step=2&eid=' . $eid . '&n=1&t=' . $total . '" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
                        //               } else {
                        //                 echo '<tr style="color:#99cc32"><td>' . $c++ . '</td><td>' . $title . '&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>' . $total . '</td><td>' . $sahi * $total . '</td><td>' . $sahi . '</td><td>' . $wrong . '</td><td>' . $time . '&nbsp;min</td>
                        //   </tr>';
                        //               }
                        //             }
                        //             $c = 0;
                        //             echo '</table></div>';
                    } ?>
                    <!----quiz reading portion starts--->

                    <?php if (@$_GET['fid']) {
                        echo '<br />';
                        $eid = @$_GET['fid'];
                        $result = mysqli_query($con, "SELECT * FROM quiz WHERE eid='$eid' ") or die('Error');
                        while ($row = mysqli_fetch_array($result)) {
                            // $name = $row['name'];
                            $title = $row['title'];
                            $date = $row['date'];
                            $date = date("d-m-Y", strtotime($date));
                            //$time = $row['time'];
                            $intro = $row['intro'];

                            echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>' . $title . '</b></h1>';
                            echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;' . $date . '</span>
<span style="line-height:35px;padding:5px;"></span><br />' . $intro . '</div></div>';
                        }
                    } ?>
                    <!--quiz reading portion closed-->

                    <!-- <span id="countdown" class="timer"></span>
          <script>
            var seconds = 40;

            function secondPassed() {
              var minutes = Math.round((seconds - 30) / 60);
              var remainingSeconds = seconds % 60;
              if (remainingSeconds < 10) {
                remainingSeconds = "0" + remainingSeconds;
              }
              document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
              if (seconds == 0) {
                clearInterval(countdownTimer);
                document.getElementById('countdown').innerHTML = "Buzz Buzz";
              } else {
                seconds--;
              }
            }
            var countdownTimer = setInterval('secondPassed()', 1000);
          </script> -->

                    <!--home closed-->

                    <!--quiz start-->
                    <?php
                    if (@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
                        $eid = @$_GET['eid'];
                        $sn = @$_GET['n'];
                        $total = @$_GET['t'];
                        $q = mysqli_query($con, "SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' ");
                        echo '<div class="panel" style="margin:5%">';
                        while ($row = mysqli_fetch_array($q)) {
                            $qns = $row['qns'];
                            $qid = $row['qid'];
                            echo '<b>Question &nbsp;' . $sn . '&nbsp;::<br />' . $qns . '</b><br /><br />';
                        }
                        $q = mysqli_query($con, "SELECT * FROM options WHERE qid='$qid' ");
                        echo '<form action="update.php?q=quiz&step=2&eid=' . $eid . '&n=' . $sn . '&t=' . $total . '&qid=' . $qid . '" method="POST"  class="form-horizontal">
<br />';

                        while ($row = mysqli_fetch_array($q)) {
                            $option = $row['option'];
                            $optionid = $row['optionid'];
                            echo '<input type="radio" name="ans" value="' . $optionid . '">' . $option . '<br /><br />';
                        }
                        echo '<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                        //header("location:dash.php?q=4&step=2&eid=$id&n=$total");
                    }
                    //result display
                    if (@$_GET['q'] == 'result' && @$_GET['eid']) {
                        $eid = @$_GET['eid'];
                        $q = mysqli_query($con, "SELECT * FROM history WHERE eid='$eid' AND email='$email' ") or die('Error157');
                        echo  '<div class="panel">
<center><h1 class="title" style="color:#660033">Result</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while ($row = mysqli_fetch_array($q)) {
                            $s = $row['score'];
                            $w = $row['wrong'];
                            $r = $row['sahi'];
                            $qa = $row['level'];
                            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>' . $qa . '</td></tr>
      <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>' . $r . '</td></tr> 
    <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>' . $w . '</td></tr>
    <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
                        }
                        $q = mysqli_query($con, "SELECT * FROM `rank` WHERE  email='$email' ") or die('Error157');
                        while ($row = mysqli_fetch_array($q)) {
                            $s = $row['score'];
                            echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>' . $s . '</td></tr>';
                        }
                        echo '</table></div>';
                    }
                    ?>
                    <!--quiz end-->
                    <?php
                    //history start
                    if (@$_GET['q'] == 2) {
                        $q = mysqli_query($con, "SELECT * FROM history WHERE email='$email' ORDER BY date DESC ") or die('Error197');
                        echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black"><td><b>S.N.</b></td><td><b>Quiz</b></td><td><b>Question Solved</b></td><td><b>Right</b></td><td><b>Wrong<b></td><td><b>Score</b></td>';
                        $c = 0;
                        while ($row = mysqli_fetch_array($q)) {
                            $eid = $row['eid'];
                            $s = $row['score'];
                            $w = $row['wrong'];
                            $r = $row['sahi'];
                            $qa = $row['level'];
                            $q23 = mysqli_query($con, "SELECT title FROM quiz WHERE  eid='$eid' ") or die('Error208');
                            while ($row = mysqli_fetch_array($q23)) {
                                $title = $row['title'];
                            }
                            $c++;
                            echo '<tr><td>' . $c . '</td><td>' . $title . '</td><td>' . $qa . '</td><td>' . $r . '</td><td>' . $w . '</td><td>' . $s . '</td></tr>';
                        }
                        echo '</table></div>';
                    }

                    //ranking start
                    if (@$_GET['q'] == 3) {
                        $q = mysqli_query($con, "SELECT * FROM `rank` ORDER BY score DESC") or die('MySQL Error: ' . mysqli_error($con));

                        echo  '<div class="panel title">
<table class="table table-striped title1" >
<tr style="color:black"><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
                        $c = 0;
                        while ($row = mysqli_fetch_array($q)) {
                            $e = $row['email'];
                            $s = $row['score'];
                            $q12 = mysqli_query($con, "SELECT * FROM user WHERE email='$e' ") or die('Error231');
                            while ($row = mysqli_fetch_array($q12)) {
                                $name = $row['name'];
                                $gender = $row['gender'];
                                $college = $row['college'];
                            }
                            $c++;
                            echo '<tr><td style="color:#99cc32"><b>' . $c . '</b></td><td>' . $name . '</td><td>' . $gender . '</td><td>' . $college . '</td><td>' . $s . '</td><td>';
                        }
                        echo '</table></div>';
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</body>

</html>