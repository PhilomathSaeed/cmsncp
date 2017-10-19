 <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 footer-box wow fadeInUp">
                        <h4>About Us</h4>
                        <div class="footer-box-text">
	                        <p style="color:#d4fefd; font-size:14px;">
	                        	{{ substr(strip_tags($aboutcont->content), 0, 200) }}
                                
                                 @if(strlen(strip_tags($aboutcont->content)) > 50)

                                 else
                                 <p><a href="{{ url('pages/about') }}" target="_blank">Read more...</a></p>
                                 @endif
	                        </p>
	                        
                        </div>
                    </div>
                    <div class="col-sm-2 footer-box wow fadeInDown footer-menu">
                      <h4>Quick link</h4>                            
							<ul>
								@foreach($menus as $menu)
                                <li class="dropdown">
                                    <a href="{{ $menu->slug }}" target="_blank">{{ $menu->menuname }}</a>
                                </li>
                                @endforeach
							</ul>
                    </div>
                    <div class="col-sm-4 footer-box wow fadeInUp footer-menu">
					 <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact" style="color:#d4fefd; font-size:14px;">
	                        <p><i class="fa fa-map-marker"></i> Address: 56, Younus Ali Sarkar Road, Tongi, Gazipur-1710, Bangladesh.</p>
	                        <p><i class="fa fa-phone"></i> Phone: +880 1912 00 17 98, +880 1818 90 95 67</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="" target="_blank">max.masum1798@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-sm-3 footer-box wow fadeInDown">
                       <h4>Email Updates</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                        	<p>Enter your email and you'll be one of the first to get new updates:</p>
                        	 <form action="{{ route('home.subscribe.submit') }}" method="post">
                              {{ csrf_field() }}
		                    	<div class="form-group">
		                    		<label class="sr-only" for="subscribe-email">Email address</label>
		                        	<input type="text" name="email" placeholder="Enter Email..." class="subscribe-email" id="subscribe-email">
                                    {{ $errors->has('email')?$errors->first('email'):'' }}
                                    
		                        </div>
                                <input type="submit" class="btn" value="Subscribe" />
                                 
                            
		                    </form>
                        </div> 
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p style="color:#fff; font-size:12px;">Powered by: Tech Today &copy; 2017 ClickPiper </p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn" style="color:#fff;">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
						<a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript -->
        <script src="{{ URL::asset('frontend/js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/bootstrap-hover-dropdown.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/wow.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/retina-1.1.0.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/flexslider/jquery.flexslider-min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/jflickrfeed.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/masonry.pkgd.min.js') }}"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true') }}"></script>
        <script src="{{ URL::asset('frontend/js/jquery.ui.map.min.js') }}"></script>
        <script src="{{ URL::asset('frontend/js/scripts.js') }}"></script>

    </body>

</html>
