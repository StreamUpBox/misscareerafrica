<div class="table-responsive">
    <table class="table" id="candidates-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Fname</th>
        <th>Lname</th>
        <th>Email</th>
        <th>Dob</th>
        <th>Phone Number</th>
        <th>Street</th>
        <th>City</th>
        <th>Province</th>
        <th>Country</th>
     
        <th>Is Selected</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($candidates as $candidate)
            <tr>
                <td>{!! $candidate->id !!}</td>
            <td>{!! $candidate->fname !!}</td>
            <td>{!! $candidate->lname !!}</td>
            <td>{!! $candidate->email !!}</td>
            <td>{!! $candidate->dob !!}</td>
            <td>{!! $candidate->phone_code !!} {!! $candidate->phone_number !!}</td>
            <td>{!! $candidate->street !!}</td>
            <td>{!! $candidate->city !!}</td>
            <td>{!! $candidate->province !!}</td>
            <td>{!! $candidate->country !!}</td>
         
            <td>{!! $candidate->is_selected?'<label class="badge badge-success">YES</label>':'<label class="badge badge-danger">NO</label>' !!}</td>
                <td>
                    {!! Form::open(['route' => ['candidates.destroy', $candidate->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('candidates.show', [$candidate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('candidates.edit', [$candidate->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
