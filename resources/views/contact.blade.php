@include('shared.styles',['title' => 'Contact Us','description'=>'Miss Career Africa',
'activity'=>'Visit contact us page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/sld2.jpg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <h1 class="text-center h1">Contact Us</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <div class="row">
                        <div class="col-md-6">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.4198318821436!2d30.107121114666377!3d-1.9867885373515584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca62c6f5e53fb%3A0xd90c6d1d3e71d5c5!2sKK%20433%20St%2C%20Kigali!5e0!3m2!1sen!2srw!4v1569339710558!5m2!1sen!2srw"
                                width="600" height="450" style="margin-left:-80px" frameborder="0" style="border:0;"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <h3>Our Address</h3>
                                <ul class="contact-info">
                                    <li><i class="ti-map"></i>KK 433 Street, Kigali</li>
                                    <li><i class="ti-mobile"></i>+250 782-409-571</li>
                                    <li><i class="ti-envelope"></i><a href="#">info@misscareerafrica.org</a></li>
                                    <li><i class="ti-home"></i><a href="#">www.misscareerafrica.org</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12">


                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        @include('flash::message')
                                    </div>
                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'mails.store']) !!}

                                            @include('contactus.fields')

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
