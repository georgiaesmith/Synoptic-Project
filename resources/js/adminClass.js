class Admin {
  static GetMediaData(){
    axios.get( '/api/MediaData' ).then( function ( aData ) {
      let lTable = $( '#media-datatable' ).DataTable({
        data: aData.data,
        searching: true,
        filtering: true,
        orderCellsTop: true,
        fixedHeader: true,
        searchable: true,
        select: {
          style: 'multi'
        },
        multiselect: true,
        responsive: true,
        ordering: true,
        pagingType: "simple_numbers",
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

  static DeleteMediaEntry(){
    console.log("Delete button has been clicked");
    let lTable = $( '#media-datatable' ).DataTable();
    let lGeorgia = lTable.rows( '.selected' ).data();
    // console.log(lGeorgia[1]);
    let i;
    for ( i = 0; i < lGeorgia.length; i++ ){
      console.log(lGeorgia[i]);
      let lName = lGeorgia[ i ].name;
      console.log(lName);
      axios.delete( '/api/MediaData', { data: { "name": lName } } ).then( function( aData ){
        this.GetMediaData();
        console.log("Weve deleted it boys");
      }).catch( function( aError ){
        console.log( aError );
      });
    }
    // let lSelectedValue = $( "#media-datatable" ).DataTable().row( { selected: true } ).data().name;
    // console.log( lSelectedValue );

  }
}
