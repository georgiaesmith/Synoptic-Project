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

    static DeleteMediaEntry( ){
        let lThis = this;
        console.log("Delete button has been clicked");
        let lTable = $( '#media-datatable' ).DataTable();
        let lGeorgia = lTable.rows( '.selected' ).data();
        let lPayload = [];
        for ( let i = 0; i < lGeorgia.length; i++ ){
            let lSelected = lGeorgia[ i ].id;
            lPayload.push( lSelected );
        }
        let lGeorgia1 = JSON.stringify( lPayload );
        console.log(lGeorgia);

        // console.log(lSelectedArray);
        // let lSelectedValue = $( "#media-datatable" ).DataTable().row( { selected: true } ).data().name;
    }
}
