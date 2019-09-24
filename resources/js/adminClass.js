class Admin {
  static GetMediaData(){
    axios.get( '/api/MediaData' ).then( function ( aData ) {
      console.log(aData.data);
      let lTable = $( '#media-datatable' ).DataTable({
        data: aData.data,
        searching: true,
        filtering: true,
        orderCellsTop: true,
        fixedHeader: true,
        searchable: true,
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
    }).catch( function( aError ) {
      console.log( aError );
    });
  }
}
