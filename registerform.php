<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
   
    *{
        box-sizing: border-box;
    }
    body{
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin: 15px 30px;
        font-size: 17px;
        padding: 8px;
    }
    .container{
        background-color: #f2f2f2;
        padding: 5px 20px 15px 20px;
        border: 1px solid lightgray;
        border-radius: 4px;
    }
   input[type="text"],
   input[type="email"],
   input[type="number"],
   input[type="date"],
   
   select,
   textarea{
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
   }
   fieldset{
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 5px;
   }
   .ph{
    text-align: center;
   }
   input[type="submit"]{
    color: white;
    background-color: #caa3de;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
    
}
input[type="submit"]:hover{
    background-color: #9a1ec4;
    
}
@media all and (min-width:1001px){

}


</style>
<body>
    <form class="container" method="post" action="register.php">
       <h1 class="ph"> REGISTER FORM / 
       नोंदणी करा</h1>
       <h2>CONTACT INFORMATION / संपर्क माहिती</h2>
       <p>First Name / नाव : <input type="text" name="faName" id="fName" placeholder="First Name" required></p>
       
       <p>Last Name / आडनाव : <input type="text" name="laName" id="lName" placeholder="Last Name" required> </p>
       <p>Email / ईमेल  : <input type="email" name="eemail" id="email" placeholder="Email" required></p>
      <p>Contact / संपर्क  : <input type="text" name="ccontact" id="contact" placeholder="Contact Number" required></p>
      
       
       <input type="submit" class="btn" value="SUBMIT"  name="signUp">
        </form>

        <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const form = document.querySelector('form');
            const fname = document.getElementById("fName");
            const lname = document.getElementById("lName");
            const email = document.getElementById("email");
            const contact = document.getElementById("contact");


            function sendEmail(){
                const bodyMessage = `First Name :${fname.value}<br> Last Name :${lname.value}<br> Email : ${email.value}<br> contact :${contact.value}`;
                Email.send({
    Host : "smtp.elasticemail.com",
    Username : "ratan27612761@gmail.com",
    Password : "E3A0D1D48A85565C0A07171F70B6A5C38D63",
    To : 'ratan27612761@gmail.com',
    From : "ratan27612761@gmail.com",
    Subject : email.value,
    Body : bodyMessage
}).then(
  message => {
    if(message == "OK") {
        Swal.fire({
  title: "Good job!",
  text: "Registered successfully!",
  icon: "success"
});
    }
  }
);
            }

            form.addEventListener("submit",(e) => {
                e.preventDefault();

                sendEmail();
            });
        </script>

</body>

</html>