@extends('layouts.app')

@section('content')

<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">新規会員登録</div>
        <div class="panel-body">
            {!! Form::open(['route' => 'signup.post']) !!}
            
            <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'パスワード') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>        
            <div class="form-group">        
                {!! Form::label('password_confirmation', 'パスワード確認') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
            </div>        
            <div class="btn-toolbar">
                <div class="btn-group">
                    {!! Form::submit('登録', ['class' => 'btn btn-success']) !!}
                    {!! Form::submit('クリア',['class' => 'btn btn-warning']) !!}
                </div>
            </div>        
                {!! Form::close() !!}
        </div>
    </div>
</div>

<a href="{{ route('login.get') }}">トップに戻る</a>

@endsection