<nav class="col-lg-2 col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item nav-title">
              <?php $user = Auth::user(); ?>
              <p>{{ $user->name }}さん、こんにちは</p>
            </li>
            <li class="nav-item">
               <p>ユーザ名: {{ $user->name }}</p>
            </li>
            <li class="nav-item">
               <p>メールアドレス: {{ $user->email }}</p>
            </li>
            <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
          </ul>

          <ul class="nav nav-pills flex-column">
              <li class="nav-item nav-title">
                <p>案件名</p>
              </li>
              @foreach ($projects as $project)
              <li class="nav-item">
                <a class="nav-link" href="#">{{ $project->project_name }}</a>
              </li>
              @endforeach
              <li class="nav-item">
                {!! link_to_route('projects.create', '新規追加') !!}
              </li>
              <li class="nav-item">
                 {!! link_to_route('projects.allProjects', 'プロジェクト一覧から登録', null, ['class' => 'btn btn-lg btn-primary']) !!}
              </li>
            {!! $projects->render() !!}
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item nav-title">
              <p>メールテンプレ</p>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">To 社内</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">To クライアント</a>
            </li>
          </ul>
          <div class="nav nav-pills flex-column">
             <a class="nav-link nav-title" href="#">あなたのカレンダー</a> 
          </div>
        </nav>