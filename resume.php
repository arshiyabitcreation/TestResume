<!DOCTYPE html> 
<head>
    <link rel="stylesheet" href="style.css"/>
    <?php
    session_start();
    include('connection.php');  
    
?>

</head>
<body>
    <?php 
    $user_id1 = $_SESSION["user_id"];
    $sql = "SELECT * FROM `main_details` where `user_id`= $user_id1;";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($row['detail_type']=="Name"){
                $name= $row['detail'];
            }
            if($row['detail_type']=="email"){
                $email= $row['detail'];
            }
            if($row['detail_type']=="Mobile"){
                $mbl= $row['detail'];
            }
          
          }
        }
      else 
      {
        echo "0 results";
      }
   
    ?>
    <div class="main_main">
    <img src="./images/mypic.JPG" alt="My Pic">
    <div class="right_view1">
    <h2><?php echo $name; ?></h2>
    <p><b><?php echo "EMAIL:". $email; ?></b><br/>
    <b><?php echo "PHONE:". $mbl; ?></b></p>
</div> 
<div class="main_view">
    <div class="left_view">
        <div>
        <h4>OBJECTIVE</h4>
        <p>Seeking a position where I can be a part of the organization, 
            a position where my knowledge can be shared and enriched, to 
            learn new things and explore things and always seek ways to 
            improve myself.</p>
    </div>
    <div>
        <h4>TECHNICAL SKILLS</h4>
        <ul>
        <li><b>Web Designing </b>- PHP, HTML, CSS, C</li>
        <li><b>Script </b>- Java Script, jQuery</li>
        <li><b>Database </b>- SQL Server, MYSQL</li>
        
            
        </ul>
    </div>
    <div>
        <h4>ADITTIONAL COURSE </h4>
        <h5>Android Mobile Application - </h5>
        <p>Mobile Application using Appcelarator using JavaScript as scripting language. 
            I have done 2 projects namely Health24*7 and Activity Planner</p>
    </div>
</div>
<div class="right_view">
    <h4>EXPERIENCE</h4>
<pre><b>SOFTWARE DEVELOPER, WEB DEVELOPER & DESIGNER 
TRIONIX IT SOLUTIONS - SEP 2012 - FEB 2013</b></pre>
    <p>
        Designed and developed various user friendly website.
        Editing website content and making adjustments based on client feedback. Managed Digital Marketing.
    </p>
<br/>

<div>
    <pre><b>WEB DEVELOPER 
KOMQUEST SOLUTIONS - MARCH 2014 - JAN 2015
MARCH 2017 - MARCH 2020 </b></pre>
    <p>
        Designed and developed various user friendly website.
        Fixed bugs from existing websites. Developed various dynamic websites.         

    </p>

</div>
<div>
 
    <h4>EDUCATION</h4>
    
    <?php 
     $sql1 = "SELECT * FROM `marks_details` where `user_id`= $user_id1;;";
    $result1 = $con->query($sql1);
     if ($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
            ?>
            <ul>
            <li> <?php echo $row1["course"]."-". $row1["year"]; ?></li>
            <li><?php echo $row1["school"] ?></li>
            <li><?php echo "MARKS OBTAINED -".$row1["marks"] ?></li>
            </ul>
            <?php
          }
      } else 
      {
        echo "0 results";
      }
      $con->close();
    ?>
</div>
</div>
</div>
</div>
</body>


</html>