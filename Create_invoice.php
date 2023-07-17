<?php
 require_once("DBTransaction.php");

?>


<title> Invoice System</title>
<link href="css/style.css" rel="stylesheet">

<div class="container content-invoice">
   <div class="cards">
     <div class="card-bodys">
       <form action="invoice.php" id="invoice-form" method="post" class="invoice-form" role="form" novalidate="">
      <div class="load-animate animated fadeInUp">
         <div class="row">
            <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
               <h2 class="title">Invoice System</h2>
            </div>
         </div>
         <input id="currency" type="hidden" value="$">
         <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <!-- <h3>From,</h3> -->
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
               <h3></h3>
               <div class="form-group">
                  <input type="text" class="form-control" name="clientName" id="companyName" placeholder="Invoice Date" autocomplete="off">
               </div>
               <br>
               <div class="form-group">
                  <input type="text" class="form-control" name="clientName" id="companyName" placeholder="Invoice number" autocomplete="off">
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
               <table class="table table-condensed table-striped" id="invoiceItem">
                  <tr>
                     <th width="2%">
                     
                        </div>
                    </th>
                     <th width="15%">Item Name</th>
                     <th width="15%">Quantity</th>
                     <th width="15%">Price</th>
                     <th width="15%">Total</th>
                  </tr>
                  <tr>
                     <td><div class="custom-control custom-checkbox">
                        <input type="checkbox" class="itemRow custom-control-input" id="itemRow_1">
                        <label class="custom-control-label" for="itemRow_1"></label>
                        </div></td>
                     <td><input type="text" name="productName" id="productName_1" class="form-control" autocomplete="off"></td>
                     <td><input type="number" name="quantity" id="quantity_1" class="form-control quantity" autocomplete="off"></td>
                     <td><input type="number" name="price" id="price_1" class="form-control price" autocomplete="off"></td>
                     <td><input type="number" name="total" id="total_1" class="form-control total" autocomplete="off"></td>
</tr>
                  
               </table>
            </div>
         </div>
         <div class="row">
              </div>
          </div>
              </div>
          </div>
              </div>
          </div>
              </div>
          </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
               
               <br>
               <div class="form-group">
                  <input type="hidden" value="" class="form-control" name="userId">
                  <input data-loading-text="Saving Invoice..." type="submit" name="submit" value="Create Invoice" class="btn btn-success submit_btn invoice-save-btm">           
               </div>
            </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </form>
     </div>
   </div>
</div>
</div>	