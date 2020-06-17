@include('shared.styles',['title' =>'Teams :: Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Team'])


<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <style>
                .sf-menu a:hover {
                    color: #0f1630 !important;
                }
 .card-block {
    -webkit-flex-grow: 0;
    flex-grow: 0;
    padding: 2.4rem 2.4rem 0 2.4rem;
}
.card-block .testimonial-photo {
    display: inline-block;
    width: 160px;
    height: 160px;
    margin-bottom: 1.6rem;
    overflow: hidden;
    border-radius: 50%;
    position: relative;
    left:0;
}

.card-block .testimonial-photo img {
    width: 100%;
    min-width: 100%;
    min-height: 100%;
}

img {
    vertical-align: middle;
    border-style: none;
}

            </style>

            <div id="fh5co-header" style="margin-top:-6px;border-bottom:1px solid #d3682a;height:85px">

                @include('shared.header')

            </div>


            <!-- end:fh5co-header -->
            <div id="fh5co-blog-section">
                <div class="m-5" id="blog">

                    <?php        
                                        $teams = \App\Models\TeamCategory::where('published',1)->orderBy('numbering','ASC')->get();
                                       
                                   
                                   
                            if(count($teams) > 0){
                                   ?>

                    <div class="row">

                        <div class="col-sm-3">
                            <ul class="list-group mt-3">
                                <li class="list-group-item active"
                                    style="border:#8d1212; !important;background:#8d1212;!important;color:#fff!important">
                                 Team</li>

                                @foreach($teams as $sts)
                          
                                <li class="list-group-item "><a href="/team-members/{{$sts->id}}#{{$sts->id}}"
                                        class="mbr-bold"
                                        style="color:#0f1630!important;font-size:14px!important;">{{$sts->name}}</a>
                                  
                                </li>
                                @endforeach
                                <li class="list-group-item text-center"><a href="/all-teams"
                                        class="mbr-bold"
                                        style="color:#0f1630!important;font-size:14px!important;">View All</a>
                                  
                                </li>
                            </ul>

                        </div>

                        <div class="col-sm-9">
                        <!-- <span class="text-left ml-5 text-success">
                                <strong class="text-success" style="font-size:28px; color: #28a745!important;"> Team</strong>
                            </span>
                            <hr> -->
                            <p class="p">

                                <div id="">
                                    <div class="container" id="contact">

                                        <div class="row" style="margin-top:-20px">
                                            <?php
                                            $myTeams = \App\Models\Team::where('published',1)->orderBy('numbering','ASC')->paginate(8);
                                            $myTeams = \DB::table('teams')
                                            ->join('team_categories', 'teams.team_category_id', '=', 'team_categories.id')
                                            ->where('teams.published', '=',1)
                                            ->orderBy('team_categories.numbering', 'ASC')
                                            ->groupBy(['teams.id'])
                                            ->paginate(8);
                                            ?>
                                            @foreach($myTeams as $myTeam)

                                            <div class="col-md-4">
                                                <div class="card border-success mb-3" style="max-width: 100%">
                                                <div class="card-header bg-transparent border-success"><b>
                                                {{$myTeam->name}}</b><br> <strong  style=" color: #28a745!important;">{{$myTeam->title}}</strong></div>
                                                        <div class="card-block text-center">
                                                            <div class="testimonial-photo text-center">
                                                                <img src="{{$myTeam->image}}">
                                                            </div>
                                                        
                                                        </div>
                                                        <div class="card-body text-success">
                                                        <div class="row mb-5">
                                                        <b class="card-text text-center mx-auto col-8"
                                                         style="border-bottom:2px solid; text-align: center">{{$myTeam->country}}</b><br>
                                                         </div>
                                                            <b class="card-text">

                                                                <a href="#" data-toggle="modal"
                                                                    data-target="#exampleModalLong{{$myTeam->id}}">{{str_limit($myTeam->bio, $limit = 100, $end = 'read more ....')}}</a>

                                                            </b>

                                                            <div class="modal fade" id="exampleModalLong{{$myTeam->id}}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalLongTitle"
                                                                aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">

                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                       {!! html_entity_decode(str_replace('.', '<br /> <br />', $myTeam->bio)) !!}
                                                                           
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                               




                                                </div>
                                            </div>
                                            @endforeach
                                            <br><br>
                                            <div class="media-container-column mx-auto col-lg-8">
                                            <span class="align-center"> {!! $myTeams->links() !!}</span>
                                            </div>
                                            <?php if(count($myTeams) == 0){?>
                                            <div class="media-container-column mx-auto col-lg-8">

                                                <div class="alert alert-warning show mt-5 ml-5 text-center title"
                                                    role="alert">
                                                    <strong>No Team Member!</strong>
                                                </div>
                                            </div>

                                            <?php } ?>

                                        </div>

                                    </div>

                            </p>

                        </div>


                    </div>



                    <?php 
                                    }else{
                                    ?>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="media-container-column col-lg-8">

                                <div class="alert alert-warning  mt-5 ml-5 text-center title" role="alert">
                                    <strong>No more!</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                                    }
                                    ?>
                </div>

            </div>
            @include('shared.footer')
</body>

</html>
