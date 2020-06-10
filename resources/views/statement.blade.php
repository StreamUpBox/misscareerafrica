<?php $statement = \App\Models\Statement::where('allow_to_apply',1)->where('id',$id)->orderBy('numbering','ASC')->first();
?>

@include('shared.styles',['title' => $statement?$statement->title:'Statements :: Miss Career
Africa','description'=>'Miss Career Africa',
'activity'=>'Visit statement page'])



<body>
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <style> .sf-menu a:hover {
  color: #0f1630!important;
} </style>

            <div id="fh5co-header" style="margin-top:-6px;border-bottom:1px solid #d3682a;height:85px">

                @include('shared.header')

            </div>
          

            <!-- end:fh5co-header -->
            <div id="fh5co-blog-section">
                <div class="m-5" id="blog">
                   
                                <?php        

                            if($statement){
                                        $statements = \App\Models\Statement::where('allow_to_apply',1)->orderBy('numbering','ASC')->get();
                                        $previous = \App\Models\Statement::where('allow_to_apply',1)->where('id', '<', $id)->orderBy('numbering','ASC')->first();
                                        $next = \App\Models\Statement::where('allow_to_apply',1)->where('id', '>', $id)->orderBy('numbering','ASC')->first();
                                    ?>

                                    <div class="row">

                                        <div class="col-sm-3">
                                            <ul class="list-group mt-3">
                                                <li class="list-group-item active"
                                                    style="border:#8d1212; !important;background:#8d1212;!important;color:#fff!important">
                                                    Statements</li>

                                                @foreach($statements as $sts)
                                                <?php if($sts->id==$id){?>
                                                <li class="list-group-item">
                                                    <a href="/statement/{{$sts->id}}#{{$sts->id}}" class="mbr-bold"
                                                        style="color:#d4230b!important;font-size:12px!important;">{{$sts->numbering}} .
                                                        {{$sts->title}}</a>
                                                    <?php }else{ ?>
                                                <li class="list-group-item "><a
                                                        href="/statement/{{$sts->id}}#{{$sts->id}}" class="mbr-bold"
                                                        style="color:#0f1630!important;font-size:12px!important;">{{$sts->numbering}} .
                                                        {{$sts->title}}</a>
                                                    <?php } ?>
                                                </li>
                                                @endforeach
                                            </ul>

                                        </div>

                                        <div class="col-sm-9">
                                            <h2 class="text-left">
                                                <strong style="color:#0f1630;!important;">{{$statement->numbering}} .
                                                    {{ $statement->title }}</strong>
                                            </h2>
                                            <hr>
                                            <p class="p">
                                                <a name="#{{$sts->id}}"></a>
                                                {!!html_entity_decode($statement->contents)!!}</p>

                                            <?php if($previous && $next) { ?>
                                            <div class="row">
                                                <div class="col-6">
                                                    <a class="btn btn-sm btn-primary btn-block display-3"
                                                        href="/statement/{{$previous->id}}#{{$previous->id}}" style="background: #8d1212;color: #fff;border: 2px solid #8d1212;">Previous
                                                    </a>
                                                </div>

                                                <div class="col-6">
                                                    <a class="btn btn-sm btn-primary btn-block display-3"
                                                        href="/statement/{{$next->id}}#{{$next->id}}" style="background: #8d1212;color: #fff;border: 2px solid #8d1212;">Next
                                                    </a>
                                                </div>
                                            </div>
                                            <?php }else if(!$previous && $next) { ?>
                                            <a class="btn btn-sm btn-primary btn-block display-3"
                                                href="/statement/{{$next->id}}#{{$next->id}}" style="background: #8d1212;color: #fff;border: 2px solid #8d1212;">Next
                                            </a>
                                            <?php  }else if($previous && !$next) { ?>
                                            <a class="btn btn-sm btn-primary btn-block display-3"
                                                href="/statement/{{$previous->id}}#{{$previous->id}}" style="background: #8d1212;color: #fff;border: 2px solid #8d1212;">
                                                Previous
                                            </a>
                                            <?php }?>
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
