<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Enter a Valid Email:') !!}
    {!! Form::email('phone_number', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Candiateid Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('candidate_id', $id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Vote now', ['class' => 'btn btn-success']) !!}
    <a href="/selected-candidates" class="btn btn-default">Cancel</a>
</div>
