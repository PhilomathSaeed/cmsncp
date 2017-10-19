@include('layouts.user-header')
<div id="page-wrapper" style="background-color:#ffffff !important; height:auto !important;">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-10 col-sm-12 col-xs-12">
				<!-- content -->

				<h2 style="margin-bottom: 20px;">Referral</h2>

				<p>To refer new publishers to PeerFly, please use <a href="http://peerfly.com/?r=231957"><strong>http://peerfly.com/?r=231957</strong></a> and you'll earn 5% commission on everything <em>they</em> earn, for their first year! Use our <a href="referralBanners.php">referral banners</a> to promote PeerFly. To view your referral earnings, simply choose a start and end date. To view earnings on data older than 6 months, view the <a href="/pubs/reports/index.php?mode=archives">archives</a>.</p>



				<form method="get" name="selectdate" class="form-horizontal">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="form-group">
								<label class="col-sm-2">Date</label>
								<div class="col-sm-4">
									<select id="timeselect" class="form-control">
										<option value="today">Today</option>
										<option value="yesterday">Yesterday</option>
										<option value="thismonth">This Month</option>
										<option value="lastmonth">Last Month</option>
										<option value="2monthsago">2 Months Ago</option>
										<option value="3monthsago">3 Months Ago</option>
										<option value="custom">Custom/Loaded</option>
									</select>
								</div>
								<div class="col-sm-3">
									<input type="text" size="15" id="datepicker1" class="dp form-control hasDatepicker" name="start_date" value="10/16/2017">
								</div>
								<div class="col-sm-3">
									<input type="text" size="15" id="datepicker2" class="dp form-control hasDatepicker" name="end_date" value="10/16/2017">
								</div>    
							</div>
							<div class="form-group">
								<label class="col-sm-2">Options</label>
								<label class="col-sm-4" style="cursor:pointer;">
									<input type="radio" name="group" value="gu" checked=""> Group By PFID
								</label>
								<label class="col-sm-3" style="cursor:pointer;">
									<input type="radio" name="group" value="gc"> Group By Country
								</label>
								<label class="col-sm-3" style="cursor:pointer;">
									<input type="radio" name="group" value="ts"> Group By Date
								</label>
								<label class="col-sm-3 col-sm-offset-2" style="cursor:pointer;">
									<input type="radio" name="group" value="ga"> Total Commission
								</label>   
							</div>
						</div>
						<div class="panel-footer">
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>

				<span id="pages" style="float:left; margin-bottom:10px;"></span>
				<div style="clear:both;"></div>

				<div id="chart"></div>
				<div class="table-responsive no-top-margin">
					<div class="redtab"></div>
					<table id="referrals" class="table table-special tablesorter">
						<thead class="table-red">
							<tr>
								<th class="header">
									<a href="referrals.php?group=gu&amp;start_date=10/16/2017&amp;end_date=10/16/2017&amp;orderBy=userid&amp;sortBy=asc">Title</a>
								</th>
								<th class="header">
									<a href="referrals.php?group=gu&amp;start_date=10/16/2017&amp;end_date=10/16/2017&amp;orderBy=datejoined&amp;sortBy=asc">Joined</a>
								</th>
								<th class="header">
									<a href="referrals.php?group=gu&amp;start_date=10/16/2017&amp;end_date=10/16/2017&amp;orderBy=gender&amp;sortBy=asc">Gender</a>
								</th>
								<th class="header">
									<a href="referrals.php?group=gu&amp;start_date=10/16/2017&amp;end_date=10/16/2017&amp;orderBy=country&amp;sortBy=asc">Country</a>
								</th>
								<th class="headerSortDown header">
									<a href="referrals.php?group=gu&amp;start_date=10/16/2017&amp;end_date=10/16/2017&amp;orderBy=amnt&amp;sortBy=asc">Commission</a>
								</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>No results!</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</tbody>
					</table>
				</div>


				<!-- closing -->
			</div>
		</div>
	</div>
</div>
</div>
@include('layouts.user-footer')