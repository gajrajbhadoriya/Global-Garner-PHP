
<?php

require_once("database.php");



if(isset($_POST["submit"]))
{
$clientName= $_POST["clientName"];
$address= $_POST["address"];
$productName=$_POST["productName"];
$quantity=$_POST["quantity"];
$price=$_POST["price"];
$total=$_POST["total"];
$cgst = 5;
$sgst = 5;
$cgst_total = ($cgst / 100) * $total;
$sgst_total = ($sgst / 100) * $total;
$subtotal= $cgst_total + $sgst_total + $total ;
date_default_timezone_set('asia/Kolkata');
$date = date('d/m/Y h:i:s a', time());



$exe=$obj->query("insert into invoice(clientName,address,productName,quantity,price,total) values('$clientName','$address','$productName','$quantity','$price','$total')");



}





?>





<style>
@import url('http://fonts.cdnfonts.com/css/vcr-osd-mono');
body {
  font-family: 'VCR OSD Mono';
  color: #000;
  text-align:center;
  display: flex;
  justify-content: center;
  font-size: 10px;
}
.bill{
  width: 200px;
  box-shadow: 0 0 3px #aaa;
  padding: 10px 10px;
  box-sizing: border-box;
}
.flex {
  display: flex;
}
.justify-between {
  justify-content: space-between;
}
.table{
  border-collapse: collapse;
  width: 100%;
}
.table .header{
  border-top: 2px dashed #000;
  border-bottom: 2px dashedS #000;
}
.table {
  text-align: left;
}
.table .total td:first-of-type {
  border-top: none;
  border-bottom: none;
}
.table .total td {
  border-top: 2px dashed #000;
  border-bottom: 2px dashed #000;
}
.table .net-amount td:first-of-type {
  border-top: none;
}
.table .net-amount td {
  border-top: 2px dashed #000;
}
.table .net-amount{
  border-bottom: 2px dashed #000;
}
@media print {
    .hidden-print,
    .hidden-print * {
        display: none !important;
    }
}
</style>

<div class="bill">
  <div class="brand">
    GLOBAL GARNER PVT LTD
  </div>
  <div class="address">
    FLoor 5 Building No 34 India <br> Phone No- 8001435145
  </div>
  <div>RETAIL INVOICE </div>
  <div class="bill-details">
    <div class="flex justify-between">
      <div>BILL NO: <?php echo(rand(1500,5000)); ?></div>
      <!-- <div>TABLE NO: 091</div> -->
    </div>
     <div class="flex justify-between">
      <div>BILL DATE: <?php  echo $date ?></div>
      <div></div>
    </div>
  </div>
  <table class="table">
    <tr class="">
    <th>
      Particulars</br>-------------
    </th> <th>
      Rate</br>------
    </th> <th>
      Qty </br>----
</th>
       <th>
      Amount </br>-------
    </th>
    ------------------------------------------------------
    </tr>
    <tr>
      <td><?php echo $productName ?></td>
      <td><?php echo $price ?></td>
      <td><?php echo $quantity; ?></td>
      <td> <?php echo $total ?> </td>
    </tr>
    <!-- <tr>
      <td>Britania</td>
      <td>25</td>
      <td>2</td>
      <td>50</td>
    </tr>
    <tr>
      <td>Tomatoes</td>
      <td>40</td>
      <td>1</td>
      <td>40</td>
    </tr>
    <tr>
      <td>Chocolates</td>
      <td>5</td>
      <td>12</td>
      <td>60</td>
    </tr> -->
    <tr class="total">
      <td></td>
      <td>Total</td>
      <td><?php echo $quantity; ?></td>
      <td><?php echo $total ?></td>
    </tr>
    <tr>
      <td></td>
      <td>CGST</td>
      <td>5%</td>
      <td><?php echo $cgst_total ?></td>
    </tr>
    <tr>
      <td></td>
      <td>SGST</td>
      <td>5%</td>
      <td><?php echo $sgst_total ?></td>
    </tr>
    <tr>
      <td></td>
      <td>GG-Off</td>
      <td>0</td>
      <td>0</td>
    </tr>
    <tr class="net-amount">
      <td></td>
      <td>Net Amnt</td>
      <td></td>
      <td><?php echo $subtotal; ?></td>
    </tr>
  </table>
  ------------------------------------------</br>
  Payment Method:Cash<br>
 Transaction ID: 082098082783
  <br>Username: <?php echo $clientName ?>[Biller] <br>
  Thank You ! Please visit again

  <div>
    <a><button>Print</button></a>
  </div>
</div>







