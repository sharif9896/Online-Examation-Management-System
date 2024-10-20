<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexamination";

$conn = new mysqli($servername, $username, $password, $dbname);


 if(isset($_POST['register']))
 {
    // $sa=mysqli_query($conn,"SELECT * FROM `studentdata`");
    // $re=mysqli_fetch_array($sa);
    // $res=$re['Regno'];
    // $resa=$re['Name'];
    // $ty=$re['Class'];
    // $fui=$re['Department'];
    $roll=$_POST['roll'];
     $radio1=$_POST['1'];
     $radio2=$_POST['2'];
     $radio3=$_POST['3'];
     $radio4=$_POST['4'];
     $golbtn=$_POST['61'];
     $radio6=$_POST['6'];
     $radio7=$_POST['7'];
     $radio8=$_POST['8'];
     $radio9=$_POST['9'];
     $radio10=$_POST['10'];
     $radio11=$_POST['11'];
     $radio12=$_POST['12'];
     $radio13=$_POST['13'];
     $radio14=$_POST['14'];
     $golbt1n=$_POST['610'];
     $radio16=$_POST['16'];
     $radio17=$_POST['17'];
     $radio18=$_POST['18'];
     $radio19=$_POST['19'];
     $radio20=$_POST['20'];
     $radio21=$_POST['21'];
     $radio22=$_POST['22'];
     $radio23=$_POST['23'];
     $radio24=$_POST['24'];
     $golbt2n=$_POST['25'];
     $radio26=$_POST['26'];
     $radio27=$_POST['27'];
     $radio28=$_POST['28'];
     $radio29=$_POST['29'];
     $radio30=$_POST['30'];
     $radio31=$_POST['31'];
     $radio32=$_POST['32'];
     $radio33=$_POST['33'];
     $radio34=$_POST['34'];
     $golbt3n=$_POST['35'];
     $radio36=$_POST['36'];
     $radio37=$_POST['37'];
     $radio38=$_POST['38'];
     $radio39=$_POST['39'];
     $radio40=$_POST['40'];
     $radio41=$_POST['41'];
     $radio42=$_POST['42'];
     $radio43=$_POST['43'];
     $radio44=$_POST['44'];
     $golbt4n=$_POST['45'];
     $radio46=$_POST['46'];
     $radio47=$_POST['47'];
     $radio48=$_POST['48'];
     $radio49=$_POST['49'];
     $radio50=$_POST['50'];
     
     if($roll==NULL || $radio1==NULL || $radio2==NULL || $radio3==NULL || $golbt1n==NULL || $radio4==NULL || $radio6==NULL || $radio7==NULL || $radio8==NULL || $radio9==NULL || $radio10==NULL || $roll==NULL || $radio11==NULL || $radio12==NULL || $radio13==NULL || $golbt2n==NULL || $radio14==NULL || $radio16==NULL || $radio17==NULL || $radio18==NULL || $radio19==NULL || $radio20==NULL || $radio21==NULL || $radio22==NULL || $radio23==NULL || $golbt2n==NULL || $radio24==NULL || $radio26==NULL || $radio27==NULL || $radio28==NULL || $radio29==NULL || $radio30==NULL || $radio31==NULL || $radio32==NULL || $radio33==NULL || $golbt3n==NULL || $radio34==NULL || $radio36==NULL || $radio37==NULL || $radio38==NULL || $radio39==NULL || $radio40==NULL || $radio41==NULL || $radio42==NULL || $radio43==NULL || $golbt4n==NULL || $radio44==NULL || $radio46==NULL || $radio47==NULL || $radio48==NULL || $radio49==NULL || $radio50==NULL)
     {
         //
     }
     else
     {
         $sql=mysqli_query($conn,"INSERT INTO `submit`(`Regno`, `1.Q`, `2.Q`, `3.Q`, `4.Q`, `5.Q`, `6.Q`, `7.Q`, `8.Q`, `9.Q`, `10.Q`, `Date`, `Time`, `11.Q`, `12.Q`, `13.Q`, `14.Q`, `15.Q`, `16.Q`,`17.Q`, `18.Q`, `19.Q`, `20.Q`, `21.Q`, `22.Q`, `23.Q`, `24.Q`, `25.Q`, `26.Q`, `27.Q`, `28.Q`, `29.Q`, `30.Q`, `31.Q`, `32.Q`, `33.Q`, `34.Q`, `35.Q`, `36.Q`, `37.Q`, `38.Q`, `39.Q`, `40.Q`, `41.Q`, `42.Q`, `43.Q`, `44.Q`, `45.Q`, `46.Q`, `47.Q`, `48.Q`, `49.Q`, `50.Q`) VALUES ('$roll','$radio1','$radio2','$radio3','$golbtn', '$radio4','$radio6','$radio7','$radio8','$radio9','$radio10',NOW(),NOW(),'$radio11','$radio12','$radio13','$radio14','$golbt1n','$radio16','$radio17','$radio18','$radio19','$radio20','$radio21','$radio22','$radio23','$radio24','$golbt2n','$radio26','$radio27','$radio28','$radio29','$radio30','$radio31','$radio32','$radio33','$radio34','$golbt3n','$radio36','$radio37','$radio38','$radio39','$radio40','$radio41','$radio42','$radio43','$radio44','$golbt4n','$radio46','$radio47','$radio48','$radio49','$radio50')");
         if($sql)
         {
             ?>

             
              <!-- <script>                  
               k   swal({
                         title: "Submitted Successfully!",
                         text: "",
                         icon: "success",
                         button: "Okay!",
     });  
                 </script>          -->
                 <!-- <div class="mi" style="color:#303030; font-size: 13px;">Successfully Entered!</div>  -->
                             <?php 
                             $sql=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll'");
                             $x=mysqli_fetch_array($sql);
                             $con1=$x['Regno'];
                             $con2=$x['Name'];
                             $con3=$x['Class'];
                             $con4=$x['Department'];
                             $sql1=mysqli_query($conn,"SELECT * FROM correctopt");
                             $x1=mysqli_fetch_array($sql1);
                             $sql1=mysqli_query($conn,"SELECT * FROM submit WHERE Regno='$roll'");
                             $y=mysqli_fetch_array($sql1);
                             $conb=$y['Date'];
                             $conb1=$y['Time'];
                             
                                     
if($y['1.Q']==$x1['Q.1']){
    $st= 1.5;
    // echo $st;
}
else{
    $st=0;
    // echo $st;
}
if($y['2.Q']==$x1['Q.2']){
    $s1=1.5;
    // echo $s1 + $st;
}
else{
    $s1=0;
    // echo $s1;
}

if($y['3.Q']==$x1['Q.3']){
    $st2=1.5;
    // echo $s1+$st+$s2;
}
else{
    $st2=0;
    // echo $s2;
}

if($y['4.Q']==$x1['Q.4']){
    $s3=1.5;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s3=0;
    // echo $s3;
}
if($y['5.Q']==$x1['Q.5']){
    $s4=1.5;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s4=0;
    // echo $s4;
}
if($y['6.Q']==$x1['Q.6']){
    $s5=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s5=0;
    // echo $s5;
}

if($y['7.Q']==$x1['Q.7']){
    $s6=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s6=0;
    // echo $s6;
}
if($y['8.Q']==$x1['Q.8']){
    $s7=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s7=0;
    // echo $s7;
}
if($y['9.Q']==$x1['Q.9']){
    $s8=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s8=0;
    // echo $s8;
}

if($y['10.Q']==$x1['Q.10']){
    $s9=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s9=0;
    // echo $st;
}
if($y['11.Q']==$x1['Q.11']){
    $st1= 1.5;
    // echo $st;
}
else{
    $st1=0;
    // echo $st;
}
if($y['12.Q']==$x1['Q.12']){
    $s11=1.5;
    // echo $s1 + $st;
}
else{
    $s11=0;
    // echo $s1;
}

if($y['13.Q']==$x1['Q.13']){
    $s12=1.5;
    // echo $s1+$st+$s2;
}
else{
    $s12=0;
    // echo $s2;
}

if($y['14.Q']==$x1['Q.14']){
    $s13=1.5;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s13=0;
    // echo $s3;
}
if($y['15.Q']==$x1['Q.15']){
    $s14=1.5;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s14=0;
    // echo $s4;
}
if($y['16.Q']==$x1['Q.16']){
    $s15=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s15=0;
    // echo $s5;
}

if($y['17.Q']==$x1['Q.17']){
    $s16=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s16=0;
    // echo $s6;
}
if($y['18.Q']==$x1['Q.18']){
    $s17=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s17=0;
    // echo $s7;
}
if($y['19.Q']==$x1['Q.19']){
    $s18=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s18=0;
    // echo $s8;
}

if($y['20.Q']==$x1['Q.20']){
    $s19=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s19=0;
    // echo $s9;
}
if($y['21.Q']==$x1['Q.21']){
    $st20= 1.5;
    // echo $st;
}
else{
    $st20=0;
    // echo $st;
}
if($y['22.Q']==$x1['Q.22']){
    $s21=1.5;
    // echo $s1 + $st;
}
else{
    $s21=0;
    // echo $s1;
}

if($y['23.Q']==$x1['Q.23']){
    $s22=1.5;
    // echo $s1+$st+$s2;
}
else{
    $s22=0;
    // echo $s2;
}

if($y['24.Q']==$x1['Q.24']){
    $s23=1.5;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s23=0;
    // echo $s3;
}
if($y['25.Q']==$x1['Q.25']){
    $s24=1.5;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s24=0;
    // echo $s4;
}
if($y['26.Q']==$x1['Q.26']){
    $s25=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s25=0;
    // echo $s5;
}

if($y['27.Q']==$x1['Q.27']){
    $s26=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s26=0;
    // echo $s6;
}
if($y['28.Q']==$x1['Q.28']){
    $s27=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s27=0;
    // echo $s7;
}
if($y['29.Q']==$x1['Q.29']){
    $s28=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s28=0;
    // echo $s8;
}

if($y['30.Q']==$x1['Q.30']){
    $s29=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s29=0;
    // echo $s8;
}
if($y['31.Q']==$x1['Q.31']){
    $st30= 1.5;
    // echo $st;
}
else{
    $st30=0;
    // echo $st;
}
if($y['32.Q']==$x1['Q.32']){
    $s31=1.5;
    // echo $s1 + $st;
}
else{
    $s31=0;
    // echo $s1;
}

if($y['33.Q']==$x1['Q.33']){
    $s32=1.5;
    // echo $s1+$st+$s2;
}
else{
    $s32=0;
    // echo $s2;
}

if($y['34.Q']==$x1['Q.34']){
    $s33=1.5;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s33=0;
    // echo $s3;
}
if($y['35.Q']==$x1['Q.35']){
    $s34=1.5;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s34=0;
    // echo $s4;
}
if($y['36.Q']==$x1['Q.36']){
    $s35=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s35=0;
    // echo $s5;
}

if($y['37.Q']==$x1['Q.37']){
    $s36=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s36=0;
    // echo $s6;
}
if($y['38.Q']==$x1['Q.38']){
    $s37=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s37=0;
    // echo $s7;
}
if($y['39.Q']==$x1['Q.39']){
    $s38=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s38=0;
    // echo $s8;
}

if($y['40.Q']==$x1['Q.40']){
    $s39=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s39=0;
    // echo $s8;
}
if($y['41.Q']==$x1['Q.41']){
    $st40= 1.5;
    // echo $st;
}
else{
    $st40=0;
    // echo $st;
}
if($y['42.Q']==$x1['Q.42']){
    $s41=1.5;
    // echo $s1 + $st;
}
else{
    $s41=0;
    // echo $s1;
}

if($y['43.Q']==$x1['Q.43']){
    $s42=1.5;
    // echo $s1+$st+$s2;
}
else{
    $s42=0;
    // echo $s2;
}

if($y['44.Q']==$x1['Q.44']){
    $s43=1.5;
    // echo $s1+$st+$s2+$s3;
}
else{
    $s43=0;
    // echo $s3;
}
if($y['45.Q']==$x1['Q.45']){
    $s44=1.5;
    // echo $s1+$st+$s2+$s3+$s4;
}
else{
    $s44=0;
    // echo $s4;
}
if($y['46.Q']==$x1['Q.46']){
    $s45=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5;
}
else{
    $s45=0;
    // echo $s5;
}

if($y['47.Q']==$x1['Q.47']){
    $s46=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6;
}
else{
    $s46=0;
    // echo $s6;
}
if($y['48.Q']==$x1['Q.48']){
    $s47=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7;
}
else{
    $s47=0;
    // echo $s7;
}
if($y['49.Q']==$x1['Q.49']){
    $s48=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8;
}
else{
    $s48=0;
    // echo $s8;
}

if($y['50.Q']==$x1['Q.50']){
    $s49=1.5;
    // echo $s1+$st+$s2+$s3+$s4+$s5+$s6+$s7+$s8+$s9;
}
else{
    $s49=0;
    // echo $s8;
}
$score=$s1+$st+$st2+$s3+$s4+$s5+$s6+$s7+$s8+$s9+$st1+$st2+$s11+$s12+$s13+$s14+$s15+$s16+$s17+$s18+$s19+$st20+$s21+$s22+$s23+$s24+$s25+$s26+$s27+$s28+$s29+$st30+$s31+$s32+$s33+$s34+$s35+$s36+$s37+$s38+$s39+$st40+$s41+$s42+$s43+$s44+$s45+$s46+$s47+$s48+$s49;
echo $score , "/50";
$sqls=mysqli_query($conn,"INSERT INTO `studentscore`(`Regno`, `Name`, `Class`, `Department`, `Date`, `Time`, `Total Score`) VALUES ('$con1','$con2','$con3','$con4','$con5','$con6', '$conb', '$conb1','$score')");

if($sqls){
    ?>
     <div class="kols">
                <div class="sign1" data-aos="fade-down">
                        <img src="nko.png" alt="">
                        <div class="fa" align="center">Submitted Successfully!</div>
                    <div class="lok" ><a href="stulogin.php"><button style="padding: 10px; background-color: lightblue; color: white; border:1px solid white;margin-left:70%; cursor:pointer;">Logout</button></a></div>
                </div>
             </div>
    <?php
}
         }
         else
         {
             echo "Email Already Exists!";
         }
 }
}
 ?>


<div class="loader">  
</div>
    <div class="conti">
        <div class="boxa b">
            <!-- <img src="ghy.PNG" alt=""> -->
            <center><div class="hu">ISLAMIAH COLLEGE LEARNING MANAGEMENT SYSTEM<br> <b style="color:red;">ONLINE EXAMINATION FORM</b></div></center>
            <div class="lok" style="width: 100%; height: 2px; background-color: lightcoral; margin-top: 20px;"></div>
           <!-- <div style="color:rgba(99, 99, 99, 0.856); font: size 28px; font-weight: 800; margin: 10px;">
           <?php
           $roll=$_POST['roll'];
           $sql=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll'");
           $x=mysqli_fetch_array($sql);
           $es=mysqli_query($conn,"SELECT * FROM addedquestion");
            $sq=mysqli_fetch_array($es);
            $es1=mysqli_query($conn,"SELECT * FROM option1");
            $sq1=mysqli_fetch_array($es1);
            $es2=mysqli_query($conn,"SELECT * FROM option2");
            $sq2=mysqli_fetch_array($es2);
            $es3=mysqli_query($conn,"SELECT * FROM option3");
            $sq3=mysqli_fetch_array($es3);
            $es4=mysqli_query($conn,"SELECT * FROM option4");
            $sq4=mysqli_fetch_array($es4);
            $es5=mysqli_query($conn,"SELECT * FROM option5");
            $sq5=mysqli_fetch_array($es5);
               ?>NAME  : <?php echo $x['Name'] ?> <br><br>CLASS : <?php echo $x['Class'] ?> - <?php echo $x['Department'] ?> <?php  ?> <?php
            ?>
            </div> -->
        </div>
 
        <div class="lix"></div>
    
        <form action="" method="post">
        <div class="boxa a">
            <label class="" for="">Reg No <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="roll" id="" placeholder=" Enter Reg No">
        </div>
        <div class="boxa ">
            <label class="" for="">1.   <?php echo $sq['Q.1'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="1" value="<?php echo $sq1['OP1'];?>" id=""><?php echo $sq1['OP1'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="1" value="<?php echo $sq1['OP2'];?>" id=""><?php echo $sq1['OP2'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="1" value="<?php echo $sq1['OP3'];?>" id=""><?php echo $sq1['OP3'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="1" value="<?php echo $sq1['OP4'];?>" id=""><?php echo $sq1['OP4'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">2.   <?php echo $sq['Q.2'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="2" value="<?php echo $sq1['OP5'];?>" id=""><?php echo $sq1['OP5'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="2" value="<?php echo $sq1['OP6'];?>" id=""><?php echo $sq1['OP6'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="2" value="<?php echo $sq1['OP7'];?>" id=""><?php echo $sq1['OP7'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="2" value="<?php echo $sq1['OP8'];?>" id=""><?php echo $sq1['OP8'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">3.   <?php echo $sq['Q.3'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="3" value="<?php echo $sq1['OP9'];?>" id=""><?php echo $sq1['OP9'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="3" value="<?php echo $sq1['OP10'];?>" id=""><?php echo $sq1['OP10'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="3" value="<?php echo $sq1['OP11'];?>" id=""><?php echo $sq1['OP11'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="3" value="<?php echo $sq1['OP12'];?>" id=""><?php echo $sq1['OP12'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">4.   <?php echo $sq['Q.4'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="4" value="<?php echo $sq1['OP13'];?>" id=""><?php echo $sq1['OP13'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="4" value="<?php echo $sq1['OP14'];?>" id=""><?php echo $sq1['OP14'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="4" value="<?php echo $sq1['OP15'];?>" id=""><?php echo $sq1['OP15'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="4" value="<?php echo $sq1['OP16'];?>" id=""><?php echo $sq1['OP16'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">5.   <?php echo $sq['Q.5'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="61" value="<?php echo $sq1['OP17'];?>" id=""><?php echo $sq1['OP17'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="61" value="<?php echo $sq1['OP18'];?>" id=""><?php echo $sq1['OP18'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="61" value="<?php echo $sq1['OP19'];?>" id=""><?php echo $sq1['OP19'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="61" value="<?php echo $sq1['OP20'];?>" id=""><?php echo $sq1['OP20'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">6.   <?php echo $sq['Q.6'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="6" value="<?php echo $sq1['OP21'];?>" id=""><?php echo $sq1['OP21'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="6" value="<?php echo $sq1['OP22'];?>" id=""><?php echo $sq1['OP22'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="6" value="<?php echo $sq1['OP23'];?>" id=""><?php echo $sq1['OP23'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="6" value="<?php echo $sq1['OP24'];?>" id=""><?php echo $sq1['OP24'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">7.   <?php echo $sq['Q.7'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="7" value="<?php echo $sq1['OP25'];?>" id=""><?php echo $sq1['OP25'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="7" value="<?php echo $sq1['OP26'];?>" id=""><?php echo $sq1['OP26'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="7" value="<?php echo $sq1['OP27'];?>" id=""><?php echo $sq1['OP27'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="7" value="<?php echo $sq1['OP28'];?>" id=""><?php echo $sq1['OP28'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">8.  <?php echo $sq['Q.8'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="8" value="<?php echo $sq1['OP29'];?>" id=""><?php echo $sq1['OP29'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="8" value="<?php echo $sq1['OP30'];?>" id=""><?php echo $sq1['OP30'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="8" value="<?php echo $sq1['OP31'];?>" id=""><?php echo $sq1['OP31'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="8" value="<?php echo $sq1['OP32'];?>" id=""><?php echo $sq1['OP32'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">9.   <?php echo $sq['Q.9'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="9" value="<?php echo $sq1['OP33'];?>" id=""><?php echo $sq1['OP33'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="9" value="<?php echo $sq1['OP34'];?>" id=""><?php echo $sq1['OP34'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="9" value="<?php echo $sq1['OP35'];?>" id=""><?php echo $sq1['OP35'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="9" value="<?php echo $sq1['OP36'];?>" id=""><?php echo $sq1['OP36'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">10.   <?php echo $sq['Q.10'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="10" value="<?php echo $sq1['OP37'];?>" id=""><?php echo $sq2['OP37'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="10" value="<?php echo $sq1['OP38'];?>" id=""><?php echo $sq1['OP38'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="10" value="<?php echo $sq1['OP39'];?>" id=""><?php echo $sq1['OP39'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="10" value="<?php echo $sq1['OP40'];?>" id=""><?php echo $sq1['OP40'];?></div>
        </div>

          <div class="boxa ">
            <label class="" for="">11.   <?php echo $sq['Q.11'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="11" value="<?php echo $sq2['OP1'];?>" id=""><?php echo $sq2['OP1'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="11" value="<?php echo $sq2['OP2'];?>" id=""><?php echo $sq2['OP2'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="11" value="<?php echo $sq2['OP3'];?>" id=""><?php echo $sq2['OP3'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="11" value="<?php echo $sq2['OP4'];?>" id=""><?php echo $sq2['OP4'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">12.   <?php echo $sq['Q.12'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="12" value="<?php echo $sq2['OP5'];?>" id=""><?php echo $sq2['OP5'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="12" value="<?php echo $sq2['OP6'];?>" id=""><?php echo $sq2['OP6'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="12" value="<?php echo $sq2['OP7'];?>" id=""><?php echo $sq2['OP7'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="12" value="<?php echo $sq2['OP8'];?>" id=""><?php echo $sq2['OP8'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">13.   <?php echo $sq['Q.13'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="13" value="<?php echo $sq2['OP9'];?>" id=""><?php echo $sq2['OP9'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="13" value="<?php echo $sq2['OP10'];?>" id=""><?php echo $sq2['OP10'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="13" value="<?php echo $sq2['OP11'];?>" id=""><?php echo $sq2['OP11'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="13" value="<?php echo $sq2['OP12'];?>" id=""><?php echo $sq2['OP12'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">14.   <?php echo $sq['Q.14'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="14" value="<?php echo $sq2['OP13'];?>" id=""><?php echo $sq2['OP13'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="14" value="<?php echo $sq2['OP14'];?>" id=""><?php echo $sq2['OP14'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="14" value="<?php echo $sq2['OP15'];?>" id=""><?php echo $sq2['OP15'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="14" value="<?php echo $sq2['OP16'];?>" id=""><?php echo $sq2['OP16'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">15.   <?php echo $sq['Q.15'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="610" value="<?php echo $sq2['OP17'];?>" id=""><?php echo $sq2['OP17'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="610" value="<?php echo $sq2['OP18'];?>" id=""><?php echo $sq2['OP18'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="610" value="<?php echo $sq2['OP19'];?>" id=""><?php echo $sq2['OP19'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="610" value="<?php echo $sq2['OP20'];?>" id=""><?php echo $sq2['OP20'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">16.   <?php echo $sq['Q.16'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="16" value="<?php echo $sq2['OP21'];?>" id=""><?php echo $sq2['OP21'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="16" value="<?php echo $sq2['OP22'];?>" id=""><?php echo $sq2['OP22'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="16" value="<?php echo $sq2['OP23'];?>" id=""><?php echo $sq2['OP23'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="16" value="<?php echo $sq2['OP24'];?>" id=""><?php echo $sq2['OP24'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">17.   <?php echo $sq['Q.17'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="17" value="<?php echo $sq2['OP25'];?>" id=""><?php echo $sq2['OP25'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="17" value="<?php echo $sq2['OP26'];?>" id=""><?php echo $sq2['OP26'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="17" value="<?php echo $sq2['OP27'];?>" id=""><?php echo $sq2['OP27'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="17" value="<?php echo $sq2['OP28'];?>" id=""><?php echo $sq2['OP28'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">18.  <?php echo $sq['Q.18'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="18" value="<?php echo $sq2['OP29'];?>" id=""><?php echo $sq2['OP29'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="18" value="<?php echo $sq2['OP30'];?>" id=""><?php echo $sq2['OP30'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="18" value="<?php echo $sq2['OP31'];?>" id=""><?php echo $sq2['OP31'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="18" value="<?php echo $sq2['OP32'];?>" id=""><?php echo $sq2['OP32'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">19.   <?php echo $sq['Q.19'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="19" value="<?php echo $sq2['OP33'];?>" id=""><?php echo $sq2['OP33'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="19" value="<?php echo $sq2['OP34'];?>" id=""><?php echo $sq2['OP34'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="19" value="<?php echo $sq2['OP35'];?>" id=""><?php echo $sq2['OP35'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="19" value="<?php echo $sq2['OP36'];?>" id=""><?php echo $sq2['OP36'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">20.   <?php echo $sq['Q.20'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="20" value="<?php echo $sq2['OP37'];?>" id=""><?php echo $sq2['OP37'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="20" value="<?php echo $sq2['OP38'];?>" id=""><?php echo $sq2['OP38'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="20" value="<?php echo $sq2['OP39'];?>" id=""><?php echo $sq2['OP39'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="20" value="<?php echo $sq2['OP40'];?>" id=""><?php echo $sq2['OP40'];?></div>
        </div>
        <div class="boxa ">
            <label class="" for="">21.   <?php echo $sq['Q.21'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="21" value="<?php echo $sq3['OP1'];?>" id=""><?php echo $sq3['OP1'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="21" value="<?php echo $sq3['OP2'];?>" id=""><?php echo $sq3['OP2'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="21" value="<?php echo $sq3['OP3'];?>" id=""><?php echo $sq3['OP3'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="21" value="<?php echo $sq3['OP4'];?>" id=""><?php echo $sq3['OP4'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">22.   <?php echo $sq['Q.22'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="22" value="<?php echo $sq3['OP5'];?>" id=""><?php echo $sq3['OP5'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="22" value="<?php echo $sq3['OP6'];?>" id=""><?php echo $sq3['OP6'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="22" value="<?php echo $sq3['OP7'];?>" id=""><?php echo $sq3['OP7'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="22" value="<?php echo $sq3['OP8'];?>" id=""><?php echo $sq3['OP8'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">23.   <?php echo $sq['Q.23'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="23" value="<?php echo $sq3['OP9'];?>" id=""><?php echo $sq3['OP9'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="23" value="<?php echo $sq3['OP10'];?>" id=""><?php echo $sq3['OP10'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="23" value="<?php echo $sq3['OP11'];?>" id=""><?php echo $sq3['OP11'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="23" value="<?php echo $sq3['OP12'];?>" id=""><?php echo $sq3['OP12'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">24.   <?php echo $sq['Q.24'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="24" value="<?php echo $sq3['OP13'];?>" id=""><?php echo $sq3['OP13'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="24" value="<?php echo $sq3['OP14'];?>" id=""><?php echo $sq3['OP14'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="24" value="<?php echo $sq3['OP15'];?>" id=""><?php echo $sq3['OP15'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="24" value="<?php echo $sq3['OP16'];?>" id=""><?php echo $sq3['OP16'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">25.   <?php echo $sq['Q.25'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="25" value="<?php echo $sq3['OP17'];?>" id=""><?php echo $sq3['OP17'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="25" value="<?php echo $sq3['OP18'];?>" id=""><?php echo $sq3['OP18'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="25" value="<?php echo $sq3['OP19'];?>" id=""><?php echo $sq3['OP19'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="25" value="<?php echo $sq3['OP20'];?>" id=""><?php echo $sq3['OP20'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">26.   <?php echo $sq['Q.26'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="26" value="<?php echo $sq3['OP21'];?>" id=""><?php echo $sq3['OP21'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="26" value="<?php echo $sq3['OP22'];?>" id=""><?php echo $sq3['OP22'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="26" value="<?php echo $sq3['OP23'];?>" id=""><?php echo $sq3['OP23'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="26" value="<?php echo $sq3['OP24'];?>" id=""><?php echo $sq3['OP24'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">27.   <?php echo $sq['Q.27'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="27" value="<?php echo $sq3['OP25'];?>" id=""><?php echo $sq3['OP25'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="27" value="<?php echo $sq3['OP26'];?>" id=""><?php echo $sq3['OP26'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="27" value="<?php echo $sq3['OP27'];?>" id=""><?php echo $sq3['OP27'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="27" value="<?php echo $sq3['OP28'];?>" id=""><?php echo $sq3['OP28'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">28.  <?php echo $sq['Q.28'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="28" value="<?php echo $sq3['OP29'];?>" id=""><?php echo $sq3['OP29'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="28" value="<?php echo $sq3['OP30'];?>" id=""><?php echo $sq3['OP30'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="28" value="<?php echo $sq3['OP31'];?>" id=""><?php echo $sq3['OP31'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="28" value="<?php echo $sq3['OP32'];?>" id=""><?php echo $sq3['OP32'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">29.   <?php echo $sq['Q.29'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="29" value="<?php echo $sq3['OP33'];?>" id=""><?php echo $sq3['OP33'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="29" value="<?php echo $sq3['OP34'];?>" id=""><?php echo $sq3['OP34'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="29" value="<?php echo $sq3['OP35'];?>" id=""><?php echo $sq3['OP35'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="29" value="<?php echo $sq3['OP36'];?>" id=""><?php echo $sq3['OP36'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">30.   <?php echo $sq['Q.30'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="30" value="<?php echo $sq3['OP37'];?>" id=""><?php echo $sq3['OP37'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="30" value="<?php echo $sq3['OP38'];?>" id=""><?php echo $sq3['OP38'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="30" value="<?php echo $sq3['OP39'];?>" id=""><?php echo $sq3['OP39'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="30" value="<?php echo $sq3['OP40'];?>" id=""><?php echo $sq3['OP40'];?></div>
        </div>
        <div class="boxa ">
            <label class="" for="">31.   <?php echo $sq['Q.31'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="31" value="<?php echo $sq4['OP1'];?>" id=""><?php echo $sq4['OP1'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="31" value="<?php echo $sq4['OP2'];?>" id=""><?php echo $sq4['OP2'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="31" value="<?php echo $sq4['OP3'];?>" id=""><?php echo $sq4['OP3'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="31" value="<?php echo $sq4['OP4'];?>" id=""><?php echo $sq4['OP4'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">32.   <?php echo $sq['Q.32'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="32" value="<?php echo $sq4['OP5'];?>" id=""><?php echo $sq4['OP5'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="32" value="<?php echo $sq4['OP6'];?>" id=""><?php echo $sq4['OP6'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="32" value="<?php echo $sq4['OP7'];?>" id=""><?php echo $sq4['OP7'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="32" value="<?php echo $sq4['OP8'];?>" id=""><?php echo $sq4['OP8'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">33.   <?php echo $sq['Q.33'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="33" value="<?php echo $sq4['OP9'];?>" id=""><?php echo $sq4['OP9'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="33" value="<?php echo $sq4['OP10'];?>" id=""><?php echo $sq4['OP10'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="33" value="<?php echo $sq4['OP11'];?>" id=""><?php echo $sq4['OP11'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="33" value="<?php echo $sq4['OP12'];?>" id=""><?php echo $sq4['OP12'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">34.   <?php echo $sq['Q.34'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="34" value="<?php echo $sq4['OP13'];?>" id=""><?php echo $sq4['OP13'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="34" value="<?php echo $sq4['OP14'];?>" id=""><?php echo $sq4['OP14'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="34" value="<?php echo $sq4['OP15'];?>" id=""><?php echo $sq4['OP15'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="34" value="<?php echo $sq4['OP16'];?>" id=""><?php echo $sq4['OP16'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">35.   <?php echo $sq['Q.35'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="35" value="<?php echo $sq4['OP17'];?>" id=""><?php echo $sq4['OP17'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="35" value="<?php echo $sq4['OP18'];?>" id=""><?php echo $sq4['OP18'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="35" value="<?php echo $sq4['OP19'];?>" id=""><?php echo $sq4['OP19'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="35" value="<?php echo $sq4['OP20'];?>" id=""><?php echo $sq4['OP20'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">36.   <?php echo $sq['Q.36'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="36" value="<?php echo $sq4['OP21'];?>" id=""><?php echo $sq4['OP21'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="36" value="<?php echo $sq4['OP22'];?>" id=""><?php echo $sq4['OP22'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="36" value="<?php echo $sq4['OP23'];?>" id=""><?php echo $sq4['OP23'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="36" value="<?php echo $sq4['OP24'];?>" id=""><?php echo $sq4['OP24'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">37.   <?php echo $sq['Q.37'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="37" value="<?php echo $sq4['OP25'];?>" id=""><?php echo $sq4['OP25'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="37" value="<?php echo $sq4['OP26'];?>" id=""><?php echo $sq4['OP26'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="37" value="<?php echo $sq4['OP27'];?>" id=""><?php echo $sq4['OP27'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="37" value="<?php echo $sq4['OP28'];?>" id=""><?php echo $sq4['OP28'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">38.  <?php echo $sq['Q.38'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="38" value="<?php echo $sq4['OP29'];?>" id=""><?php echo $sq4['OP29'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="38" value="<?php echo $sq4['OP30'];?>" id=""><?php echo $sq4['OP30'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="38" value="<?php echo $sq4['OP31'];?>" id=""><?php echo $sq4['OP31'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="38" value="<?php echo $sq4['OP32'];?>" id=""><?php echo $sq4['OP32'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">39.   <?php echo $sq['Q.39'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="39" value="<?php echo $sq4['OP33'];?>" id=""><?php echo $sq4['OP33'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="39" value="<?php echo $sq4['OP34'];?>" id=""><?php echo $sq4['OP34'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="39" value="<?php echo $sq4['OP35'];?>" id=""><?php echo $sq4['OP35'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="39" value="<?php echo $sq4['OP36'];?>" id=""><?php echo $sq4['OP36'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">40.   <?php echo $sq['Q.40'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="40" value="<?php echo $sq4['OP37'];?>" id=""><?php echo $sq4['OP37'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="40" value="<?php echo $sq4['OP38'];?>" id=""><?php echo $sq4['OP38'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="40" value="<?php echo $sq4['OP39'];?>" id=""><?php echo $sq4['OP39'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="40" value="<?php echo $sq4['OP40'];?>" id=""><?php echo $sq4['OP40'];?></div>
        </div>
        <div class="boxa ">
            <label class="" for="">41.   <?php echo $sq['Q.41'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="41" value="<?php echo $sq5['OP1'];?>" id=""><?php echo $sq5['OP1'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="41" value="<?php echo $sq5['OP2'];?>" id=""><?php echo $sq5['OP2'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="41" value="<?php echo $sq5['OP3'];?>" id=""><?php echo $sq5['OP3'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="41" value="<?php echo $sq5['OP4'];?>" id=""><?php echo $sq5['OP4'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">42.   <?php echo $sq['Q.42'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="42" value="<?php echo $sq5['OP5'];?>" id=""><?php echo $sq5['OP5'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="42" value="<?php echo $sq5['OP6'];?>" id=""><?php echo $sq5['OP6'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="42" value="<?php echo $sq5['OP7'];?>" id=""><?php echo $sq5['OP7'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="42" value="<?php echo $sq5['OP8'];?>" id=""><?php echo $sq5['OP8'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">43.   <?php echo $sq['Q.43'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="43" value="<?php echo $sq5['OP9'];?>" id=""><?php echo $sq5['OP9'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="43" value="<?php echo $sq5['OP10'];?>" id=""><?php echo $sq5['OP10'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="43" value="<?php echo $sq5['OP11'];?>" id=""><?php echo $sq5['OP11'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="43" value="<?php echo $sq5['OP12'];?>" id=""><?php echo $sq5['OP12'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">44.   <?php echo $sq['Q.44'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="44" value="<?php echo $sq5['OP13'];?>" id=""><?php echo $sq5['OP13'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="44" value="<?php echo $sq5['OP14'];?>" id=""><?php echo $sq5['OP14'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="44" value="<?php echo $sq5['OP15'];?>" id=""><?php echo $sq5['OP15'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="44" value="<?php echo $sq5['OP16'];?>" id=""><?php echo $sq5['OP16'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">45.   <?php echo $sq['Q.45'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="45" value="<?php echo $sq5['OP17'];?>" id=""><?php echo $sq5['OP17'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="45" value="<?php echo $sq5['OP18'];?>" id=""><?php echo $sq5['OP18'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="45" value="<?php echo $sq5['OP19'];?>" id=""><?php echo $sq5['OP19'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="45" value="<?php echo $sq5['OP20'];?>" id=""><?php echo $sq5['OP20'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">46.   <?php echo $sq['Q.46'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="46" value="<?php echo $sq5['OP21'];?>" id=""><?php echo $sq5['OP21'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="46" value="<?php echo $sq5['OP22'];?>" id=""><?php echo $sq5['OP22'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="46" value="<?php echo $sq5['OP23'];?>" id=""><?php echo $sq5['OP23'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="46" value="<?php echo $sq5['OP24'];?>" id=""><?php echo $sq5['OP24'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">47.   <?php echo $sq['Q.47'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="47" value="<?php echo $sq5['OP25'];?>" id=""><?php echo $sq5['OP25'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="47" value="<?php echo $sq5['OP26'];?>" id=""><?php echo $sq5['OP26'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="47" value="<?php echo $sq5['OP27'];?>" id=""><?php echo $sq5['OP27'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="47" value="<?php echo $sq5['OP28'];?>" id=""><?php echo $sq5['OP28'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">48.  <?php echo $sq['Q.48'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="48" value="<?php echo $sq5['OP29'];?>" id=""><?php echo $sq5['OP29'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="48" value="<?php echo $sq5['OP30'];?>" id=""><?php echo $sq5['OP30'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="48" value="<?php echo $sq5['OP31'];?>" id=""><?php echo $sq5['OP31'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="48" value="<?php echo $sq5['OP32'];?>" id=""><?php echo $sq5['OP32'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">49.   <?php echo $sq['Q.49'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="49" value="<?php echo $sq5['OP33'];?>" id=""><?php echo $sq5['OP33'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="49" value="<?php echo $sq5['OP34'];?>" id=""><?php echo $sq5['OP34'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="49" value="<?php echo $sq5['OP35'];?>" id=""><?php echo $sq5['OP35'];?></div>
            <div class="dis11"><input  class="radio1" required="required" type="radio" name="49" value="<?php echo $sq5['OP36'];?>" id=""><?php echo $sq5['OP36'];?></div>
        </div>
        <div class="boxa">
            <label class="" for="">50.   <?php echo $sq['Q.50'];?> <b style="color:orangered;">*</b></label><br>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="50" value="<?php echo $sq5['OP37'];?>" id=""><?php echo $sq5['OP37'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="50" value="<?php echo $sq5['OP38'];?>" id=""><?php echo $sq5['OP38'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="50" value="<?php echo $sq5['OP39'];?>" id=""><?php echo $sq5['OP39'];?></div>
            <div class="dis1"><input  class="radio" required="required" type="radio" name="50" value="<?php echo $sq5['OP40'];?>" id=""><?php echo $sq5['OP40'];?></div>
        </div>
        <div class="boxa c">
            <input class="fibtn" type="submit" value="Submit" name="register"><div class="grl"></div><p style="margin-top: 10px; margin-left:5px;">Page 1/1</p>
        </div>
      </form>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
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
