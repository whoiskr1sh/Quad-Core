<!DOCTYPE html>
<html>
<head>
  <title>UPI Payment Form</title>
  <style>
    /* Add some basic styling to the form */

    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"] {
      width: 100%;
      height: 40px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
    }
    button[type="submit"] {
      width: 100%;
      height: 40px;
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <form id="upi-payment-form">
    <center><label for="upi-id">PAY Using UPI:</label>
   <img src="Gpay.jpg" height="180" width="180" required><br>
   <input type="submit" name="submit" >
   </center>
  </form>

  <script>
    // Get the form element
    const form = document.getElementById('upi-payment-form');

    // Add an event listener to the form to handle the submit event
    form.addEventListener('submit', (e) => {
      // Prevent the default form submission behavior
      e.preventDefault();

      // Get the UPI ID, amount, name, and description from the form fields
      const upiId = document.getElementById('upi-id').value;
      const amount = document.getElementById('amount').value;
      const name = document.getElementById('name').value;
      const description = document.getElementById('description').value;

      // Create a URL to send the payment request to the UPI payment gateway
      const url = `https://api.example.com/upi/payment/request?upi_id=${upiId}&amount=${amount}&name=${name}&description=${description}`;

      // Send the payment request to the UPI payment gateway
      fetch(url)
        .then((response) => response.json())
        .then((data) => {
          // Handle the payment response from the UPI payment gateway
          console.log(data);
        })
        .catch((error) => {
          // Handle any errors that occur during the payment process
          console.error(error);
        });
    });
  </script>
</body>
</html>