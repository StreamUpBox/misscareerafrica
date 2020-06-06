<div class="table-responsive">
    <table class="table" id="statements-table">
        <thead>
            <tr>
        <th>Type</th>
        <th>Title</th>
        <th>Published?</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contents as $statement)
            <tr>
            <td>{!! $statement->type !!}</td>
            <td>{!! $statement->title !!}</td>
          <td>{!! $statement->published?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>

                <td>
                    {!! Form::open(['route' => ['contents.destroy', $statement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('contents.show', [$statement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('contents.edit', [$statement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
