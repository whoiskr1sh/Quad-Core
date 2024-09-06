<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: #fff;
}

.container {
  width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid ;
  border-radius: 5px;
}

.header {
  background-color: #FFA500; /* Orange */
  color: white;
  text-align: center;
  padding: 10px 0;
  border-radius: 5px 5px 0 0;
}

.table-container {
  margin-top: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: left;
  padding: 8px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #FFA500; /* Orange */
  color: white;
}

.footer {
  text-align: center;
  margin-top: 20px;
}
</style>
</head>
<body>
<div class="container">
  <div class="header">
    <h2>Donation Receipt from Aahar Donate</h2>
  </div>

  <p>Questions? Contact the [name of organization] at [phone number].</p>

  <div class="table-container">
    <table>
      <tr>
        <th width="35px">Donor name</th>
        <td></td>
      </tr>
      
        <th>State/Province</th>
        <td></td>
      </tr>
      <tr>
        <th>Postal code</th>
        <td></td>
      </tr>
      <tr>
        <th>Phone</th>
        <td></td>
      </tr>
      <tr>
        <th>Total pledge amount</th>
        <td></td>
      </tr>
    </table>
  </div>

  <div class="table-container">
    <table>
      <tr>
        <th>Type of donation</th>
        <td>[cash, merchandise, service]</td>
      </tr>
      <tr>
        <th>Description</th>
        <td>[details of merchandise or service]</td>
      </tr>
      <tr>
        <th>Value</th>
        <td>[value of merchandise or service]</td>
      </tr>
    </table>
  </div>

  <div class="footer">
    <p>Thank you for your generous support!</p>
  </div>
</div>

</body>
</html>