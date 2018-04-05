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
  </script>
</head>
