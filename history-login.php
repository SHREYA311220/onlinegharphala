<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
   background-color: #757575;
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    overflow: hidden;
    
    
}
.container{
   background-color: black;
   color: #fff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    margin-top: 250px;
    border-radius:10px;
    box-shadow:0 20px 35px rgba(0,0,1,0.9);
}
form{
    margin:0 2rem;
}
.form-title{
    color: #fff;
    font-size:1.5rem;
    font-weight:bold;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    border-bottom:1px solid #757575;
    padding-left:1.5rem;
    font-size:15px;
}
.input-group{
    padding:1% 0;
    position:relative;

}
.input-group i{
    position:absolute;
    color:#fff;
}
input:focus{
    background-color: transparent;
    outline:transparent;
    
}
input::placeholder{
    color:transparent;
}
label{
    color:#fff;
    position:relative;
    left:1.2em;
    top:-1.3em;
    cursor:auto;
    transition:0.3s ease all;
}
input:focus~label,input:not(:placeholder-shown)~label{
    top:-3em;
    color:hsl(320, 20%, 97%);
    font-size:15px;
}
.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:none;
    color:rgb(252, 252, 253);
}
.recover a:hover{
    color:#fff;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:8px 0;
    border-radius:5px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(255,255,255,0.7);
    color:black;
    cursor:pointer;
    transition:.3s ease-in-out;
}
.btn:hover{
    background: rgba(255, 255, 255,0.5);
}
.or{
    font-size:1.1rem;
    margin-top:0.5rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(251, 251, 253);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(232, 232, 236);
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    color: #fff;
}
button{
    color:#fff;
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:rgb(249, 249, 253);
}
</style>
<body>

       
    

    <div class="container" id="signIn">
       
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email :</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Property Number :</label>
          </div>
         
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <p class="or">
         
    
      </div>
      <script>const signUpButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInButton');
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signup');

signUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})
signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})</script>
</body>


<?php 

include 'connect.php';



error_reporting(0);
if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
   session_start();
 
   $_SESSION['date']=$row['date'];
   $_SESSION['firstname']=$row['firstname'];
   $_SESSION['lastname']=$row['lastname'];
   $_SESSION['email']=$row['email'];
   $_SESSION['contact']=$row['contact'];
   $_SESSION['pendinggharpatti']=$row['pendinggharpatti'];
   $_SESSION['runninggharpatti']=$row['runninggharpatti'];
   $_SESSION['totalgharpatti']=$row['totalgharpatti'];

   //******************************************************************************** */
   $_SESSION['pendingdivabatti']=$row['pendingdivabatti'];
   $_SESSION['runningdivabatti']=$row['runningdivabatti'];
   $_SESSION['totaldivabatti']=$row['totaldivabatti'];


   //******************************************************************************** */
   $_SESSION['pendingarogyakar']=$row['pendingarogyakar'];
   $_SESSION['runningarogyakar']=$row['runningarogyakar'];
   $_SESSION['totalarogyakar']=$row['totalarogyakar'];
   //**************************************************************************** */
   $_SESSION['total']=$row['total'];

   
    if($row["usertype"]=="user")
    {
        header ("location:userinfo.php");
    }
    elseif($row["usertype"]=="admin")
    {
        header ("location:admin.php");
    }
    else{
        echo "Not Found, Incorrect Email or Password";
    }

}
?>
</html>