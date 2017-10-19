@include('layouts.user-header')
<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
    <div id="page-inner">
        <div class="row">
          <div class="col-sm-10">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h2 style="text-align:left; margin:13px">Report</h2>
                    <hr>
                    <div class="row">                      
                        <div class="col-sm-4">
                          <input type="date" name="searchoffer" id="date" class="custom-input" placeholder="Date" style="padding:2px 5px"/>
                        </div>
                        <div class="col-sm-4">
                          <input type="date" name="searchoffer" id="date" class="custom-input" placeholder="Date" style="padding:2px 5px"/>
                        </div>
                        <div class="col-sm-4">
                          <input type="button" name="submit" class="btn btn-success" style="font-size:25px" onclick="search_offer();" value="Submit" />
                        </div>
                    </div>
                    <hr>
                </div>
                <!-- <div id="responseData" class="col-sm-12" style="margin-top:20px;"> -->
                    
                <table width="100%" class="table table-responsive bordered">
                  <tr style="background: #FF7607; color: #fff">
                      <th>Offers Name</th>
                      <th>Date</th>
                      <th>Unique Clicks</th>
                      <th>Raw Clicks</th>
                      <th>Convert</th>
                      <th>Pending</th>
                      <th>Rewards</th>
                  </tr>
                  <tr>
                    <td>Example:2200</td>
                    <td>07/05/2017</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                    <td>100 gems</td>
                  </tr>
                  <tr>
                    <td>Example:2245</td>
                    <td>07/02/2017</td>
                    <td>1</td>
                    <td>2</td>
                    <td>0</td>
                    <td>1</td>
                    <td>--</td>
                  </tr>
                  <tr>
                    <td colspan="2" style="font-weight: bold; font-size: 16px;">2 Results 07/02/2017 to 07/05/2017</td>
                    <td>2</td>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>100 gems</td>
                  </tr>
                  
                </table>


                </div>
            </div>
            <!--leftbar -->                    
            {{-- @include('layouts.right-panel') --}}
        </div>
        <!-- /. ROW  -->
    <!--<footer><p>Powered By: TechToday &copy 2017 <a href="#">ClickPiper</a></p></footer>--> 
    </div>
    <!-- /. PAGE INNER  -->
</div>       
       
                                        
@include('layouts.user-footer')