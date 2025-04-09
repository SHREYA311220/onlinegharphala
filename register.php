<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];

    $password=md5($password);

     $checkEmail="SELECT * From users where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password,contact)
                       VALUES ('$firstName','$lastName','$email','$password',$contact)";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   
    }

error_reporting(0);
if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
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