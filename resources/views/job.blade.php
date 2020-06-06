<?php 
                 $job=\App\Models\Content::where('published',1)->where('type','Job')->first();
?>
@include('shared.styles',['title' =>  $job? $job->title:'Job :: Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Visit our job page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax-1" style="background-image: url(images/our-job.jpeg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <!-- <h1 class="text-center">The Job</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="blog">
                <?php if($job){?>
                    <div class="row m-0">

                        <div class="mx-auto col-11">

                            <h1 class="text-center">
                                <span style="text-align: center;">
                                  
                                    <span class="h1">{{$job->title}}</span><br>
                                    
                                </span>
                            </h1>
                            <hr>


                            <div style="text-align: left;color: #252525!important;">
                                <div class="col-md-12 mr-3">
                                    <img src="{{$job?$job->image:'images/our-job.jpeg'}}"
                                        class="img-responsive img-rounded" alt="Image">
                                    <br>
                                    <p class="p">{!!html_entity_decode($job->content)!!}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                        <?php }else{ ?>
                    <div class="row">

                        <div class="col-md-6">
                            <h3 class="heading">The Job of Miss Career Africa</h3>
                            <p style="color: #252525!important;">
                                Miss Career Africa is probably most visible brand and representation of the mission of
                                the Miss Career Africa program to the public. As a member of the MCA team, she is
                                responsible for positively advancing the goals and objectives of MCA as well as her own
                                Social Impact Initiative.
                                Miss Career Africa is full-time, paid contractual employee of MCA.
                                <br />The job is an exciting, fun, challenging Year of Service that requires energy,
                                positivity,
                            </p>


                        </div>
                        <div class="col-md-6">
                            <img src="images/our-job.jpeg" class="img-responsive img-rounded" alt="Image">
                        </div>
                        <div class="col-md-12">
                            <p style="color: #252525!important;">
                                professionalism and courtesy while engaging in extensive travel, often going to over 10
                                countries a month and at times changing locations every day, throughout the Africa and
                                overseas and, at times, to other countries.

                                Working with the MCA staff that schedules and provides logistical, support and guidance,
                                she uses her term to promote and market the program to her peers and the next generation
                                of young women.

                                Miss Career Africa will work with the MCA team to develop goals and execute on tactics
                                to advance her chosen Social Impact Initiative, setting metrics and developing
                                partnerships which will show positive results at the end of her year. In addition, she
                                also serves as the Africa’s Ambassador for All Trust Consult; rising funds for the
                                Africa’s poorest communities and young talents to start their own businesses in
                                partnership with Microlend Australia who otherwise would not be able to afford capital
                                funds. The Miss Career Africa will as well run a campaign of raising international and
                                regional university scholarships for girls from vulnerable families who cannot afford
                                university tuition even in their local universities.

                                As such, public speaking is an essential role of Miss Career Africa. She researches and
                                prepares speeches to deliver to audiences of all sizes. She speaks with the media and is
                                a representative of MCA with sponsors and partners, students and corporate executives.
                                A first step to continuing her education and career, the job of Miss Career is a
                                once-in-a-lifetime experience that carries with it service above self.
                            </p>


                        </div>
                    </div>

                    <?php }?>

                </div>
            </div>

            @include('shared.footer')

</body>

</html>
