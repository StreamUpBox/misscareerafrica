@extends('layouts.app',['title'=>'Vote Candidate'])
<div class="container">
@section('content')
   
    <style>
.donate {
	box-shadow: -1px 1px 2px 0px #3dc21b;
	background-color:#44c767;
	border-radius:2px;
	border:2px solid #18ab29;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:4px 50px;
	text-decoration:none;
	text-shadow:0px -1px 25px #2f6627;
}

.donate:hover {
	background-color:#5cbf2a;
}
.donate:active {
	position:relative;
	top:1px;
}

    </style>
    <div class="content">
    <?php  $vistor=new App\Models\Vistors; $vistor->saveVistor('Visit Voted');
       $sessions =  \App\Models\Session::where('is_voting_open',1)->first();
    ?>
        
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">

                <section class="content-header text-center">
               <a href="/"> <img src="../images/logo.png" class="text-center" style="width:150px;border:2px #fff solid"
                                                class="user-image" alt="User Image"/></a>
                  
                </section>
                <?php if($sessions){ ?>
                @include('adminlte-templates::common.errors')
                @include('flash::message')

                    {!! Form::open(['route' => 'candiateVoters.store']) !!}

                        @include('candiate_voters.fields')

                    {!! Form::close() !!}

                <?php }else{?>
                    <h1 class="text-center text-warning"><b>VOTING CLOSED</b></h1> 
                    <br>
                    <br>
                    <?php } ?>

                    <div class="col-12 mb-2">
                                   
                                   <a href="/donate" class="donate text-center  btn-block">#Donate2HerProject</a>
                               
                    </div>
                    </div>
                    <div class="col-sm-3"></div>

                    <br>
                   
                </div>
            </div>
        </div>
    </div>
@endsection
</div>
