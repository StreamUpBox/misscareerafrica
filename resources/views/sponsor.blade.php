<?php $sponsor=\App\Models\Content::where('published',1)->where('type','Become-sponsor')->first();
?>
@include('shared.styles',['title' => $sponsor?$sponsor->title:'Become a sponsor :: Miss Career','description'=>'Miss Career Africa',
'activity'=>'Visit Become a sponsor aage'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/sponsor.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <div class="row">

                    <?php if($sponsor){?>
                        <div class="col-md-6">
                            <h1 class="h1">{{$sponsor->title}}</h1>

                            <p style="color: #252525!important;">
                            <img src="{{$sponsor?$sponsor->image:'images/our-mission.jpeg'}}"
                                        class="img-responsive img-rounded" alt="Image">
                                    <br>
                                    <p class="p">{!!html_entity_decode($sponsor->content)!!}</p>
                            </p>

                          


                        </div>
                        <?php }else{ ?>
                        <div class="col-md-6">
                            <h1 class="h1">HOW TO BECOME A SPONSOR?</h1>
                            <p style="color: #252525!important;">
                                Partnering with The Miss Career Africa brings a value to your brand. Partners may
                                request Miss Career Africa to provide speakers, brand ambassadors, or to, present or
                                perform at corporate events and media appearances, and for sure, Miss Career Africa’s
                                social media presence brings continental exposure and grassroots relevance to your brand
                                or cause.
                            </p>

                            <p style="color: #252525!important;">
                                The Miss Career Africa is inspired to partnering with like-minded organizations that
                                exist to place power in the hands of young women.
                                For more information, please call 0784872667 or email info@missacareerafrica.com
                            </p>



                        </div>
                        <?php }?>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                @include('flash::message')
                                <h1 class="h1">SPONSORSHIP FORM</h1>
                            </div>

                            <div class="content">
                                @include('adminlte-templates::common.errors')
                                <div class="col-md-12">

                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'sponsors.store']) !!}

                                            @include('sponsors.fields')

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
