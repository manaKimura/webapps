@extends('layouts.app')

@section('content')
   <h1>プロジェクト一覧</h1>

                 @if (count($projects) > 0)
                    <ul>
                        @foreach ($projects as $project)
                            {!! Form::open(['url' => '/project_login/' . $project->id, 'method' => 'post']) !!}
                                
                                <li>{!! Form::checkbox('project_name', $project->project_name) !!}{!! $project->project_name !!}</li>
                                {!! Form::submit('追加') !!}
        
                            {!! Form::close() !!}
                            @endforeach
                    </ul>
                @endif
@endsection
 
 