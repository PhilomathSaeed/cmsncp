@include('layouts.user-header')
<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
    <div id="page-inner">
        <div class="row">
          <div class="col-sm-10">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h2 style="text-align:left; margin:13px">Counter Shop</h2>
                    <hr>
                    <div class="row">   

                        <div class="tab">
						  <button class="tablinks" onclick="openCity(event, 'Terms')">Terms</button>
						  <button class="tablinks" onclick="openCity(event, 'OrdertoConvert')">Order to Convert</button>
						  <button class="tablinks" onclick="openCity(event, 'PaymentRequest')">Payment Request</button>
						  <button class="tablinks" onclick="openCity(event, 'MyPayment')">My Payment</button>
						</div>

						<div id="Terms" class="tabcontent">
						  <h3>Terms</h3>
						  <p>hello Terms</p>
						</div>

						<div id="OrdertoConvert" class="tabcontent">
						  <h3>Order to Convert</h3>
						  <p>hello Order to Convert</p> 
						</div>

						<div id="PaymentRequest" class="tabcontent">
						  <h3>Payment Request</h3>
						  <p>hello Payment Request.</p>
						</div>	
						
						<div id="MyPayment" class="tabcontent">
						  <h3>My Payment</h3>
						  <p>hello My Payment</p>
						</div>	

						
                        <!--<div class="col-sm-3">
                          <span class="tb" style="border:1px solid red;"><a href="#terms"></span>
			  
                        </div>
                        <div class="col-sm-3">
						<span><a href="#ordertoconvert"></span>
                          
                        </div>
                        <div class="col-sm-3">
						<span><a href="#paymentRequest"></span>
                         
                        </div>
                        <div class="col-sm-3">
						<span><a href="#mypayment"></span>
                          
                        </div>-->
                    </div>
                    <hr>
                </div>
                
                    
                <table width="100%" class="table table-responsive bordered">
                  <tr style="background: #FF7607; color: #fff">
                      <th>Request Date</th>
                      <th>Approve Date</th>
                      <th>Request Amount</th>
                      <th>Payment Fees</th>
                      <th>Paid Amount</th>
                      <th>Method</th>
                  </tr>
                  <tr>
                    <td>07/01/2017</td>
                    <td>--</td>
                    <td>$150</td>
                    <td>--</td>
                    <td>--</td>
                    <td>PayPal</td>
                  </tr>
                  <tr>
                    <td>06/01/2017</td>
                    <td>06/04/2017</td>
                    <td>$200</td>
                    <td>$4</td>
                    <td>$196</td>
                    <td>PayPal</td>
                  </tr>
                  <tr style="font-weight: bold; font-size: 16px;">
                    <td colspan="2">06/01/2017 to 07/01/2017</td>
                    <td>$350</td>
                    <td>$4</td>
                    <td>$196</td>
                    <td></td>
                  </tr>
                  
                </table>


                </div>
            </div>
			
            <!--leftbar -->                    
            {{-- @include('layouts.right-panel') --}}
        </div>
        <!-- /. ROW  -->
    <!--<footer><p>Powered By: TechToday &copy 2017 <a href="#">click piper</a></p></footer>--> 
    </div>
    <!-- /. PAGE INNER  -->
</div>       
       
                                        
@include('layouts.user-footer')