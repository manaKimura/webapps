<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('naming_rule', '命名規則') !!}
                    {!! Form::text('naming_rule', old('naming_rule'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('indent', 'インデント') !!}
                    {!! Form::textarea('indent', old('indent'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('validation', 'バリデーション') !!}
                    {!! Form::select('status',[
                        '完了' => '完了',
                        '未完了' => '未完了',]
                        ) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('pc', 'PC') !!}
                    {!! Form::textarea('pc', old('pc'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('responsive', 'レスポンシブ') !!}
                    {!! Form::textarea('responsive', old('responsive'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('supplement', '補足') !!}
                    {!! Form::textarea('supplement', old('supplement'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>