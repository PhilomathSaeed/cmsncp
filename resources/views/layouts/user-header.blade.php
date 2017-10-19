<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ClickPiper Dashboard</title>
    <!-- Bootstrap Styles-->
    <link href="{{ URL::asset('frontend/user/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="{{ URL::asset('frontend/user/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{ URL::asset('frontend/user/js/morris/morris-0.4.3.min.css') }}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{ URL::asset('frontend/user/css/custom-styles.css') }}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    
</head>

<body>
    <div id="wrapper" style="background-color:#4a494a;">
            
        <nav class="navbar navbar-default top-navbar" role="navigation">
		
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse" 
                style="background-color:#f37553;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               
				<a class="navbar-brand" href="{{ url('user/dashboard') }}" target="_blank"><img src="{{ URL::asset('frontend/user/img/logo.png') }}"></a>
				
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
               <!--<span class="dashb">Dashboard</span>-->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="{{ url('user/dashboard') }}" target="_blank"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-fw fa-link"></i>Offers</a>
                        <ul class="nav-second-level">
                            <li><a href="{{ url('user/browse') }}" target="_blank"><i class="fa fa-search"></i>&nbsp; Browse Offers</a></li>
                            <li><a href="{{ url('user/today_offer') }}" target="_blank"><i class="fa fa-calendar"></i>&nbsp; Todays Offers</a></li>
                            <li><a href="{{ url('user/all_offer') }}" target="_blank"><i class="fa fa-unlock-alt"></i>&nbsp; Treasure Box</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="{{ url('user/report') }}" target="_blank"><i class="fa fa-fw fa-desktop"></i>Reports</a>
                    </li>
					<li>
						<a href="{{ url('user/countershop') }}" target="_blank"><i class="fa fa-archive"></i>Counter Shop</a>
					</li>
					<li>
						<a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-user"></i>Profile</a>
                        <ul class="nav-second-level">
                            <li><a href="{{ url('user/profile') }}" target="_blank"><i class="fa fa-user"></i>&nbsp; General Information</a></li>
                            <li><a href="{{ url('user/paymentinfo') }}" target="_blank"><i class="fa fa-building-o"></i>&nbsp; Payment Information</a></li>
                            <li><a href="{{ url('user/proaccount') }}" target="_blank"><i class="fa fa-external-link-square"></i>&nbsp; Get Pro Account</a></li>
                        </ul>
					</li>
					<li>
						<a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-briefcase" aria-hidden="true"></i>Resources</a>
                        <ul class="nav-second-level">
                            <li><a href="" target="_blank"><i class="fa fa-question"></i>&nbsp; FAQ</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-star"></i>&nbsp; Blog</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-facebook"></i>&nbsp; Facebook Group</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-desktop"></i>&nbsp; Apps</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-book"></i>&nbsp; User Terms</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-eye"></i>&nbsp; Privacy Policy</a></li>
                            <li><a href="" target="_blank"><i class="fa fa-envelope"></i>&nbsp; Contact Us</a></li>
                        </ul>
					</li>
					<li>
						<a href="{{ url('user/referral') }}" target="_blank"><i class="fa fa-edit"></i>Referrals</a>
					</li>
				    <li>
                        <a href="{{ route('user.logout') }} target="_blank"" onClick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                        <form id="logout-form" action="{{ route('user.logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                    </li>

                    <!--<li>
                        <a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#" target="_blank" target="_blank" target="_blank">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#" target="_blank" target="_blank" target="_blank">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#" target="_blank" target="_blank" target="_blank">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#" target="_blank" target="_blank" target="_blank">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" target="_blank" target="_blank">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank" target="_blank" target="_blank">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>-->
                    
                </ul>

            </div>
			<table class="table">
			<thead>
			<tr>
			<td class="color1">copy &copy; ClickPiper</td>
			</tr>
			</thead>
			<tr>
			<td class="color1">Find us on
			<a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-instagram color1" aria-hidden="true"></i></a>

			</td>
			<td class="color1">Facebook<a href="#" target="_blank" target="_blank" target="_blank"><i class="fa fa-thumbs-up color1 tabletr" aria-hidden="true"></i></a></td>

			</tr>
			</table>

        </nav>
        <!-- /. NAV SIDE  -->
        
        
