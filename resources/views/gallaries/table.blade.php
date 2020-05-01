<div class="table-responsive">
    <table class="table" id="gallaries-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gallaries as $gallaries)
            <tr>
                <td>{!! $gallaries->name !!}</td>
            <td><img src="{!! $gallaries->image !!}" alt="" style="width:100px"></td>
                <td>
                    {!! Form::open(['route' => ['gallaries.destroy', $gallaries->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('gallaries.edit', [$gallaries->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
