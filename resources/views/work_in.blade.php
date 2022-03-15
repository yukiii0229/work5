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
  }
  .header-nav_item {
    padding-right: 15px;
  }
  .main {
    background: #EEEEEE;
    height: 500px;
    font-size: 20px;
  }
  .main-item {
    display: flex;
    justify-content: center;
  }
  .main-item_second {
    display: flex;
    justify-content: center;
  }
  .main-item_tag {
    padding-left: 80px;
  }
  .main-item_second {
    padding-left: 80px;
  }


    </style>
</head>
<body>
  <div class="main-item">
        <!-- --------勤務終了---------- -->
        <div class="main-item_tag">
      <form action="/work_out" method="POST">
        @csrf
        <button type="submit" class="btn btn-end">勤務終了</button>
        <input type='hidden' id="user_id" name="workout" value="{{'work_out'}}">
        
      </form>
    </div>

       <div class="main-item_second">
      <form action="/break_in" method="POST">
        @csrf
        <button type="submit" class="btn btn-start">休憩開始</button>
        <input type='hidden' id="brake_id" name="break_in" value="{{'break_in'}}">
      </form>
    </div>
  </div>
