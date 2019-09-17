
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Media Organiser</title>
</head>
<body>
  <h1>Media Organiser</h1>
</body>

<script src="{{ mix( 'js/app.js')}}" ></script>
<script>
  console.log("hello");
    $( document ).ready( function() {
      console.log( "hello2" );
      Admin.GetMediaData();
    });
</script>
