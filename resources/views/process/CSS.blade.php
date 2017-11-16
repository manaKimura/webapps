<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('resetCss', 'リセットCSS') !!}
                    {!! Form::textarea('resetCss', old('resetCss'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('font', 'フォント') !!}
                    {!! Form::textarea('font', old('font'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('idClass', 'id/class') !!}
                    {!! Form::textarea('idClass', old('idClass'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('namingRule', '共通class名/命名規則') !!}
                    {!! Form::textarea('namingRule', old('namingRule'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('indent', 'インデント') !!}
                    {!! Form::textarea('indent', old('indent'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('propertyOrder', 'プロパティの記述順') !!}
                    {!! Form::textarea('propertyOrder', old('propertyyOrder'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('architecture', '設計パターン') !!}
                    {!! Form::text('architecture', old('architecture'), ['class' => 'form-control']) !!}
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