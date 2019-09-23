class Admin {
  static GetMediaData(){
    axios.get( '/api/MediaData' ).then( function ( aData ) {
      console.log(aData.data);
      $( '#media-datatable' ).DataTable({
        data: aData.data,
        searching: false,
        filtering: true,
        orderCellsTop: true,
        fixedHeader: true,
        columns: [
          {
            title: 'Name',
            data: null,
            render: function( data ){
              return data.name;
            }
          },
          {
            title: 'Artist',
            data: null,
            render: function( data ){
              return data.artist;
            }
          },
          {
            title: 'Album',
            data: null,
            render: function( data ){
              return data.album;
            }
          }
        ]
      });
      $( '.dataTables_length' ).addClass( 'bs-select' );
    }).catch( function( aError ) {
      console.log( aError );
    });
  }
}
