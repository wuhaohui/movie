@extends("layouts.main")
<style>
    .u-mt5{margin-top:30px}
</style>
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Member</a></li>
            <li class="active">Login</li>
        </ol>
        @include('layouts.errors')
        <div class="row">
            <div class="col-md-offset-3 col-md-5">
                {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
                <div class="input-group u-mt5">
                    <span class="input-group-addon" id="email">username</span>
                    {!! Form::input('username','email',null,['class'=>'form-control','placeholder'=>'username']) !!}
                </div>

                <div class="input-group u-mt5">
                    <span class="input-group-addon" id="password">password</span>
                   {!! Form::password('password',['class'=>'form-control','placeholder'=>'password'] ) !!}
                </div>
                {!! Form::input('submit','submit','submit',['class'=>'btn btn-primary btn-lg btn-block u-mt5']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection