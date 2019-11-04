<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Media Organiser</title>
  <style>
  body {
    background-color: lightgrey;
    background-image: linear-gradient( 90deg, transparent 50%, rgba( 255,255,255,.5 ) 50% );
    background-size: 50px 50px;
  }

  h2 {
    text-align: center;
    font-family: Georgia;
  }

  #title {
    border-radius: 30px;
    background-color: white;
    height: 50px;
    width: 50%;
    margin-left: 25%;
    margin-right: 25%;
    margin-top: 3%;
  }

  #logo {
    float:left;
    border-radius: 30px;
    background-color: white;
    padding: 15px;
    height: 50px;
  }

  #body {
    border-radius: 30px;
    background-color: white;
    margin-left: 5%;
    margin-right: 5%;
    width: 90%;
    padding: 15px;
    padding-bottom: 25px;
  }

  .dataTables_length {
    float: right;
  }

  .dataTables_info {
    float: right;
  }

  body {
    font-family: Georgia;
  }

  #media-datatable_length {
    width:100%;
  }

  #media-datatable_filter {
    float: right;
  }

  #media-datatable_paginate {
    float:right;
  }

  #media-datatable_info {
    float:left;
  }

  #title {
    text-align: center;
  }

  .selected {
    background-color: pink;
  }

  </style>
</head>
<body>
  <div class="container">
    <div>
      <div id="logo">
        <i class="fas fa-headphones-alt fa-lg"></i>
      </div>
      <div id="title">
        <h2>Media Organiser</h2>
      </div>
      <br>
      <div id="body">
        <table id="media-datatable" class="table table-hover dt-responsive" align="center">
        </table>
      </div>
    </div>
  </div>
</body>

<script src="{{ mix( 'js/app.js')}}" ></script>
<script src="{{ mix( 'js/script.js')}}" ></script>
<script>
$( document ).ready( function() {
  let lData = Admin.GetMediaData();
});
</script>
