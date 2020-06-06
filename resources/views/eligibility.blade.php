<?php $eligibility=\App\Models\Content::where('published',1)->where('type','Eligibility')->first();
?>

@include('shared.styles',['title' => $eligibility?$eligibility->title:'Eligibility :: Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Visit eligibility page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/apply.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
            <?php if($eligibility){?>
                <div class="container" id="blog">
                    <div class="row m-0">

                        <div class="mx-auto col-11">

                            <h1 class="text-center">
                                <span style="text-align: center;">
                                  
                                    <span class="h1">{{$eligibility->title}}</span><br>
                                    
                                </span>
                            </h1>
                            <hr>


                            <div style="text-align: left;color: #252525!important;">
                                <div class="col-md-12 mr-3">
                                    <img src="{{$eligibility?$eligibility->image:'images/our-eligibility.jpeg'}}"
                                        class="img-responsive img-rounded" alt="Image">
                                    <br>
                                    <p class="p">{!!html_entity_decode($eligibility->content)!!}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                        <?php }else{ ?>

                <div class="container" id="contact" style="background:black;">
                    <p style="color: black;">
                        <br><a href="/candidate-application">APPLY HERE</a><br>

                        <b style="font-size:20px">Eligible candidate(s):</b><br />
                        -Young female professionals<br />
                        -Entrepreneurs<br />
                        -High School graduates & University Students.<br />
                         -Working class(Under 24 years)<br />
                        -In a range of 18-24 Years<br />
                        -Speaking either English or French<br />
                        -Viable Business Plan or Idea<br />

                        Application Requirements:<br />
                        -Complete Online Application as required!<br />
                        -Incomplete Applications will not be accepted.<br />
                        What else is required?<br />
                        Online Voting & Boot Camp Tickets orientation is required and the information regarding<br />
                        that session will be given to you 3 weeks before the boot camp. Transportation Affairs: Note:<br />
                        Miss Career Africa Organization/The competition is not responsible of the candidate's transports<br />
                        to the country that is hosting both Boot camp and Grand Finale.<br />
                        Therefore, one should be optimistic to raise her own transport budget from friends, families,<br />
                        school and other interested organizations. One should cater for her dress-codes during the boot<br />
                        camp and Grand finale. Ps: The competition only provides accommodations, meals, airport pick-up<br />
                        and internal transports for those attending grand finale:)
                      
                    <p>
                      
                        <a href="#">Note:</a><br>
                        The applicant should be single, unmarried  and no kid(s).
                    </p>
                </div>

                <?php }?>
            </div>


        </div>
    </div>

    @include('shared.footer')
</body>

</html>
