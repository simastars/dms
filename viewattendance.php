<?php
   include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script type="text/javascript" src="vendor/jquery-1.11.3.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
        <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="vendor/login/css/style.css">
        <script  src="vendor/login/js/index.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <style>
            body{
                 background:white;
                   background-image: url("image/bg4.jpeg");
                    background-size: cover;
                    font-family: 'Lato', sans-serif;
            }
            .navbar{
                background-color: black;
                color:white;
                font-family: 'Montserrat', sans-serif;

            }
            .navbar-default .navbar-nav>li>a {
                color: white!important;
            }
            .dropdown-menu>li>a {
                 background-color: black;
                color:white;
            }
            .navbar-nav>li>.dropdown-menu
            {
                padding: 0px;
            }

        	.footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 50px;
                background-color:black;
                text-align: center;
                padding: 10px;
                color: white;
                }
            @media(min-width:800px){
            .nav{
                margin-left: 90px;
            }
            }

          @import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

          body {
            
            font-weight: bold;
            text-rendering: optimizeLegibility;
          }

          div.table-title {
            display: block;
            margin: auto;
            max-width: 600px;
            width: 100%;
          }

          .table-title h3 {
            color: #fafafa;
            font-size: 30px;
            font-weight: 400;
            font-style:normal;
            font-family: "Roboto", helvetica, arial, sans-serif;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            text-transform:uppercase;
          }


          /*** Table Styles **/

          .table-fill {
            border-radius:3px;
            border-collapse: collapse;
            height: 320px;
            margin: auto;
            max-width: 100%;
            padding:5px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
          }
          
          th {
            color:black;
              border-top:4px solid #9ea7af;
            border-bottom:4px solid #9ea7af;
            font-size:19px;
            font-weight: 400;
            
            padding:24px;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            vertical-align:middle;: 
          }

          th:first-child {
            border-top-left-radius:3px;
          }
          
          th:last-child {
            border-top-right-radius:3px;
            border-right:none;
          }
            
          tr {
            border-top: 1px solid #C1C3D1;
            border-bottom-: 1px solid #C1C3D1;
            color:#666B85;
            font-size:16px;
            font-weight:normal;
            text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
          }
          
          tr:hover {
          opacity:0.8;   /*border-top: 1px solid #22262e;*/
          }
          td:hover{
            
          }

          #sub:hover{
          
            /*border-top: 1px solid #22262e;*/
          }
          
          tr:first-child {
            border-top:none;
          }

          tr:last-child {
            border-bottom:none;
          }
          
          tr:nth-child(odd) td {
          }
          
          tr:nth-child(odd):hover td {

          }

          tr:last-child td:first-child {
            border-bottom-left-radius:3px;
          }
          
          tr:last-child td:last-child {
            border-bottom-right-radius:3px;
          }
          
          td {
            color:black;
            padding:10px;
            text-align:left;
            vertical-align:middle;
            font-size:18px;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
          }

          td:last-child {
            border-right: 0px;
          }

          th.text-left {
            text-align: left;
          }

          th.text-center {
            text-align: center;
          }

          th.text-right {
            text-align: right;
          }

          td.text-left {
            text-align: left;
          }

          td.text-center {
            text-align: center;
          }

          td.text-right {
            text-align: right;
          }

          table{
            opacity:0.9;
          }
          @import "compass/css3";

          .table-editable {
            position: relative;
            
            .glyphicon {
              font-size: 20px;
            }
          }

          .table-remove {
            color: #700;
            cursor: pointer;
            
            &:hover {
              color: #f00;
            }
          }

          .table-up, .table-down {
            color: #007;
            cursor: pointer;
            
            &:hover {
              color: #00f;
            }
          }

          .table-add {
            color: #070;
            cursor: pointer;
            position: absolute;
            top: 8px;
            right: 0;
            
            &:hover {
              color: #0b0;
            }
          }
        </style>

    </head>
    <body>
        <!--navbar-->
        <link rel="stylesheet" href="navbarstyle.css">
         <nav style="font-weight:bold; opacity:0.9;" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a  style="margin-left:-58px;color:white; font-weight:700; font-size:25px;"class="navbar-brand" href="home.html">DMS</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <div id="cssmenu">
                    <ul class="nav navbar-nav">
                    <li  ><a  href="home.html">HOME</a></li>
                    <li ><a  href="studentlogin.php">STUDENT </a></li>
                     
                    <li class="dropdown active"><a  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FACULTY <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                           <li><a href="facultyhome.php">Faculty Home</a></li>
                        <li><a href="internalmarks.php">IA Marks</a></li>
                        <li><a href="attendance.php"> Attendance</a></li>
                    
                    </ul>
                    
                    </li>
                      <li ><a  href="admin.php">ADMIN </a></li>

                    <li><a href="syllabus.php">SYLLABUS</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    </ul>
                  </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li style="margin-top:10px; color:white;     font: normal 19px 'Cookie', cursive;">Welcome <?php echo $login_session; /*echo $login_id ;*/?></p> 

                        <li><a href = "logout.php">Sign Out</a></li>
                    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
        </div>
          <!-- -->
          <div style=" margin-top:90px;">
          
          </div>
           <div  style="opacity:0.8; margin-bottom:40px;padding:5px; color:black;">
                  <div  class="text-center"  style="color:black;border-radius: 0px;margin-bottom:20px; font-size:25px; font-weight:bold; text-transform: uppercase;border: solid 0px black!important;" id="sub">
                            <?php

                                $subcode=$_GET['subcode'];
                                $date=$_GET['date'];
                                $class=$_GET['classno'];

                                $s="$subcode";
                                include('db_connection.php');
                                $query1="Select sub_name from Subjects where subcode='$subcode' ";
                                $subname=mysqli_query($dbHandle,$query1);
                                $row=mysqli_fetch_array($subname,MYSQL_ASSOC);
                                print $row['sub_name'];
                                print"  </div>";  
                                print"<p class='text-center'> Class No: $class</p>";
                                print"<p class='text-center'> Date:  $date</p>";
                                if(strcmp(substr($s,5,1),1)==0)
                                {
                                    print"<p class='text-center'>Semester: 1</p>";
                                }
                                if(strcmp(substr($s,5,1),2)==0)
                                {
                                
                                     print"<p class='text-center'>Semester: 2</p>";
                                    
                                }
                                if(strcmp(substr($s,5,1),3)==0)
                                {
                                
                                      print"<p class='text-center'>Semester: 3</p>";
                                }
                                if(strcmp(substr($s,5,1),5)==0)
                                {
                                
                                      print"<p class='text-center'>Semester: 5</p>";
                                }
                            
                                if(strcmp(substr($s,0,1),"1")==0)
                                {
                                
                                      print"<p class='text-center'>Section: 1</p>";
                                }
                                else{
                                 print"<p class='text-center'>Section: 2</p>";
                                }


                            ?>  
                      </div>
             </div>
    
    <?php
    include('db_connection.php');
    $subcode=$_GET['subcode'];
     $date=$_GET['date'];
    $hours=$_GET['classno'];
    print "<div class='table-title'>";
    print "</div>";
    print"<table style='color:white;' class='table-fill'>";
   print"";
    print"<thead> ";
    print"<tr>";
    print"<th class='text-center'>SL. </th>";
    print"<th class='text-center'>USN</th>";
     print"<th class='text-center'>NAME</th>";
      print"<th class='text-center'>ATTENDANCE</th>";
    print"</tr></thead>";

    print"<tbody class='table-hover'>";
    include('db_connection.php');
     $query2="Select usn_fk,name,attendance from Attend, Students where usn_fk=usn and hours=$hours and subcode_fk='$subcode' and date='$date'; ";
     $list=mysqli_query($dbHandle,$query2);                  
     if(!$list){
                die("Could not connect".mysql_error());
            }
    $i=1;
    while($rows=mysqli_fetch_array($list,MYSQL_ASSOC))
    {
       
         $usn=$rows['usn_fk'];    
        $name=$rows['name'];    
          $attendance=$rows['attendance'];
        if($attendance=='P')
        {
        print "<tr>";
         print"<td style='color:white;opacity:0.9;background:#558B2F;' class='text-center'>$i</td>";
        print"<td style='color:white;opacity:0.9;background: #558B2F;' class='text-center'>$usn</td>";
        

        print"<td style='color:white;opacity:0.9;background:#558B2F;' class='text-center'> $name</td>";
         print"<td style='color:white;opacity:0.9;background:#558B2F;' class='text-center'> $attendance</td>";
 
            
        print"</tr>";
        }
         if($attendance=='A')
        {
        print "<tr>";
         print"<td style='color:white;opacity:0.9;background: #D50000;' class='text-center'>$i</td>";
        print"<td style='color:white;opacity:0.9;background:#D50000;' class='text-center'>$usn</td>";
        

        print"<td style='color:white;opacity:0.9;background: #D50000;' class='text-center'> $name</td>";
         print"<td style='color:white;opacity:0.9;background: #D50000;' class='text-center'> $attendance</td>";
 
            
        print"</tr>";
        }
        $i++;
    }
    
    print"</tbody>";
    //print_r($objList);
    print"</table>";
    print" </div>";

?>

<br/><br/><br/><br/><br/>s

    <div class="footer" style="position:fixed;">
        <div class="container">
            <a style="color:#D5D5D5;" href="/pages/about.html">About</a> | 
            <a style="color:#D5D5D5" href="/pages/term.html">Terms</a> | 
            <a  style="color:#D5D5D5;"href="/pages/privacy.html">Privacy Policy</a> | 
            <a style="color:#D5D5D5;" href="/pages/licence.html">Licence information</a> | 
            <a  style="color:#D5D5D5;"href="/pages/contact.html">Contact</a> | 
            <spanstyle="color:#D5D5D5;"  >@copyright 2015 All-free-download.com</span>
         </div>

    </div>
    <script>
        var $TABLE = $('#table');
        var $BTN = $('#export-btn');
        var $EXPORT = $('#export');

        $('.table-add').click(function () {
          var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
          $TABLE.find('table').append($clone);
        });

        $('.table-remove').click(function () {
          $(this).parents('tr').detach();
        });

        $('.table-up').click(function () {
          var $row = $(this).parents('tr');
          if ($row.index() === 1) return; // Don't go above the header
          $row.prev().before($row.get(0));
        });

        $('.table-down').click(function () {
          var $row = $(this).parents('tr');
          $row.next().after($row.get(0));
        });

        // A few jQuery helpers for exporting only
        jQuery.fn.pop = [].pop;
        jQuery.fn.shift = [].shift;

        $BTN.click(function () {
          var $rows = $TABLE.find('tr:not(:hidden)');
          var headers = [];
          var data = [];
          
          // Get the headers (add special header logic here)
          $($rows.shift()).find('th:not(:empty)').each(function () {
            headers.push($(this).text().toLowerCase());
          });
          
          // Turn all existing rows into a loopable array
          $rows.each(function () {
            var $td = $(this).find('td');
            var h = {};
            
            // Use the headers from earlier to name our hash keys
            headers.forEach(function (header, i) {
              h[header] = $td.eq(i).text();   
            });
            
            data.push(h);
          });
          
          // Output the result
          $EXPORT.text(JSON.stringify(data));
        });
    </script>
    </body>
</html>
