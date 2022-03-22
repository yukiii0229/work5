<!DOCTYPE html>
<html lang="en">
    <style>
        .header {
    background: #FFFFFF;
  }
  .header-nav {
    display: block;
  }
  .header-nav_list {
    display: flex;
    justify-content: flex-end;
    list-style: none;
    font-size:20px;
  }
  .header-nav_item {
    padding-right: 15px;
  }
  .header-nav_list>li:first-of-type{
    margin-right: auto;
  }

    </style>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="header-nav">
    <ul class="header-nav_list">
    <li class="header-nav_item">Atte</li>
    <li class="header-nav_item"><a href="/work">ホーム</a></li>
      <li class="header-nav_item"><a href="/list">日付一覧</a></li>
      <li class="header-nav_item"><a href="{{route('logout')}}">ログアウト</a></li>
    </ul>
  </nav>
    <h1 class = "end">お疲れ様です</h1>
</body>
</html>