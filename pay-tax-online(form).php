<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Property Tax</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .form-container {
      width: 60%;
      margin: 50px auto;
      background: #e6f0f7;
      border-radius: 5px;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-header {
      text-align: center;
      margin-bottom: 20px;
      font-size: 1.5em;
      color: #0078d7;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"], select, input[type="email"], input[type="tel"] {
      width: 100%;
      padding: 8px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .radio-group {
      display: flex;
      justify-content: space-between;
    }
    .radio-group label {
      font-weight: normal;
    }
    .form-footer {
      text-align: center;
    }
    button {
      background-color: #0078d7;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 1em;
    }
    button:hover {
      background-color: #005bb5;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <div class="form-header" id="PDept">
 <h2> Property Tax Department<br>(मालमत्ता कर विभाग)</h2>
    </div>
    <form action="/submit-tax-details" method="post">
      <!-- Property Tax Dues Details -->
      <div class="form-group">
        <label for="property-type">Property Type/
        (मालमत्ता प्रकार) :</label>
        <select id="property-type" name="property-type" required>
          <option value="" disabled selected>Select</option>
          <option value="residential">Residential/
          (निवासी)</option>
          <option value="commercial">Commercial/
          (व्यावसायिक)</option>
        </select>
      </div>
      <div class="form-group">
        <label for="section-id">Section ID/(विभाग आयडी):</label>
        <input type="text" id="section-id" name="section-id" required>
      </div>
      <div class="form-group">
        <label for="peth-id">Peth ID/(पेठ आयडी):</label>
        <input type="text" id="peth-id" name="peth-id" required>
      </div>
      <div class="form-group">
        <label for="account-no">Account Number/(खाते क्रमांक):</label>
        <input type="text" id="account-no" name="account-no" required>
      </div>
      <div class="form-header">
      <button type="submit">submit</button>
      </div>
      <!-- Property Owner Details -->
      <div class="form-group">
        <label for="owner-name">Name/(
          नाव):</label>
        <input type="text" id="owner-name" name="owner-name">
      </div>
      <div class="form-group">
        <label for="ward">Ward/(
          वार्ड):</label>
        <input type="text" id="ward" name="ward">
      </div>
      <div class="form-group">
        <label for="address">Address/(पत्ता):</label>
        <input type="text" id="address" name="address">
      </div>
      <div class="form-group">
        <label for="property-description">Property Description/(मालमत्तेचे वर्णन):</label>
        <input type="text" id="property-description" name="property-description">
      </div>

      <!-- Payment Details -->
      <div class="form-group">
        <label for="amount">I want to pay/(मला पैसे द्यायचे आहेत):</label>
        <input type="text" id="amount" name="amount" required>
      </div>
      <div class="form-group">
        <label for="mobile-no">Applicant Mobile Number/(अर्जदाराचा मोबाईल क्रमांक):</label>
        <input type="tel" id="mobile-no" name="mobile-no" required>
      </div>
      <div class="form-group">
        <label for="email">Applicant Email ID/(अर्जदाराचा ईमेल आयडी):</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label>Select Payment Gateway/(पेमेंट गेटवे निवडा):</label>
        <div class="radio-group">
          <label><input type="radio" name="payment-gateway" value="BillDesk-I" required> BillDesk-I</label>
          <label><input type="radio" name="payment-gateway" value="BillDesk-H"> BillDesk-H</label>
          <label><input type="radio" name="payment-gateway" value="BillDesk-B"> BillDesk-B</label>
          <label><input type="radio" name="payment-gateway" value="BillDesk-IF"> BillDesk-IF</label>
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-footer">
        <button type="submit">Pay Online</button>
      </div>
    </form>
  </div>
</body>
<script src="script.js"></script>
</html>