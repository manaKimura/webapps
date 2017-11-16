
        <div class="container">
           <h1>プロジェクト工程</h1>
           <h2>{{$project->project_name}}</h2>
            <ul class="tabs-menu">
              <li><a href="#tabs-1">カレンダー</a></li>
              <li><a href="#tabs-2">クライアント情報</a></li>
              <li><a href="#tabs-3">プランニング</a></li>
              <li><a href="#tabs-4">サイトマップ</a></li>
              <li><a href="#tabs-5">制作ルール</a></li>
              <li><a href="#tabs-6">ワイヤーフレーム/設計図</a></li>
              <li><a href="#tabs-7">デザインカンプ</a></li>
              <li><a href="#tabs-8">HTML</a></li>
              <li><a href="#tabs-9">CSS</a></li>
              <li><a href="#tabs-10">JS</a></li>
            </ul>

            <section class="tabs-content">
              <section id="tabs-1">
                <p>タブ1の内容が入ります。</p>
              </section>
              <section id="tabs-2">
                <p>@include('process.client')</p>
              </section>
              <section id="tabs-3">
                <p>@include('process.planning')</p>
              </section>
              <section id="tabs-4">
                <p>@include('process.sitemap')</p>
              </section>
              <section id="tabs-5">
                <p>@include('process.ruleCreate')</p>
              </section>
              <section id="tabs-6">
                <p>@include('process.wfBp')</p>
              </section>
              <section id="tabs-7">
                <p>@include('process.designCamp')</p>
              </section>
              <section id="tabs-8">
                <p>@include('process.HTML')</p>
              </section>
              <section id="tabs-9">
                <p>@include('process.CSS')</p>
              </section>
              <section id="tabs-10">
                <p>@include('process.JS')</p>
              </section>
            </section>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="/js/main.js"></script>
  
 
 