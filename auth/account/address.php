<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Addresses</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin: 0;
        padding: 0;
        color: #000;
        background-color: #fff;
      }

      h1 {
        margin: 40px 0 20px;
        font-size: 2em;
      }

      a {
        text-decoration: none;
        color: black;
        font-size: 14px;
      }

      .button {
        margin: 20px auto;
        padding: 12px 20px;
        font-size: 14px;
        color: #fff;
        background-color: #000;
        border: none;
        border-radius: 25px;
        cursor: pointer;
      }

      .address-info {
        margin: 20px 0;
        font-size: 16px;
        color: #555;
      }

      .actions {
        font-size: 14px;
        margin-top: 10px;
      }

      .actions a {
        margin: 0 15px;
        color: black;
        text-decoration: underline;
      }

      form {
        max-width: 600px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
      }

      label {
        margin-top: 10px;
        font-size: 14px;
        color: #555;
        align-self: start;
        margin-left: -5px;
    }

      input,
      select,
      textarea {
        padding: 10px;
        font-size: 14px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
      }

      .checkbox-container {
        display: flex;
        align-items: center;
        margin: 15px 0;
      }

      .checkbox-container label {
        margin: 0;
        margin-left: 8px;
        font-size: 14px;
        color: #000;
      }

      .button-container {
        display: flex;
        align-items: center;
        gap: 15px;
      }

      button {
        padding: 10px 20px;
        font-size: 14px;
        border: none;
        border-radius: 25px;
        cursor: pointer;
      }

      .update-button {
        background-color: #000;
        color: #fff;
      }

      .cancel-button {
        background: none;
        color: #555;
        text-decoration: underline;
        cursor: pointer;
      }
      #addressForm {
        display: none;
      }
      #NewaddressForm {
        display: none;
      }
    </style>
  </head>
  <body>
    <h1>Addresses</h1>
    <a href="account.php">Return to Account details</a>
    <div>
      <button class="button" onclick="addAddress()">Add a new address</button>
    </div>
    <form id="NewaddressForm">
        <!-- First Name & Last Name -->
        <label for="first-name">First name</label>
        <input type="text" id="first-name"  />
  
        <label for="last-name">Last name</label>
        <input type="text" id="last-name"/>
  
        <!-- Company -->
        <label for="company">Company</label>
        <input type="text" id="company"/>
  
        <!-- Address 1 -->
        <label for="address1">Address 1</label>
        <input type="text" id="address1" />
  
        <!-- Address 2 -->
        <label for="address2">Address 2</label>
        <input type="text" id="address2" />
  
        <!-- City -->
        <label for="city">City</label>
        <input type="text" id="city"/>
  
        <!-- Country -->
        <label for="country">Country/region</label>
        <select id="country">
          <option selected>Ireland</option>
          <option>United States</option>
          <option>United Kingdom</option>
          <option>Canada</option>
        </select>
  
        <!-- Province -->
        <label for="province">Province</label>
        <select id="province">
          <option selected>Waterford</option>
          <option>Dublin</option>
          <option>Galway</option>
          <option>Cork</option>
        </select>
  
        <!-- ZIP -->
        <label for="zip">Postal/ZIP code</label>
        <input type="text" id="zip" />
  
        <!-- Phone -->
        <label for="phone">Phone</label>
        <input type="text" id="phone" />
  
        <!-- Checkbox -->
        <div class="checkbox-container">
          <input type="checkbox" id="default-address" />
          <label for="default-address">Set as default address</label>
        </div>
  
        <!-- Buttons -->
        <div class="button-container">
          <button type="submit" class="update-button">Add address</button>
          <button type="button" class="cancel-button" onclick="cancel('NewaddressForm')">Cancel</button>
        </div>
      </form>

    <div class="address-info">
      <p>Quin Valenzuela</p>
      <p>United States</p>
    </div>
    <div class="actions">
      <a onclick="editAddress()">Edit</a>
      <a onclick="deleteAddress()">Delete</a>
    </div>
    <form id="addressForm">
      <!-- First Name & Last Name -->
      <label for="first-name">First name</label>
      <input type="text" id="first-name" value="Nerea" />

      <label for="last-name">Last name</label>
      <input type="text" id="last-name" value="Zimmerman" />

      <!-- Company -->
      <label for="company">Company</label>
      <input type="text" id="company" value="Norton and Kennedy Trading" />

      <!-- Address 1 -->
      <label for="address1">Address 1</label>
      <input type="text" id="address1" value="38 Green Old Avenue" />

      <!-- Address 2 -->
      <label for="address2">Address 2</label>
      <input type="text" id="address2" value="Ex tempore omnis ex" />

      <!-- City -->
      <label for="city">City</label>
      <input type="text" id="city" value="Deleniti et voluptas" />

      <!-- Country -->
      <label for="country">Country/region</label>
      <select id="country">
        <option selected>Ireland</option>
        <option>United States</option>
        <option>United Kingdom</option>
        <option>Canada</option>
      </select>

      <!-- Province -->
      <label for="province">Province</label>
      <select id="province">
        <option selected>Waterford</option>
        <option>Dublin</option>
        <option>Galway</option>
        <option>Cork</option>
      </select>

      <!-- ZIP -->
      <label for="zip">Postal/ZIP code</label>
      <input type="text" id="zip" value="92911" />

      <!-- Phone -->
      <label for="phone">Phone</label>
      <input type="text" id="phone" value="+1 (833) 122-6941" />

      <!-- Checkbox -->
      <div class="checkbox-container">
        <input type="checkbox" id="default-address" />
        <label for="default-address">Set as default address</label>
      </div>

      <!-- Buttons -->
      <div class="button-container">
        <button type="submit" class="update-button">Update address</button>
        <button type="button" class="cancel-button" onclick="cancel('addressForm')">Cancel</button>
      </div>
    </form>

    <script>
    function cancel(id) {
        const form = document.getElementById(id);
        form.style.display = "none";
    }
      function editAddress() {
        const addressForm = document.getElementById("addressForm");
        addressForm.style.display = "flex";
      }

      function addAddress() {
        const addressForm = document.getElementById("NewaddressForm");
        addressForm.style.display = "flex";
      }

      function deleteAddress() {
        const confirmation = confirm(
          "Are you sure you want to delete this address?"
        );
        if (confirmation) {
          alert("Address deleted!");
        }
      }
    </script>
  </body>
</html>
