<div class="table-responsive">
    <table class="table" id="links-table">
        <thead>
        <tr>
            <th>Activity</th>
            <th>IP Address</th>
            <th>Browser</th>
            <th>Platform</th>
            <th>Country</th>
            <th>City</th>
            <th>State</th>
            <th>Date/Time</th>
        <?php if(Auth::check()) {?>
        <th >Action</th>
        <?php } ?>
         </tr>
        </thead>
        <tbody>
        @foreach($vistors as $vistor)
            <tr>
                <td>{!! $vistor->activity !!}</td>
                <td>{!! $vistor->ip_address !!}</td>
                <td>{!! $vistor->browser !!}</td>
                <td>{!! $vistor->platform !!} {!! $vistor->device_version !!}</td>
                <td>{!! $vistor->country !!}</td>
                <td>{!! $vistor->city !!}</td>
                <td>{!! $vistor->state !!}</td>
                <td>{!! $vistor->created_at !!}</td>
                <?php if(Auth::check()) {?>
                <td>
                    {!! Form::open(['route' => ['vistors.destroy', $vistor->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                       {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
                <?php } ?>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
