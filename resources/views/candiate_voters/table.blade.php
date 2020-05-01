<div class="table-responsive">
    <table class="table" id="candiateVoters-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>Email/Phone Number</th>
        <th>Candidate</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($candiateVoters as $candiateVoter)
            <tr>
                <td>{!! $candiateVoter->id !!}</td>
            <td>{!! $candiateVoter->phone_number !!}</td>
            <td>{!! $candiateVoter->candidate->fname !!} {!! $candiateVoter->candidate->lname !!} </td>
                <td>
                    {!! Form::open(['route' => ['candiateVoters.destroy', $candiateVoter->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <!-- <a href="{!! route('candiateVoters.show', [$candiateVoter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a> -->
                        <a href="{!! route('candiateVoters.edit', [$candiateVoter->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
