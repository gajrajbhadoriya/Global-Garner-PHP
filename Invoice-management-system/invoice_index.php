<?php
  require_once("./database/DBTransaction.php");
  require_once("./models/Invoice.php");

 $invoice = new Invoice(10001, 24/01/2023);
 $sql  = "insert into invoice1(invoice_number, invoice_date)values(:invoice_number , :invoice_date)";
 $data = [
'invoice_number' => $invoice->invoice_number,
'invoice_date'   => $invoice->invoice_date,
];

$id  = "DELETE FROM invoice1 WHERE invoice_number = 10" ;

   $db = new DBTransaction();
   $db->insertTransaction($sql, $data);
   $db->deleteTransaction();
   $db->updatETransaction();
?>