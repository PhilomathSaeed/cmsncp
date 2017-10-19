     @include('layouts.header')
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div  style="text-align: center;" class="col-sm-12 wow fadeIn">
                      
                        <h1>Our Blogs</h1>                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us-container">
		<!-- PART ONE-->

        @foreach($blogs as $blog)
        
		<div class="container">
	            <div class="row">
				<div class="col-md-1"></div>
				 <div class="col-md-10">
					<div class="panel panel-default">
					  <div class="panel-heading phead">{{ $blog->title }}</div>
					  <div class="panel-body">{!! $blog->short_desc !!}

					  <table>
					  <tr>
					  	<div class="row">
						  	<div class="col-md-4 bloguser"><i class="fa fa-user" aria-hidden="true"></i> {{ $blog->postBy }}</div>
						  	<div class="col-md-8" style="text-align: right;"><a class="btn btn-info" href="{{ url('pages/blog/'.$blog->slug) }}" target="_blank">Read Full Post</a></div>
					  	</div>

					  <!-- <td><i class="fa fa-user" aria-hidden="true"></i></td>

					  <td class="bloguser">{{ $blog->postBy }}</td>
					  <td><a class="btn btn-info" href="{{ url('pages/single/'.$blog->slug) }}">Read Full Post</a></td> -->
					  
					  </tr>
					  </table>
					 
					  </div>
					</div>
				 </div>
				 <div class="col-md-1"></div>
				</div>
				
		</div>
       @endforeach

                
 @include('layouts.footer')