@include('layouts.user-header')

<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
  <div id="page-inner">
    <div class="row">
      <div class="col-md-10 col-sm-12 col-xs-12">

      <h2  style="margin-bottom: 20px;">Payment Info</h2>

      
      <p class="alert alert-warning">
        We currently offer the following payment options: Bank Transfers (Wires &amp; ACHs), Postal Check, PayPal, Payoneer. We'll pay you automatically at the end of each month (or <a href="/pubs/cashflow.php">instantly</a> if needed) for the previous month's balance as long as that balance reached $50.00 or more. You can increase the minimum threshold below.
      </p>

      
      <form class="form-vertical well" method="post">
        <fieldset>
          <table class="col col-md-12">
            <tbody><tr><td valign="top">

                <input type="hidden" name="payee" value="Name">
                  
                <div class="form-group ">
                  <label class="control-label">* Threshold</label>
                  <div>
                    <select class="form-control" name="threshold">
                      <option value="50.00" selected="">$50.00 USD</option>
                      <option value="100.00">$100.00 USD</option>
                      <option value="250.00">$250.00 USD</option>
                      <option value="500.00">$500.00 USD</option>
                      <option value="1000.00">$1,000.00 USD</option>
                    </select>
                  </div>
                </div>

                <div class="form-group ">
                  <label class="control-label">* Payment Method</label>
                  <div>
                    <label class="radio">
                      <input type="radio" name="method" value="Wire" class="changeOnclick">
                      Bank Wire - <i class="fa fa-info-circle"></i> <a rel="tooltip" class="hoverhelp" title="" href="#" data-original-title="This is what we're charged by the bank every time we send a wire. We simply pass the charge to you.">$25</a>, instant
                    </label>
                                        <label class="radio">
                      <input type="radio" name="method" value="PayPal" class="changeOnclick" checked="">
                      PayPal - 2% ($20 max) on NET payments, instant
                    </label>
                    <label class="radio">
                      <input type="radio" name="method" value="Payoneer" class="changeOnclick">
                      Payoneer - Free, instant
                    </label>
                                        <label class="radio">
                      <input type="radio" name="method" value="Bitcoin" class="changeOnclick">
                      Bitcoin - Free, instant
                    </label>
                  </div>
                </div>

                <div style="display:none; background-color:#f3f3f3; padding:10px;" id="divPayoneer" class="divMethods">
                  <strong>Note:</strong> To use Payoneer as a payment method, you will first need to do one of the following with Payoneer:<br><br>
                  <i class="fa fa-arrow-right"></i> <a href="../../payoneer-link.php" target="_blank">Get your own PeerFly debit card</a><br>
                  <i class="fa fa-arrow-right"></i> <a href="../../payoneer-link.php" target="_blank">Sign up for Payoneer's Local Bank Transfer service (low cost bank transfers)</a><br>
                  <i class="fa fa-arrow-right"></i> <a href="../../payoneer-link.php" target="_blank">Link an already existing Payoneer account to us</a><br><br>
                  Once your account has been successfully verified or linked, you can submit this form with Payoneer selected. If you want to setup Payoneer at a later time, choose one of the other payment methods now. You will not be able to submit this form with Payoneer selected if you haven't linked your Payoneer account by choosing a link above.
                </div>

                <div style="display:none; background-color:#f3f3f3; padding:10px;" id="divAmazon" class="divMethods">
                  Your gift card code will be emailed to aline.mendes1798@gmail.com.
                </div>

                <div style="background-color: rgb(243, 243, 243); padding: 10px;" id="divPayPal" class="divMethods">
                  <div class="form-group ">
                    <label class="control-label">* Your PayPal Registered E-mail</label>
                    <div>
                      <input class="form-control" type="text" name="paypal" value="ninazaman4@gmail.com">
                    </div>
                  </div>
                </div>

                <div style="display:none; background-color:#f3f3f3; padding:10px;" id="divBitcoin" class="divMethods">
                  <div class="form-group ">
                    <label class="control-label">* Your BTC Address</label>
                    <div>
                      <input class="form-control" type="text" name="btc_address" value="">
                    </div>
                  </div>
                </div>

                <div style="display:none; background-color:#f3f3f3; padding:10px;" id="divACH" class="divMethods">
                  <div class="form-group ">
                    <label class="control-label">* Bank Name</label>
                    <div>
                      <input class="form-control" type="text" name="achbank" value="">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="control-label">* Account Type</label>
                    <div>
                      <select class="form-control" name="achtype">
                        <option value="" selected="">-- Account Type --</option>
                        <option value="Checking">Checking</option>
                        <option value="Savings">Savings</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="control-label">* Account Number</label>
                    <div>
                      <input class="form-control" type="text" name="achaccount" value="">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label class="control-label">* Account Routing (9 digits)</label>
                    <div>
                      <input class="form-control" type="text" name="achrouting" value="">
                    </div>
                  </div>
                </div>

                <div style="display:none; background-color:#f3f3f3; padding:10px;" id="divWire" class="divMethods">

                                      <div class="form-group">
                      <label class="control-label">* Currency</label>
                      <div>
                        <select class="form-control" name="wire_currency">
                          <option value="USD" selected="selected">USD
                          </option>
                          <option value="EUR">EUR
                          </option>
                          <option value="AUD">AUD
                          </option>
                          <option value="CAD">CAD
                          </option>
                          <option value="GBP">GBP
                          </option>
                          <option value="INR">INR
                          </option>
                          <option value="MXN">MXN
                          </option>
                          <option value="NZD">NZD
                          </option>
                          <option value="PHP">PHP
                          </option>
                        </select>
                      </div>
                    </div>
                    
                  <div class="form-group ">
                    <label class="control-label">* Bank Name</label>
                    <div>
                      <input class="form-control" type="text" name="wirebank" value="">
                    </div>
                  </div>
                  
                    <div class="form-group ">
                      <label class="control-label"><i class="fa fa-info-circle"></i> <a rel="tooltip" class="hoverhelp" title="" href="#" data-original-title="If you have an IBAN number, you must enter that instead of an account number as it will be required.">* IBAN (or account #)</a></label>
                      <div>
                        <input class="form-control" type="text" name="wireaccountintl" value="">
                      </div>
                    </div>

                    <div class="form-group ">
                      <label class="control-label">* Swift Code</label>
                      <div>
                        <input class="form-control" type="text" name="wireswift" value="">
                      </div>
                    </div>

                    <div class="form-group" style="display: none;">
                      <label class="control-label">Intermediary Bank Info</label>
                      <div>
                        <input class="form-control" type="text" name="int_bank_info" value="">
                      </div>
                    </div>

                    <a href="#" onclick="$('#int_bank_info').fadeIn(1000);$(this).remove();return false;" class="btn btn-primary">Add Intermediary Bank Information</a>

                    <div id="int_bank_info" class="well" style="display: none;">
                      <div class="form-group ">
                        <label class="control-label">* Intermediary Bank Name</label>
                        <div>
                          <input class="form-control" type="text" name="int_bank_name" value="">
                        </div>
                      </div>

                      <div class="form-group ">
                        <label class="control-label">* Intermediary Routing/Swift</label>
                        <div>
                          <input class="form-control" type="text" name="int_routing" value="">
                        </div>
                      </div>
                    </div>

                    
                  <div class="form-group ">
                    <label class="control-label">Reference Note</label>
                    <div>
                      <input class="form-control" type="text" maxlength="95" name="wire_reference_note" value="">
                    </div>
                  </div>
                </div>


                <div class="form-actions" style="margin-top:10px;">
                  <button type="submit" name="submit" class="btn btn-large btn-primary">Update</button>
                </div>
              </td></tr>
              </tbody>
          </table>

        </fieldset>
      </form>
      </div>
    </div>
  </div>
</div>
@include('layouts.user-footer')