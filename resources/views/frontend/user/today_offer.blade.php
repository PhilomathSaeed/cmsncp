@include('layouts.user-header')

<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
    <div id="page-inner">
        <div class="row">
        	<div class="col-sm-10">
                <div class="col-md-12 col-sm-12 col-xs-12">
                 	<h2 style="text-align:left; margin:13px">Today's Offers</h2>
                    
                </div>
                <div id="responseData" class="col-sm-12" style="margin-top:20px;">
                    
                    <table width="100%" class="table table-responsive bordered">
      <tr style="background: #FF7607; color: #fff">
          <th>SI</th>
            <th>Top offer</th>
            <th>Rewards</th>
        </tr>
         <?php $i=1; ?>
        @foreach($today_offer as $menu)
       
          <tr>
          <td>{{ $menu->id }}</td>
           <td><a href="javascript:void();" data-toggle="modal" data-target="#topOffers{{$i}}">{{ $menu->title}} </a>
            <div id="topOffers{{$i}}" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ $menu->title}}</h4>
                  </div>
                  <div class="modal-body">
                    <table width="100%" class="table">
                        <tr>
                            <td width="23%">Offer</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->title}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Banner Image</td>
                            <td width="2%"> : </td>
                            <td width="75%">
                            <img src="{{ URL::asset('admin/uploads/offer/'.$menu->image) }}" style="width:100px; height:auto" /></td>
                      </tr>
                      <tr>
                            <td width="23%">Details</td>
                            <td width="2%"> : </td>
                            <td width="75%">{!! $menu->full_desc !!}</td>
                      </tr>
                      <tr>
                            <td width="23%">Action Link</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->action_link}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Conversation Points</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->points}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Category</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->category}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Allowed Country</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->allowed_country }}</td>
                      </tr>
                      <tr>
                            <td width="23%">Date</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->date}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Rewards Amounts</td>
                            <td width="2%"> : </td>
                            <td width="75%">{{ $menu->rewards_amount}}</td>
                      </tr>
                      <tr>
                            <td width="23%">Note</td>
                            <td width="2%"> : </td>
                            <td width="75%">{!! $menu->note !!}</td>
                      </tr>
                    </table>
                  </div>
                 
                </div>
            
              </div>
            </div>
          </td>
          <td>{{ $menu->points }}</td>
        </tr>
        @endforeach 
        
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