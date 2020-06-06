@include('shared.styles',['title' => 'Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Only Visit'])

<body>


    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>


            <!-- end:fh5co-header -->
            <aside>
                <header>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <!-- <ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol> -->
                        <div class="carousel-inner" role="listbox">
                            <!-- Slide One - Set the background image for this slide in the line below -->
                            <div class="carousel-item active" style="background-image: url('images/keys.gif')">
                                <div class="carousel-caption d-none d-md-block">
                                    <!-- <h2 class="display-4">First Slide</h2>
						<p class="lead">This is a description for the first slide.</p> -->
                                </div>
                            </div>
                            <!-- Slide Two - Set the background image for this slide in the line below -->
                            <!-- <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
					  <div class="carousel-caption d-none d-md-block">
						<h2 class="display-4">Second Slide</h2>
						<p class="lead">This is a description for the second slide.</p>
					  </div>
					</div> -->
                            <!-- Slide Three - Set the background image for this slide in the line below -->
                            <!-- <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
					  <div class="carousel-caption d-none d-md-block">
						<h2 class="display-4">Third Slide</h2>
						<p class="lead">This is a description for the third slide.</p>
					  </div>
					</div> -->
                        </div>
                        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
				  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a> -->
                    </div>
                </header>
            </aside>

            <?php $scope=\App\Models\Content::where('published',1)->where('type','Scope')->first();
                 $competition=\App\Models\Content::where('published',1)->where('type','Competition')->first();
                 $job=\App\Models\Content::where('published',1)->where('type','Job')->first();
                 $mission=\App\Models\Content::where('published',1)->where('type','Mission')->first();
            ?>


            <div id="row mt-5" style="margin-top: 10px">
                <div class="container">

                   

                    <h1 class="text-center">
                                <span style="text-align: center;">
                                <?php if($scope){ ?>
                                    <div class="row m-5">
                                            <div class="col-12">

                                            <div class="row">
                                            <div class="col-sm-3"  style="background-image: url('{{$scope->image}}');
                                                        background-repeat: no-repeat;width:100%;min-height:90px;
                                                        background-size: cover; background-size: center center">

                                            </div>
                                            <div class="col-sm-9">
                                                <h2 class="text-left">{{$scope->title}}  <br> 
                                            </h2>
                                            <a href="/scope" class="btn btn-info" style="height:5px;color:#ffff!important;padding:10px">
                                                <span style="position:relative;bottom:10px"> read more...</span></a>
                                            </div>
                                        </div>
                                <?php }else{?>
                                    <span class="h1">Handing the keys of career,</span><br>
                                    <span class="h1"> Power and Future into the hands of a girl...</span>

                                    <div style="text-align: center;font-size: 10px">
                                                <p class="p">
                                                
                                                It’s 21st Century and the light is illuminating in the corners of the
                                                    Continent of Africa and Miss Career Africa wants to hold this flagship.
                                                    The Miss Career Africa competition reflects a broad picture of how the keys of
                                                    career, power and Future should be handed as well to the girls who are the next
                                                    generation of mothers, teachers and professionals of all kinds.
                                                    <a href="/scope">read more...</a>
                                                </p>

                                            </div>

                                    <?php }?>
                                </span>
                            </h1>

                           
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-5" style="background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;background-image: url(images/arrow_down_input.png);
		position: relative;margin-left:0px;margin-right:0px; margin-bottom:40px; box-sizing: border-box;">


                    <div class="col-md-12 mt-5" id="current_session"></div>

                </div>

                <div class="row mt-5 mb-5" id="all_session" style="background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;background-image: url(images/arrow_down_input.png);
		position: relative;margin-left:0px;margin-right:0px; margin-bottom:40px; box-sizing: border-box;">


                </div>

                
                

                <div class="row mt-5"
                    style="position: relative; left: 2px; margin-top:10px; margin-bottom:35px; box-sizing: border-box;">

                    <div class="col-md-4" onclick="window.location.href='/competition'" style="cursor:pointer;background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;background-image: url({{$competition?$competition->image:'images/final-sa.jpeg'}});height:380px">
                        <a class="title_link" href="competition">
                            <h2 class="wpb_heading wpb_singleimage_heading text-center">The Competition</h2>
                        </a>

                    </div>

                    <div class="col-md-4" onclick="window.location.href='/competition'" style="cursor:pointer;background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;background-image: url({{$job?$job->image:'images/our-job.jpeg'}});height:380px">
                        <a class="title_link" href="job">
                            <h2 class="wpb_heading wpb_singleimage_heading text-center">The Job</h2>
                        </a>

                    </div>


                    <div class="col-md-4" onclick="window.location.href='/competition'" style="cursor:pointer;background-repeat: no-repeat;
			background-size: cover;
			background-position: center center;background-image: url({{$mission?$mission->image:'images/our-mission.jpeg'}});height:380px">
                        <a class="title_link" href="mission">
                            <h2 class="wpb_heading wpb_singleimage_heading text-center">Our Mission</h2>
                        </a>

                    </div>

                </div>

                <div id="row mt-5" style=" background-repeat: no-repeat;
                    background-size: cover;color:white!important;font-size:30px;
                    background-position: 50% 20%;margin-top: -15px;background-image: url(images/tab_img_2.jpg);">
                    <div class="container">
                        <p class="text-center mt-3" style="color:white!important"><b style="color:white!important">Meet
                                Our Sponsors and partners</b></h3>

                            <div class="row">

                                <div class="col-md-12">
                                  
                                    <a class="title_link" href="https://igihe.com/" target="_blank">
                                        <img src="images/g.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://rba.co.rw/" target="_blank">
                                        <img src="images/h.png" class="img-rounded" style="width: 200px;">
                                    </a>

                                    <a class="title_link" href="https://inyarwanda.com/" target="_blank">
                                        <img src="images/l.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://www.newtimes.co.rw/" target="_blank">
                                        <img src="images/p.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="#" target="_blank">
                                        <img src="images/o.png" class="img-rounded" style="width: 200px;">
                                    </a>

                                    
                                      <a class="title_link" href="https://www.microlendaustralia.com.au" target="_blank">
                                        <img src="images/microland.png" class="img-rounded" style="width: 200px">
                                    </a>
                                    <a class="title_link" href="https://twitter.com/alltrustconsult?lang=en" target="_blank">
                                        <img src="images/a.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://theeventx.com/" target="_blank">
                                        <img src="images/b.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="#">
                                        <img src="images/c.png" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://yegobox.com/" target="_blank">
                                        <img src="images/d.png" class="img-rounded" style="width: 200px;">
                                    </a>

                                    <a class="title_link" href="https://www.radiotv10.rw/" target="_blank">
                                        <img src="images/t.png" class="img-rounded" style="height:150px;width: 200px;">
                                    </a>
                                    
                                    <a class="title_link" href="https://yegobox.com/" target="_blank">
                                        <img src="images/e.jpeg" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://yegobox.com/" target="_blank">
                                        <img src="images/f.jpeg" class="img-rounded" style="width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://yegobox.com/" target="_blank">
                                        <img src="images/g.jpeg" class="img-rounded" style="height:115px;width: 200px;">
                                    </a>
                                    <a class="title_link" href="https://yegobox.com/" target="_blank">
                                        <img src="images/h.JPG" class="img-rounded" style="height:115px;width: 200px;">
                                    </a>
                                </div>

                            </div>
                            <p class="text-center mt-4">
                                <a href="sponsor" class="btn btn-primary btn-lg">Become a Sponsor/Partner</a>
                            </p>

                    </div>


                    @include('shared.footer')

</body>

</html>
