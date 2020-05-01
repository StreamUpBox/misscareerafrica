@include('shared.styles',['title' => 'Videos and Links','description'=>'Miss Career Africa',
'activity'=>'Visit Videos&Links Page'])

<body>
    <div id="fh5co-wrapper" style=" background-image: url('/images/sld1.png');
                                    background-repeat: no-repeat;width:100%;
                                    background-size: cover; background-size: center center">
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

                </div>
            </div>
        </div>
    </div>
</div>


            <div id="fh5co-blog-section">
                <div class="container" id="contact">
                <!-- <div class="card border-success mb-3" style="max-width: 100%">
                        <h1 class="text-center"><b>VOTES CLOSED</b></h1>
                        <div class="card-footer bg-transparent border-success">
                            <a href="https://theeventx.com/view-event/30" class="btn btn-success btn-block btn-sm">
                                Get Ticket
                            </a>

                        </div>
                        <img class="img-fluid" src="/images/buy-ticket.jpeg" style="width:100%;">



                    </div> -->
                    <div class="row">
                    @foreach($videos as $video)
                        <div class="col-md-4 mt-4">
                            <div class="card border-success mb-3" style="max-width: 100%;height:400px;overflow:auto">
                                <div class="card-header bg-transparent border-success"><b>
                                        {{$video->title}}</b></div>
                                        @if ($video->linkType === 'link')
                                        <a href="{{$video->links}}" target="_blank">{{$video->links_html}}</a>
                                        @else
                                            {!!$video->links_html!!}
                                        @endif
                                        <hr />
                                <div class="card-body text-success">
                                  
                                    <b class="card-text" style="padding:4px; position: relative;bottom: 17px;over">
                                        
                                        <a href="{{$video->links}}" target="_blank">  {{$video->contents}}</a>
                                    </b>
                                </div>
                               
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

        @include('shared.footer')

</body>

</html>
