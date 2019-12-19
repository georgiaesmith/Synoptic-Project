class Admin {
    /**
     * Get the media data from the back end
     */
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

    /**
     * Delete the selected rows
     */
    static DeleteMediaEntry(){
        let lThis = this;
        let lTable = $( '#media-datatable' ).DataTable();
        let lSelected = lTable.rows( '.selected' ).data();
        for ( let i = 0; i < lSelected.length; i++ ){
            let lData = lSelected[ i ].id;
            axios.delete( '/api/MediaData', { data: { "ID" : lData } } ).then( function( aResponse ){
                lTable.row( '.selected' ).remove().draw();
            }).catch( function( aError ){
                console.log( aError );
            });
        }
    }
}
