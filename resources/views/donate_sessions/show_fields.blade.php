<!-- Id Field -->


<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $donateSessions->title !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p><img src="{!! $donateSessions->image !!}" style="width:300px;height:300px" alt=""></p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $donateSessions->description !!}</p>
</div>

<!-- Can Open Donation System Field -->
<div class="form-group">
    {!! Form::label('can_open_donation_system', 'Can Open Donation System:') !!}
    <p>{!! $donateSessions->can_open_donation_system?'Yes':'No' !!}</p>
</div>

<!-- Can Start Application System Field -->
<div class="form-group">
    {!! Form::label('can_start_application_system', 'Can Start Application System:') !!}
    <p>{!! $donateSessions->can_start_application_system?'Yes':'No' !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $donateSessions->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $donateSessions->updated_at !!}</p>
</div>

