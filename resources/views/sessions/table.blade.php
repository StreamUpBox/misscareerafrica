<div class="table-responsive">
    <table class="table" id="sessions-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Title</th>
        <th>Session</th>
        <th>Country</th>
        <th>Date</th>
        <th>Numbering</th>
        <th>Can Candidate Apply?</th>
        <th>Can Candidate Voting?</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sessions as $session)
            <tr>
            <td>{!! $session->id !!}</td>
            <td>{!! $session->title !!}</td>
            <td>{!! $session->session !!}</td>
            <td>{!! $session->country !!}</td>
            <td>{!! $session->date !!}</td>
            <td>{!! $session->numbering !!}</td>
            <td>{!! $session->is_current_applying?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>
            <td>{!! $session->is_voting_open?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>

                <td>
                    {!! Form::open(['route' => ['sessions.destroy', $session->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('sessions.show', [$session->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('sessions.edit', [$session->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
