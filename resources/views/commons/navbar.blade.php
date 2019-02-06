<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">GRC</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ route('keywords.create')}}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>キーワードを追加
                    </a></li>
                    
                    <li><a href="{{ route('gdatas.showImportCSV')}}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>CSVファイルインポート
                    </a></li>
                    
                    <li><a href="{{ route('gdatas.showimportKeyword')}}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>キーワードインポート
                    </a></li>

                    
                  
                    
                </ul>
            </div>
        </div>
    </nav>
</header>