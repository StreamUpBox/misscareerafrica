<?php $fund=\App\Models\Content::where('published',1)->where('type','MCA-Fund')->first();
?>
@include('shared.styles',['title' => $fund?$fund->title:'Fund Form :: Miss Career','description'=>'Miss Career Africa',
'activity'=>'Visit Fund Form page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/fund.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <!-- <h1 class="text-center">Become a volunteer</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <div class="row">
                    <?php if($fund){?>
                        <div class="col-md-6">
                            <h1 class="h1">{{$fund->title}}</h1>

                            <p style="color: #252525!important;">
                            <img src="{{$fund?$fund->image:'images/our-mission.jpeg'}}"
                                        class="img-responsive img-rounded" alt="Image">
                                    <br>
                                    <p class="p">{!!html_entity_decode($fund->content)!!}</p>
                            </p>

                          


                        </div>
                        <?php }else{ ?>
                        <div class="col-md-6">
                            <h1 class="h1 text-center">Welcome to the most exclusive africa's largest young women's fund
                                community!</h1>


                            <span style="color:green!important; font-size:20px">"You have made the most rewarding choice
                                for your idea".</span><br />
                            <p style="color: #252525!important;">
                                Dear Miss Career Fund-Candidate,
                                See if you qualify for a loan by entering your background details, financial status,
                                career background, business plan (pdf) , why the loan, a message of hope that tells us
                                how this will help you and answering other few related quick questions that will help us
                                select the most deserving candidates from thousands of other candidates across Africa.
                                Whereas this is a life time opportunity that aspires to transform the life of Africa’s
                                young women financially.
                                Please note that there is no guarantee you will qualify for the Miss Career loan amount
                                you requested. The loan amount you qualify for will be determined by the Miss Career
                                Africa Fund review process.
                            </p>
                            <h1 class="h1">Our Plan B:</h1>
                            <p style="color: #252525!important;">
                                At the heart of Miss Career Fund Team,
                                We pray and wish you all the best in this journey of funding your business idea. Its our
                                plan A that you get funds you dream to have for your business and We are here available
                                and committed to back you up. Even when you miss the fund, Our plan B is that you remain
                                in the Miss Career Fund Network. Here you will have access and privilege to be a part of
                                other funding opportunities and more so, Training programs that intend to develop
                                thousands of Africa’s women entrepreneurs.
                                Enjoy the life time opportunity!
                            </p>

                        </div>
                        <?php }?>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                @include('flash::message')
                                <h1 class="h1">FUND FORM</h1>
                            </div>
                            <div class="content">
                                @include('adminlte-templates::common.errors')
                                <div class="col-md-12">

                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'funds.store']) !!}

                                            @include('funds.fields')

                                            {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        @include('shared.footer')
</body>

</html>
