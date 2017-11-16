<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('readFrom', '読み込み場所') !!}
                    {!! Form::textarea('readFrom', old('readFrom'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('function', '機能について') !!}
                    {!! Form::textarea('function', old('function'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('namingRule', '命名規則') !!}
                    {!! Form::textarea('namingRule', old('namingRule'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>