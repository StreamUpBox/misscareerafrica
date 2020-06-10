<div class="table-responsive">
    <table class="table" id="teamCategories-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Published</th>
        <th>Numbering</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($teamCategories as $teamCategory)
            <tr>
                <td>{!! $teamCategory->name !!}</td>
            <td>{!! $teamCategory->published?'Yes':'No' !!}</td>
            <td>{!! $teamCategory->numbering !!}</td>
                <td>
                    {!! Form::open(['route' => ['teamCategories.destroy', $teamCategory->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('teamCategories.show', [$teamCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('teamCategories.edit', [$teamCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
