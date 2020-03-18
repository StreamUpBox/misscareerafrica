@include('shared.styles',['title' => 'Become a volunteer :: Miss Career','description'=>'Miss Career Africa'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax" style="background-image: url(images/valunteer.jpg);"
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
                        <div class="col-md-6">
                            <h1 class="h1">HOW TO BECOME A VOLUNTEER</h1>
                            <p style="color: #252525!important;">
                                Volunteering in the Miss Career Africa is an eye-Opener gateway and life changing
                                experience for a brighter future and life of fulfillment. But more so, it is a gift of
                                giving back to community while empowering the Africa’s next generation of female
                                corporate and influential leaders.
                            </p>

                            <p style="color: #252525!important;">
                            Each year, Close to 15000 young career women & Aspiring Entrepreneurs across five regions of Africa compete at regional and continental 
                            levels and competition first goes online through applications with  high 
                            level of scrutiny in selecting and due diligence. Each regional competition 
                            goes across all member countries inclusively and finally, Before the Continental grand finale,
                             Most competitive Africa’s young Career women and serial entrepreneurs across the continent, 
                             will have had an opportunity to show case their business modelings and projects in their
                              Regional selection respectively and the most deserving will attend the continental Grand Finale.
                               Our local and regional teams full of volunteers from universities, working class youth and other 
                               strategic partners with influence in their respective careers across the Africa together
                                with our headquarters team and others from all member countries on a regional level ,
                                 contribute almost hundreds of hours every day to ensure our participants have a life changing experience,
                                  Proofreading their career and business projects, placing them to the right internships, getting them scholarships opportunities ,
                                   creating a mentorship network for them to learn new skills and making new strategic networks.
                            </p>

                            <p style="color: #252525!important;">
                                Hundreds of volunteers across the continent invest in our Miss Career Africa candidates,
                                event participants by helping us in doing application portal management, pre-selection
                                support, boot camps, grand finale preparation and fundraising. They are so generous
                                enough to even remain available after the competition to keep mentoring, providing
                                technical support to the former candidates, new ones and more related work from our
                                regional offices but mostly at the head quarter in Rwanda. These acts of services
                                increase the girl’s confidence and achieve their dreams through our platform.
                            </p>

                            <p style="color: #252525!important;">
                                MCA believes in a movement and that is why team work, gala dinner parties, fellowships
                                and Retreats for our volunteers is one of the pillars of the Miss Career Africa and our
                                volunteers are fundamental to the program’s continued success.
                                <br />To get involved, contact your regional organization.
                            </p>


                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                @include('flash::message')
                                <h1 class="h1">VOLUNTEER FORM</h1>
                            </div>
                            <div class="content">
                                @include('adminlte-templates::common.errors')
                                <div class="col-md-12">

                                    <div class="box-body">
                                        <div class="row">
                                            {!! Form::open(['route' => 'volunteers.store']) !!}

                                            @include('volunteers.fields')

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
