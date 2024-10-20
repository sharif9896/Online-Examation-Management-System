<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>

<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexamination";

$conn = new mysqli($servername, $username, $password, $dbname);
 ?>


<div class="loader">  
</div>
    <div class="conti">
       <div class="boxa b">
            <!-- <img src="ghy.PNG" alt=""> -->
            <center><div class="hu">ISLAMIAH COLLEGE LEARNING MANAGEMENT SYSTEM<br> <b style="color:red;">ONLINE EXAMINATION FORM</b></div></center>
            <div class="lok" style="width: 100%; height: 2px; background-color: lightcoral; margin-top: 20px;"></div>
            <!-- <div class="lok" style="width: 100%; height: 2px; background-color: rgba(238, 130, 238, 0.719); margin-top: 20px;"></div><br> -->
           <div style="color:rgba(99, 99, 99, 0.856); font: size 4vh; font-weight: 800;">
           <?php
           $roll=$_POST['roll'];
           $sql=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll'");
           $x=mysqli_fetch_array($sql);
           $sql1=mysqli_query($conn,"SELECT * FROM correctopt");
           $x1=mysqli_fetch_array($sql1);
           $sql1=mysqli_query($conn,"SELECT * FROM submit WHERE Regno='$roll'");
           $y=mysqli_fetch_array($sql1);
           $re1=$x['Regno'];
           $re2=$x['Name'];
           $re3=$x['Class'];
           $re4=$x['Department'];
           $re5=$y['Date'];
           $re6=$y['Time'];
?>
            <div class="it" style="margin-top:15px">REG NO :    <?php echo $re1;?> <b style="margin-left: 200px;">DATE :    <?php echo $re5;?></b> </div>
            <div class="dc" style="margin-top:15px"> NAME  :    <?php echo $re2; ?><b style="margin-left: 190px;">TIME :    <?php echo $re6;?></b></div>
            <div class="cl" style="margin-top:15px">CLASS :     <?php echo $re3; ?> - <?php echo $re4; ?></div>
             <br> Total Score :  <?php

        
if($y['1.Q']==$x1['Q.1']){
    $st= 1;
    // echo $st;
}
else{
    $st=0;
    // echo $st;
}
if($y['2.Q']==$x1['Q.2']){
    $s1=1;
    // echo $s1 + $st;
}
else{
    $s1=0;
    // echo $s1;
}

if($y['3.Q']==$x1['Q.3']){
    $st2=1;
    // echo $s1+$st+$s2;
}
else{
    $st2=0;
    // echo $s2;
}

if($y['4.Q']==$x1['Q.4']){
    $s3=1;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s3=0;
    // echo $s3;
}
if($y['5.Q']==$x1['Q.5']){
    $s4=1;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s4=0;
    // echo $s4;
}
if($y['6.Q']==$x1['Q.6']){
    $s5=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s5=0;
    // echo $s5;
}

if($y['7.Q']==$x1['Q.7']){
    $s6=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s6=0;
    // echo $s6;
}
if($y['8.Q']==$x1['Q.8']){
    $s7=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s7=0;
    // echo $s7;
}
if($y['9.Q']==$x1['Q.9']){
    $s8=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s8=0;
    // echo $s8;
}

if($y['10.Q']==$x1['Q.10']){
    $s9=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s9=0;
    // echo $st;
}
if($y['11.Q']==$x1['Q.11']){
    $st1= 1;
    // echo $st;
}
else{
    $st1=0;
    // echo $st;
}
if($y['12.Q']==$x1['Q.12']){
    $s11=1;
    // echo $s1 + $st;
}
else{
    $s11=0;
    // echo $s1;
}

if($y['13.Q']==$x1['Q.13']){
    $s12=1;
    // echo $s1+$st+$s2;
}
else{
    $s12=0;
    // echo $s2;
}

if($y['14.Q']==$x1['Q.14']){
    $s13=1;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s13=0;
    // echo $s3;
}
if($y['15.Q']==$x1['Q.15']){
    $s14=1;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s14=0;
    // echo $s4;
}
if($y['16.Q']==$x1['Q.16']){
    $s15=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s15=0;
    // echo $s5;
}

if($y['17.Q']==$x1['Q.17']){
    $s16=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s16=0;
    // echo $s6;
}
if($y['18.Q']==$x1['Q.18']){
    $s17=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s17=0;
    // echo $s7;
}
if($y['19.Q']==$x1['Q.19']){
    $s18=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s18=0;
    // echo $s8;
}

if($y['20.Q']==$x1['Q.20']){
    $s19=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s19=0;
    // echo $s9;
}
if($y['21.Q']==$x1['Q.21']){
    $st20= 1;
    // echo $st;
}
else{
    $st20=0;
    // echo $st;
}
if($y['22.Q']==$x1['Q.22']){
    $s21=1;
    // echo $s1 + $st;
}
else{
    $s21=0;
    // echo $s1;
}

if($y['23.Q']==$x1['Q.23']){
    $s22=1;
    // echo $s1+$st+$s2;
}
else{
    $s22=0;
    // echo $s2;
}

if($y['24.Q']==$x1['Q.24']){
    $s23=1;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s23=0;
    // echo $s3;
}
if($y['25.Q']==$x1['Q.25']){
    $s24=1;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s24=0;
    // echo $s4;
}
if($y['26.Q']==$x1['Q.26']){
    $s25=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s25=0;
    // echo $s5;
}

if($y['27.Q']==$x1['Q.27']){
    $s26=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s26=0;
    // echo $s6;
}
if($y['28.Q']==$x1['Q.28']){
    $s27=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s27=0;
    // echo $s7;
}
if($y['29.Q']==$x1['Q.29']){
    $s28=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s28=0;
    // echo $s8;
}

if($y['30.Q']==$x1['Q.30']){
    $s29=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s29=0;
    // echo $s8;
}
if($y['31.Q']==$x1['Q.31']){
    $st30= 1;
    // echo $st;
}
else{
    $st30=0;
    // echo $st;
}
if($y['32.Q']==$x1['Q.32']){
    $s31=1;
    // echo $s1 + $st;
}
else{
    $s31=0;
    // echo $s1;
}

if($y['33.Q']==$x1['Q.33']){
    $s32=1;
    // echo $s1+$st+$s2;
}
else{
    $s32=0;
    // echo $s2;
}

if($y['34.Q']==$x1['Q.34']){
    $s33=1;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s33=0;
    // echo $s3;
}
if($y['35.Q']==$x1['Q.35']){
    $s34=1;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s34=0;
    // echo $s4;
}
if($y['36.Q']==$x1['Q.36']){
    $s35=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s35=0;
    // echo $s5;
}

if($y['37.Q']==$x1['Q.37']){
    $s36=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s36=0;
    // echo $s6;
}
if($y['38.Q']==$x1['Q.38']){
    $s37=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s37=0;
    // echo $s7;
}
if($y['39.Q']==$x1['Q.39']){
    $s38=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s38=0;
    // echo $s8;
}

if($y['40.Q']==$x1['Q.40']){
    $s39=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s39=0;
    // echo $s8;
}
if($y['41.Q']==$x1['Q.41']){
    $st40= 1;
    // echo $st;
}
else{
    $st40=0;
    // echo $st;
}
if($y['42.Q']==$x1['Q.42']){
    $s41=1;
    // echo $s1 + $st;
}
else{
    $s41=0;
    // echo $s1;
}

if($y['43.Q']==$x1['Q.43']){
    $s42=1;
    // echo $s1+$st+$s2;
}
else{
    $s42=0;
    // echo $s2;
}

if($y['44.Q']==$x1['Q.44']){
    $s43=1;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s43=0;
    // echo $s3;
}
if($y['45.Q']==$x1['Q.45']){
    $s44=1;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s44=0;
    // echo $s4;
}
if($y['46.Q']==$x1['Q.46']){
    $s45=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s45=0;
    // echo $s5;
}

if($y['47.Q']==$x1['Q.47']){
    $s46=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s46=0;
    // echo $s6;
}
if($y['48.Q']==$x1['Q.48']){
    $s47=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s47=0;
    // echo $s7;
}
if($y['49.Q']==$x1['Q.49']){
    $s48=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s48=0;
    // echo $s8;
}

if($y['50.Q']==$x1['Q.50']){
    $s49=1;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s49=0;
    // echo $s8;
}
$score=$s1+$st+$st2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$st1+$st2+$s11+$s12+$s13+$s14+$s15+$s16+$s17+$s18+$s19+$st20+$s21+$s22+$s23+$s24+$s25+$s26+$s27+$s28+$s29+$st30+$s31+$s32+$s33+$s34+$s35+$s36+$s37+$s38+$s39+$st40+$s41+$s42+$s43+$s44+$s45+$s46+$s47+$s48+$s49;
echo $score , "/50";
// $sql=mysqli_query($conn,"INSERT 1INTO `studentscore`(`Regno`, `Name`, `Class`, `Department`, `Date`, `Time`, `Total Score`) VALUES ('$re1','$re2','$re3','$re4','$re5','$re6','$score')");

$es=mysqli_query($conn,"SELECT * FROM addedquestion");
$sq=mysqli_fetch_array($es);
?>
            </div>
        </div>
 
        <div class="lix"></div>
    
        <form action="" method="post">
        <div class="boxa a">
            <label class="" for="">1.   <?php echo $sq['Q.1'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input style="width:100%;" class="text" type="text" name="1" placeholder="<?php echo $y['1.Q'];?>"  id=""></div>
            <!-- <div class="dis1"><input  class="radio" type="radio" name="1" value="8" id="">8</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="12" id="">12</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="14" id="">14</div> -->
        </div>
        <div class="boxa">
            <label class="" for="">2.   <?php echo $sq['Q.2'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['2.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">3.   <?php echo $sq['Q.3'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['3.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">4.   <?php echo $sq['Q.4'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['4.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">5.   <?php echo $sq['Q.5'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['5.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">6.   <?php echo $sq['Q.6'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['6.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">7.   <?php echo $sq['Q.7'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['7.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">8.  <?php echo $sq['Q.8'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['8.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">9.   <?php echo $sq['Q.9'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['9.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">10.   <?php echo $sq['Q.10'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['10.Q'];?>"  id=""></div>
        </div>
            
        <div class="boxa a">
            <label class="" for="">11.   <?php echo $sq['Q.11'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input style="width:100%;" class="text" type="text" name="1" placeholder="<?php echo $y['11.Q'];?>"  id=""></div>
            <!-- <div class="dis1"><input  class="radio" type="radio" name="1" value="8" id="">8</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="12" id="">12</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="14" id="">14</div> -->
        </div>
        <div class="boxa">
            <label class="" for="">12.   <?php echo $sq['Q.12'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['12.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">13.   <?php echo $sq['Q.13'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['13.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">14.   <?php echo $sq['Q.14'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['14.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">15.   <?php echo $sq['Q.15'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['15.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">16.   <?php echo $sq['Q.16'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['16.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">17.   <?php echo $sq['Q.17'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['17.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">18.  <?php echo $sq['Q.18'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['18.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">19.   <?php echo $sq['Q.19'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['19.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">20.   <?php echo $sq['Q.20'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['20.Q'];?>"  id=""></div>
        </div>

        <div class="boxa a">
            <label class="" for="">21.   <?php echo $sq['Q.21'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input style="width:100%;" class="text" type="text" name="1" placeholder="<?php echo $y['21.Q'];?>"  id=""></div>
            <!-- <div class="dis1"><input  class="radio" type="radio" name="1" value="8" id="">8</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="12" id="">12</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="14" id="">14</div> -->
        </div>
        <div class="boxa">
            <label class="" for="">22.   <?php echo $sq['Q.22'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['22.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">23.   <?php echo $sq['Q.23'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['23.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">24.   <?php echo $sq['Q.24'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['24.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">25.   <?php echo $sq['Q.25'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['25.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">26.   <?php echo $sq['Q.26'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['26.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">27.   <?php echo $sq['Q.27'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['27.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">28.  <?php echo $sq['Q.28'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['28.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">29.   <?php echo $sq['Q.29'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['29.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">30.   <?php echo $sq['Q.30'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['30.Q'];?>"  id=""></div>
        </div>

        <div class="boxa a">
            <label class="" for="">31.   <?php echo $sq['Q.31'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input style="width:100%;" class="text" type="text" name="1" placeholder="<?php echo $y['31.Q'];?>"  id=""></div>
            <!-- <div class="dis1"><input  class="radio" type="radio" name="1" value="8" id="">8</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="12" id="">12</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="14" id="">14</div> -->
        </div>
        <div class="boxa">
            <label class="" for="">32.   <?php echo $sq['Q.32'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['32.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">33.   <?php echo $sq['Q.33'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['33.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">34.   <?php echo $sq['Q.34'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['34.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">35.   <?php echo $sq['Q.35'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['35.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">36.   <?php echo $sq['Q.36'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['36.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">37.   <?php echo $sq['Q.37'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['37.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">38.  <?php echo $sq['Q.38'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['38.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">39.   <?php echo $sq['Q.39'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['39.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">40.   <?php echo $sq['Q.40'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['40.Q'];?>"  id=""></div>
        </div>

        
        <div class="boxa a">
            <label class="" for="">41.   <?php echo $sq['Q.41'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input style="width:100%;" class="text" type="text" name="1" placeholder="<?php echo $y['41.Q'];?>"  id=""></div>
            <!-- <div class="dis1"><input  class="radio" type="radio" name="1" value="8" id="">8</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="12" id="">12</div>
            <div class="dis1"><input  class="radio" type="radio" name="1" value="14" id="">14</div> -->
        </div>
        <div class="boxa">
            <label class="" for="">42.   <?php echo $sq['Q.42'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['42.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">43.   <?php echo $sq['Q.43'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['43.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">44.   <?php echo $sq['Q.44'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['44.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">45.   <?php echo $sq['Q.45'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['45.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">46.   <?php echo $sq['Q.46'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['46.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">47.   <?php echo $sq['Q.47'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['47.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">48.  <?php echo $sq['Q.48'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['48.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">49.   <?php echo $sq['Q.49'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['49.Q'];?>"  id=""></div>
        </div>
        <div class="boxa">
            <label class="" for="">50.   <?php echo $sq['Q.50'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1a"><input  class="text" type="text" name="1" placeholder="<?php echo $y['50.Q'];?>"  id=""></div>
        </div>
        <div class="boxa c">
            <input class="fibtn" type="submit" value="Submit" name="register"><div class="grl"></div><p style="margin-top: 10px; margin-left:5px;">Page 1/1</p><a href="http://localhost/onlineexamination/viewtotal.php"><input class="fibtn" style="margin-left: 120px;" type="submit" value="Back"></a>
        </div>
       
        </form>
    </div>
    <a href="dashboard.php">
    <!-- <div class="back"><img src="dsa.png" alt=""></div></a> -->
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
