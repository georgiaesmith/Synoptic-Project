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

  #media-datatable_length{
    float: right;
  }

  /* #media-datatable_next, #media-datatable_previous {
    border: 2px solid black;
    /* background-color: white; */
    /* padding: 2px;
    font-size: 16px;
    cursor: pointer;
    color: black;
    border-radius: 30px;
  } */


  /* #media-datatable_next:hover, #media-datatable_previous:hover {
    background-color: black;
    color: white;
  } */

  .table{
    width: 100%;
  }

  #media-datatable th, td{
    text-align: left;
    border: 1px solid #ddd;
    padding: 8px;

  }
  #media-datatable tr:nth-child(even){
    background-color: #f2f2f2;
  }

  #media-datatable tr:hover{
    background-color: #ddd;
  }

  #media-datatable th{
    font-family: arial;
    font-size: 20px;
  }

  #media-datatable{
    border-collapse: collapse;
  }

  .datatables_paginate{
    float:right;
  }

  .datatables_paginate, .paging_simple_numbers, span{
    margin: 0;
    color: #73879C;
    font-weight: 400;
    line-height: 1.471;
    font-size: 13px;
    background-color: #f2f2f2;
    text-align: right;
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
    <div class="table">
      <br>
      <table id="media-datatable" class="table table-bordered table-hover">
      </table>
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
