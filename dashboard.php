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
               <!-- <div class="hom"> <a href="http://localhost/onlineexamination/viewtotal.php"><i class="fas fa-plus"></i>Option-4</a></div> -->
            </div>
            <div class="hom"> <a href="http://localhost/onlineexamination/correctans.php"><i class="fas fa-plus"></i>Correct Options</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/stulogin.php"><i class="fas fa-lock"></i>Students Login</a></div>
               <div class="hom"> <a href="http://localhost/onlineexamination/viewtotal.php"><i class="fas fa-eye"></i>Students Answers</a></div>
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
    <script src="script.js"></script>
</body>
</html>