<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Session Field -->
<div class="form-group col-sm-6">
    {!! Form::label('session', 'Session:') !!}
    {!! Form::text('session', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country', 'Country:') !!}
    {!! Form::text('country', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::text('date', null, ['class' => 'form-control','id'=>'date']) !!}
</div>

@section('scripts')

@endsection

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
</div>
<div class="clearfix"></div>

<!-- Numbering Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numbering', 'Numbering:') !!}
    {!! Form::number('numbering', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Is Current Applying Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('is_current_applying', 'Is Current Applying:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_current_applying', 0) !!}
        {!! Form::checkbox('is_current_applying', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>

<div class="form-group col-sm-6">
    {!! Form::label('is_voting_open', 'Open Voting System:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_voting_open', 0) !!}
        {!! Form::checkbox('is_voting_open', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>
<div class="form-group col-sm-6">
    {!! Form::label('view_past_candidate', 'Show Past Candidate:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('view_past_candidate', 0) !!}
        {!! Form::checkbox('view_past_candidate', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sessions.index') !!}" class="btn btn-default">Cancel</a>
</div>
