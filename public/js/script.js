class Admin {

  static GetMediaData(){
    $( '#media-datatable' ).DataTable({
        data: null,
        searching: false,
        filtering: true,
        orderCellsTop: true,
        fixedHeader: true,
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
      });

      $( '.dataTables_length' ).addClass( 'bs-select' );

      $( '#media-datatable thead tr' ).clone( true ).appendTo( '#media-datatable thead' );
      $( '#media-datatable thead tr:eq(1) th' ).each( function ( i ) {
        var title = $( this ).text();
        $( this ).html( '<input type="text" placeholder="Search '+ title +'" />' );

        $( 'input', this ).on( 'keyup change', function () {
          if ( table.column( i ).search() !== this.value ) {
            table
            .column( i )
            .search( this.value )
            .draw();
          }
        } );
      } );
    }


}
