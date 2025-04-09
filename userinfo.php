<?php
session_start();
include("register.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


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
         
        .pdf{
            float: right;
            margin-top:-2.3cm; 
            margin-right:10px;      
            cursor: pointer;
        }
    </style>
</head>
<body  id="customers_tablee">

                <p style="font-size: large;"> तारीख  : <?php   
                    error_reporting(0);
                    echo $_SESSION['date'];
                    ?></p>
                <p style="font-size: large;">नाव  : 
                <?php   
                    error_reporting(0);
                    echo $_SESSION['firstname'];
                    ?>
                    <?php   
                    error_reporting(0);
                    echo $_SESSION['lastname'];
                    ?></p>
    
    <label class="pdf" for="" id="toPDF"><i class="fa-solid fa-download"></i></label>
    <table>
        <tr>
            <th>कर प्रकार </th>
            <th>मागील बाकी</th>
            <th>चालू</th>
            <th>एकूण</th>
        </tr>
                <tr>
                    <td>घरफाळा</td>
                <td> <?php  echo $_SESSION['pendinggharpatti'];?> ₹</td>
                <td> <?php  echo $_SESSION['runninggharpatti'];?> ₹</td>
                <td> <?php  echo $_SESSION['totalgharpatti'];?> ₹</td>
                </tr>
                <tr>
                    <td>दिवाबत्ती</td>
                <td> <?php  echo $_SESSION['pendingdivabatti'];?> ₹</td>
                <td> <?php  echo $_SESSION['runningdivabatti'];?> ₹</td>
                <td> <?php  echo $_SESSION['totaldivabatti'];?> ₹</td>
                </tr>
                <tr>
                    <td>आरोग्यकर</td>
                <td> <?php  echo $_SESSION['pendingarogyakar'];?> ₹</td>
                <td> <?php  echo $_SESSION['runningarogyakar'];?> ₹</td>
                <td> <?php  echo $_SESSION['totalarogyakar'];?> ₹</td>
                <tr>
                    <td ></td>
                    <td></td>
                    <td >एकूण</td>
                <td> <?php  echo $_SESSION['total'];?> ₹</td>
                </tr>
                </tr>
                
    </table>
    
       
</body>
<script>
    // 3. Converting HTML table to PDF

const pdf_btn = document.querySelector('#toPDF');
const customers_table = document.querySelector('#customers_tablee');


const toPDF = function (customers_table) {
    const html_code = `
    <!DOCTYPE html>
    <link rel="stylesheet" type="text/css" href="style.css">
    <main class="table" id="customers_table">${customers_table.innerHTML}</main>`;

    const new_window = window.open();
     new_window.document.write(html_code);

    setTimeout(() => {
        new_window.print();
        new_window.close();
    }, 400);
}

pdf_btn.onclick = () => {
    toPDF(customers_table);
}

</script>
</html>