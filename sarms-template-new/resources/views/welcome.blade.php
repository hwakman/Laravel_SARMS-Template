<html>
@include('common-header')
<body>
  @include('common-nav')
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
    <form style="width:100%" action="/" method="post" class="form-inline well">
      <table>
        @for ($i = 0 ; $i < 3 ; $i++)
        <tr>
          <td>
            <label>
              <select class="form-control" id="sel1">
                <option>Hardware code number</option>
                <option>Organization</option>
                <option>Hardware Primery key</option>
                <option>Code</option>
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
                <option>Like</option>
                <option>Equae</option>
                <option>More</option>
                <option>Less</option>
                <option>Not like</option>
              </select>
            </label>
          </td>
          <td>
            <label>
              <select class="form-control" id="sel1">
                <option>And</option>
                <option>Or</option>
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
            <input type="submit" value="search" class="btn btn-default">
          </td>
        </tr>
      </table>
    </form>
    <div class="panel-group" id="accordion">
      <table class="table table-bordered" style="text-align:center">
        <thead>
          <tr style="background-color:lightgray;color:white">
            <td colspan="4"></td>
            <td><a><b>Hardware code number</b></a></td>
            <td><a><b>Organization</b></a></td>
            <td><a><b>Hardware Primery key</b></a></td>
            <td><a><b>Expire date</b></a></td>
          </tr>
        </thead>
        <tbody>
        @for ($i = 1; $i < 16; $i++)
        <tr>
          <td>
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $i }}"><b>+</b></a>
          </td>
          <td><a href="#"><img src="{{ asset('img/edit.png') }}" width="25" height="25"></a></td>
          <td><a href="#"><img src="{{ asset('img/delete.png') }}" width="25" height="25"></a></td>
          <td><a href="#"><img src="{{ asset('img/inv.png') }}" width="25" height="25"></a></td>
          <td><a href="detail?code=HW0000{{$i}}">HW0000{{$i}}</a></td>
          <td>sosiki 0{{$i}}</td>
          <td>H0000{{$i}}</td>
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
        <tr>
          <td colspan="8" class="well">
            <p id="collapse{{ $i }}" class="panel-collapse collapse">
              test {{$i}}
            </p>
          </td>
        </tr>
        @endfor
      </tbody>
      </table>
      <div>
        <ul class="pagination">
          <li class="active"><a href="#">First</a></li>
          @for ($i = 1 ; $i <= 20 ; $i++)
          <li><a href="#?page={{$i}}">{{$i}}</a></li>
          @endfor
          <li><a href="#">Last</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-1"></div>
</body>
</html>
