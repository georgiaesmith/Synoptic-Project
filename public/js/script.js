class Admin{
  static GetMediaData(){

    console.log("im in here");

  $( '#media-datatable' ).DataTable({
      data: null,
      columns: [
        {
          title: 'Name',
          data: null,
          render: function( data, type, row ){
            return null;
          }
        },
        {
          title: 'Artist',
          data: null,
          render: function( data, type, row ){
            return null;
          }
        },
        {
          title: 'Album',
          data: null,
          render: function( data, type, row ){
            return null;
          }
        }
      ]
    } );
  }

}
