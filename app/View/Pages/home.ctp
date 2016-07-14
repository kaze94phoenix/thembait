<section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3>933</h3>
                  			</div>
					  			<p>933 People liked your page the last 24hs. Whoohoo!</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3>+48</h3>
                  			</div>
					  			<p>48 New files were added in your cloud storage.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>23</h3>
                  			</div>
					  			<p>You have 23 unread messages in your inbox.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>+10</h3>
                  			</div>
					  			<p>More than 10 news were added in your reader.</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Your server is working perfectly. Relax &amp; enjoy.</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
                      <div class="row mt">
                      <!-- SERVER STATUS PANELS -->
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn donut-chart">
                      			<div class="white-header">
						  			<h5>SERVER LOAD</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-database"></i> 70%</p>
									</div>
	                      		</div>
								<canvas style="width: 120px; height: 120px;" id="serverstatus01" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 70,
												color:"#68dff0"
											},
											{
												value : 30,
												color : "#fdfdfd"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus01").getContext("2d")).Doughnut(doughnutData);
								</script>
	                      	</div><!-- --/grey-panel ---->
                      	</div><!-- /col-md-4-->
                      	

                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="white-panel pn">
                      			<div class="white-header">
						  			<h5>TOP PRODUCT</h5>
                      			</div>
								<div class="row">
									<div class="col-sm-6 col-xs-6 goleft">
										<p><i class="fa fa-heart"></i> 122</p>
									</div>
									<div class="col-sm-6 col-xs-6"></div>
	                      		</div>
	                      		<div class="centered">
										<img src="assets/img/product.png" width="120">
	                      		</div>
                      		</div>
                      	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>TOP USER</h5>
								</div>
								<p><img src="assets/img/ui-zac.jpg" class="img-circle" width="80"></p>
								<p><b>Zac Snider</b></p>
								<div class="row">
									<div class="col-md-6">
										<p class="small mt">MEMBER SINCE</p>
										<p>2012</p>
									</div>
									<div class="col-md-6">
										<p class="small mt">TOTAL SPEND</p>
										<p>$ 47,60</p>
									</div>
								</div>
							</div>
						</div><!-- /col-md-4 -->
                      	

                    </div><!-- /row -->
                    
                    				
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-md-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>DROPBOX STATICS</h5>
                      			</div>
								<canvas style="width: 120px; height: 120px;" id="serverstatus02" height="120" width="120"></canvas>
								<script>
									var doughnutData = [
											{
												value: 60,
												color:"#68dff0"
											},
											{
												value : 40,
												color : "#444c57"
											}
										];
										var myDoughnut = new Chart(document.getElementById("serverstatus02").getContext("2d")).Doughnut(doughnutData);
								</script>
								<p>April 17, 2014</p>
								<footer>
									<div class="pull-left">
										<h5><i class="fa fa-hdd-o"></i> 17 GB</h5>
									</div>
									<div class="pull-right">
										<h5>60% Used</h5>
									</div>
								</footer>
                      		</div><!-- -- /darkblue panel ---->
						</div><!-- /col-md-4 -->
						
						
						<div class="col-md-4 mb">
							<!-- INSTAGRAM PANEL -->
							<div class="instagram-panel pn">
								<i class="fa fa-instagram fa-4x"></i>
								<p>@THISISYOU<br>
									5 min. ago
								</p>
								<p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="darkblue-panel pn">
								<div class="darkblue-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"><canvas height="75" width="233" style="display: inline-block; width: 233px; height: 75px; vertical-align: top;"></canvas></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
						
					</div><!-- /row -->
					
					<div class="row mt">
                      <!--CUSTOM CHART START -->
                      <div class="border-head">
                          <h3>VISITS</h3>
                      </div>
                      <div class="custom-bar-chart">
                          <ul class="y-axis">
                              <li><span>10.000</span></li>
                              <li><span>8.000</span></li>
                              <li><span>6.000</span></li>
                              <li><span>4.000</span></li>
                              <li><span>2.000</span></li>
                              <li><span>0</span></li>
                          </ul>
                          <div class="bar">
                              <div class="title">JAN</div>
                              <div style="height: 85%;" class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">FEB</div>
                              <div style="height: 50%;" class="value tooltips" data-original-title="5.000" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">MAR</div>
                              <div style="height: 60%;" class="value tooltips" data-original-title="6.000" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">APR</div>
                              <div style="height: 45%;" class="value tooltips" data-original-title="4.500" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar">
                              <div class="title">MAY</div>
                              <div style="height: 32%;" class="value tooltips" data-original-title="3.200" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar ">
                              <div class="title">JUN</div>
                              <div style="height: 62%;" class="value tooltips" data-original-title="6.200" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                          <div class="bar">
                              <div class="title">JUL</div>
                              <div style="height: 75%;" class="value tooltips" data-original-title="7.500" data-toggle="tooltip" data-placement="top"></div>
                          </div>
                      </div>
                      <!--custom chart end-->
					</div><!-- /row -->	
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>NOTIFICATIONS</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br>
                      		   <a href="#">Mark Twain</a> commented your post.<br>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br>
                      		</p>
                      	</div>
                      </div>

                       <!-- USERS ONLINE SECTION -->
						<h3>TEAM MEMBERS</h3>
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-divya.jpg" align="" height="35px" width="35px">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DIVYA MANIAN</a><br>
                      		   <muted>Available</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-sherman.jpg" align="" height="35px" width="35px">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DJ SHERMAN</a><br>
                      		   <muted>I am Busy</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-danro.jpg" align="" height="35px" width="35px">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">DAN ROGERS</a><br>
                      		   <muted>Available</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-zac.jpg" align="" height="35px" width="35px">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Zac Sniders</a><br>
                      		   <muted>Available</muted>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<img class="img-circle" src="assets/img/ui-sam.jpg" align="" height="35px" width="35px">
                      	</div>
                      	<div class="details">
                      		<p><a href="#">Marcel Newman</a><br>
                      		   <muted>Available</muted>
                      		</p>
                      	</div>
                      </div>

                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div title="" data-original-title="" id="date-popover" class="popover top" style="cursor: pointer; margin-left: 33%; margin-top: -50px; width: 175px; display: none;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="zabuto_calendar_bp"><div class="zabuto_calendar" id="zabuto_calendar_bp"><table class="table"><tbody><tr class="calendar-month-header"><th><div id="zabuto_calendar_bp_nav-prev" class="calendar-month-navigation"><span><span class="fa fa-chevron-left text-transparent"></span></span></div></th><th colspan="5"><span>November 2015</span></th><th><div id="zabuto_calendar_bp_nav-next" class="calendar-month-navigation"><span><span class="fa fa-chevron-right text-transparent"></span></span></div></th></tr><tr class="calendar-dow-header"><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr><tr class="calendar-dow"><td></td><td></td><td></td><td></td><td></td><td></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-01"><div id="zabuto_calendar_bp_2015-11-01_day" class="day">1</div></td></tr><tr class="calendar-dow"><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-02"><div id="zabuto_calendar_bp_2015-11-02_day" class="day">2</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-03"><div id="zabuto_calendar_bp_2015-11-03_day" class="day">3</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-04"><div id="zabuto_calendar_bp_2015-11-04_day" class="day">4</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-05"><div id="zabuto_calendar_bp_2015-11-05_day" class="day">5</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-06"><div id="zabuto_calendar_bp_2015-11-06_day" class="day">6</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-07"><div id="zabuto_calendar_bp_2015-11-07_day" class="day">7</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-08"><div id="zabuto_calendar_bp_2015-11-08_day" class="day">8</div></td></tr><tr class="calendar-dow"><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-09"><div id="zabuto_calendar_bp_2015-11-09_day" class="day">9</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-10"><div id="zabuto_calendar_bp_2015-11-10_day" class="day">10</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-11"><div id="zabuto_calendar_bp_2015-11-11_day" class="day">11</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-12"><div id="zabuto_calendar_bp_2015-11-12_day" class="day">12</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-13"><div id="zabuto_calendar_bp_2015-11-13_day" class="day">13</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-14"><div id="zabuto_calendar_bp_2015-11-14_day" class="day">14</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-15"><div id="zabuto_calendar_bp_2015-11-15_day" class="day">15</div></td></tr><tr class="calendar-dow"><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-16"><div id="zabuto_calendar_bp_2015-11-16_day" class="day">16</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-17"><div id="zabuto_calendar_bp_2015-11-17_day" class="day">17</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-18"><div id="zabuto_calendar_bp_2015-11-18_day" class="day">18</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-19"><div id="zabuto_calendar_bp_2015-11-19_day" class="day">19</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-20"><div id="zabuto_calendar_bp_2015-11-20_day" class="day">20</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-21"><div id="zabuto_calendar_bp_2015-11-21_day" class="day">21</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-22"><div id="zabuto_calendar_bp_2015-11-22_day" class="day">22</div></td></tr><tr class="calendar-dow"><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-23"><div id="zabuto_calendar_bp_2015-11-23_day" class="day">23</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-24"><div id="zabuto_calendar_bp_2015-11-24_day" class="day">24</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-25"><div id="zabuto_calendar_bp_2015-11-25_day" class="day">25</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-26"><div id="zabuto_calendar_bp_2015-11-26_day" class="day">26</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-27"><div id="zabuto_calendar_bp_2015-11-27_day" class="day">27</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-28"><div id="zabuto_calendar_bp_2015-11-28_day" class="day">28</div></td><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-29"><div id="zabuto_calendar_bp_2015-11-29_day" class="day">29</div></td></tr><tr class="calendar-dow"><td class="dow-clickable" id="zabuto_calendar_bp_2015-11-30"><div id="zabuto_calendar_bp_2015-11-30_day" class="day">30</div></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table><div class="legend" id="zabuto_calendar_bp_legend"><span class="legend-text"><span class="badge badge-event">00</span> Special event</span><span class="legend-block"><ul class="legend"><li class="event"></li><span>Regular event</span></ul></span></div></div></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><!-- --/row ---->
          </section>