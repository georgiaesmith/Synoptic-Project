<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Media Organiser</title>
  <style>
  #navbar {
    padding: 320px;
    border-radius: 30px;
    background-color: peachpuff;
    background-image: linear-gradient(transparent 50%, rgba(255,255,255,.5) 50%);
    background-size: 50px 50px;
  }

  #myTitle{

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

  h1 {
    vertical-align: middle;
  }


  </style>
</head>
<body>
    <div id="navbar">
      <div id="myTitle">
        <h1>Media Organiser</h1>
      </div>

    </div>
</body>


<script src="{{ mix( 'js/app.js')}}" ></script>
<script>
  console.log( "hello" );
    $( document ).ready( function() {
      console.log( "hello2" );
    });
</script>
