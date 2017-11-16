<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>プロジェクト新規作成画面</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/nav.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            @include('commons.error_messages')
            
            <h1>プロジェクト新規追加</h1>
            {!! Form::open(['route' => 'projects.store', 'method' => 'post']) !!}

                {!! Form::label('project_name', 'プロジェクト名:') !!}
                {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
                
                {!! Form::label('password', 'パスワード:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
               
        
                {!! Form::submit('追加') !!}
        
            {!! Form::close() !!}
        </div>
    </body>
</html>