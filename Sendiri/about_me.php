<?php
   session_start();
  // Check if the user is logged in, if not then redirect him to login page
   if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
       header("location: login.php");
       exit;
    }
    $usrlevel = $_SESSION["userlevel"]; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="icon" href="image/ZxcS.jpg" type="image/jpg">
    
    <title>About Me</title>

    <style>
        h1,h2,h3,p {
            text-align: center;
        }


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            position: -webkit-sticky;
            /* Safari */
            position: sticky;
            top: 0;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover:not(.active) {
            background-color: #111;
        }

        .active {
            background-color: #9F87F6;
        }
    </style>
    <style>
        body {
            background-image: url('image/back2.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }
    </style>

    <style>
       body {
                font-family:cursive;
            }
    </style>

    <style>
        .footer {
            position: fixed;
            padding: 10px 10px 0px 10px;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2.5rem;
            background-color: #9F87F6;
            color: black;
            text-align: center;
        }
    </style>

    <!-- TimeTable management -->
    <style>
        td {
            text-align: center;
            height: 68px;
            border-style: solid;
        }

        th {
            width: 8.3%;
            border-style: solid;
        }

        table {
            border-style: solid;
            border-bottom-style: solid;
            border-collapse: collapse;
        }
    </style>

    <style>
        /* adjust margin of footer */
        #p{
            font-weight: bold;
            margin-bottom: 0%;
            margin-top: 0%;
        }
    </style>

</head>

<body>

    <ul>
        <li><a href="logout.php">Logout</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a class="active" href="about_me.php">About Me</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="my_portfolio.php">My Portfolio</a></li>
        <li style="float:left"><a href="index.php">Homepage</a></li>
    </ul>

    <h1 style="background-color:lightpink;" style="text-align:center">My Schedule</h1>

    <table width="100%">
        <tr>
            <th style="height: 20px;"></th>
            <th>8:00 am</th>
            <th>9:00 am</th>
            <th>10:00 am</th>
            <th>11:00 am</th>
            <th>12:00 pm</th>
            <th>1:00 pm</th>
            <th>2:00 pm</th>
            <th>3:00 pm</th>
            <th>4:00 pm</th>
            <th>5:00 pm</th>
            <th>6:00 pm</th>
        </tr>
        <tr>
            <th>Sundays</th>
            <td colspan="2"><b>CSC508</b><br>8:00am-9:50am</td>
            <td colspan="2"><b>CSC569</b><br>10:15am-12:05pm</td>
            <td><b>CTU554</b><br>12:15pm-1:05am</td>
            <td colspan="6"></td>
        </tr>
        <tr>
           <th>Mondays</th> 
           <td colspan="2"><b>CSC577</b><br>8:00am-9:50am</td>
           <td colspan="2"><b>CSC574</b><br>10:15am-12:05pm</td>
           <td colspan="2"><b>CSC584</b><br>12:15pm-2:05pm</td>
           <td colspan="5"></td>
        </tr>
        <tr>
           <th>Tuesday</th> 
           <td colspan="2"><b>CSC569</b><br>8:00am-9:50am</td>
           <td colspan="2"></td>
           <td colspan="2"><b>ELC650</b><br>12:15pm-2:05pm</td>
           <td colspan="2"><b>CSC508</b><br>2:30pm-4:20pm</td>
           <td colspan="3"><b>CSC577</b><br>4:30pm-6:20pm</td>
           
        </tr>
        <tr>
            <th>Wednesday</th>
            <td colspan="2"></td>
            <td colspan="2"><b>CSC577</b><br>10:15am-12:05pm</td>
            <td><b>CTU554</b><br>12:15pm-1:05pm</td>
            <td colspan="6"></td>
        </tr>
        <tr>
            <th>Thursday</th>
            <td colspan="2"></td>
            <td colspan="2"><b>TMC451</b><br>10:15am-12:05pm</td>
            <td colspan="2"></td>
            <td colspan="2"><b>CSC584</b><br>2:30am-4:20pm</td>
            <td colspan="3"></td>
        </tr>
    </table>

    
    
    <br>
    <h1 style="background-color:lightpink;" style="text-align:center">My Goals</h1>

    <table border=0.5 width=60% style="border:3px solid black;margin-left:auto;margin-right:auto;">

        <tr>
            <th>Course Code</th>
            <th>Expected Grades</th>
        </tr>
        <tr>
            <td style="text-align:center">CSC 508</td>
            <td style="text-align:center">A+</td>
        </tr>
        <tr>
            <td style="text-align:center">CSC 569</td>
            <td style="text-align:center">A</td>
        </tr>
        <tr>
            <td style="text-align:center">CSC 574</td>
            <td style="text-align:center">A+</td>
        </tr>
        <tr>
            <td style="text-align:center">CTU 554</td>
            <td style="text-align:center">A+</td>
        </tr>
        <tr>
            <td style="text-align:center">CSC 584</td>
            <td style="text-align:center">A+</td>
        </tr>
        <tr>
            <td style="text-align:center">ELC 650</td>
            <td style="text-align:center">A</td>
        </tr>
        <tr>
            <td style="text-align:center">TMC 451</td>
            <td style="text-align:center">A</td>
        </tr>
    </table>

    <br>
    <h1 style="background-color:lightpink;" style="text-align:center">My Target</h1>
    <table border=0.5 width=70% style="border:3px solid black;margin-left:auto;margin-right:auto;">
        <tr>
            <th>Previous GPA</th>
            <th>GPA</th>
            <th>CGPA</th>
        </tr>
        <tr>
            <td style="text-align:center">3.54</td>
            <td style="text-align:center">3.90</td>
            <td style="text-align:center">3.80</td>
        </tr>
        </tr>
    </table>

    <h2 style="background-color:lightpink;" style="text-align:center">" Be an Active Procrastination "</h2>
    <p><img height=200 width=200 src="image/crest22.png"></p><br><br>
    <div class="footer">
        <p><b>< ZxC Server ></b></p>
    </div>

    <div id=footer class="footer">
        <p id=p>Contact me at: <a href="https://www.instagram.com/muhammadfaiz.zxc/" target="blank">
                <img alt="Faiz's Instagram" src="image/logo_insta.png" width="25" height="25">
            </a>
    </div>
</body>

</html>