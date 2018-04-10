<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-2"></div>
  <div class="col-lg-8">
    @foreach ($_POST as $value => $key)
      <?php
        if($key == ""){
          $_POST[$value] = " -
          <script>
            document.getElementById('warning').style.display = 'block';
            document.getElementById('success').style.display = 'none';
          </script>";

        }
      ?>
    @endforeach
    <div class="well well-sm head_form"><b>ハードウェア台帳保守</b></div>
    <div class="alert alert-success" style="display:block" id="success">
      <strong>この内容が正しい場合は。「保守完了」のボタンを押してください。</strong>
    </div>
    <div class="alert alert-warning" style="display:none" id="warning">
      <strong>一部の項目が空欄のままです。このまま申請してよろしいですか？</strong>
    </div>
    <table class="table table-sm well confirm_form">
      <tr>
        <th>ハードウェア管理番号</th>
        <td><?=$_POST['hard_kanrino']?></td>
      </tr>
      <tr>
        <th>申請者</th>
        <td><?=$_POST['sinsei']?></td>
      </tr>
      <tr>
        <th>申請者メール</th>
        <td><?=$_POST['email']?></td>
      </tr>
      <tr>
        <th>文書番号</th>
        <td><?=$_POST['number']?></td>
      </tr>
      <tr>
        <th>所属</th>
        <td><?=$_POST['sosiki']?></td>
      </tr>
      <tr>
        <th>機器種別</th>
        <td><?=$_POST['device']?></td>
      </tr>
      <tr>
        <th>調達形態区分</th>
        <td><?=$_POST['product_type']?></td>
      </tr>
      <tr>
        <th>購入／リース</th>
        <td><?=$_POST['reesu']?></td>
      </tr>
      <tr>
        <th>室等</th>
        <td><?=$_POST['rooms']?></td>
      </tr>
      <tr>
        <th>利用者機器管理者</th>
        <td><?=$_POST['equid']?></td>
      </tr>
      <tr>
        <th>IPアドレス（有線）</th>
        <td><?=$_POST['ip']?></td>
      </tr>
      <tr>
        <th>IPアドレス（無線）</th>
        <td><?=$_POST['ip_2']?></td>
      </tr>
      <tr>
        <th>使用者によるソフトウェア追加導入削除（シ）</th>
        <td><?=$_POST['delete_user']?></td>
      </tr>
      <tr>
        <th>調達情報</th>
        <td><?=$_POST['product_info']?></td>
      </tr>
      <tr>
        <th>ハードウェア備考</th>
        <td><?=$_POST['hard_remark']?></td>
      </tr>
      <tr>
        <th>申請日</th>
        <td><?=$_POST['sinsei_date']?></td>
      </tr>
      <tr>
        <th>廃棄日</th>
        <td><?=$_POST['haiki_date']?></td>
      </tr>
      <tr>
        <th>廃棄作業者名</th>
        <td><?=$_POST['disposal_user']?></td>
      </tr>
    </table>
    <div class="">
      <input type="button" class="btn btn-primary" value=" 保守完了 " onclick="goHome()">
      <input type="button" class="btn btn-info" value=" 修正する" onclick="backlink()">
    </div>
    <hr>
  </div>
  <div class="col-lg-2"></div>
  <div class="col-lg-12 well"></div>
  @include('sidenav')
</body>
</html>
