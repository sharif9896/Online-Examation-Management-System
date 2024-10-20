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

if(isset($_POST['register']))
{


    // $filename=$_FILES["63"]["name"];
    // $temp_nam=$_FILES["63"]["tmp_name"];
    // $folder="images/".$filename;
    // move_uploaded_file($temp_nam, $folder); 

    $roll=$_POST['roll'];
    $nam=$_POST['nam'];
    $cls=$_POST['cls'];
    $dep=$_POST['dep'];
    // $radio=$_POST['gender'];
    $email=$_POST['email'];
    $pno=$_POST['pno'];
    $dob=$_POST['dob'];
    if($roll==NULL || $nam==NULL || $cls==NULL || $dep==NULL || $email==NULL || $pno==NULL || $dob==NULL)
    {
        //
    }
    else
    {
        $sql=mysqli_query($conn,"INSERT INTO `studentdata`(`Regno`, `Name`, `Class`, `Department`, `Email`, `Mobile No`, `Dob`) VALUES ('$roll','$nam','$cls','$dep','$email','$pno','$dob')");
        if($sql)
        {
            ?>
              <script>
                    
                    swal({
                        title: "Submitted Successfully!",
                        text: "Know You Can Write The Exam!",
                        icon: "success",
                        button: "Okay!",
    });
    
                </script>
            <!-- <div class="mi" style="color:#303030; font-size: 13px;">Successfully Entered!</div> -->
            <?php 
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
        </div>
        <div class="lix"></div>
        <form action="" method="post">
        <div class="boxa a">
            <label class="" for="">Reg No <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="roll" id="" placeholder=" Enter Register No :">
        </div>
        <div class="boxa">
            <label class="" for="">Name <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="nam" id="" placeholder=" Enter Name :">
        </div>
        <div class="boxa">
            <label class="" for="">Class <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="cls" id="" placeholder=" Enter Class :">
        </div>
        <div class="boxa">
            <label class="" for="">Department <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="dep" id="" placeholder=" Enter Department :">
        </div>
        <div class="boxa">
            <label class="" for="">Date of Birth<b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="dob" id="" placeholder=" Enter Date of Birth :">
        </div>

        <!-- <div class="boxa">
            <label class="" for="">Gender <b style="color:orangered;">*</b></label><br>
            <input class="dis1" class="radio" type="radio" name="gender" id="">Male
            <input class="dis1" class="radio" type="radio" name="gender" id="">Female
            <input class="dis1" class="radio" type="radio" name="gender" id="">Other
        </div> -->
        <div class="boxa">
            <label class="" for="">Email <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="email" id="" placeholder=" Enter Email :">
        </div>
        <div class="boxa">
            <label class="" for="">Mobile No <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="text" name="pno" id="" placeholder=" Enter Mobile No :">
        </div>
        <!-- <div class="boxa">
            <label class="" for="">Student Image <b style="color:orangered;">*</b></label><br>
            <input class="dis" type="file" name="63" id="" placeholder=" Enter Mobile No :">
        </div> -->
        <div class="boxa c">
            <input class="fibtn" type="submit" value="Submit" name="register"><div class="grl"></div><p style="margin-top: 10px; margin-left:5px;">Page 1/1</p>
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
