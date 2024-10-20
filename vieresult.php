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

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineexamination";

$conn = new mysqli($servername, $username, $password, $dbname);
$roll=$_POST['roll'];
$s=mysqli_query($conn,"SELECT * FROM studentdata WHERE Regno='$roll'");
$r=mysqli_fetch_array($s);
// echo $r['Name'];

$re=$r['Regno'];
$re2=$r['Name'];
$re3=$r['Class'];
$re4=$r['Department'];
// $re5=$r['Gender'];
$re6=$r['Email'];
$re7=$r['Mobile No'];
$re41=$r['Dob'];

// $sql=mysqli_query($conn,"INSERT INTO `demo`(`1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`) VALUES ('$re','$re2','$re3','$re4','$re5','$re6','$re7','$re41')")

?>

<div class="loader">  
</div>
<div class="conti">
<div class="boxa b">
            <!-- <img src="ghy.PNG" alt=""> -->
            <center><div class="hu">ISLAMIAH COLLEGE LEARNING MANAGEMENT SYSTEM<br> <b style="color:red;">ONLINE EXAMINATION FORM</b></div></center>
            <div class="lok" style="width: 100%; height: 2px; background-color: lightcoral; margin-top: 20px;"></div>
        </div>
        <div class="lix"></div>
        <form action="instruction.php" method="post">
        <div class="boxa a">
            <label class="" for="">Reg No <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="roll" id="" placeholder="<?php echo $re;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Name <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="nam" id="" placeholder="<?php echo $re2;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Class <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="cls" id="" placeholder="<?php echo $re3;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Department <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="dep" id="" placeholder="<?php echo $re4;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Date of Birth<b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="dob" id="" placeholder=" <?php echo $re41;?>">
        </div>
        <!-- <div class="boxa">
            <label class="" for="">Date of Birth<b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="dob" id="" placeholder=" <?php echo $re41;?>">
        </div> -->
        <!-- <div class="boxa">
            <label class="" for="">Gender <b style="color:orangered;">*</b></label><br>
            <input class="dis1" class="radio" type="radio" value="Male" name="gender" id="" checked="<?php echo $re5;?>">Male
            <input class="dis1" class="radio" type="radio" value="Female" name="gender" id="">Female
            <input class="dis1" class="radio" type="radio" value="Others" name="gender" id="">Other
        </div> -->
        <div class="boxa">
            <label class="" for="">Email <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="email" id="" placeholder="<?php echo $re6;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Mobile No <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="pn" id="" placeholder="<?php echo $re7;?>">
        </div>
        <div class="boxa">
            <label class="" for="">Date <b style="color:orangered;">*</b></label><br>
            <div class="clock">
            <span id="hrs">00</span>
            <span>:</span>
            <span id="min">00</span>
            <span>:</span>
            <span id="sec">00</span>
            <span id="ampm"></span>
        </div>
        </div>
        <div class="boxa">
            <label class="" for="">Time <b style="color:orangered;">*</b></label><br>
        <div class="clock1" >
            <span id="day"></span>
        </div>
        </div>
        <div class="boxa c">
            <input class="fibtn" type="submit" value="Submit" name="register"><div class="grl"></div><p style="margin-top: 10px; margin-left:5px;">Page 1/1</p><a href="http://localhost/onlineexamination/stulogin.php"><input class="fibtn" style="margin-left: 120px;" type="submit" value="Back"></a>
        </div>
        </form>
    </div>
    <a href="stulogin.php">
    <!-- <div class="back"><img src="dsa.png" alt=""></div></a> -->
       <script>let loader=document.querySelector(".loader");
window.addEventListener('load',function(){
    loader.classList.add("loader--hidden");
    loader.addEventListener('transitionend',function(){
        document.body.removeChild(loader);
    })
});

setInterval(()=>{
    let currenttime=new Date();

    var hours=document.getElementById("hrs");
    let mins=document.getElementById("min");
    let seconds=document.getElementById("sec");
    let ampm=document.getElementById("ampm");

    // switch (hours){
    //     case 12:
    //         hours=12;
    //         break;
    //     case 24:
    //         hours=12;
    //         break;
    //     default:
    //         hours=hours % 12;
    // }


    hours.innerHTML=(currenttime.getHours()<10?"0":"") + currenttime.getHours()%12==0?"12":(currenttime.getHours()<10?"0":"") + currenttime.getHours()%12;
    mins.innerHTML=(currenttime.getMinutes()<10?"0":"") + currenttime.getMinutes();
    seconds.innerHTML=(currenttime.getSeconds()<10?"0":"") + currenttime.getSeconds();
    ampm.innerHTML=currenttime.getHours() >= 12 && currenttime.getHours() < 24 ? "PM" : "AM";
},1000)

let currenttime=new Date();
let day=document.getElementById("day");


// let mon=document.getElementById("mon");
// let yr=document.getElementById("yr");
// %12==0?"12":currenttime.getHours()


let days=currenttime.getDate();
let mont=currenttime.getMonth() + 1;
let yer=currenttime.getFullYear();
day.innerHTML=`${days<10?"0":""}${days}-${mont<10?"0":""}${mont}-${yer}`;

</script>
</body>
</html>


