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


<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Session Image:') !!}
    {!! Form::file('image') !!}
</div>


<!-- Numbering Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numbering', 'Numbering:') !!}
    {!! Form::number('numbering', null, ['class' => 'form-control']) !!}
</div>

<hr>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voting_candidate_image', 'Voting System Image:') !!}
    {!! Form::file('voting_candidate_image') !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voting_candidate_title', 'Voting System Title:') !!}
    {!! Form::text('voting_candidate_title', null, ['class' => 'form-control']) !!}
</div>
<hr>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('top_selected_image', 'Top Final Selected Image:') !!}
    {!! Form::file('top_selected_image') !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('top_selected_title', 'Top Final Selected Title:') !!}
    {!! Form::text('top_selected_title', null, ['class' => 'form-control']) !!}
</div>
<hr>
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
    <a href="{!! route('sessions.index') !!}" class="btn btn-default">Cancel</a>
</div>
