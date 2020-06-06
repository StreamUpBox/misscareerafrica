<?php 
                 $mission=\App\Models\Content::where('published',1)->where('type','Mission')->first();
?>
@include('shared.styles',['title' => $mission?$mission->title:'Our Mission :: Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Visit our mission page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax-1" style="background-image: url(images/our-mission.jpeg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <!-- <h1 class="text-center">Our Mission</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="blog">
                <?php if($mission){?>
                    <div class="row m-0">

                        <div class="mx-auto col-11">

                            <h1 class="text-center">
                                <span style="text-align: center;">
                                  
                                    <span class="h1">{{$mission->title}}</span><br>
                                    
                                </span>
                            </h1>
                            <hr>


                            <div style="text-align: left;color: #252525!important;">
                                <div class="col-md-12 mr-3">
                                    <img src="{{$mission?$mission->image:'images/our-mission.jpeg'}}"
                                        class="img-responsive img-rounded" alt="Image">
                                    <br>
                                    <p class="p">{!!html_entity_decode($mission->content)!!}</p>

                                </div>
                            </div>
                        </div>
                    </div>
                        <?php }else{ ?>
                    <div class="row">
                        <div class="col-md-12 m-4">
                            <img src="images/our-mission.jpeg" class="img-responsive img-rounded" alt="Image">
                        </div>
                        <div class="col-md-12">
                            <h3 class="heading">The Miss Career Africa Competition </h3>
                            <p style="color: #252525!important;">
                                The Miss Career Africa Competition has a 30 –year’s plan of creating a movement of
                                450,000 young women professionals across Africa who will take up the powers and carry
                                the candles of influence in their respective countries!
                                Miss Career Africa is the first competition to consider a career and professional
                                success over the mere beauty and a university scholarship awards for young women to be
                                able to go to college and further their education and more importantly,
                                <br />
                                providing capital funds for those interested in doing business.
                                Miss Career Africa has plans to evolve in Africa as young women’s gateway to unlimited
                                transformation and fulfillment platform.<br /> The competition wills never ever in its
                                history judge on outward appearance for the Miss Career Africa Program believes that
                                girl’s worthiness does not stem from her beauty but brain.
                                Throughout the competition and in interviews, And incubations programs or various career
                                based cohorts, candidates get additional opportunities to advocate for their social
                                impact initiatives and to demonstrate how they are uniquely qualified for the exciting
                                and challenging 365-day mission of being Miss Career Africa.<br />
                                The program exists to step away from just empowering to handing keys of the power to the
                                young women across Africa to be the best they can be through career guidance, career
                                placements, cohorts, training, funding opportunities, university scholarship
                                opportunities
                            </p>


                        </div>


                    </div>
                    <?php }?>


                </div>
            </div>
            @include('shared.footer')
</body>

</html>
