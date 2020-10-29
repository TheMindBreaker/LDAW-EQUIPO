<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userName', 'Username:') !!}
    {!! Form::text('userName', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Useremail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userEmail', 'Useremail:') !!}
    {!! Form::text('userEmail', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Userpassword Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userPassword', 'Userpassword:') !!}
    {!! Form::text('userPassword', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Userrol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('userRol', 'Userrol:') !!}
    {!! Form::number('userRol', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
</div>
