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
    font-size:20px;
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
  .header-nav_list>li:first-of-type{
    margin-right: auto;
}
svg.w-5.h-5 {  /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
    }
</style>

<!--views/layouts/baseベース--->
<!----打刻ページ----->

  <nav class="header-nav">
    <ul class="header-nav_list">
    <li class="header-nav_item">Atte</li>
    <li class="header-nav_item"><a href="/work">ホーム</a></li>
      <li class="header-nav_item"><a href="/list">日付一覧</a></li>
      <li class="header-nav_item"><a href="{{route('logout')}}">ログアウト</a></li>
    </ul>
  </nav>
</header>
<table>
    <tr>
        <th>名前</th>
        <th>日付</th>
        <th>勤務開始</th>
        <th>勤務終了</th>
        <th>休憩時間</th>
       <th>勤務時間</th>
    </tr>
    @foreach ($items as $item)
    @foreach ($users as $user)

    <tr>
        <td>{{ $user->name}}</td>
        <td>{{ $item->date}}</td>
        <td>{{ $item->work_in}}</td>
        <td>{{ $item->work_out}}</td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
    @endforeach
</table>
{{ $items->links() }}




<div class="container">

</div>