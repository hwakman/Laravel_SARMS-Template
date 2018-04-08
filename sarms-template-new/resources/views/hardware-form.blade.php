<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-2"></div>
  <!-- main content -->
  <div class="container col-lg-8">
    <div class="well well-sm" style="font-size: 1.25em"><b>ハードウェア台帳登録</b></div>
    <div class="well">
      <form id="myForm" class="form-horizontal" style="padding:25px" method="post" action="appove">
        <div class="form-group" id="hard_kanrino_field">
          <label>ハードウェア管理番号 :</label>
          <input id="hard_kanrino" name="hard_kanrino" class="form-control" type="text" placeholder="ハードウェア管理番号" required>
          <span id="help_hard" class="help-block" style="color:red"></span>
        </div>
        <div class="form-group">
          <label>所属 :</label>
          <select class="form-control">
            <option>所属のテスト</option>
            <option>所属のテスト</option>
            <option>所属のテスト</option>
            <option>所属のテスト</option>
          </select>
        </div>
        <div class="form-group">
          <label>申請者名 :</label>
          <input class="form-control" type="text" placeholder="申請者名">
        </div>
        <div class="form-group" id="email_field">
          <label>申請者メール :</label>
          <input id="email" name="email" class="form-control" type="text" placeholder="メール">
          <span id="help_email" class="help-block" style="color:red"></span>
        </div>
        <div class="form-group" id="ip_field">
          <label>IPアドレス :</label>
          <input id="ip" name="ip" class="form-control" type="text" placeholder="IPアドレス">
          <span id="help_ip" class="help-block" style="color:red"></span>
        </div>
        <div class="form-group">
          <label>所在地 :</label>
          <textarea class="form-control" rows="3" id="location" placeholder="所在地"></textarea>
        </div>
        <div class="form-inline form-group">
          <label>申請日 :</label>
          <input type="date" class="form-control">
          <label>廃棄日 :</label>
          <input type="date" class="form-control">
        </div>
        <div class="form-group">
          <label>ノート :</label>
          <textarea class="form-control" rows="3" id="location" placeholder="ノート"></textarea>
        </div>
        <div class="form-group">
          <input onclick="check()" type="button" class="btn btn-info" value="適用する">
          <a href="/"><input type="button" class="btn btn-warning" value="キャンセル"></a>
        </div>
      </form>
    </div>
  </div>
  <!-- end main content -->
  <div class="col-lg-2"></div>
  <div class="col-lg-12 well"></div>
  @include('sidenav')
</body>
</html>
