<!-- Full Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bio', 'Short Bio:') !!}
    {!! Form::textarea('bio', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q1 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q1', 'Tell us your Background:') !!}
    {!! Form::textarea('q1', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q2 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q2', 'Tell us your Financial Status/Family status?') !!}
    {!! Form::textarea('q2', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q3 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q3', 'Tell us your Career Background?') !!}
    {!! Form::textarea('q3', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q4 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q4', 'How will this fund transform your life?') !!}
    {!! Form::textarea('q4', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q5 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q5', 'How Will You Make Profit?:') !!}
    {!! Form::textarea('q5', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q6 Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('q6', 'What is your business Competitive Advantage?') !!}
    {!! Form::textarea('q6', null, ['class' => 'form-control','required'=>'required']) !!}
</div>

<!-- Q7 Field -->
    <!-- {!! Form::label('q7', 'Q7:') !!} -->
    {!! Form::hidden('q7', '---', ['class' => 'form-control']) !!}




<!-- Attach Business Plan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('attach_business_plan', 'Attach Business Plan:(PDF)') !!}
    <input name="attach_business_plan"  accept="application/pdf" type="file"
                                    value="{{ old('attach_business_plan') }}"
                                    class="{{ $errors->has('attach_business_plan')?'is-invalid':'' }}"
                                    placeholder="Attach Business Plan*">
</div>
<div class="clearfix"></div>

<!-- Upload Your Profile Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('upload_your_profile_picture', 'Upload Your Profile Picture:') !!}
    <input name="upload_your_profile_picture" accept="image/*" type="file"
                                    value="{{ old('upload_your_profile_picture') }}"
                                    class="{{ $errors->has('upload_your_profile_picture')?'is-invalid':'' }}"
                                    placeholder="Upload your profile picture*">
</div>
<div class="clearfix"></div>
@if(Auth::check())
<!-- Allowed Dantion Field -->
<div class="form-group col-sm-12 col-lg-12">
  
    <div class="form-group col-sm-6">
    {!! Form::label('allowed_dantion', 'Allowed Danation:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('allowed_dantion', 0) !!}
        {!! Form::checkbox('allowed_dantion', 1, null,  ['data-toggle' => 'toggle']) !!}
    </label>
</div>
</div>
@endif
<!-- Donation Session Id Field -->
<div class="form-group col-sm-6">
    {!! Form::hidden('donation_session_id', $session_id, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
<hr>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    
    @if(Auth::check())
    <a href="{!! route('donationApplicants.index') !!}" class="btn btn-default">Cancel</a>
    @endif
</div>
