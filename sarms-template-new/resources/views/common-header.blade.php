<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    .topnav{
      background-color: white;
      overflow: hidden;
    }
    .topnav a {
        float: left;
        color: gray;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }
    .topnav a:hover {
          background-color: #ddd;
          color: black;
      }
      .topnav a.active {
          background-color: #4CAF50;
          color: white;
      }
      .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 99;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 18px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }
        .modal-header{
          background-color:  #4d4d4d;
          color: white;
        }
        textarea{
          resize: none;
        }
        .below_text{
          display:none;
          color: #666666;
          background-color: white;
          padding: 5px;
          border-radius: 6px;
        }
        .input-group-addon:hover{
          cursor: pointer;
          background-color: lightgray;
          color: black;
        }
        .head_form{
          font-size: 1.25em;
          background: linear-gradient(#b3b3b3, #595959);
          color: white;
          border-radius: 5px;
          border-color: lightgray;
          border-width: 2px;
        }
        .confirm_form td{
          background-color: white;
          width: 70%;
        }
        .alert{
          text-align: center;
        }
        .p_empty{
          background-color: red;
        }
        #myBtn {
            display: block; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 10px; /* Place the button at the bottom of the page */
            left: 10px; /* Place the button 30px from the right */
            z-index: 50; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: gray; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 10px; /* Some padding */
            border-radius: 5px; /* Rounded corners */
            font-size: 18px; /* Increase font size */
        }
  </style>
  <script>
    function openA(){
      document.getElementById("mySidenav").style.width = "250px";
    }
    function closeA(){
      document.getElementById('mySidenav').style.width = "0";
    }
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }

    function check(){
      var hard = document.getElementById("myForm").elements.namedItem("hard_kanrino").value;
      var sinsei = document.getElementById("myForm").elements.namedItem("sinsei").value;
      var email = document.getElementById("myForm").elements.namedItem("email").value;
      var ip = document.getElementById("myForm").elements.namedItem("ip").value;
      var ip_2 = document.getElementById("myForm").elements.namedItem("ip_2").value;
      if (hard == "") {
        document.getElementById("hard_kanrino_field").classList.add("has-error");
        document.getElementById("hard_kanrino").focus();
        document.getElementById("help_hard").innerHTML = "*「ハードウェア管理番号」を記載してください。";
      }
      else if (hard.length > 255) {
        document.getElementById("hard_kanrino_field").classList.add("has-error");
        document.getElementById("hard_kanrino").focus();
        document.getElementById("help_hard").innerHTML = "* ハードウェア管理番号は255文字以内で入力してください。";
      }
      else if (sinsei == "") {
        document.getElementById("sinsei_field").classList.add("has-error");
        document.getElementById("sinsei").focus();
        document.getElementById("help_sinsei").innerHTML = "*「申請者」を記載してください。";
      }
      else if (email == "") {
        document.getElementById("email_field").classList.add("has-error");
        document.getElementById("email").focus();
        document.getElementById("help_email").innerHTML = "*「申請者メール」を記載してください。";
      }
      else if (ip == "") {
        document.getElementById("ip_field").classList.add("has-error");
        document.getElementById("ip").focus();
        document.getElementById("help_ip").innerHTML = "*「IPアドレス（有線）」を記載してください。";
      }
      else if (ip_2 == "") {
        document.getElementById("ip_field_2").classList.add("has-error");
        document.getElementById("ip_2").focus();
        document.getElementById("help_ip_2").innerHTML = "*「IPアドレス（無線）」を記載してください。";
      }
      else {
        document.getElementById("myForm").submit();
      }
    }
    function input_hard(){
      document.getElementById("hard_kanrino_field").classList.remove("has-error");
      document.getElementById("help_hard").innerHTML = "";
    }
    function input_sinsei(){
      document.getElementById("sinsei_field").classList.remove("has-error");
      document.getElementById("help_sinsei").innerHTML = "";
    }
    function input_email(){
      document.getElementById("email_field").classList.remove("has-error");
      document.getElementById("help_email").innerHTML = "";
    }
    function input_ip(){
      document.getElementById("ip_field").classList.remove("has-error");
      document.getElementById("help_ip").innerHTML = "";
    }
    function input_ip2(){
      document.getElementById("ip_field_2").classList.remove("has-error");
      document.getElementById("help_ip_2").innerHTML = "";
    }
    $(document).ready(function(){
      var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);
      var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

      $('#sinsei_date').val(today);
    });

    $(document).ready(function(){
      var now = new Date();
      var day = ("0" + now.getDate()).slice(-2);
      var month = ("0" + (now.getMonth() + 1)).slice(-2);
      var today = (now.getFullYear()+1)+"-"+(month)+"-"+(day) ;

      $('#haiki_date').val(today);
    });

    $(document).ready(function(){
      $("#data_1").click(function(){
        $("#p1").toggle("fast");
      });
      $("#data_2").click(function(){
        $("#p2").toggle("fast");
      });
      $("#data_3").click(function(){
        $("#p3").toggle("fast");
      });
      $("#data_4").click(function(){
        $("#p4").toggle("fast");
      });
    });

    function backlink(){
      history.back()
    }
    function goHome(){
      window.location = "/";
    }

  </script>
</head>
