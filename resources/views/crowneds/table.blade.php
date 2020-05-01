<div class="table-responsive">
    <table class="table" id="crowneds-table">
        <thead>
            <tr>
        <th>Title</th>
        <!-- <th>Session</th> -->
        <th>Award</th>
        <th>Position</th>
        <th>Published</th>
        <th>Created at</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($crowneds as $crowned)
            <tr>
            <td>{!! $crowned->title !!}</td>
          
            <td>{!! $crowned->award !!}</td>
            <td>{!! $crowned->position !!}</td>
            <td>{!! $crowned->published?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>
            <td>{!! $crowned->created_at !!}</td>
                <td>
                    {!! Form::open(['route' => ['crowneds.destroy', $crowned->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('crowneds.show', [$crowned->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('crowneds.edit', [$crowned->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
