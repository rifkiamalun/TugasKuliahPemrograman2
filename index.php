<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="MyFrameworks/jquery-3.5.1.min.js" type="text/javascript"></script>
</head>
<body>
<div class="position-relative">
    <img src="assets/Login_Background1.jpg" class=" w-100 fixed-top" style="z-index: -1;">
    <div class=" float-right position-absolute" style="right:100px; top:150px">
        <div class="card" style="width:500px">
            <div class="card-header">Login Form</div>
            <div class="card-body">
            <form method="POST" action="Login_Behind.php" >
            <div class="p-1">              
                 <div>Username</div>
                 <div><input name="usernametbx"   placeholder="Login : Rifki" name="uname" required class="form-control"></div>                
               </div>
               <div class="p-1">
                 <div>Password</div>
                 <div><input name="passwordtbx"  placeholder="191011400187" name="password" required class="form-control"></div>                
               </div>
               <div class="p-1">
                 <div class="d-flex">
                     <input type="submit" name="IDSubmit" style="width:250px"  value="Login" class="form-control bg-dark text-white">
                     <a href="Guest.php"style="width:250px" class="form-control bg-success text-white text-center">Masuk Sebagai Tamu</a>     
                </div>  
                <div class="text-center text-danger"><label  id="wrongpasswordlbl">Harap Password Isi Yang Benar</label></div>   
               </div>                  
             </form>
              
            </div>
        </div>
    </div>
</div>
<?php
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'none';</script>";
   if(isset($_GET["Error"])){
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'block';</script>";
    }
?>
</body>
</html>