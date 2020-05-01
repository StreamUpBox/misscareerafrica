@extends('layouts.app')

@section('content')
<?php $visitorss=\App\Models\Vistors::where('id','!=',0)->count(); ?>

<?php $dailyVisitors=\DB::table('vistors')
->whereDate('created_at', '2016-12-31')->count();

$country = \DB::table('vistors')
                   ->select('country', \DB::raw('MAX(country) as country'))
                   ->where('country','!=',null)
                   ->groupBy('country')->get();

                   $monthlyVisitors = \DB::table('vistors')
                ->whereMonth('created_at', date('n'))
                ->count();

                $yearlyVisitors = \DB::table('users')
                ->whereYear('created_at', date("Y"))
                ->count();
?>
    <section class="content-header">
        <h1 class="pull-left">{{$visitorss}} All Vistor(s) </h1>
        <h1 class="pull-left ml-5" style="margin-left:40px">{{$dailyVisitors}} Daily Vistor(s)</h1>

        <h1 class="pull-left ml-5" style="margin-left:40px">{{$monthlyVisitors}} Monthly Vistor(s)</h1>

        <h1 class="pull-left ml-5" style="margin-left:40px">{{$yearlyVisitors}} Yearly Vistor(s)</h1>

        <h1 class="pull-left ml-5" style="margin-left:40px"> Most Country {{$country}}</h1>
        <h1 class="pull-right">
           <!-- <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('sessions.create') !!}">Add New</a> -->
        </h1>
    </section>
    <br>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('vistors.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $vistors])

        </div>
    </div>
@endsection


 