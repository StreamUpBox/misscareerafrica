<!-- Id Field -->
<div class="form-group">
<img src="{!! $crowned->image !!}" class="ml-4 img-fluid" style="">
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <b>{!! $crowned->title !!}</b>
</div>

<!-- Bio Field -->
<div class="form-group">
    {!! Form::label('bio', 'Bio:') !!}
    <b>{!! $crowned->bio !!}</b>
</div>



<!-- Position Field -->
<div class="form-group">
    {!! Form::label('position', 'Position:') !!}
    <b>{!! $crowned->position !!}</b>
</div>

<!-- Award Field -->
<div class="form-group">
    {!! Form::label('award', 'Award:') !!}
    <b>{!! $crowned->award !!}</b>
</div>

<!-- Session Field -->
<!-- <div class="form-group"> 
    {!! Form::label('session', 'Session:') !!}
    <b>{!! $crowned->session !!}</b>
</div> -->

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Published:') !!}
    <b>{!! $crowned->published !!}</b>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <b>{!! $crowned->created_at !!}</b>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <b>{!! $crowned->updated_at !!}</b>
</div>

