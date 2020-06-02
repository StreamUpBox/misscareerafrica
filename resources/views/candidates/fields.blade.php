<!-- Fname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fname', 'Fname:') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('Profile pic', 'profile:') !!}
    {!! Form::file('profile') !!}
</div>
<!-- Lname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lname', 'Lname:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dob', 'Dob:') !!}
    {!! Form::date('dob', null, ['class' => 'form-control','id'=>'dob']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#dob').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Phone Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_code', 'Phone Code:') !!}
    {!! Form::text('phone_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Street Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street', 'Street:') !!}
    {!! Form::text('street', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city', 'City:') !!}
    {!! Form::text('city', null, ['class' => 'form-control']) !!}
</div>

<!-- Province Field -->
<div class="form-group col-sm-6">
    {!! Form::label('province', 'Province:') !!}
    {!! Form::text('province', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Level Education Field -->
<div class="form-group col-sm-6">
    {!! Form::label('level_education', 'Level Education:') !!}
    {!! Form::text('level_education', null, ['class' => 'form-control']) !!}
</div>

<!-- Former School Attended Field -->
<div class="form-group col-sm-6">
    {!! Form::label('former_school_attended', 'Former School Attended:') !!}
    {!! Form::text('former_school_attended', null, ['class' => 'form-control']) !!}
</div>

<!-- Education Background Field -->
<div class="form-group col-sm-6">
    {!! Form::label('education_background', 'Education Background:') !!}
    {!! Form::text('education_background', null, ['class' => 'form-control']) !!}
</div>

<!-- Current Occupation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current_occupation', 'Current Occupation:') !!}
    {!! Form::text('current_occupation', null, ['class' => 'form-control']) !!}
</div>

<!-- Q1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q1', 'Q1:') !!}
    {!! Form::textarea('q1', null, ['class' => 'form-control']) !!}
</div>

<!-- Q2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q2', 'Q2:') !!}
    {!! Form::textarea('q2', null, ['class' => 'form-control']) !!}
</div>

<!-- Q3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q3', 'Q3:') !!}
    {!! Form::textarea('q3', null, ['class' => 'form-control']) !!}
</div>

<!-- Q4 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q4', 'Q4:') !!}
    {!! Form::textarea('q4', null, ['class' => 'form-control']) !!}
</div>

<!-- Q5 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q5', 'Q5:') !!}
    {!! Form::textarea('q5', null, ['class' => 'form-control']) !!}
</div>

<!-- Q6 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q6', 'Q6:') !!}
    {!! Form::textarea('q6', null, ['class' => 'form-control']) !!}
</div>

<!-- Q7 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q7', 'Q7:') !!}
    {!! Form::textarea('q7', null, ['class' => 'form-control']) !!}
</div>

<!-- Session Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session_id', 'Session Id:') !!}
    {!! Form::text('session_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Votes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('votes', 'Votes:') !!}
    {!! Form::text('votes', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Is Selected Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('is_selected', 'Is Selected:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_selected', 0) !!}
        {!! Form::checkbox('is_selected', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('final_selected', 'Final Selected?') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('final_selected', 0) !!}
        {!! Form::checkbox('final_selected', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('candidates.index') !!}" class="btn btn-default">Cancel</a>
</div>
