<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Media Organiser</title>
  <style>
  #navbar {
    padding: 5px;
    border-radius: 30px;
    background-color: lightgrey;
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

  #media-datatable, th, td {
    border: 1px solid black;
  }

  #media-datatable {
    border-collapse: collapse;
    width: 100%;

  }

  #media-datatable_length{
    float: right;
  }

  th {
    /* background-color: deepskyblue; */
    /* color: white; */
  }

  #media-datatable_next, #media-datatable_previous {
    border: 2px solid black;
    /* background-color: white; */
    padding: 2px;
    font-size: 16px;
    cursor: pointer;
    color: black;
    border-radius: 30px;
    float: right;
  }

  #media-datatable_next:hover, #media-datatable_previous:hover {
    background-color: black;
    color: white;
  }

  </style>
</head>
<body>
  <div id="navbar">
    <div id="myTitle">
      <h1>Media Organiser</h1>
    </div>
  </div>
  <div>
    <div class="table table-striped table-bordered">
      <table id="media-datatable" class="table table-striped"></table>
    </div>
  </div>
</body>

<script src="{{ mix( 'js/app.js')}}" ></script>
<script src="{{ mix( 'js/script.js')}}" ></script>
<script>
    $( document ).ready( function() {
      Admin.GetMediaData();
    });
</script>
