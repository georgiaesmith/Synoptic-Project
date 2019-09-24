<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <title>Media Organiser</title>
  <style>

  li, a {
    display:inline;
    font-size: 20px;
    font-family: arial;
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

  #media-datatable_length {
    float: right;
  }

  .table {
    width: 100%;
  }

  #media-datatable th, td {
    text-align: left;
    border: 1px solid #ddd;
    padding: 8px;
  }

  #media-datatable_filter{
    float: left;
    padding: 6px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
  }

  #media-datatable tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  #media-datatable tr:hover {
    background-color: #ddd;
  }

  #media-datatable th {
    font-family: arial;
    font-size: 20px;
  }

  #media-datatable {
    border-collapse: collapse;
    margin-left: inherit;
  }

  .datatables_paginate {
    float:right;
  }

  .datatables_paginate, .paging_simple_numbers, span {
    margin: 0;
    color: #73879C;
    font-weight: 400;
    line-height: 1.471;
    font-size: 13px;
    background-color: #f2f2f2;
    text-align: right;
  }

  #media-datatable_length {
    float: right;
  }

  #media-datatable_filter{
    color: blue;
  }
  </style>
</head>
<body>
  <div id="navbar">
    <nav class="navbar navbar-light bg-primary">
      <h1>Media Organiser</h1>
    </nav>
  </div>
  <div>
    <div class="table">
      <div>
        <br>
      <table id="media-datatable" class="table table-bordered table-hover" align="center">
      </table>
      </div>
    </div>
  </div>
</body>

<script src="{{ mix( 'js/app.js')}}" ></script>
<script src="{{ mix( 'js/script.js')}}" ></script>
<script>
$('#media-datatable_filter').addClass( 'mr-sm-2' );
    $( document ).ready( function() {
      let lData = Admin.GetMediaData();
    });
</script>
