<?php
include("connectadmin.php");

?>
 
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Convert | Export html Table to CSV & EXCEL File</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 </head>
 <style>
* {
    margin: 0;
    padding: 0;

    box-sizing: border-box;
    font-family: sans-serif;
}
@media print {
 .table, .table__body {
  overflow: visible;
  height: auto !important;
  width: auto !important;
 }
}



body {
    min-height: 100vh;
    background: url(adminbg.jpeg) center / cover;
    display: flex;
    justify-content: center;
    align-items: center;
}

main.table {
    width: 82vw;
    height: 90vh;
    background-color: #fff5;

    backdrop-filter: blur(7px);
    box-shadow: 0 .4rem .8rem #0005;
    border-radius: .8rem;

    overflow: hidden;
}

.table__header {
    width: 100%;
    height: 10%;
    background-color: #fff4;
    padding: .8rem 1rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.table__header .input-group {
    width: 35%;
    height: 100%;
    background-color: #fff5;
    padding: 0 .8rem;
    border-radius: 2rem;

    display: flex;
    justify-content: center;
    align-items: center;

    transition: .2s;
}

.table__header .input-group:hover {
    width: 45%;
    background-color: #fff8;
    box-shadow: 0 .1rem .4rem #0002;
}

.table__header .input-group img {
    width: 1.2rem;
    height: 1.2rem;
}

.table__header .input-group input {
    width: 100%;
    padding: 0 .5rem 0 .3rem;
    background-color: transparent;
    border: none;
    outline: none;
}

.table__body {
    width: 95%;
    max-height: calc(89% - 1.6rem);
    background-color: #fffb;

    margin: .8rem auto;
    border-radius: .6rem;

    overflow: auto;
    overflow: overlay;
}


.table__body::-webkit-scrollbar{
    width: 0.5rem;
    height: 0.5rem;
}

.table__body::-webkit-scrollbar-thumb{
    border-radius: .5rem;
    background-color: #0004;
    visibility: hidden;
}

.table__body:hover::-webkit-scrollbar-thumb{ 
    visibility: visible;
}


table {
    width: 100%;
}

td img {
    width: 36px;
    height: 36px;
    margin-right: .5rem;
    border-radius: 50%;

    vertical-align: middle;
}

table, th, td {
    border-collapse: collapse;
    padding: 1rem;
    text-align: left;
}

thead th {
    position: sticky;
    top: 0;
    left: 0;
    background-color: #d5d1defe;
    cursor: pointer;
    text-transform: capitalize;
}

tbody tr:nth-child(even) {
    background-color: #0000000b;
}

tbody tr {
    --delay: .1s;
    transition: .5s ease-in-out var(--delay), background-color 0s;
}

tbody tr.hide {
    opacity: 0;
    transform: translateX(100%);
}

tbody tr:hover {
    background-color: #fff6 !important;
}

tbody tr td,
tbody tr td p,
tbody tr td img {
    transition: .2s ease-in-out;
}

tbody tr.hide td,
tbody tr.hide td p {
    padding: 0;
    font: 0 / 0 sans-serif;
    transition: .2s ease-in-out .5s;
}

tbody tr.hide td img {
    width: 0;
    height: 0;
    transition: .2s ease-in-out .5s;
}


.update {
    background-color: #86e49d;
    color: #006b21;
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}

.delete {
    background-color: #d893a3;
    color: #b30021;
    padding: .4rem 0;
    border-radius: 2rem;
    text-align: center;
}




@media (max-width: 1000px) {
    td:not(:first-of-type) {
        min-width: 12.1rem;
    }
}

thead th span.icon-arrow {
    display: inline-block;
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    border: 1.4px solid transparent;
    
    text-align: center;
    font-size: 1rem;
    
    margin-left: .5rem;
    transition: .2s ease-in-out;
}

thead th:hover span.icon-arrow{
    border: 1.4px solid #6c00bd;
}

thead th:hover {
    color: #6c00bd;
}

thead th.active span.icon-arrow{
    background-color: #6c00bd;
    color: #fff;
}

thead th.asc span.icon-arrow{
    transform: rotate(180deg);
}

thead th.active,tbody td.active {
    color: #6c00bd;
}

.export__file {
    position: relative;
}

.export__file .export__file-btn {
    display: inline-block;
    width: 2rem;
    height: 2rem;
    background: #fff6 url(download.png) center / 80% no-repeat;
    border-radius: 50%;
    background-size: contain;
    transition: .2s ease-in-out;
}

.export__file .export__file-btn:hover { 
    background-color: #fff;
    transform: scale(1.15);
    cursor: pointer;
}

.export__file input {
    display: none;
}

.export__file .export__file-options {
    position: absolute;
    right: 0;
    
    width: 12rem;
    border-radius: .5rem;
    overflow: hidden;
    text-align: center;

    opacity: 0;
    transform: scale(.8);
    transform-origin: top right;
    
    box-shadow: 0 .2rem .5rem #0004;
    
    transition: .2s;
}

.export__file input:checked + .export__file-options {
    opacity: 1;
    transform: scale(1);
    z-index: 100;
}

.export__file .export__file-options label{
    display: block;
    width: 100%;
    padding: .6rem 0;
    background-color: #f2f2f2;
    
    display: flex;
    justify-content: space-around;
    align-items: center;

    transition: .2s ease-in-out;
}

.export__file .export__file-options label:first-of-type{
    padding: 1rem 0;
    background-color: #86e49d !important;
}

.export__file .export__file-options label:hover{
    transform: scale(1.05);
    background-color: #fff;
    cursor: pointer;
}

.export__file .export__file-options img{
    width: 2rem;
    height: auto;
}</style>
 <body>
     <main class="table" id="customers_table">
         <section class="table__header">
             <h1>USER INFORMATION</h1>
             <a href="index.php" style="text-decoration: none; color:black;">HOME PAGE</a>
             <h3><a style="color: black;text-decoration: none; " href="adduser.php">ADD USER</a></h3>
             <div class="input-group">
                 <input type="search" placeholder="Search Data...">
                 <i class="fa-solid fa-magnifying-glass"></i>
             </div>
             <div class="export__file">
                 <label for="export-file" class="export__file-btn" title="Export File"></label>
                 <input type="checkbox" id="export-file">
                 <div class="export__file-options">
                     <label>Export As &nbsp; &#10140; </label>
                     <label for="export-file" id="toPDF">PDF <img src="images/pdf.png" alt=""></label>
                 </div>
             </div>
         </section>
         <section class="table__body">
             <table>
                 <thead>
                     <tr>
                         <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                         <th> तारीख  <span class="icon-arrow">&UpArrow;</span></th>
                         <th> नाव  <span class="icon-arrow">&UpArrow;</span></th>
                         <th> आडनाव  <span class="icon-arrow">&UpArrow;</span></th>
                         <th style="text-align: center;"> ईमेल  <span ></span></th>
                         <th>संपर्क </th>
                         <th> मागील घरफाळा  </th>
                         <th> चालु घरफाळा  </th>
                         <th> एकूण घरफाळा </th>
                         <th> मागील दिवाबत्ती </th>
                         <th> चालू दिवाबत्ती </th>
                         <th> एकूण दिवाबत्ती </th>
                         <th> मागील आरोग्य कर </th>

                         <th> चालू आरोग्य कर  </th>
                         <th> एकूण आरोग्य कर </th>
                         <th> एकूण  </th>
                         <th> Update </th>
                         <th> Delete</th>
                     </tr>
                 </thead>
                 <tbody>
                 <?php

include("connectadmin.php");
error_reporting();
        $sql = "select * from users";
        $result = $conn->query($sql);
        if(!$result){
           echo("Invalid query");
        }
        while($row=$result->fetch_assoc()){
           echo "
     
       
      <tr>
        <td>$row[id]</td>
       <td>$row[date]</td>
       <td>$row[firstname]</td>
       <td>$row[lastname]</td>
       <td>$row[email]</td>
       <td>$row[contact]</td>
       
       

                
                    
                    <td>$row[pendinggharpatti]</td>
                    <td>$row[runninggharpatti]</td>
                   <td>$row[totalgharpatti]</td>
               
                
                   <td>$row[pendingdivabatti]</td>
                    <td>$row[runningdivabatti]</td>
                    <td>$row[totaldivabatti]</td>
                
              
                   
                    <td>$row[pendingarogyakar]</td>
                     <td>$row[runningarogyakar]</td>
                     <td>$row[totalarogyakar]</td>   
               
                  
                    <td>$row[total]</td>
                
          <td> <a style='text-decoration:none';  href='update.php?id=$row[id]'><p class='update'> Update </p></a></td>
          <td> <a style='text-decoration:none'; href='delete.php?id=$row[id]'><p class='delete'> Delete </p></a></td>
</tr>
";
       }
        ?>
                 </tbody>
             </table>
         </section>
     </main>
   
 
 </body>

 
 <script>
    

const search = document.querySelector('.input-group input'),
    table_rows = document.querySelectorAll('tbody tr'),
    table_headings = document.querySelectorAll('thead th');

// 1. Searching for specific data of HTML table
search.addEventListener('input', searchTable);

function searchTable() {
    table_rows.forEach((row, i) => {
        let table_data = row.textContent.toLowerCase(),
            search_data = search.value.toLowerCase();

        row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
        row.style.setProperty('--delay', i / 25 + 's');
    })

    document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
        visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
    });
}

// 2. Sorting | Ordering data of HTML table

table_headings.forEach((head, i) => {
    let sort_asc = true;
    head.onclick = () => {
        table_headings.forEach(head => head.classList.remove('active'));
        head.classList.add('active');

        document.querySelectorAll('td').forEach(td => td.classList.remove('active'));
        table_rows.forEach(row => {
            row.querySelectorAll('td')[i].classList.add('active');
        })

        head.classList.toggle('asc', sort_asc);
        sort_asc = head.classList.contains('asc') ? false : true;

        sortTable(i, sort_asc);
    }
})


function sortTable(column, sort_asc) {
    [...table_rows].sort((a, b) => {
        let first_row = a.querySelectorAll('td')[column].textContent.toLowerCase(),
            second_row = b.querySelectorAll('td')[column].textContent.toLowerCase();

        return sort_asc ? (first_row < second_row ? 1 : -1) : (first_row < second_row ? -1 : 1);
    })
        .map(sorted_row => document.querySelector('tbody').appendChild(sorted_row));
}

// 3. Converting HTML table to PDF

const pdf_btn = document.querySelector('#toPDF');
const customers_table = document.querySelector('#customers_table');


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
</body>
</html>






         