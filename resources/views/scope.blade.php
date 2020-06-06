<?php $scope=\App\Models\Content::where('published',1)->where('type','Scope')->first();
            ?>
@include('shared.styles',['title' => $scope?$scope->title:'Our Scope :: Miss Career Africa','description'=>'Miss Career Africa',
'activity'=>'Visit our scope page'])

<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">


            <div id="fh5co-header">

                @include('shared.header')

            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax-1" style="background-image: url(images/our-scope.jpeg);"
                data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div
                            class="col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
                            <div class="fh5co-intro fh5co-table-cell">
                                <br /><br /><br /><br />
                                <h1 class="text-center">Our Scope</h1>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="fh5co-blog-section">
                <div class="container" id="blog">

                    <div class="row m-0">
                   
                        <div class="mx-auto col-10">

                            <h1 class="text-center">
                                <span style="text-align: center;">
                                <?php if($scope){ ?>
                                    <span class="h1">{{$scope->title}}</span><br>
                                <?php }else{?>
                                    <span class="h1">Handing the keys of career,</span><br>
                                    <span class="h1"> Power and Future into the hands of a girl...</span>

                                    <?php }?>
                                </span>
                            </h1>
                            <hr>
                          
                     
                            <div style="text-align: left;color: #252525!important;">
                            <div class="col-md-12 mr-3">
                            <img src="{{$scope?$scope->image:'images/our-scope.jpeg'}}" class="img-responsive img-rounded" alt="Image">
                            <br>
                        </div>


                            <?php if($scope){ ?>
                                <p class="p">{!!html_entity_decode($scope->content)!!}</p>
                                <?php }else{?>
                                    <p class="p">The Miss Career Africa is the Africa’s radical girls’ education promotion
                                    and emancipation based program that originated after two years successful career
                                    guidance for the Esther Girls Scholarship Program-Girls (An American project that
                                    offers scholarships and Character formation to the vulnerable girls of Rwanda). The
                                    Miss Career Africa program empowers young female professionals and entrepreneurs and
                                    those aspiring students through provision of university scholarships, career
                                    guidance, Entrepreneurship incubation development, leadership training, and
                                    networking
                                </p>
                                <p class="p">
                                    The Africa’s young female professionals, who are between the ages of 18 and 24, have
                                    established records of accomplishment in illuminating the hope of innovation and
                                    positive impact in their organizations, institutions, communities, and countries.
                                </p>

                                    <?php }?>
                               
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            @include('shared.footer')
</body>

</html>
