<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
    <style>

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

  .main-item {
    /* display: flex; */
    /* justify-content: center; */
  } */
  /* .main-item_second {
    display: flex;
    /* justify-content: center; */
  /* } */
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
  <head>
  <nav class="header-nav">
    <ul class="header-nav_list">
    <li class="header-nav_item">Atte</li>
    <li class="header-nav_item"><a href="/work">ホーム</a></li>
      <li class="header-nav_item"><a href="/list">日付一覧</a></li>
      <li class="header-nav_item"><a href="{{route('logout')}}">ログアウト</a></li>
    </ul>
  </nav>
</head>

  <div class="main-item">
    <!----------勤務開始------------>
    @foreach ($errors->all() as $error)
  <li>{{$error}}</li>
  @endforeach
    <div class="main-item_tag">
      
    <form action="/work_in" method="POST">
        @csrf 
        <button type="submit" class="btn btn-start">勤務開始</button>
        <input type='hidden' id="user_id" name="work_in" value="{{'work_in'}}">
      </form>
      <button type="submit" class="btn btn-start1">勤務終了</button>
      <button type="submit" class="btn btn-start1">休憩開始</button>
      <button type="submit" class="btn btn-start1">休憩終了</button>
    </div>


        <!----------勤務終了------------>
        <!-- <div class="main-item_tag">
      <form action="/work_out" method="POST">
        @csrf
        <button type="submit" class="btn btn-end">勤務終了</button>
        <input type='hidden' id="user_id" name="workout" value="{{'work_out'}}">
        
      </form>
    </div>

    <div class="main-item">
    --------休憩開始---------- -->
    <!-- <div class="main-item_second">
      <form action="/break_in" method="POST">
        @csrf
        <button type="submit" class="btn btn-start">休憩開始</button>
        <input type='hidden' id="job_id" name="break_in" value="{{'break_in'}}">
      </form>
    </div>
     -->
        <!----------休憩終了------------>
        <!-- <div class="main-item_second">
      <form action="/break_out" method="POST">
        @csrf
        <button type="submit" class="btn btn-end">休憩終了</button>
        <input type='hidden' id="job_id" name="break_out" value="{{'break_out'}}">
      </form>
    </div> -->

  </div>


</body>

</html>
