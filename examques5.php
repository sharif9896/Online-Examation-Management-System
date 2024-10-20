<!DOCTYPE html>
<h lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard of Online of Examination</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
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
    <br>
    <div class="go">
    <div class="side-bar">
        <div class="menu">
        <div class="itemss">Menu</a></div>
            <div class="items"><a href="http://localhost/onlineexamination/dashboard.php"><i class="fas fa-tachometer"></i>Dashboard</a></div>
            <div class="items"><a class="sub-btn"><i class="fa fa-user"></i>Student Information
            <i class="fas fa-angle-right droopdown" style="margin-top: 24px;"></i>
            </a>
            <div class="sub1menu ac">
               <div class="hom"> <a href="http://localhost/onlineexamination/studenentry.php"><i class="fas fa-plus"></i>Students</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/examques.php"><i class="fas fa-plus"></i>Exam Questions</a></div>
               <div class="items"><a class="sub-btn"><i class="fa fa-download"></i>QuesOptions
            <i class="fas fa-angle-right droopdown" style="margin-top: 24px;"></i>
            </a>
            <div class="sub1menu ac">
               <div class="hom"> <a href="http://localhost/onlineexamination/examques1.php"><i class="fas fa-plus"></i>Option-1</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/examques2.php"><i class="fas fa-plus"></i>Option-2</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/examques3.php"><i class="fas fa-plus"></i>Option-3</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/examques4.php"><i class="fas fa-plus"></i>Option-4</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/examques5.php"><i class="fas fa-plus"></i>Option-5</a></div>
               <!-- <div class="hom"> <a href="http://localhost/onlineexamination/stulogin.php"><i class="fas fa-plus"></i>Option-3</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/viewtotal.php"><i class="fas fa-plus"></i>Option-4</a></div> -->
            </div>
            <div class="hom"> <a href="http://localhost/onlineexamination/correctans.php"><i class="fas fa-plus"></i>Correct Options</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/stulogin.php"><i class="fas fa-lock"></i>Students Login</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/viewtotal.php"><i class="fas fa-eye"></i>Students Answers</a></div>
            </div>
           
            </div>
            </div>
             </div>
             </div>
             <?PHP
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexamination";

$conn = new mysqli($servername, $username, $password, $dbname);

$es=mysqli_query($conn,"SELECT * FROM addedquestion");
$sq=mysqli_fetch_array($es);


if(isset($_POST['register'])){
    $q1=$_POST['Option1'];
     $q2=$_POST['Option2'];
     $q3=$_POST['Option3'];
     $q4=$_POST['Option4'];
     $q5=$_POST['Option5'];
     $q6=$_POST['Option6'];
     $q7=$_POST['Option7'];
     $q8=$_POST['Option8'];
     $q9=$_POST['Option9'];
     $q10=$_POST['Option10'];
     $q11=$_POST['Option11'];
     $q12=$_POST['Option12'];
     $q13=$_POST['Option13'];
     $q14=$_POST['Option14'];
     $q15=$_POST['Option15'];
     $q16=$_POST['Option16'];
     $q17=$_POST['Option17'];
     $q18=$_POST['Option18'];
     $q19=$_POST['Option19'];
     $q20=$_POST['Option20'];
     $q21=$_POST['Option21'];
     $q22=$_POST['Option22'];
     $q23=$_POST['Option23'];
     $q24=$_POST['Option24'];
     $q25=$_POST['Option25'];
     $q26=$_POST['Option26'];
     $q27=$_POST['Option27'];
     $q28=$_POST['Option28'];
     $q29=$_POST['Option29'];
     $q30=$_POST['Option30'];
     $q31=$_POST['Option31'];
     $q32=$_POST['Option32'];
     $q33=$_POST['Option33'];
     $q34=$_POST['Option34'];
     $q35=$_POST['Option35'];
     $q36=$_POST['Option36'];
     $q37=$_POST['Option37'];
     $q38=$_POST['Option38'];
     $q39=$_POST['Option39'];
     $q40=$_POST['Option40'];
     if($q11==NULL || $q12==NULL || $q13==NULL || $q14==NULL || $q15==NULL || $q16==NULL || $q17==NULL || $q18==NULL || $q19==NULL || $q10==NULL || $q1==NULL || $q2==NULL || $q3==NULL || $q4==NULL || $q5==NULL || $q6==NULL || $q7==NULL || $q8==NULL || $q19==NULL || $q20==NULL || $q21==NULL || $q22==NULL || $q23==NULL || $q24==NULL || $q25==NULL || $q26==NULL || $q27==NULL || $q28==NULL || $q29==NULL || $q30==NULL || $q31==NULL || $q32==NULL || $q33==NULL || $q34==NULL || $q35==NULL || $q36==NULL || $q37==NULL || $q38==NULL || $q39==NULL || $q40==NULL)
     {
         //
     }
     else
     {
         
        $sql=mysqli_query($conn,"INSERT INTO `option5`(`OP1`, `OP2`, `OP3`, `OP4`, `OP5`, `OP6`, `OP7`, `OP8`, `OP9`, `OP10`, `OP11`, `OP12`, `OP13`, `OP14`, `OP15`, `OP16`, `OP17`, `OP18`, `OP19`, `OP20`, `OP21`, `OP22`, `OP23`, `OP24`, `OP25`, `OP26`, `OP27`, `OP28`, `OP29`, `OP30`, `OP31`, `OP32`, `OP33`, `OP34`, `OP35`, `OP36`, `OP37`, `OP38`, `OP39`, `OP40`) VALUES ('$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$q21','$q22','$q23','$q24','$q25','$q26','$q27','$q28','$q29','$q30','$q31','$q32','$q33','$q34','$q35','$q36','$q37','$q38','$q39','$q40')");
         if($sql)
         {
             ?>

             <div class="kols">
                <div class="sign1" data-aos="fade-down">
                    <img src="nko.png" alt="">
                        <div class="lok" ><a href="dashboard.php"><button style="padding: 10px; background-color: lightblue; color: white; border:1px solid white;margin-left:70%; cursor:pointer;">Dashboard</button></a></div>
                </div>
             </div>
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
         }
         else
         {
             echo "Email Already Exists!";
         }
 }
} 

 ?>

<!-- $op1=$_POST['Option1']; -->
    <!--  -->
    <!-- $op2=$_POST['Option2']; -->
    <!--  -->
    <!-- $op3=$_POST['Option3']; -->
    <!--  -->
    <!-- $op4=$_POST['Option4']; -->
    <!--  -->
    <!-- $op5=$_POST['Option5']; -->
    <!--  -->
    <!-- $op6=$_POST['Option6']; -->
    <!--  -->
    <!-- $op7=$_POST['Option7']; -->
    <!--  -->
    <!-- $op8=$_POST['Option8']; -->
    <!--  -->
    <!-- $op9=$_POST['Option9']; -->
    <!--  -->
    <!-- $op10=$_POST['Option10']; -->
    <!--  -->
    <!-- $op11=$_POST['Option11']; -->
    <!--  -->
    <!-- $op12=$_POST['Option12']; -->
    <!--  -->
    <!-- $op13=$_POST['Option13']; -->
    <!--  -->
    <!-- $op14=$_POST['Option14']; -->
    <!--  -->
    <!-- $op15=$_POST['Option15']; -->
    <!--  -->
    <!-- $op16=$_POST['Option16']; -->
    <!--  -->
    <!-- $op17=$_POST['Option17']; -->
    <!--  -->
    <!-- $op18=$_POST['Option18']; -->
    <!--  -->
    <!-- $op19=$_POST['Option19']; -->
    <!--  -->
    <!-- $op20=$_POST['Option20']; -->
    <!--  -->
    <!-- $op21=$_POST['Option21']; -->
    <!--  -->
    <!-- $op22=$_POST['Option22']; -->
    <!--  -->
    <!-- $op23=$_POST['Option23']; -->
    <!--  -->
    <!-- $op24=$_POST['Option24']; -->
    <!--  -->
    <!-- $op25=$_POST['Option25']; -->
    <!--  -->
    <!-- $op26=$_POST['Option26']; -->
    <!--  -->
    <!-- $op27=$_POST['Option27']; -->
    <!--  -->
    <!-- $op28=$_POST['Option28']; -->
    <!--  -->
    <!-- $op29=$_POST['Option29']; -->
    <!--  -->
    <!-- $op30=$_POST['Option30']; -->
    <!--  -->
    <!-- $op31=$_POST['Option31']; -->
    <!--  -->
    <!-- $op32=$_POST['Option32']; -->
    <!--  -->
    <!-- $op33=$_POST['Option33']; -->
    <!--  -->
    <!-- $op34=$_POST['Option34']; -->
    <!--  -->
    <!-- $op35=$_POST['Option35']; -->
    <!--  -->
    <!-- $op36=$_POST['Option36']; -->
    <!--  -->
    <!-- $op37=$_POST['Option37']; -->
    <!--  -->
    <!-- $op38=$_POST['Option38']; -->
    <!--  -->
    <!-- $op39=$_POST['Option39']; -->
    
  <!-- $op40=$_POST['Option40']; -->

             <div class="consds">
                <div class="cocs">
                    <div class="hello">
                        <div class="ko" style="color: #303030;"><h1 >Questions Entry</h1></div>
                        <center>
                         <form action="" method="post">
                            <table  border="0" cellpadding="5" cellspacing="5" class="designq">
                            <tr><td class="labelss">Question 41:</td><td><input type="text" style="width: 740px;"  name="q1" class="fields" size="25" placeholder="<?php echo $sq['Q.31'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px;" required="required" name="Option1" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option2" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option3" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option4" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 42:</td><td><input type="text" style="width: 740px;"  name="q2" class="fields" size="25" placeholder="<?php echo $sq['Q.32'];?>"/></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option5" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option6" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option7" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option8" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 43:</td><td><input type="text" style="width: 740px;"  name="q3" class="fields" size="25" placeholder="<?php echo $sq['Q.33'];?>"/></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option9" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option10" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option11" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option12" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 44:</td><td><input type="text" style="width: 740px;"  name="q4" class="fields" size="25" placeholder="<?php echo $sq['Q.34'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option13" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option14" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option15" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option16" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 45:</td><td><input type="text" style="width: 740px;"  name="q5" class="fields" size="25" placeholder="<?php echo $sq['Q.35'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option17" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option18" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option19" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option20" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 46:</td><td><input type="text" style="width: 740px;" name="q6" class="fields" size="25" placeholder="<?php echo $sq['Q.36'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option21" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;"  name="Option22" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option23" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option24" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 47:</td><td><input type="text" style="width: 740px;" name="q7" class="fields" size="25" placeholder="<?php echo $sq['Q.37'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option25" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;"  name="Option26" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option27" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option28" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 48:</td><td><input type="text" style="width: 740px;" name="q8" class="fields" size="25" placeholder="<?php echo $sq['Q.38'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option29" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;"  name="Option30" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option31" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option32" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 49:</td><td><input type="text" style="width: 740px;" name="q9" class="fields" size="25" placeholder="<?php echo $sq['Q.39'];?>" /></td></tr>
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option33" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;"  name="Option34" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option35" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option36" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td class="labelss">Question 50:</td><td><input type="text" style="width: 740px;" name="q10" class="fields " size="25" placeholder="<?php echo $sq['Q.40'];?>" /></td></tr> 
                            <tr><td class="labelss">Options :</td><td><input type="text" style="width: 180px; " required="required" name="Option37" class="fields" size="25" placeholder=" Option 1" /><input type="text" style="width: 180px; margin-left:5px;"  name="Option38" class="fields" size="25" placeholder=" Option 2" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option39" class="fields" size="25" placeholder=" Option 3" /><input type="text" style="width: 180px; margin-left:5px;" required="required" name="Option40" class="fields" size="25" placeholder=" Option 4" /></td></tr>
                            <tr><td colspan="2" align="center"><input type="submit" value="Entry" name="register" class="fields fg" /></td></tr>
                            </table>
                            </form>  
                         </center>
                        </div>
                        </div>
                        </div>
             <button id="back-to-top" onclick="topFunction()" title="Go to top">&#8679;</button>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.sub-btn').click(function(){
                $(this).next('.sub1menu').slideToggle();
                $(this).find('.droopdown').toggleClass('rotate');
            });
        })
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <!-- <a href="dashboard.php"> -->
    <div class="back"><img src="dsa.png" alt=""></div></a>
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