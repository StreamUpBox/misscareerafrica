<div class="table-responsive">
    <table class="table" id="statements-table">
        <thead>
            <tr>
        <th>Title</th>
        <th>Numbering</th>
        <th>Published?</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statements as $statement)
            <tr>
            <td>{!! $statement->title !!}</td>
            <td>{!! $statement->numbering !!}</td>
          <td>{!! $statement->allow_to_apply?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>

                <td>
                    {!! Form::open(['route' => ['statements.destroy', $statement->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('statements.show', [$statement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('statements.edit', [$statement->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
