<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>work</title>
</head>
<body>
    <div class="content_stampbtn" id="btn_start">
      <form action="/work/in" method="POST">
        {{--勤怠開始--}}
        @if(Session::has("in"))
          @csrf
            <button type="submit" class="btn_disabled" id="btn_start" disabled>
              勤怠開始
            </button>
        @else
        @csrf
            <button type="submit" class="btn" id="btn_start">
              勤怠開始
            </button>
        @endif
        </form>
        <form action="/work/out" method="POST">
        {{--勤怠終了--}}
        @if(Session::has("out"))
          @csrf
            <button type="submit" class="btn_disabled" id="btn_start" disabled>
              勤怠終了
            </button>
          @else
            @csrf
            <button type="submit" class="btn" id="btn_start">
              勤怠終了
            </button>
          @endif
        </form>
      </div>
    <div class="content_stampbtn" id="btn_start">
      <form action="/brake/in" method="POST">
      {{--休憩開始--}}
        @if(Session("brake_in"))
          @csrf
            <button type="submit" class="btn_disabled" id="btn_start" disabled>
              休憩開始
            </button>
          @else
          @csrf
            <button type="submit" class="btn" id="btn_start">
              休憩開始
            </button>
          @endif
        </form>
        <form action="/brake/out" method="POST">
          {{--休憩終了--}}
          @if(Session("brake.out"))
          @csrf
            <button type="submit" class="btn_disabled" id="btn_start" disabled>
              休憩終了
            </button>
          @else
          @csrf
          <button type="submit" class="btn" id="btn_start">
              休憩終了
          </button>
          @endif
        </form>
      </div>
  </div>


</body>

</html>
