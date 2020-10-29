<!-- Username Field -->
<div class="form-group">
    {!! Form::label('userName', 'Username:') !!}
    <p>{{ $users->userName }}</p>
</div>

<!-- Useremail Field -->
<div class="form-group">
    {!! Form::label('userEmail', 'Useremail:') !!}
    <p>{{ $users->userEmail }}</p>
</div>

<!-- Userpassword Field -->
<div class="form-group">
    {!! Form::label('userPassword', 'Userpassword:') !!}
    <p>{{ $users->userPassword }}</p>
</div>

<!-- Userrol Field -->
<div class="form-group">
    {!! Form::label('userRol', 'Userrol:') !!}
    <p>{{ $users->userRol }}</p>
</div>

