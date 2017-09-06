<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item nav-title">
              <p>ユーザさん、こんにちは</p>
            </li>
            <li class="nav-item">
               <p>ユーザ名</p>
            </li>
            <li class="nav-item">
               <p>メールアドレス</p>
            </li>
            <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item nav-title">
              <p>案件名</p>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Aプロジェクト</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Bプロジェクト</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">新規追加</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
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
             <a class="nav-link" href="#">あなたのカレンダー</a> 
          </div>
        </nav>