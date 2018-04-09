<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-1"></div>
  <!-- main content -->
  <div class="container col-lg-10">
    <div class="well well-sm head_form"><b>ハードウェア台帳保守</b></div>
    <div class="well">
      <form id="myForm" class="form-horizontal" style="padding:25px" method="post" action="approve">
        <div class="form-group">
          <div class="col-xs-12" id="hard_kanrino_field">
            <label class="control-label">ハードウェア管理番号 : <span style="color:red">*</span></label>
            <input id="hard_kanrino" name="hard_kanrino" class="form-control" type="text" placeholder="ハードウェア管理番号" oninput="input_hard()" required>
            <span id="help_hard" class="help-block" style="color:red"></span>
          </div>
        </div>
        <!-- end row 1 -->
        <div class="form-group">
          <div class="col-xs-4" id="sinsei_field">
            <label class="control-label">申請者 : <span style="color:red">*</span></label>
            <input id="sinsei" name="sinsei" class="form-control" type="text" placeholder="申請者" oninput="input_sinsei()">
            <span id="help_sinsei" class="help-block" style="color:red"></span>
          </div>
          <div class="col-xs-4" id="email_field">
            <label class="control-label">申請者メール : <span style="color:red">*</span></label>
            <input id="email" name="email" class="form-control" type="text" placeholder="メール" oninput="input_email()">
            <span id="help_email" class="help-block" style="color:red"></span>
          </div>
          <div class="col-xs-4">
            <label class="control-label">文書番号 :</label>
            <input class="form-control" type="text" placeholder="文書番号">
          </div>
        </div>
        <!-- end row 2 -->
        <div class="form-group row">
          <div class="col-xs-12">
            <label class="control-label">所属 : <span style="color:red">*</span></label>
            <select class="form-control">
              <option>福岡県</option>
              <option>福岡県/秘書室</option>
              <option>福岡県/秘書室/秘書室</option>
              <option>福岡県/総務部</option>
            </select>
          </div>
        </div>
        <!-- end row 3 -->
        <div class="form-group row">
          <div class="col-xs-12">
            <label class="control-label">機器種別 : <span style="color:red">*</span></label>
            <select class="form-control">
              <option>パソコン</option>
              <option>サーバ</option>
              <option>プリンター</option>
              <option selected="selected">利用者RT</option>
            </select>
          </div>
        </div>
        <!-- end row 4 -->
        <div class="form-group row">
          <div class="col-xs-6">
            <label class="control-label">調達形態区分 : <span style="color:red">*</span></label>
            <select class="form-control">
              <option>情報政策課一括調達</option>
              <option selected="selected">所属調達</option>
              <option>業者持込み</option>
            </select>
          </div>
          <div class="col-xs-6">
            <label class="control-label">購入／リース : <span style="color:red">*</span></label>
            <select class="form-control">
              <option>購入</option>
              <option>リース</option>
              <option>その他</option>
            </select>
          </div>
        </div>
        <!-- end row 5 -->
        <div class="form-group row">
          <div class="col-xs-6">
            <label class="control-label">室等 : </label>
            <div class="input-group" style="width:100%">
              <input class="form-control" type="text" placeholder="室等" required>
              <span class="input-group-addon" id="data_1">説明</span>
            </div>
            <div id="p1" class="below_text">
              <p>設定した所属と執務室が異なる場合に記載してください。</p>
              <p>　（例）　○○室</p>
              <p>　　　　　◯◯分庁舎</p>
              <p>　　　　　◯◯分室</p>
              <p>　　　　　◯◯普及指導センター　等</p>
            </div>
          </div>
          <div class="col-xs-6">
            <label class="control-label">利用者機器管理者 : </label>
            <div class="input-group" style="width:100%">
              <input class="form-control" type="text" placeholder="利用者機器管理者" required>
              <span class="input-group-addon" id="data_2">説明</span>
            </div>
            <div id="p2" class="below_text">
              <p>調達所属の利用者機器管理者（所属の長）を記載してください。</p>
            </div>
          </div>
        </div>
        <!-- end row 6 -->
        <div class="form-group row">
          <div class="col-xs-6" id="ip_field">
            <label class="control-label">IPアドレス（有線）: <span style="color:red">*</span></label>
            <input id="ip" name="ip" class="form-control" type="text" placeholder="IPアドレス（有線）" oninput="input_ip()">
            <span id="help_ip" class="help-block" style="color:red"></span>
          </div>
          <div class="col-xs-6" id="ip_field_2">
            <label class="control-label">IPアドレス（無線）: <span style="color:red">*</span></label>
            <input id="ip_2" name="ip_2" class="form-control" type="text" placeholder="IPアドレス（無線）" oninput="input_ip2()">
            <span id="help_ip_2" class="help-block" style="color:red"></span>
          </div>
        </div>
        <!-- end row 7 -->
        <div class="form-group">
          <div class="col-xs-12">
            <label class="control-label">使用者によるソフトウェア追加導入削除（シ） : <span style="color:red">*</span></label>
            <div class="input-group" style="width:100%">
              <select class="form-control">
                <option>可能</option>
                <option>施錠場所に設置のため不可能</option>
                <option>技術的制限のため不可能</option>
                <option>物理的制限のため不可能</option>
              </select>
              <span class="input-group-addon" id="data_3">説明</span>
            </div>
            <div id="p3" class="below_text">
              <p>情報政策課の指示がない限り、「可能」を選択してください。</p>
            </div>
          </div>
        </div>
        <!-- end row 8 -->
        <div class="form-group">
          <div class="col-xs-6">
            <label class="control-label">調達情報 :</label>
            <textarea class="form-control" rows="4" placeholder="調達情報"></textarea>
          </div>
          <div class="col-xs-6">
            <label class="control-label">ハードウェア備考 :</label>
            <textarea class="form-control" rows="4" placeholder="ハードウェア備考"></textarea>
          </div>
        </div>
        <!-- end row 9 -->
        <div class="form-group">
          <div class="col-xs-3">
            <label class="control-label">申請日 : <span style="color:red">*</span></label>
            <input id="sinsei_date" type="date" class="form-control">
          </div>
          <div class="col-xs-3">
            <label class="control-label">廃棄日 :</label>
            <input id="haiki_date" type="date" class="form-control">
          </div>
          <div class="col-xs-6">
            <label class="control-label">廃棄作業者名 :</label>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="廃棄作業者名" required>
              <span class="input-group-addon" id="data_4">説明</span>
            </div>
            <div id="p4" class="below_text">
              <p>廃棄する場合、実施者氏名を記載してください。</p>
            </div>
          </div>
        </div>
        <!-- end row 10 -->
        <hr>
        <div class="form-group">
          <div class="col-xs-12">
            <p style="color:gray"><span style="color:red">*</span>･･･必須項目</p>
            <input onclick="check()" type="button" class="btn btn-primary" value=" 新規申請 内容確認 ">
            <a href="/"><input type="button" class="btn btn-default" value=" 一覧に戻る"></a>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!-- end main content -->
  <div class="col-lg-1"></div>
  <div class="col-lg-12 well"></div>
  @include('sidenav')
</body>
</html>
