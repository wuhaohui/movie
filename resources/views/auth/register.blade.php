@extends("layouts.main")

@section("content")
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Member</a></li>
            <li class="active">Register</li>
        </ol>

        <div class="row">
            @include("layouts.errors")
            <div class="col-md-offset-3 col-md-5">
                {!! Form::open(['url'=>'register','class'=>'form-horizontal']) !!}
                <div class="form-group">
                    {!! Form::input('username','name',null,['class'=>'form-control','placeholder'=>'username']) !!}
                </div>
                <div class="form-group">
                    {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::input('password','password',null,['class'=>'form-control','placeholder'=>'password']) !!}
                </div>
                <div class="form-group">
                    {!! Form::input('password','password_confirmation','',['class'=>'form-control','placeholder'=>'password_confirmation']) !!}
                </div>
                <div class="form-group">
                    {!! Form::button('submit',['class'=>'btn btn-primary btn-lg btn-block','placeholder'=>'submit','type'=>'submit']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection