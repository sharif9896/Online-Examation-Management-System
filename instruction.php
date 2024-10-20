<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard of Online of Examination</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" stylesheet href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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
    $roll=$_POST['roll'];
    $dob=$_POST['dob'];
    
    $sql=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll' AND Dob='$dob'");
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
    <!-- <h3 style="font-size: 12px;">Invalid Reg No & Name</h3> -->
</div>
<?php
    }
}


?>

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
             <div class="consd">
                <div class="coc">
                    <div class="boxsaq">
                        <div class="h1q">Total No. of Student</div>
                        <div class="ni"><i class="fas fa-user"></i><span><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "onlineexamination";
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            $ds=mysqli_query($conn,"SELECT * FROM `studentdata`");
                            $f=mysqli_num_rows($ds);
                            if($f){
                                echo "".$f."";
                            }
                            else{
                                echo "0";
                            }
                        ?></span></div>
                    </div>
                    <div class="boxsaq1">
                    <div class="h1q">Total Exam Submitted</div>
                    <div class="ni"><i class="fas fa-user"></i><span><?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "onlineexamination";
                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                            $ds=mysqli_query($conn,"SELECT * FROM `submit`");
                            $f=mysqli_num_rows($ds);
                            if($f){
                                echo "".$f."";
                            }
                            else{
                                echo "0";
                            }
                        ?></span></div>
                    </div>
                    </div>
                </div>
             </div>
             <div class="kol">
             <div class="sign" data-aos="fade-down">
                <div class="bvo"><img src="him.png" alt=""></div>
                <div class="inst">
                    <h3 style="font-size:15px; color:#303030; font-family: sans-serif; padding: 10px; text-align: justify; text-decoration: underline;">Instructions for Online Examination</h3>
                    <h5 style="font-size:12px; color:#303030; font-family: sans-serif; padding: 10px; text-align: justify;">
                    1.  Make sure your device (laptop, PC, or tablet) is fully charged and meets the technical requirements (camera, microphone, browser compatibility).
                <br><br>2.  Environment Setup:

Choose a quiet, well-lit room with minimal distractions.
No other person should be present in the room during the exam.
Ensure your background is free from any materials that could be considered as unauthorized aid.<br><br>
3.  Instructions During the Exam:

Do not navigate away from the exam window; attempts to switch tabs or applications may lead to automatic disqualification.
Maintain proper conduct; any suspicious activity will be flagged by the proctoring system.
You are not allowed to use any external devices such as mobile phones, calculators, or books unless specifically permitted.
<br><br>4.  Post-Exam Conduct:

Do not discuss or share exam questions or answers after the exam, as this will be considered a violation of exam integrity.

                </h5>
                </div>
                <!-- <form action="viewques.php" method="post"> -->
                    <div class="awl">
                    <input type="checkbox" name="roll" value=""><b>I accepted all the instructions to write the exam.</b>
                    </div>
                    <a href="viewques.php"><div class="bf"><input type="submit" name="register" value="NEXT"></div></a>
                <!-- </form> -->

                </div>
                </div>
             <br>
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