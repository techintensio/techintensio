
<?php
session_start();
error_reporting(0);//now it do not show any errors

include("db_connection.php");
 $numerror = $smlltrerror = $capltrerror = $specialcharerror = "";
# User Credentials

if(isset($_POST['submit']))
{

$image = $_POST['image'];
$username =$_POST['username'];
$email =$_POST['email'];
$phno =$_POST['phno'];
$exp =$_POST['exp'];
$interest =$_POST['interest'];
            
    
  // if (isset($_FILES['image']['name'])) {

    $image = $_FILES['image']['name'];

    $ext = end(explode('.', $image));
    // $image = "Resume-".rand(0000,9999).".".$ext;

    if ($ext == "pdf" || $ext == "PDF") {
      # code...

    

    $sourcePath = $_FILES['image']['tmp_name'];
    $destinationPath = "../Admin/resumes/".$image;

    $upload = move_uploaded_file($sourcePath,$destinationPath);

    if($upload == true)
    {
      echo "<script> Successfully Registered </script>";
    }
  // }
  // }
  // else $image = "";

$sql1 = $conn->prepare("INSERT INTO `users`(`username`, `email`, `phno`, `exp`, `interest`, `resume`) VALUES (?, ?, ?, ?, ?, ?)");
$sql1->bind_param("ssssss", $username, $email, $phno, $exp, $interest, $image);
$sql1->execute();
        
                        if($sql1)  
                        {
                             ?>
                             <script type="text/javascript">
                                 alert("Submitted successfully");
                                 setTimeout( ()=> {
                                    window.location.href = "../index.php";
                                 },0);
                             </script>
                             <?php 
                        }
      }
      else echo "<script>alert('Try to upload only pdf files');</script>";                 
}
?>


<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<title> TECH INTENSIO </title>
<!-- Stylesheets -->
<link href="assets/web/css/bootstrap.css" rel="stylesheet">
<link href="assets/web/css/revolution-slider.css" rel="stylesheet">
<link href="assets/web/css/style.css" rel="stylesheet">
<link rel="shortcut icon" href="assets/img/LOGO2.png" type="image/png">
<link rel="icon" href="assets/images/LOGO2.png" type="image/png">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="assets/web/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i|Oxygen:400,700|Pacifico&amp;display=swap" rel="stylesheet">
    <style type="text/css">

    @media only screen and (max-width: 769px)
      { 
        .rightnav{display: none;}
      }

     input,select{
        border-bottom: 1px solid lightgray;
        padding: 2px;
        padding-bottom: 3px;
        width: 100%;
     }
        .error{width: 70%;}
         .btn-grad {background-image: linear-gradient(to right, #314755 0%, #26a0da  51%, #314755  100%);}
         .btn-grad {text-transform: uppercase;transition: 0.5s;background-size: 200% auto;color: white;box-shadow: 0 0 20px #eee;border-radius: 40px;display: block;width: 70%; border:none;}

          .btn-grad:hover {
            background-position: right center;
            color: #fff;
            text-decoration: none;
          }
         
         .model{
            box-shadow: 4px 3px 14px 7px lightgray;
            /*position: relative;*/
            width: 380px;
            /*height: 600px;*/
         }
         .text-grad{background: linear-gradient(to bottom right, #A22FCE, #FF7000); -webkit-background-clip: text; -webkit-text-fill-color: transparent;}
         .passerror{display: none;}
    </style>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-87696927-2"></script>   
</head>

<body >

<section>
    <a href="../index.html">
        <div class="container">
  <div class="row">
    <div clas="col-lg-2 col-md-3" style="margin-left: 35%;margin-top: 2%;">
        <img src="../assets/img/LOGO2.png" alt="Tech Intensio" style="width: 20%;height: 60%;" />
    </div>
    <div class="col-lg-2 col-md-3" style="margin-left: -37%;">
         <h6 style="margin-top: 19%;">TECH</h6>
            <h3 style="margin-top:-5% ;">INTENSIO</h3>
        </div>
    </div>
</div>
</a>
</section>


<!-- The video -->
<video autoplay muted loop width="" height="750px">
  <source src="../assets/video/channels/1.mp4" type="video/mp4">
</video>
<section class="container" style="margin-top: -57%;padding-bottom: 10%;">

        <div class="col-lg-12 col-md-12 col-sm-6 col-12" align="center"  >
             <div class="model col-10 pt-4" style="border-radius: 20px;">
            <div>
                <img src="../assets/img/LOGO2.png" alt="User Icon"
                 style="width:60px;height:60px;margin-top: -10%;border-radius:50px ;">
            </div>
            <h3 class="mb-1 text-center text-grad">INTENSIO CAREERS</h3>


            <form action="" method="post" class="pt-3" enctype="multipart/form-data">
               
                <div class="p-4" align="left">
                <table class="table table-borderless">

                    
                        <p>Enter your name</p>
                        
                            <input type="text" name="username" placeholder="Enter your Name" required><br><br>      

                    
                        <p>Your phone number</p>
                        
                            <input type="text" name="phno" placeholder="Enter Phone Number" minlength="10" maxlength="10s" required><br><br>        

                    
                        <p>Enter your email</p>
                      
                           <input type="email" name="email" placeholder="Enter Email" required><br><br>            

                
                    
                        <p>Experience Level</p>
                        
                                <select name="exp" id="">
                                    <option></option>
                                    <option value="intern">Intern</option>
                                    <option value="earlyprof">Early Professional < 3 Years</option>
                                    <option value="executives">Executives</option>
                                    <option value="reentry">Tech Re- Entry</option>
                                </select>
                            <br><br>    
                    
                    
                        <p>Areas of Interest:</p>
                
                            <select name="interest" id="">
                                <option></option>
                                <option value="webdes">Web Designing</option>
                                <option value="webdev">Web Development</option>
                                <option value="webdevwithpython">Web Development with Python</option>
                                <option value="executives">App Development</option>
                                <option value="datascience">Data Science</option>
                                <option value="java">Java</option>
                            </select>
                       <br><br>
                    
                        <p>Upload resume</p>
                 
                        <input type="file" name="image" accept="application/pdf"  align="right" required>
                        <p style="color: red;">*&nbsp;upload pdf file only</p>
                </table>
            </div>
                

                <div align="center" class="mt-4 mb-4 pb-4">
                    <input type="submit" class="btn-grad p-3" name="submit" value="Submit" id="submit">
                </div>
            </form>


        </div>
        </div> 
   
</section>

<?php include("footer.php");?>   

<script src="assets/web/js/jquery.js"></script> 
<script src="assets/web/js/popper.min.js"></script>
<script src="assets/web/js/bootstrap.min.js"></script>
<script src="assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/web/js/revolution.min.js"></script>
<script src="assets/web/js/jquery.fancybox.pack.js"></script>
<script src="assets/web/js/jquery.fancybox-media.js"></script>
<script src="assets/web/js/owl.js"></script>
<script src="assets/web/js/wow.js"></script>
<script src="assets/web/js/appear.js"></script>
<script src="assets/web/js/jquery.countdown.js"></script>
<script src="assets/web/js/isotope.js"></script>
<script src="assets/web/js/mixitup.js"></script>
<script src="assets/web/js/lazyload.js"></script>
<script src="assets/web/js/script.js"></script>
<script>
    var signin=()=> window.location.href="signin.php";
</script>
</body>

</html>