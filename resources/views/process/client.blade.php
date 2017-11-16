<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('client_name', 'クライアント名') !!}
                    {!! Form::text('client_name', old('client_name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('detail', 'クライアント詳細') !!}
                    {!! Form::textarea('detail', old('detail'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('request', '要望') !!}
                    {!! Form::textarea('request', old('request'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>