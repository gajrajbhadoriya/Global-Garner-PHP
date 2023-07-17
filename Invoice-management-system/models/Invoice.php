<?php
class Invoice{
    public $invoice_number;
    public $invoice_date;

    public function __construct($invoice_number,$invoice_date){
        $this->invoice_number = $invoice_number;
        $this->invoice_date   = $invoice_date;
    }
}
?>