     @include('layouts.header')
		
		
			
		
		 <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div style="text-align: center;" class="col-sm-12 wow fadeIn">
                        
                        <h1>{{ $currentMenu }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us Text -->
        <div class="about-us-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us-text wow fadeInLeft">
	                    <h3>{{ $title }}</h3>
	                    <p style="text-align:justify;">
	                    	{!! $content !!}
	                    </p>
							<!-- <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">
							  Read More
							</button>

							<div id="demo" class="collapse">
							  <br>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
							  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
							  nisi ut aliquip ex ea commodo consequat.
							</div>  -->
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Meet Our Team -->
        <div class="team-container">
        	<div class="container">
	            <div class="row">
		            <div class="col-sm-12 team-title wow fadeIn">
		                <h2>Director Information</h2>
		            </div>
	            </div>
	            <div class="row">	            	
		            @foreach($directors as $director)
	            	<div class="col-sm-4 col-md-4 col-xs-12">
		                <div class="team-box wow fadeInUp">
		                    <img src="{{ URL::asset('admin/uploads/directors/'.$director->photo) }}" alt="{{ $director->first_name." ". $director->last_name }}" 
                            data-at2x="{{ URL::asset('admin/uploads/directors/'.$director->photo) }}">
		                    <h3>{{ $director->first_name." ". $director->last_name }}</h3>
							<h3>{{ $director->designation }}</h3>
		                    <p>{!! $director->short_intro !!}</p>
		                    <div class="team-social">		                        
		                        <a href="{{ $director->facebook_id }}" target="_blank"><i class="fa fa-facebook"></i></a>
		                        <a href="{{ $director->twitter_id }}" target="_blank"><i class="fa fa-twitter"></i></a>
		                        <a href="{{ $director->linkedin_id }}" target="_blank"><i class="fa fa-linkedin"></i></a>
		                        <a href="mailto:ara.jeasmin7@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
		                    </div>
		                </div>
	                </div>
	                @endforeach
	            </div>
	        </div>
        </div>
		
		<!-- our mission -->
		
		<!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
				 <div class="col-sm-12 team-title wow fadeIn">
		              <h2>Our Mission</h2>
		            </div>
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>Our mission is simple</h3>
	                    <p style="text-align:justify;">We believe in the power of performance marketing as long as it's done correctly and legitimately.</p>
	                    <p style="text-align:justify;">
	                    	We believe in team work. Millions of internet users doing tasks and who is only wining? It’s only about advertisers and publishers. ClickPiper trying make it happen anyone doing any kinds of tasks they will win too no matter how few it is. If everyone be connected this ways, this can be make money business opportunity worldwide. We believe this ways can improves online business and make benefits everyone connected with the business.
	                	</p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-2">
		                <div class="service wow fadeInDown" style="height:214px;">
		                    <div class="service-icon"><i class="fa fa-tags"></i></div>
		                    <h3>Millions active users in 150+ countries</h3>	                    
		                </div>
	                </div>
	                <div class="col-sm-2" style="height:214px;">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-tasks"></i></div>
		                    <h3>120k offers live by categories</h3>
		                    
		                </div>
	                </div>
	                <div class="col-sm-2" style="height:214px;">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-recycle"></i></div>
		                    <h3>Average $200 monthly users earing</h3>
		                    
		                </div>
	                </div>
					
					<div class="col-sm-2" style="height:214px;">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-cog"></i></div>
		                    <h3>Best market place approving to publish like Amazon &amp; MaxBounty.</h3>
		                    
		                </div>
	                </div>
	                <div class="col-sm-2" style="height:214px;">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-cog"></i></div>
		                    <h3>Full-time compliance team with unparalleled fraud detection</h3>
		                    
		                </div>
	                </div>
	                <div class="col-sm-2" style="height:214px;">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-cog"></i></div>
		                    <h3>Release every week helpful blog posts &amp; tips</h3>		                    
		                </div>
	                </div>
	            </div>
	        </div>
        </div>
		<br><br>
               
 @include('layouts.footer')