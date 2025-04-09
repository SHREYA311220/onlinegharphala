

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    

    <style>
        table{
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }
        th{
            border: 2px solid black;
            background-color: #d96459;
            color: white;
        }
        td{
            border: 2px solid black;
        }
         
    </style>
</head>
<body>

                <p style="font-size: large;"> Date : <?php   
                    error_reporting(0);
                    echo $_SESSION['date'];
                    ?></p>
                <p style="font-size: large;">Name : 
                <?php   
                    error_reporting(0);
                    echo $_SESSION['ffirstname'];
                    ?>
                    <?php   
                    error_reporting(0);
                    echo $_SESSION['llastname'];
                    ?></p>
    
               
    <table>
        <tr>
            <th>Tax type</th>
            <th>Pending</th>
            <th>Running</th>
            <th>Total</th>
        </tr>
                <tr>
                    <td>Gharpatti</td>
                <td> <?php  echo $_SESSION['ppendinggharpatti'];?></td>
                <td> <?php  echo $_SESSION['rrunninggharpatti'];?></td>
                <td> <?php  echo $_SESSION['ttotalgharpatti'];?></td>
                </tr>
                <tr>
                    <td>Divabatti</td>
                <td> <?php  echo $_SESSION['ppendingdivabatti'];?></td>
                <td> <?php  echo $_SESSION['rrunningdivabatti'];?></td>
                <td> <?php  echo $_SESSION['ttotaldivabatti'];?></td>
                </tr>
                <tr>
                    <td>Arogyakar</td>
                <td> <?php  echo $_SESSION['ppendingarogyakar'];?></td>
                <td> <?php  echo $_SESSION['rrunningarogyakar'];?></td>
                <td> <?php  echo $_SESSION['ttotalarogyakar'];?></td>
                <tr>
                    <td ></td>
                    <td></td>
                    <td >Total</td>
                <td> <?php  echo $_SESSION['ttotal'];?></td>
                </tr>
                </tr>
                
    </table>
    


    <?php 

include 'connect.php';



error_reporting(0);
if(isset($_POST['signIn'])){
   $email=$_POST['eemail'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM user WHERE email='$email' and password='$password'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
   session_start();
 
   $_SESSION['ddate']=$row['ddate'];
   $_SESSION['ffirstname']=$row['ffirstname'];
   $_SESSION['llastname']=$row['llastname'];
   $_SESSION['eemail']=$row['eemail'];
   $_SESSION['ccontact']=$row['ccontact'];
   $_SESSION['ppendinggharpatti']=$row['ppendinggharpatti'];
   $_SESSION['rrunninggharpatti']=$row['rrunninggharpatti'];
   $_SESSION['totalgharpatti']=$row['totalgharpatti'];

   //******************************************************************************** */
   $_SESSION['ppendingdivabatti']=$row['ppendingdivabatti'];
   $_SESSION['runningdivabatti']=$row['runningdivabatti'];
   $_SESSION['totaldivabatti']=$row['totaldivabatti'];


   //******************************************************************************** */
   $_SESSION['ppendingarogyakar']=$row['ppendingarogyakar'];
   $_SESSION['rrunningarogyakar']=$row['rrunningarogyakar'];
   $_SESSION['ttotalarogyakar']=$row['ttotalarogyakar'];
   //**************************************************************************** */
   $_SESSION['total']=$row['total'];


}
?>

       
</body>
</html>