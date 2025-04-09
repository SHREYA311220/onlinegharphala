<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
        box-sizing: border-box;
    }
    body{
        background: #e3edf7;
    }

    .accordion{
        margin: 60px auto;
        width: 900px;
    }
    .accordion li{
         list-style: none;
         width: 100%;
         margin: 20px;
         padding: 10px;
         border-radius: 8px;
         background: #e3edf7;
         box-shadow: 6px 6px 10px -1px rgba(0, 0, 0, 0.15),
                     -6px -6px 10px -1px rgba(255, 255, 255, 0.7);
         }

    .accordion li label{
        display: flex;
        align-items: center;
        padding: 10px;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;     
    }
    label::before{
        content: '+';
        margin-right: 10px;
        font-size: 24px;
        font-weight: 600;
    }
    input[type="radio"]{
        display: none;
    }
    .accordion .content{
        color: #555;
        padding: 0 10px;
        line-height: 26px;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.5s, padding 0.5s;
    }

    .accordion input[type="radio"]:checked + label + .content{
        max-height: 400px;
        padding: 10px 10px 20px;
    }

    .accordion input[type="radio"]:checked + label::before{
        content: '-';
    }
</style>
<body>
    <ul class="accordion">
        <li>
            <input type="radio" name="accordion" id="first" checked>
            <label for="first">१. मिळकतीच्या हस्तांतरणाकरीता आवश्यक कागदपत्रे  कोणती ?</label>
            <div class="content">
                <p>मिळकतीच्या हस्तांतरणाकरीता खालील कागदपत्रे आवश्यक आहेत.</p>
<p> १. मालकी  हक्काची कागदपत्रे (सातबारा/प्रॉपर्टी कार्ड /खरेदीखत /इंडेक्स २ ).</p> 
<p>२. सोसायटी असल्यास सोसायटीचा ना हरकत दाखला.</p> 
<p>३. चालू आर्थिक वर्षाअखेर संपूर्ण कर भरलेली पावती. (ना देय प्रमाणपत्र)</p>
<p>४. ओनर ऑक्युपायर नावातील बदलासह अन्य मिळकत हस्तांतरण फी करयोग्य मूल्य १ ते ५०० पर्यंत रू.१००० व  त्यापुढील प्रत्येक शेकडयास अगर त्याच्या भागास रू.३०.</p> 
<p>५. पूरग्रस्त वसाहतीमधील नावात बदल करणेसाठी मा. जिल्हा अधिकारी कडील ‘फिल्ड रजीस्टर’ चा उतारा. असा उतारा नसल्यास मा. स्थायी समितीने मान्यता दिल्यानुसार मुळ मालकाचे नाव कायम ठेवून वसुल देणार म्हणून नवीन नावाचे नोंद घेतली जाते.</p>


        </div>
        </li>


        <li>
            <input type="radio" name="accordion" id="second">
            <label for="second">२ . मिळकतींवर कर आकारणी कशाप्रकारे केली जाते ?
            </label>
            <div class="content">
            <p>मिळकतींवर खालील बाबी विचारात घेऊन आकारणी केली जाते</p>
   <p>१. मिळकतीचे चटईक्षेत्र (कारपेट) क्षेत्रफळ</p> 
   <p>२. मिळकतीचे प्रकार -  निवासी/बिगरनिवासी /मोकळ्या जागा /मिश्र</p> 
   <p>३. मिळकत ज्या विभागात आहे त्या विभागातील वार्षिक करयोग्य मुल्याचा प्रति चौरस फूट दर. (पुणे मनपाचे स्वतंत्र रेडी रेकनर आहे.)</p> 
   <p>4. बांधकामाचा प्रकार - आर.सी.सी बांधकाम / लोड बेअरींग/पत्रा शेड</p> 

        </div>
        </li>


        <li>
            <input type="radio" name="accordion" id="third">
            <label for="third">३. वाढीव बांधकामाची कर आकारणी करताना आकारणी झालेल्या पुर्वीच्या जुन्या दरानेच केली जाते का ?</label>
            <div class="content">
            <p>नाही. वाढीव बांधकाम ज्या वर्षात पूर्ण झालेले असेल त्या सरकारी वर्षाच्या प्रचलित दरानेच केली जाते.</p>
        </div>
        </li>


        <li>
            <input type="radio" name="accordion" id="fourth">
            <label for="fourth">४. मिळकतकरामध्ये सवलत मिळावी यासाठीच्या काही योजना आहेत काय? असल्यास कोणत्या ?</label>
            <div class="content">
        <p>१. संपुर्ण मिळकतकराचा भरणा थकबाकीसह ३० जून पर्यंत केल्यास चालू वर्षाच्या संपुर्ण सामान्य करात खालीलप्रमाणे सवलत दिली जाते. मिळकतकरा अंतर्गत येणारी एकूण मागणी विचारात घेवून त्यामधील सर्वसाधारण कराच्या चालू मागणीची रक्कम रू. २५००० पेक्षा कमी आहे त्यांना सर्वसाधारण कराच्या चालू मागणी रकमेत १० टक्के सूट व ज्यांची सर्वसाधारण कराची चालू मागणीची रक्कम रू.२५००१ पेक्षा अधिक आहे त्यांना सर्वसाधारण कराच्या चालू मागणी रकमेत ५ टक्के सवलत दिली जाते.</p>

२. स्वातंत्र्य सैनिकः स्वातंत्र्य सैनिक हयात असेपर्यंत यांच्या एका निवासी मिळकतीस सामान्यकरात १००% सवलत.

३. ज्या निवासी मिळकतीमध्ये सौरउर्जा, गांडूळखत प्रकल्प, रेनवॉटर हार्वेस्टिंग केले असेलः
</p>
        </div>
        </li>
    </ul>
</body>
</html>