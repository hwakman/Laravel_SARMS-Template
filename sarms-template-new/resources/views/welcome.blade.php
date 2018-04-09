<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
    <div class="well well-sm" style="font-size: 1.25em"><b>ハードウェア台帳一覧</b></div>
    <div>
      <div class="panel panel-default">
        <div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#collapse_search" style="font-size: 1.25em"><b>サーチ</b></div>
        <div class="panel-body panel-collapse collapse in"  id="collapse_search">
          <form style="width:100%" action="/" method="post" class="form-inline">
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
        </div>
      </div>
    </div>
    <hr>
    <div>
      <label>
        <a href="hardware-form"><input type="button" class="btn btn-primary" value="新規申請"></a>
      </label>
      <label class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" data-toggle="dropdown">CSV出力
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="#">CSV出力</a></li>
          <li><a href="#">履歴CSV出力</a></li>
          <li><a href="#">削除情報CSV出力</a></li>
        </ul>
      </label>
    </div>
    <hr>
    <div class="panel-group" id="accordion">
      <select class="form-control" style="width:13%" id="sel1">
        <option>1-15 を表示</option>
        <option>1-20 を表示</option>
        <option>1-25 を表示</option>
        <option>1-50 を表示</option>
        <option>1-100 を表示</option>
      </select>
      <table class="table table-sm" style="text-align:center">
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
        @for ($i = 1; $i < 26; $i++)
        <tr>
          <td>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}"><img src="{{ asset('img/plus.png') }}" width="20" height="20"></a>
          </td>
          <td><a href="#"><img src="{{ asset('img/edit.png') }}" width="20" height="20"></a></td>
          <td><a href="#"><img src="{{ asset('img/delete.png') }}" width="20" height="20"></a></td>
          <td><a href="#"><img src="{{ asset('img/inv.png') }}" width="20" height="20"></a></td>
          <td><a href="#">17001{{$i}}</a></td>
          <td>福岡県/保管PC</td>
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
                <a href="#" data-toggle="modal" data-target="#myModal">More</a>
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
  @include('sidenav')
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button style="color:white" type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b>ハードウェア台帳モーダル</b></h4>
        </div>
        <div class="modal-body">
          <ul style="list-style-type:square;text-align:left">
            <li>
              <b>ハードウェア管理番号</b>
              <br><p>170011<p>
            </li>
            <li>
              <b>所属</b>
              <br><p>福岡県/総務部/防災危機管理局消防防災指導課</p>
            </li>
            <li>
              <b>IPアドレス（有線）</b>
              <br><p>10.134.1.2</p>
            </li>
            <li>
              <b>調達形態区分</b>
              <br><p>所属調達</p>
            </li>
            <li>
              <b>接続ネットワーク名</b>
              <br><p>共用ネットワーク</p>
            </li>
            <li>
              <b>廃棄日</b>
              <br><p>2018/03/01</p>
            </li>
          </ul>
        </div>
    </div>
  </div>
</div>
</body>
</html>
