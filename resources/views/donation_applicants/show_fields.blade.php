
<div class="row">

<div class="col-sm-6">
<!-- Full Name Field -->
<div class="form-group">
    {!! Form::label('full_name', 'Full Name:') !!}
    <p>{!! $donationApplicants->full_name !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $donationApplicants->email !!}</p>
</div>

<!-- Phone Number Field -->
<div class="form-group">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    <p>{!! $donationApplicants->phone_number !!}</p>
</div>




<!-- Allowed Dantion Field -->
<div class="form-group">
    {!! Form::label('allowed_dantion', 'Allowed Donation:') !!}
    <p>{!! $donationApplicants->allowed_dantion?'Yes':'No' !!}</p>
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $donationApplicants->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $donationApplicants->updated_at !!}</p>
</div>

<hr>

<!-- Upload Your Profile Picture Field -->
<div class="form-group">
    {!! Form::label('upload_your_profile_picture', 'Upload Your Profile Picture:') !!}
    <p><img src="{!! $donationApplicants->upload_your_profile_picture !!}" style="width:90%;hieght:400px"  alt=""></p>
</div>



</div>
<div class="col-sm-6 m-5">

<!-- Q7 Field -->
<div class="form-group">
    {!! Form::label('bio', 'Short Bio?') !!}
    <p>{!! $donationApplicants->bio !!}</p>
</div>
<hr>
<!-- Q1 Field -->
<div class="form-group">
    {!! Form::label('q1', 'Tell us your Background:') !!}
    <p>{!! $donationApplicants->q1 !!}</p>
</div>

<!-- Q2 Field -->
<div class="form-group">
    {!! Form::label('q2', 'Tell us your Financial Status/Family status?') !!}
    <p>{!! $donationApplicants->q2 !!}</p>
</div>

<!-- Q3 Field -->
<div class="form-group">
    {!! Form::label('q3', 'Tell us your Career Background?') !!}
    <p>{!! $donationApplicants->q3 !!}</p>
</div>

<!-- Q4 Field -->
<div class="form-group">
    {!! Form::label('q4', 'Why Should we give you Capital Fund?') !!}
    <p>{!! $donationApplicants->q4 !!}</p>
</div>

<!-- Q5 Field -->
<div class="form-group">
    {!! Form::label('q5', 'How will this fund transform your life?') !!}
    <p>{!! $donationApplicants->q5 !!}</p>
</div>

<!-- Q6 Field -->
<div class="form-group">
    {!! Form::label('q6', 'How Will You Make Profit?') !!}
    <p>{!! $donationApplicants->q6 !!}</p>
</div>




</div>

</div>

<div class="row">
<!-- Attach Business Plan Field -->
<div class="form-group col-sm-12">
    {!! Form::label('attach_business_plan', 'Attach Business Plan:') !!}
    <p> <iframe src="{!! $donationApplicants->attach_business_plan !!}" style="width:100%;" height="700px" frameborder="0"></iframe> </p>
</div>

</div>

