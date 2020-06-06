
<!-- Type Field -->
<div class="form-group">
    {!! Form::label('type', 'Type:') !!}
    <p>{!! $content->type !!}</p>
</div>

<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $content->title !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
@if (isset($content) && $content->image)
        <figure class="figure" style="width:50%">
                    <img src="{{$content->image}}" style="width:100%" class="figure-img img-fluid rounded" alt="{{$content->title}}">
                   
         </figure>
         @endif
</div>

<!-- Content Field -->
<div class="form-group">
    {!! Form::label('content', 'Content:') !!}
    <p><b>{!!html_entity_decode($content->content)!!}</b></p>
</div>

<!-- Published Field -->
<div class="form-group">
    {!! Form::label('published', 'Published:') !!}
    <p>{!! $content->published !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $content->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $content->updated_at !!}</p>
</div>

