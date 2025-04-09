
<?php
  include "connectadmin.php";
  error_reporting(0)
?>
<?php
if(isset($_POST['submit'])){
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $date=$_POST['date'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    $password=md5($password) ;

    //*columns name[]*** */

    $pgh=$_POST['pendinggharpatti'];
    $rgh=$_POST['runninggharpatti'];
    $tgh=$_POST['totalgharpatti'];

    //************************************** */
    $pd=$_POST['pendingdivabatti'];
    $rd=$_POST['runningdivabatti'];
    $td=$_POST['totaldivabatti'];

    //************************************** */
    $pa=$_POST['pendingarogyakar'];
    $ra=$_POST['runningarogyakar'];
    $ta=$_POST['totalarogyakar'];

    //************************************* */
    $total=$_POST['total'];
   

    $query="INSERT INTO users (firstname,lastname,email,contact,password,date,pendinggharpatti,runninggharpatti,totalgharpatti,pendingdivabatti,runningdivabatti,totaldivabatti,pendingarogyakar,
    runningarogyakar,totalarogyakar,total) VALUES('$fname','$lname','$email','$contact','$password','$date','$pgh','$rgh','$tgh',' $pd','$rd','$td','$pa','$ra','$ta','$total')";
    $data=mysqli_query($conn,$query);
  
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
    <form action="adduser.php" method="POST">
        <div class="name">
    नाव : <input type="text" name="firstname"> <br>
    <br>
        आडनाव :<input type="text" name="lastname"><br>
        <br>
       ईमेल : <input type="text" name="email">
       </div>


       <div class="contact" style="float: right; margin-top:-2.8cm; margin-right:50px">
       तारीख : <input type="date" name="date"><br>
       <br>
        घर क्रमांक : <input type="password" name="password" required><br>
        <br>
        संपर्क : <input type="text" name="contact">
        </div>

    <table>
        <tr>
            <th>कर प्रकार </th>
            <th>मागील बाकी </th>
            <th>चालू </th>
            <th>एकूण </th>
        </tr>
        <tr>
        <th>घरफाळा</th>
        <td><input class="col" type="text" name="pendinggharpatti" id="n1"></td>
        <td><input class="col" type="text" name="runninggharpatti" id="n2"></td>
        <td><input class="col" type="text" name="totalgharpatti" id="result1"></td>
        </tr>
        <tr>
        <th>दिवाबत्ती</th>
        <td><input class="col" type="text" name="pendingdivabatti" id="n3"></td>
        <td><input class="col" type="text" name="runningdivabatti" id="n4"></td>
        <td><input class="col" type="text" name="totaldivabatti" id="result2"></td>
        </tr>
        <tr>
        <th>आरोग्यकर</th>
        <td><input class="col" type="text" name="pendingarogyakar" id="n5"></td>
        <td><input class="col" type="text" name="runningarogyakar" id="n6"></td>
        <td><input class="col" type="text" name="totalarogyakar" id="result3"></td></tr>
        <tr>
                    <td></td>
                    <td></td>
                    <td>एकूण</td>
                    <td><input style="width: 132.2px;height:30.2px;" type="text" name="total"  id="totall"/></td>
                </tr>
                <tr>
                </table>


               <input style="float:right;width:10rem;" type="submit" onclick="alert('Added Successfully!');" name="submit">
        
      
        </form>

    <!---onclick function (Total) -->
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