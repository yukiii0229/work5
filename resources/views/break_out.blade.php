<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
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
  .main-item_tag {
    padding-left: 80px;
  }
  .main-item_second {
    padding-left: 80px;
  }
  .header-nav_list>li:first-of-type{
    margin-right: auto;
  }
  .btn{
  width:40%;
  height:200px;
  display: flex;
  margin:50px;
  float: left;
  display: block;
  font-weight:bold;
  font-size:20px;
}
.btn-start1{
  opacity: 0.5;
}
    </style>

<body>
<nav class="header-nav">
    <ul class="header-nav_list">
    <li class="header-nav_item">Atte</li>
    <li class="header-nav_item"><a href="{{route('work_in')}}">ホーム</a></li>
      <li class="header-nav_item"><a href="{{route('work_in')}}">日付一覧</a></li>
      <li class="header-nav_item"><a href="{{route('work_in')}}">ログアウト</a></li>
    </ul>
  </nav>
  <div class="main-item">
  <button type="submit" class="btn btn-start1">勤務開始</button>
  <button type="submit" class="btn btn-start1">勤務終了</button>
  <button type="submit" class="btn btn-start1">休憩開始</button>
        <!----------休憩終了------------>
         <div class="main-item_second">
      <form action="/break_out" method="POST">
        @csrf
        <button type="submit" class="btn btn-end">休憩終了</button>
        <input type='hidden' id="job_id" name="break_out" value="{{'break_out'}}">
      </form>
    </div> 
  </div>



</body>

</html>
