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
<div class="kols">
            <div class="sign">
            <span class="subhead"><center><h3>Student Answers</h3></center></span>
    <center>
<form method="post" action="viewans.php">
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

    $sql=mysqli_query($conn,"SELECT * FROM submit WHERE Regno='$roll'");
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
<tr><td colspan="2" align="center"><input type="submit" value="Check" name="register" class="fields fg" /></td></tr>
</table>
</form>
<script>let loader=document.querySelector(".loader");
window.addEventListener('load',function(){
    loader.classList.add("loader--hidden");
    loader.addEventListener('transitionend',function(){
        document.body.removeChild(loader);
    })
})
</script>
</body>
</html>