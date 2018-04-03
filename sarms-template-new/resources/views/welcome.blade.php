<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
    <div class="well well-sm" style="font-size: 1.25em"><b>ハードウェア台帳一覧</b></div>
    <form style="width:100%" action="/" method="post" class="form-inline well">
      <table>
        @for ($i = 0 ; $i < 3 ; $i++)
        <tr>
          <td>
            <label>
              <select class="form-control" id="sel1">
                <option>ハードウェア管理番号 </option>
                <option>所属</option>
                <option>IPアドレス</option>
                <option>廃棄日</option>
              </select>
            </label>
          </td>
          <td style="width:100%">
            <label style="width:100%">
              <input  style="width:100%" type="text" class="form-control">
            </label>
          </td>
          <td>
            <label>
              <select class="form-control" id="sel1">
                <option>を含む</option>
                <option>と等しい</option>
                <option>以上（以降）</option>
                <option>以下（以前）</option>
                <option>を含まない</option>
              </select>
            </label>
          </td>
          <td>
            <label>
              <select class="form-control" id="sel1">
                <option>かつ</option>
                <option>または</option>
              </select>
            </label>
          </td>
          <td>
            <label>
              <input type="button" value="-" class="btn btn-default">
            </label>
          </td>
          <td>
            <label>
              <input type="button" value="+" class="btn btn-default">
            </label>
          </td>
        </tr>
        @endfor
        <tr>
          <td colspan="6">
            <button class="btn btn-default" type="button" name="button"><b>検索</b></button>
          </td>
        </tr>
      </table>
    </form>
    <hr>
    <div>
      <label>
        <input type="button" class="btn btn-primary" value="Register">
        <input type="button" class="btn btn-warning" value="CSV Export">
        <input type="button" class="btn btn-success" value="History CSV Export">
        <input type="button" class="btn btn-danger" value="Delete CSV info">
      </label>
    </div>
    <hr>
    <div class="panel-group" id="accordion">
      <table class="table table-bordered" style="text-align:center">
        <thead>
          <tr style="background-color:lightgray;color:white">
            <td colspan="4"></td>
            <td><a><b>ハードウェア管理番号</b></a></td>
            <td><a><b>所属</b></a></td>
            <td><a><b>IPアドレス</b></a></td>
            <td><a><b>廃棄日</b></a></td>
          </tr>
        </thead>
        <tbody>
        @for ($i = 1; $i < 16; $i++)
        <tr>
          <td>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}"><img src="{{ asset('img/plus.png') }}" width="25" height="25"></a>
          </td>
          <td><a href="#"><img src="{{ asset('img/edit.png') }}" width="25" height="25"></a></td>
          <td><a href="#"><img src="{{ asset('img/delete.png') }}" width="25" height="25"></a></td>
          <td><a href="#"><img src="{{ asset('img/inv.png') }}" width="25" height="25"></a></td>
          <td><a href="detail?code=HW0000{{$i}}">17001{{$i}}</a></td>
          <td>福岡県/総務部/防災危機管理局消防防災指導課</td>
          <td>10.134.{{$i}}.{{$i+1}}</td>
          @if($i < 10)
          <td>2018/03/0{{$i}}</td>
          @elseif($i < 30)
          <td>2018/03/{{$i}}</td>
          @elseif($i%30 < 10)
          <td>2018/03/0{{$i%30}}</td>
          @else
          <td>2018/03/{{$i%30}}</td>
          @endif
        </tr>
        <tr id="collapse{{ $i }}" class="panel-collapse collapse">
          <td colspan="8" class="well">
            <ul style="list-style-type:square;text-align:left">
              <li>
                <b>ハードウェア管理番号</b>
                <br><p>17001{{$i}}<p>
              </li>
              <li>
                <b>所属</b>
                <br><p>福岡県/総務部/防災危機管理局消防防災指導課</p>
              </li>
              <li>
                <b>室等</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>IPアドレス（有線）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>IPアドレス（無線）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>IPアドレス（収）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>利用者機器管理者</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>設置地区</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>庁舎名</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>階</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>棟</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>調達形態区分</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>購入／リース</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>機器種別</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>接続ネットワーク名</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>端末種別</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>システム名称</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>コンピューター名</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>コンピューター名（収）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>ドメイン名(収)</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>デフォルトゲートウェイアドレス（有線）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>デフォルトゲートウェイアドレス（無線）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>ソフトウェア台帳インストール数（ソ）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>PCベンダー（収）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>PC機種（収）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>使用者によるソフトウェア追加導入削除（シ）</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>調達情報</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>ハードウェア備考</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>共有フォルダ等バックアップ</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>状態</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>貸出日</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>返却予定日</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>調達日</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>廃棄日</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>廃棄方法</b>
                <br><p>テスト</p>
              </li>
              <li>
                <b>廃棄作業者名</b>
                <br><p>テスト</p>
              </li>
            </ul>
          </td>
        </tr>
        @endfor
      </tbody>
      </table>
    </div>
    <hr>
    <div>
      <ul class="pagination">
        <li class="active"><a href="#">First</a></li>
        @for ($i = 1 ; $i <= 20 ; $i++)
        <li><a href="#?page={{$i}}">{{$i}}</a></li>
        @endfor
        <li><a href="#">Last</a></li>
      </ul>
    </div>
    <hr>
  </div>
  <div class="col-lg-1"></div>
  <div class="col-lg-12 well"></div>
</body>
</html>
