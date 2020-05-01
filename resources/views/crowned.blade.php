@include('shared.styles',['title' => 'Crowned','description'=>'Miss Career Africa',
'activity'=>'Visit crowned page'])

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
                                <!-- <h1 class="text-center">Become a volunteer</h1> -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                $crowneds =  \App\Models\Crowned::where('published',1)->get();
                ?>
            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                 
                    <div class="row">
                
                        @foreach($crowneds as $crowend)
                    
                        <div class="col-md-4">
                            <div class="card border-success mb-3" style="max-width: 100%">
                                <div class="card-header bg-transparent border-success"><b>{{$crowend->title}}
                                  </b></div>
                                  <a href="crwoned-info/{{$crowend->id}}">
                                    <div class="img-fluid" style=" background-image: url('{{$crowend->image}}');
                                    background-repeat: no-repeat;width:100%;min-height:300px;
                                    background-size: cover; background-size: center center"></div>
                                    <div class="card-body text-success">
                                        <div class="row">
                                        <div class="col-sm-12">
                                        <h5 class="card-title"><b>Award: {{$crowend->award}}</b>
                                        </h5>
                                       
                                        </div>
                                      
                                        </div>
                                        
                                        <b class="card-text">
                                            <hr />
                                            <a
                                                href="crwoned-info/{{$crowend->id}}">{{str_limit($crowend->bio, $limit = 100, $end = 'read more ....')}}</a>
                                        </b>
                                    </div>
                                </a>

                                <div class="card-footer bg-transparent border-success">
                                <!-- <a href="https://www.theeventx.com/view-event/44" class="btn btn-info btn-block btn-sm"> GET TICKET </a> -->
                                            
                                    <a href="book-mca" class="btn btn-success btn-block btn-sm">
                                        BOOK HER
                                    </a>

                                </div>


                            </div>
                        </div>
                        @endforeach

                </div>

            </div>
        </div>
        @include('shared.footer')

</body>

</html>
