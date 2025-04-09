const about=document.getElementById('about-btn');
  const payment=document.getElementById('pay-btn');
  const payment2=document.getElementById('pay-btn');


  const paymentinfo=document.getElementById('payment');
  const aboutinfo=document.getElementById('information');
  const payment2info=document.getElementById('payment2');
  
  about.addEventListener('click',function(){
      paymentinfo.style.display="none";
      aboutinfo.style.display="block";
      payment2info.style.display="none";
  })
  payment.addEventListener('click', function(){
      paymentinfo.style.display="block";
      aboutinfo.style.display="none";
  })
  payment2.addEventListener('click',function(){
      aboutinfo.style.display="none";
      payment2info.style.display="block";
  })
 



  const translations = {
    en: {
      registerhead : "REGISTER HERE",
      registerdetails : "Register mobile number and email address to get property details.",
      viewmore:"view more",
      
//************************************************************ */
      ptax:"P-TAX SERVICES",
      ptaxdetails :"Check here for more information",
//************************************************************* */
      taxonline : "PAY TAX ONLINE",
      payonline : "Now, pay property tax without any extra transaction charges.",
//************************************************************* */ 
      onlineservices: "ONLINE SERVICES",
      contact:"CONTACT US",
//*************************************************************** */    
      faq:"FAQ",
      login:"LOGIN",
/*************************************************************** */ 
      overview:"OVERVIEW & FUNCTIONING",

      aboutus:"ABOUT US",
      /*************************************************************** */ 
      topay:"WHERE TO PAY PROPERTY TAX  ",
      /*************************************************************** */ 
      inforr:"INFORMATION",
      /****************************************************************** */
      viewmore:"VIEW MORE",
       /****************************************************************** */
      Ptax:"PROPERTY-TAX SERVICES",
       /****************************************************************** */
      onlineservices2:"Online Services",
       /****************************************************************** */
      taxrecipt:"Tax Receipts",
       /****************************************************************** */
      taxbil:"Tax Bill",
       /****************************************************************** */

    },
    mh: {
      registerhead : "नोंदणी करा ",
      registerdetails : "आपल्या मिळकतीचे तपशील मिळवण्यासाठी आपला मोबाईल नंबर व ई-मेल आयडी येथे नोंदवा  ",
      viewmore : "आणखी वाचा ",
      

 /************************************************************ */
     ptax : "मिळकत कर सेवा",
     ptaxdetails : "अधिक माहितीसाठी येथे क्लिक करा",

 /************************************************************ */
     taxonline : "ऑनलाईन कर भरणा",
     payonline : "आता मिळकत कर भरा कुठल्याही जादा शुल्काविना",
 /************************************************************ */ 
     onlineservices:"ऑनलाईन सेवा",  
     contact:"संपर्क",

 /************************************************************* */
      faq:"शंका कुशंका ",
      login:"लॉग-इन",
 /*************************************************************** */ 
      overview:"OVERVIEW & FUNCTIONING",
      aboutus:"आमच्याविषयी ",
 /*************************************************************** */ 
      topay:"मालमत्ता कर कुठे भरावा",
 /*************************************************************** */   
     inforr:"महिती",
 /*************************************************************** */   
     viewmore:"आणखी वाचा ",
 /*************************************************************** */   
 Ptax:"घरफाळा मालमत्ता कर",
 /*************************************************************** */ 
  onlineservices2:"इतर सेवा",
 /****************************************************************** */
   taxrecipt:"कर पावती",
 /****************************************************************** */
   taxbil:"कर बिल",
 /****************************************************************** */
    }
  }

  const languageSelectop = document.querySelector("select");
  let h3 = document.getElementById("h3");
  let par = document.getElementById("p");
  let viewmore = document.getElementById("viewmore");
  let viewmore2 = document.getElementById("viewmore2");
  let viewmore3 = document.getElementById("viewmore3");
  let viewmore4= document.getElementById("viewmore4");

  
  //**************************************************************** */
 

  let tax =document.getElementById("h3ptax");
  let taxdetails=document.getElementById("taxservices");

//*************************************************************** */ 
  let paytaxonline=document.getElementById("paytaxonline");
  let payonline=document.getElementById("payonlinetax");

//*************************************************************** */

let onserv = document.getElementById("onlineservicebtn");
let cont = document.getElementById("contactuss");
//****************************************************************** */
let faq = document.getElementById("faq");
let log = document.getElementById("login");
/****************************************************************** */
let over = document.getElementById("of");

/****************************************************************** */
let About=document.getElementById("au");
let pay=document.getElementById("ToPay");

/****************************************************************** */
let infor=document.getElementById("Info");

/****************************************************************** */
let view=document.getElementById("viewmore4");

/****************************************************************** */
let PTAX=document.getElementById("Ptax");
/*************************************************************** */ 
let onlie=document.getElementById("os");

/************************************************************** */ 
let Receipt=document.getElementById("recipt");
/************************************************************** */ 
let tbil=document.getElementById("bill");



  languageSelectop.addEventListener("change",(event) => {
    setLanguage(event.target.value)
  })

  const setLanguage = (language) => {
    if(language == "mh"){
      h3.innerText = translations.mh.registerhead;
      par.innerText = translations.mh.registerdetails;
      viewmore.innerText = translations.mh.viewmore;
     viewmore2.innerText = translations.mh.viewmore;
      viewmore3.innerText = translations.mh.viewmore;
//***************************************************************** */

      tax.innerText = translations.mh.ptax;
      taxdetails.innerText = translations.mh.ptaxdetails;
//************************************************************* */
      
      paytaxonline.innerText = translations.mh.taxonline;
      payonline.innerText = translations.mh.payonline;
//******************************************************************** */
      onserv.innerText = translations.mh.onlineservices;
      cont.innerText = translations.mh.contact;
//****************************************************************** */
    faq.innerText = translations.mh.faq;
    log.innerText = translations.mh.login;
/****************************************************************** */
    over.innerText = translations.mh.overview;
    About.innerText = translations.mh.aboutus;

    /****************************************************************** */
    pay.innerText = translations.mh.topay;
    infor.innerText = translations.mh.inforr;

/****************************************************************** */
    view.innerText = translations.mh.viewmore;

    PTAX.innerText = translations.mh.Ptax;

    onlie.innerText = translations.mh.onlineservices2;

    Receipt.innerText = translations.mh.taxrecipt;

    tbil.innerText = translations.mh.taxbil;





    }
    else if(language == "en"){
      h3.innerText = translations.en.registerhead;
      par.innerText = translations.en.registerdetails;

//***************************************************************** */
      viewmore.innerText = translations.en.viewmore;
    viewmore2.innerText = translations.en.viewmore;
      viewmore3.innerText = translations.en.viewmore;
//***************************************************************** */
paytaxonline.innerText = translations.en.taxonline;
      tax.innerText = translations.en.ptax;
      taxdetails.innerText = translations.en.ptaxdetails;
      payonline.innerText = translations.en.payonline;
//***************************************************************** */
      onserv.innerText = translations.en.onlineservices;
      cont.innerText = translations.en.contact;
//******************************************************************* */
faq.innerText = translations.en.faq;     
log.innerText = translations.en.login;

over.innerText = translations.en.overview;

About.innerText = translations.en.aboutus;

pay.innerText = translations.en.topay;

infor.innerText = translations.en.inforr;

view.innerText = translations.en.viewmore;

PTAX.innerText = translations.en.Ptax;

onlie.innerText = translations.en.onlineservices2;

Receipt.innerText = translations.en.taxrecipt;

tbil.innerText = translations.en.taxbil;

      
    }
  }



