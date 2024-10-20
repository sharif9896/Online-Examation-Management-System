<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="loader">  
</div>  
<div class="navss">
        <div class="logg">
            <h4>ONLINE EXAMINATION SYSTEM</h4>
        </div>
        <span class="tif">TIME :</span>
        <div class="clock">
            <span id="hrs">00</span>
            <span>:</span>
            <span id="min">00</span>
            <span>:</span>
            <span id="sec">00</span>
            <span id="ampm"></span>
        </div>
        <span class="tif1">DATE :</span>
        <div class="clock1">
            <span id="day"></span>
        </div>
      <div class="loggs"><a href="logout.php" style="color: white; font-size: 16px; padding-right:5px;"><i class="fas fa-user" style="color: white; font-size: 16px; padding-right:2px;"></i>Logout</a></div>
    </div>
<div class="go">
    <div class="side-bar">
        <div class="menu">
        <div class="itemss">Menu</a></div>
            <div class="items"><a href="http://localhost/onlineexamination/dashboard.php"><i class="fas fa-tachometer"></i>Dashboard</a></div>
            <div class="items"><a class="sub-btn"><i class="fa fa-user"></i>Student Information
            <i class="fas fa-angle-right droopdown"></i>
            </a>
            <div class="sub1menu ac">
               <div class="hom"> <a href="http://localhost/onlineexamination/studenentry.php"><i class="fas fa-plus"></i>Students</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/stulogin.php"><i class="fas fa-lock"></i>Students Login</a></div>
            </div>
            </div>
            </div>
             </div>
             </div>
<div class="kol">
            <div class="sign">
            <span class="subhead"><center><h3>Student Login</h3></center></span>
    <center>
<form method="post" action="viewques.php">
<table border="0" cellpadding="5" cellspacing="5" class="design ">
<tr><td colspan="2" align="center" class="msg"><?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexamination";

$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['register']))
{
    $roll=$_POST['roll'];

    $sql=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll'");
    $sq=mysqli_num_rows($sql);
    if($sq)
    {
     
        ?>
        <!-- <script>window.location.href="vieresult.php";</script> -->
        <?php
            
    }
   else{
    ?>
    <div class="he">
    <h3 style="font-size: 12px;">Invalid Reg No & Name</h3>
</div>
<?php
    }
}


?>
</td></tr>
<tr><td class="labelsss">Reg No :</td><td><input type="text" required="required" name="roll" class="fields" size="25" placeholder="Enter Register No" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="START" name="register" class="fields fg" /></td></tr>
</table>
</form>
<script src="script.js"></script>
</body>
</html>