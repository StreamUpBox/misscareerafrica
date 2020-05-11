<div class="table-responsive">
    <table class="table" id="donateSessions-table">
        <thead>
            <tr>
                <th>Title</th>
        <th>Image</th>
        <th>Can Open Donation System</th>
        <th>Can Start Application System</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($donateSessions as $donateSessions)
            <tr>
                <td>{!! $donateSessions->title !!}</td>
            <td><img src="{!! $donateSessions->image !!}" style="width:100px;height:70px" alt=""></td>
            <!-- <td>{!! $donateSessions->description !!}</td> -->
            <td>{!! $donateSessions->can_open_donation_system?'Yes':'No' !!}</td>
            <td>{!! $donateSessions->can_start_application_system?'Yes':'No' !!}</td>
                <td>
                    {!! Form::open(['route' => ['donateSessions.destroy', $donateSessions->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('donateSessions.show', [$donateSessions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('donateSessions.edit', [$donateSessions->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
