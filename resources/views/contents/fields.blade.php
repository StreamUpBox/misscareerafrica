<!-- Type Field -->
<div class="form-group col-sm-6">
<!-- 'Book-MCA' => 'Book-MCA', -->
    {!! Form::label('type', 'Type:') !!}
    {!! Form::select('type', ['Job' => 'Job', 'Mission' => 'Mission', 'Competition' => 'Competition', 'Scope' => 'Scope', 'Become-volunteer' => 'Become-volunteer', 'Become-sponsor' => 'Become-sponsor', 'MCA-Scholarship' => 'MCA-Scholarship', 'MCA-Fund' => 'MCA-Fund',  'Eligibility' => 'Eligibility'], null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-12">

@if (isset($content) && $content->image)
        <figure class="figure" style="width:50%">
                    <img src="{{$content->image}}" style="width:100%" class="figure-img img-fluid rounded" alt="{{$content->title}}">
                   
         </figure>
         @endif
    {!! Form::label('image', 'image:') !!}
    {!! Form::file('image') !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control','id'=>'textarea']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Published Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('published', 'Published:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('published', 0) !!}
        {!! Form::checkbox('published', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>
</div>
