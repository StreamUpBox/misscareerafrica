<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::file('image') !!}
    <br>
    <div class="form-group">
    <?php if(isset($donateSessions)){?>
    <p><img src="{!! $donateSessions->image !!}" style="width:200px;height:100px" alt=""></p>
    <?php } ?>
</div>
</div>
<div class="clearfix"></div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Can Open Donation System Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('can_open_donation_system', 'Can Open Donation System:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('can_open_donation_system', 0) !!}
        {!! Form::checkbox('can_open_donation_system', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- 'bootstrap / Toggle Switch Can Start Application System Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('can_start_application_system', 'Can Start Application System:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('can_start_application_system', 0) !!}
        {!! Form::checkbox('can_start_application_system', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('donateSessions.index') !!}" class="btn btn-default">Cancel</a>
</div>
