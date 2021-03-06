<div class="row">
        <div class="col-md-6 col-md-offset-3">
            
            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {{-- @if ($user->avatar_filename)
                        <p>
                            <img src="{{ asset('storage/avatar/' . $user->avatar_filename) }}" alt="avatar" />
                        </p>
                    @endif --}}
                    <h2>設計図</h2>
                    {!! Form::label('file', '画像アップロード', ['class' => 'control-label']) !!}
                    {!! Form::file('file') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('function', '補足') !!}
                    {!! Form::textarea('function', old('function'), ['class' => 'form-control', 'rows' => '5']) !!}
                </div>
                
                
                {!! Form::submit('追加', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>