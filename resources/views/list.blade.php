<style>
  .header {
    background: #FFFFFF;
  }
  .header-ttl {
    padding-left: 20px;
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
  table {
    width: 90%;
    border-spacing: 0;
    margin: auto;
  }
  table th {
    border-bottom: solid 2px #ddd;
    padding: 10px 0;
  }
  table td {
    border-bottom: solid 2px #ddd;
    text-align: center;
    padding: 10px 0;
  }
</style>

<!--views/layouts/baseベース--->
<!----打刻ページ----->

  <nav class="header-nav">
    <ul class="header-nav_list">

      <li class="header-nav_item"><a href="{{route('logout')}}">ログアウト</a></li>
    </ul>
  </nav>
</header>
<table>
    <tr>
        <th>名前</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
        <th>勤務時間</th>
    </tr>

    <tr>
        <td>{{ $dete->name }}</td>
        <td>{{ $work->work_in}}</td>
        <td>{{ $work->work_out}}</td>
        <td></td>
        <td></td>
    </tr>

</table>




<div class="container">

</div>