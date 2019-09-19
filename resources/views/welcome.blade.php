<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Media Organiser</title>
  <style>
  #navbar {
    padding: 100px;
    border-radius: 30px;
    background-color: peachpuff;
    background-image: linear-gradient( transparent 50%, rgba( 255,255,255,.5 ) 50% );
    background-size: 50px 50px;
  }

  li, a {
    display:inline;
    font-size: 20px;
    font-family: Georgia;
  }


  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    float: right;
  }

  </style>
</head>
<body>
  <div id="navbar">
    <div id="myTitle">
      <h1>Media Organiser</h1>
    </div>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
    <table id="media-datatable" class="table display table-hover table-bordered"></table>
  </div>
</body>


<script src="{{ mix( 'js/app.js')}}" ></script>
<script src="{{ mix( 'js/script.js')}}" ></script>
<script>
  console.log( "hello" );
    $( document ).ready( function() {
      console.log( "hello2" );
      Admin.GetMediaData();
    });
</script>
