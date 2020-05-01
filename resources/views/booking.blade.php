@include('shared.styles',['title' => 'Book Her - Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Visit book her page'])

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
                                <!-- <h1 class="text-center">Become a volunteer</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="col-md-12">
                                @include('flash::message')
                                <h1 class="h1 text-center">BOOK MISS CAREER AFRICA</h1>
                            </div>
                            <div class="content">
                                @include('adminlte-templates::common.errors')
                                <div class="col-md-12">

                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'bookings.store']) !!}

                                            @include('bookings.fields')

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
