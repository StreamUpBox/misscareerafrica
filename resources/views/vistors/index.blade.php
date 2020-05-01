@extends('layouts.app')

@section('content')
<style>
 
   

    /* remove border radius for the tab */

    #exTab1 .nav-pills>li>a {
        border-radius: 0;
    }

    /* change border radius for the tab , apply corners on top*/

    #exTab3 .nav-pills>li>a {
        border-radius: 4px 4px 0 0;
    }

    #exTab3 .tab-content {
        color: white;
        background-color: #428bca;
        padding: 5px 15px;
    }

</style>
<?php $visitorss=\App\Models\Vistors::where('id','!=',0)->count(); ?>

<?php $dailyVisitors=\App\Models\Vistors::whereRaw('Date(created_at) = CURDATE()')->count();

$country = \App\Models\Vistors::select('country', \DB::raw('MAX(country) as country'))
                   ->where('country','!=',null)
                   ->groupBy('country')->get();

                   $monthlyVisitors = \App\Models\Vistors::whereMonth('created_at', date('n'))
                ->count();

                $yearlyVisitors =\App\Models\Vistors::whereYear('created_at', date("Y"))
                ->count();
?>
<section class="content-header">

    <div class="row">
        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-body">
                    All Vistor(s)
                    <hr>
                    <h2 class="text-center">{{$visitorss}}</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-body">
                    Daily Vistor(s)
                    <hr>
                    <h2 class="text-center">{{$dailyVisitors}}</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-body">
                    Monthly Vistor(s)
                    <hr>
                    <h2 class="text-center">{{$monthlyVisitors}}</h2>

                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="box box-primary">
                <div class="box-body">
                    Yearly Vistor(s)
                    <hr>
                    <h2 class="text-center">{{$yearlyVisitors}}</h2>

                </div>
            </div>
        </div>

    </div>

    <h1 class="pull-right">
        <!-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('sessions.create') !!}">Add New</a> -->
    </h1>
</section>
<br>
<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')



    <div id="exTab1" class="">
        <ul class="nav nav-pills">
            <li class="active">
                <a href="#1a" data-toggle="tab">All</a>
            </li>
            <li><a href="#2a" data-toggle="tab">Countries</a>
            </li>

        </ul>

        <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a">
                <div class="box box-primary">
                    <div class="box-body">
                        @include('vistors.table')
                    </div>
                </div>
                <div class="text-center">

                    @include('adminlte-templates::common.paginate', ['records' => $vistors])

                </div>
            </div>
            <div class="tab-pane" id="2a">
                <div class="box box-primary">
                    <div class="box-body">
                        @include('vistors.countries-table')
                    </div>

                    <div class="text-center">

                    @include('adminlte-templates::common.paginate', ['records' => $countries])

                </div>

                </div>
            </div>
        </div>
    </div>




</div>
@endsection
