<?php
session_start();
include("connect.php");

?>

<?php
error_reporting(0);
$id=$_GET['id'];
$select="SELECT * FROM users WHERE id='$id'";
$result=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($result);
 

if(isset($_POST['update_btn'])){

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $date=$_POST['date'];



    $pgh=$_POST['pendinggharpatti'];
    $rgh=$_POST['runninggharpatti'];
    $tgh=$_POST['totalgharpatti'];

    $pd=$_POST['pendingdivabatti'];
    $rd=$_POST['runningdivabatti'];
    $td=$_POST['totaldivabatti'];

    
    $pa=$_POST['pendingarogyakar'];
    $ra=$_POST['runningarogyakar'];
    $ta=$_POST['totalarogyakar'];

    $total=$_POST['total'];

    $update="UPDATE users SET firstname='$fname',lastname='$lname',email='$email',contact='$contact',date='$date',
    pendinggharpatti='$pgh',runninggharpatti='$rgh',totalgharpatti='$tgh',pendingdivabatti='$pd',runningdivabatti='$rd',totaldivabatti='$td',pendingarogyakar='$pa',runningarogyakar='$ra',totalarogyakar='$ta',total='$total' WHERE id='$id'";
    
    $data=mysqli_query($conn,$update);
    
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        table{
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
            color: #d96459;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
            margin-top: 1cm;
        }
        th{
            border: 2px solid black;
            background-color: #d96459;
            color: white;
            text-align: center;
        }
        td{
            border: 2px solid black;
            text-align: center;
            background-color: white;
        }
        .col{
            width: 130px;
            height: 30px;
        }
        
         
    </style>
<body>
    <form action="" method="POST">
        <div class="date" >
        First Name/नाव : <input type="text" name="firstname" value="<?php echo $row['firstname']; ?>"><br>
        <br>
        Last Name/आडनाव : <input type="text" name="lastname" value="<?php echo $row['lastname']; ?>"><br>
        <br>
        Contact/संपर्क : <input type="text" name="contact" value="<?php echo $row['contact']; ?>">

        </div>
    
    
    
    <div class="email" style="float:right; margin-top:-1.8cm">
    Date/तारीख : <input type="date" name="date" value="<?php echo $row['date']; ?>"><br>
    <br>
    Email/ईमेल : <input type="text" name="email" value="<?php echo $row['email']; ?>">
    </div>
    <br>
       
      
      
       
  


    <table>
   
        <tr>
            <th>कर प्रकार</th>
            <th>मागील बाकी</th>
            <th>चालू</th>
            <th>एकूण</th>
        </tr>
        <tr>
        <th>घरफाळा</th>
        <td><input class="col" type="text" name="pendinggharpatti" value="<?php echo $row['pendinggharpatti']; ?>" id="n1">₹</td>
        <td><input class="col" type="text" name="runninggharpatti" value="<?php echo $row['runninggharpatti']; ?>" id="n2">₹</td>
        <td><input class="col" type="text" name="totalgharpatti" value="<?php echo $row['totalgharpatti']; ?>" id="result1">₹</td>
        </tr>
        <tr>
        <th>दिवाबत्ती</th>
        <td><input class="col" type="text" name="pendingdivabatti" value="<?php echo $row['pendingdivabatti']; ?>" id="n3">₹</td>
        <td><input class="col" type="text" name="runningdivabatti" value="<?php echo $row['runningdivabatti']; ?>" id="n4">₹</td>
        <td><input class="col" type="text" name="totaldivabatti" value="<?php echo $row['totaldivabatti']; ?>" id="result2">₹</td>
        </tr>
        <tr>
        <th>आरोग्यकर</th>
        <td><input class="col" type="text" name="pendingarogyakar" value="<?php echo $row['pendingarogyakar']; ?>" id="n5">₹</td>
        <td><input class="col" type="text" name="runningarogyakar" value="<?php echo $row['runningarogyakar']; ?>" id="n6">₹</td>
        <td><input class="col" type="text" name="totalarogyakar" value="<?php echo $row['totalarogyakar']; ?>" id="result3">₹</td></tr>
        <tr>
                    <td></td>
                    <td></td>
                    <td>एकूण </td>
                    <td><input style="width: 132.2px;height:30.2px;" type="text" name="total" value="<?php echo $row['total']; ?>" id="totall"/>₹</td>
                </tr>
                <tr>
                </table>


               <input style="float:right;width:10rem;" type="submit"  onclick="alert('Updated Successfully!');" name="update_btn"  >
        
      
        </form>
    
   <button style="float: right;" class="btntotal" onclick="calc();">Total</button>
    
    <a href="admin.php">Back</a>
</body>



<script>
            
            function calc()
            {
                var n1 = parseFloat(document.getElementById('n1').value);
                var n2 = parseFloat(document.getElementById('n2').value);
                document.getElementById('result1').value = n1+n2;

                //************************************************************************* */
                var n3 = parseFloat(document.getElementById('n3').value);
                var n4 = parseFloat(document.getElementById('n4').value);
                document.getElementById('result2').value = n3+n4;

                //********************************************************************** */
                var n5 = parseFloat(document.getElementById('n5').value);
                var n6 = parseFloat(document.getElementById('n6').value);
                document.getElementById('result3').value = n5+n6;

                //************************************************************************** */
                var result1 = parseFloat(document.getElementById('result1').value);
                var result2 = parseFloat(document.getElementById('result2').value);
                var result3 = parseFloat(document.getElementById('result3').value);
                document.getElementById('totall').value = result1+result2+result3;

             
            }
            
            
        </script>

</html>
