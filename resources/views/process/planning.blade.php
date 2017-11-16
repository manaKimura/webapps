<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('siteName', 'サイト名') !!}
                    {!! Form::text('siteName', old('siteName'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('target', 'ターゲット') !!} <small>(誰に見てもらうサイトなのか)</small>
                    {!! Form::textarea('target', old('target'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('goal', 'ゴール') !!} <small>(何の為のサイトなのか)</small>
                    {!! Form::textarea('goal', old('goal'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('seo', 'SEOキーワード') !!}
                    {!! Form::textarea('seo', old('seo'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('function', '機能') !!}
                    {!! Form::textarea('function', old('function'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('supplement', '補足') !!}
                    {!! Form::textarea('supplement', old('supplement'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>