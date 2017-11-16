<div class="row">
        <!--$ruleの結果が反映されない↓-->
        @foreach ($rules as $rule)
        <div>
            <p>{!! nl2br(e($rule->testingEnvironment)) !!}</p>
        </div>
         @endforeach
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['route' => 'rule.store', 'method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::label('testingEnvironment', '制作環境(テスト環境)') !!}
                    {!! Form::textarea('testingEnvironment', old($rule->testingEnvironment), ['class' => 'form-control', 'rows' => '5' ]) !!}
                    {!! Form::label('productionEnvironment', '制作環境(本番環境)') !!}
                    {!! Form::textarea('productionEnvironment', old('productionEnvironment'), ['class' => 'form-control','rows' => '5']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('browser', 'ターゲットブラウザ') !!}
                    {!! Form::textarea('browser', old('browser'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('documentType', 'ドキュメントタイプ') !!}
                    {!! Form::textarea('documentType', old('documentType'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('encode', '文字コード') !!}
                    {!! Form::textarea('encode', old('encode'), ['class' => 'form-control', 'rows' => '3']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('inHead', 'head内') !!}
                    {!! Form::textarea('inHead', old('inHead'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('directory', 'ディレクトリ・ファイル構成') !!}
                    {!! Form::textarea('directory', old('directory'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('namingRule', '命名規則') !!}
                    {!! Form::textarea('namingRule', old('namingRules'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('responsive', 'レスポンシブ') !!}
                    {!! Form::textarea('responsive', old('responsive'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('prohibited', '禁止事項') !!}
                    {!! Form::textarea('prohibited', old('prohibited'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('complement', '補足') !!}
                    {!! Form::textarea('complement', old('complement'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>