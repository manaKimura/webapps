@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>{{ $project->project_name }}のログイン</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['route' => 'projects_login.project_login_store', 'method' => 'post']) !!}
                <div class="form-group">
                     {!! Form::hidden('id', $project->id) !!}
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                {!! Form::submit('ログインする', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection