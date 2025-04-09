<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
 <style>
  
  
  .navbar{
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #F1F1F1;
  width: 1510px;
  height: 39px;
  padding: 2px 0px;
}

.navbar2{
  width: 1510px;
  height: 74.7px;
  background-color: #fff;
 
  align-items: center;
  justify-content:center;
  display: flex;
}
.nav-container{
  position: relative; 
  top:0;
 
 
}
.logo{
  width: 167px;
  height: 74.71px;
  margin-right: 15.5cm;
  border: none;
}

.logo img{
  width: 167px;
  height:74.71px ;
}
.search{
  height: 35px;
  width: 104.91px;
}
.contact{
  padding: 8px 29.4px 10px 7px;
}
.heroimg{
  
  background-repeat: no-repeat;
}
.box{
  height: 141px;
  width: 390px;
 font-size: large;
 font-family: sans-serif;
 color: #fff;
 font: 20px;
 text-align: left;
  justify-content: space-evenly;
}
.box-container{
  display: flex;
 justify-content: center;
 margin-top: -100px;
 position: relative;
 
}
.box1-container,.box2-container,.box3-container{
  height: 171px;
  margin-right: 20px;
  margin: 0px 0px 30px;
 padding: 15px ;

}
.overview{
  height:  800px;
  width:877.5px;
  margin: 0px 15px;
  padding: 0px 15px;
  font-family: sans-serif;
  color: #515151;
  
}
.overview-container{
  height: 34.39px;
  width: 847.5px;
}
.quick-links{
  height: 800px;
  width: 292.5px;
  margin: 0px 15px;
  font-family: sans-serif;
  color: #515151;
}
.boxes{
display: flex;
justify-content: center;
}
.about{
  width: 120px;
  height: 40px;
  font-family: sans-serif;
  color: #515151;
  background-color: #f1f2f4;
  margin-right: 5px;
  padding: 10px ;
  padding-left: 30px;
  text-decoration: none;
  border: none;
  
}
.pay{
  width:250px;
  height: 40px;
  font-family: sans-serif;
  color: #515151;
  background-color: #f1f2f4;
  margin-right: 5px;
  padding: 10px ;
  padding-left: 30px;
  text-decoration: none;
  border: none;
}

.about:hover{
  background-color: #46c9e6;
  color: white;
  font-family: sans-serif;
}
.pay:hover{
  background-color: #46c9e6;
  color: white;
  font-family: sans-serif;
}

.info{
  width: 210px;
  height: 200px;
  text-align: center;
  border: 1px solid black;
  margin-top: 30px;
  padding: 25px 14px 10px;
}
#payment,#payment2{
  display: none;
}
.search-icon{
  text-align: center;
 background-color: rgba(255, 0, 0, 0.762);
 color: #fff;
}
.info:hover{
  border: 2px solid #46c9e6 ;
  box-shadow: 0px 0px 10px #46c9e6 ;
}
.info-container{
display: flex;
}

.services{
  background-color: #f3f3f3;
  height: 357px;
  width: 877.5px;
  margin-top: 1cm;
}
.login{
  height: 30px;
  width:65.6px; 
  text-decoration: none;
  text-align:center ;
  align-content: center;
  background-color: #ffff;
}

.online-services{
  margin-left:20px ;
  width: 157px;
align-content: center;
text-align: center;
  height: 30px;
  background-color: #46C9E6; 
  padding-top: 5px; 
  color: #fff;
}
.tax-recipts{
  height: 200px;
  width: 190px;
  background-color: #fff;
  margin-left: 20px;
  margin-top: 20px;
  align-content: center;
  text-align: center;
}

.tax-recipts img{
  height: 70px;
 
}

.tax-recipts:hover{
  background-color: #46C9E6;
  color: #fff;
}
.tax-recipts-container{
  display: flex;
}

.online-service{
  border: 1px solid orangered;
  height: 200px;
  width: 300px;
  margin-top: 8cm;
  background-color: #fff;
  display: none;
}

select{
  border: none;
  margin-right: 8px;
}
select option{
  width: 100px;
}







*{
    margin: 0;
    padding: 0;
}

.slider{
    width: 100%;
    height: 500px;
    overflow: hidden;
}

figure{
    position: relative;
    left: 0;
    width: 400%; 
    animation: 10s slide infinite;
}

.slide{
    position: relative;
    width: 25%; 
    float: left;
}

.slide h1{
    position: absolute;
    font-size: 3em;
    width: 100%;
    text-align: center;
    margin-top: 50px;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.slide img{
    width: 100%;
    height: 500px;
}

@keyframes slide{
    0%{
        left:0;
    }
    10%{
        left:0;
    }
    20%{
        left:-100%;
    }
    30%{
        left:-100%;
    }
    40%{
        left:-200%;
    }
    50%{
        left:-200%;
    }
    55%{
        left:-300%;
    }
    65%{
        left:-300%;
    }
    66%{
        left:-100%;
    }
    74%{
        left:-100%;
    }
    75%{
        left:-100%;
    }
    85%{
        left:-100%;
    }
    90%{
        left:0;
    }
    100%{
      left: 0;
    }
   
}


 </style>

<body>
  <div class="nav-container">
    <div class="navbar">
      
      <a id="faq" href="faq.php" style="margin-right: 25cm;text-decoration: none;">FAQ</a> 
      <select style="border: none;margin-right: 10px;height:30px;" name="" id="">
        <option  value="en">English</option>
        <option value="mh">मराठी </option>
      </select>
      <div class="login" >
      <a id="login" href="signup.php" style="text-decoration: none;">LOGIN</a>
      </div>
    </div>

    <div class="navbar2">
      <div class="logo">
      <img src="property logo.png" alt="">
      </div>
      <div >
        <input class="search" type="search">
      </div>
      <div class="search-icon" style="height: 34.6px; width: 38.6px;  margin-right: 10px;"><i style="margin-top: 10px;" class="fa-solid fa-magnifying-glass"></i></div>


  
      <select name="" id="">
        <option value="" id="onlineservicebtn">ONLINE SERVICES</option>
        <option value="">Pay proeprty tax</option>
      </select>
   
    <div id="onlineservice" class="online-service">
    
    </div>
  
      <select name="" id="">
      <option value="" id="contactuss">CONTACT US</option>
      </select>

    </div>
  </div>


    
  <div class="slider">
        <figure>
            <div class="slide">
                
                <img src="bg2.jpg" alt="">
            </div>
            <div class="slide">
                
                <img src="bg3.webp" alt="">
            </div>
            <div class="slide">
                
                <img src="bg6.jpg" alt="">
            </div>
            <div class="slide">
                
                <img src="bg5th.jpg" alt="">
            </div>
            
        </figure>
</div>

 

   


<div class="box-container">
  <div class="box1-container">
    <div style="background-color: #6ECE89;" class="box"><h3 id="h3" style="padding: 20px;">REGISTER HERE</h3>
    <p id="p" style="margin-top: -10px; padding: 0px 0px 0px 20px;">Register mobile number and email address to get property details.</p>
    <a id="viewmore" style="text-decoration: none; float: right; padding: 0px 20px;margin-top: 0px;" href="registerform.php">View more</a>
  </div>
  

  </div> 
  <div class="box2-container">
    <div style="background-color: #A28FE2;" class="box"><h3 id="h3ptax" style="padding: 20px;">P-TAX SERVICES</h3>
    <p id="taxservices" style="margin-top: -10px; padding: 0px 0px 0px 20px;">Check here for more information </p>
    <a id="viewmore2" style="text-decoration: none; float: right; padding: 0px 20px;margin-top: 20px;" href="p-taxservices.php">View more</a>
 
  </div>
  </div>
  
  
  <div class="box3-container">
    <div style="background-color: #46C9E6;" class="box"><h3 id="paytaxonline" style="padding: 20px;">PAY TAX ONLINE</h3>
    <p id="payonlinetax" style="margin-top: -10px; padding: 0px 0px 0px 20px;">Now, pay property tax without any extra transaction charges.</p>
    <a id="viewmore3" style="text-decoration: none; float: right; padding: 0px 20px;margin-top: 0px;" href="pay-tax-online(form).php">View more</a></div>
  </div> 
  </div>


  <div class="boxes">
  <div class="quick-links">
   <h2> QUICK LINKS</h2>
   <hr>


   <a href="faq.php">
   <div style="margin-top: 10px;" class="faq-img" >
    <img src="faq.jpg" alt="">
   </div>
   </a>

   <a href="propertyrate.php">
   <div style="margin-top: 10px;" class="faq-img" >
    <img width="258px;" height="336px; " src="rate4.jpeg" alt="">
   </div>
   </a>

  </div>
  <div class="overview">
    <h2 id="of"> OVERVIEW & FUNCTIONING</h2>

    <hr style=" padding: 0px 15px; color: gray;">

    <div class="overview-container">
   
      <button class="about" id="about-btn"><P id="au" style="margin-top: 2px; margin-left: -20px;"> ABOUT US</P> </button>
    

    <div>
    <button class="pay" id="pay-btn"> 
      <p style="margin-top: 2px; margin-left: -20px;"
      id="ToPay">WHERE TO PAY PROPERTY TAX </p>
    </button>
    </div>

    
    </div>
    
<div class="info-container">
    <div class="info" id="information">
      <img style="height: 100px; width: 100px;" src="userinfo.png" alt="">
      <h3 style="margin-top: -1px;"id="Info">INFORMATION</h3>
      <a id="viewmore4" style="font-size: small;" href="about-us(information).php">VIEW MORE </a>
    </div>

    
    <div class="info" id="payment" >
      <img style="height: 100px; width: 100px;" src="userinfo.png" alt="">
      <h3 style="margin-top: -1px;">BANK 1</h3>
      </div>

      <div style="margin-left: 10px;" class="info" id="payment2" >
      <img style="height: 100px; width: 100px;" src="userinfo.png" alt="">
      <h3 style="margin-top: -1px;">BANK 2</h3>
      
    </div>

    
    </div>



    <div class="services">
      <h2 style="padding:20px ; "id="Ptax">PROPERTY-TAX SERVICES</h2>


      <div class="online-services"><h3 style="margin-top: -0.00px;" id="os">Online Services</h3></div>
      

      <a style="text-decoration: none; color:black;" href="taxrescipits.php">
      <div class="tax-recipts-container">
      <div class="tax-recipts">
        <img src="money generic.png" alt="">
       <p id="recipt">Tax Receipts</p> </div>
       </a>

       <a  style="text-decoration: none; color:black; " href="history-login.php">
      <div class="tax-recipts">
      <img src="money generic.png" alt="">
       <p id="bill">Tax Bill</p> </div>
      </div>
      </a>
    </div>
  </div>
</div>
</body>



   <script>
        const figureImg = document.querySelector('figure img');
        const Imgs = document.querySelectorAll('.slide img');

        Imgs.forEach(function(img) {
           
            img.addEventListener('click',function(e) {
                
                figureImg.src = e.target.src;
            })
        })
    </script>
<script src="script.js"></script>
</html>