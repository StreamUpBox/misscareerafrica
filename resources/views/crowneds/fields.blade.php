<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group col-sm-6">
    {!! Form::label('image', 'image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
</div>

<!-- Award Field -->
<div class="form-group col-sm-6">
    {!! Form::label('award', 'Award:') !!}
    {!! Form::text('award', null, ['class' => 'form-control']) !!}
</div>

<!-- Session Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('session', '0', ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Is Selected Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Is published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('crowneds.index') !!}" class="btn btn-default">Cancel</a>
</div>
