<!-- Phone Number Field -->
<div class="form-group ">
    <table style="width:100%" class="table">

    <tr>

    <td>
    {!! Form::label('email', 'Enter a Valid Email:') !!}
   
    </td>
    <td> {!! Form::email('email', null, ['class' => 'form-control']) !!}</td>
    <td>
    {!! Form::submit('Vote now', ['class' => 'btn btn-info btn-block']) !!}
    </td>
    </tr>
    </table>
  
<hr>
   
</div>

<!-- Candiateid Field -->
<div class="form-group">
    {!! Form::hidden('candidate_id', $id, ['class' => 'form-control']) !!}
</div>

