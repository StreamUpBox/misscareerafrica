<div class="table-responsive">
    <table class="table" id="donationApplicants-table">
        <thead>
            <tr>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone Number</th>
       
        <th>Allowed Donation</th>
     
        </thead>
        <tbody>
        @foreach($donationApplicants as $donationApplicants)
            <tr>
                <td>{!! $donationApplicants->full_name !!}</td>
            <td>{!! $donationApplicants->email !!}</td>
            <td>{!! $donationApplicants->phone_number !!}</td>
           
            <td>{!! $donationApplicants->allowed_dantion?'Yes':'No' !!}</td>
                <td>
                    {!! Form::open(['route' => ['donationApplicants.destroy', $donationApplicants->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('donationApplicants.show', [$donationApplicants->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('donationApplicants.edit', [$donationApplicants->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
