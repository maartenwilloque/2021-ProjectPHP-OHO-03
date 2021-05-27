<script>
    //SideNav Script
    //----------------------------------------------------------------------------------------------
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";


    }

    $(function () {
        $(document).ready(function () {
            $(".toggle").hide();
            console.log('hidden')
            $("#mySidenav").width("80px")
        })
    })
    $(function () {
        $("#showbtn").click(function () {
            $("#mySidenav").width("300px")
            $(".toggle").delay(300).fadeIn();

        })
        $("#hidebtn").click(function () {
            $("#mySidenav").width("80px")
            $(".toggle").hide();

        })

    })
    //Reject modal
    //----------------------------------------------------------------------------------------------
    $('#rejectmodal').on('show.bs.modal', function () {
    })
    //Tooltip Script
    //----------------------------------------------------------------------------------------------
    $(function () {
        $('body').tooltip({
            selector: '[data-toggle="tooltip"]',
            html: true,
        }).on('click', '[data-toggle="tooltip"]', function () {
            // hide tooltip when you click on it
            $(this).tooltip('hide');
        });
    });
    //DataTable Script
    //----------------------------------------------------------------------------------------------

    $(document).ready(function() {
        // Setup - add a text input to each footer cell

    } );

    window.onload = function () {

        var table = $('#financeTable').DataTable({
            initComplete: function () {
                this.api().columns([2,5,6]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );

                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            },
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Geen onkosten gevonden",
                "info": "Pagina _PAGE_ van _PAGES_",
                "infoEmpty": "Geen onkosten gevonden",
                "infoFiltered": "(filtered from _MAX_ total records)"

            },
            columnDefs: [
                {orderable: false, targets: [4,7]}
            ],

        });


        $('#approvalTable').DataTable({
            initComplete: function () {
                this.api().columns([2,5,6]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );

                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            },
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Geen onkosten gevonden",
                "info": "Pagina _PAGE_ van _PAGES_",
                "infoEmpty": "Geen onkosten gevonden",
                "infoFiltered": "(filtered from _MAX_ total records)"

            },
            columnDefs: [
                {orderable: false, targets: 7}
            ],


        });

        $('#userTable').DataTable({
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Geen onkosten gevonden",
                "info": "Pagina _PAGE_ van _PAGES_",
                "infoEmpty": "Geen onkosten gevonden",
                "infoFiltered": "(filtered from _MAX_ total records)"

            },
            columnDefs: [
                {orderable: false, targets: 8}
            ]
        });
        $('#prmTable').DataTable({
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": false,
            "paging": false,
            "info": false,
            //-------------------------------------------
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            // "lengthChange": false,
            // "lengthMenu": [10],
            // "language": {
            //     "lengthMenu": "Display _MENU_ records per page",
            //     "zeroRecords": "Geen onkosten gevonden",
            //     "info": "Pagina _PAGE_ van _PAGES_",
            //     "infoEmpty": "Geen onkosten gevonden",
            //     "infoFiltered": "(filtered from _MAX_ total records)"
            //
            // },
            // columnDefs: [
            //     { orderable: false, targets: 5 }
            // ]
        })

        $('#typeTable').DataTable({
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": false,
            "paging": false,
            "info": false,
            //-------------------------------------------
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            // "lengthChange": false,
            // "lengthMenu": [10],
            // "language": {
            //     "lengthMenu": "Display _MENU_ records per page",
            //     "zeroRecords": "Geen onkosten gevonden",
            //     "info": "Pagina _PAGE_ van _PAGES_",
            //     "infoEmpty": "Geen onkosten gevonden",
            //     "infoFiltered": "(filtered from _MAX_ total records)"
            //
            // },
            columnDefs: [
                {orderable: false, targets: 2}
            ]
        })
        $('#costcenterTable').DataTable({
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": true,
            "paging": true,
            "info": true,
            //-------------------------------------------
            "stateSave": true,
            "autoWidth": true,
            "processing": true,
            "lengthChange": false,
            "lengthMenu": [5],
            // "language": {
            //     "lengthMenu": "Display _MENU_ records per page",
            //     "zeroRecords": "Geen onkosten gevonden",
            //     "info": "Pagina _PAGE_ van _PAGES_",
            //     "infoEmpty": "Geen onkosten gevonden",
            //     "infoFiltered": "(filtered from _MAX_ total records)"
            //
            // },
            columnDefs: [
                {orderable: false, targets: 4}
            ]
        })
        $('#myExpenseTable').DataTable({
            initComplete: function () {
                this.api().columns([2,4,5,6]).every( function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );

                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            },
                //no search, pagination and page x form y
                //-------------------------------------------
                "searching": true,
                "paging": true,
                "info": true,

                //-------------------------------------------

                "stateSave": true,
                "autoWidth": true,
                "processing": true,
                "lengthChange": false,
                "lengthMenu": [10],
                "language": {
                    "lengthMenu": "Display _MENU_ records per page",
                    "zeroRecords": "Geen onkosten gevonden",
                    "info": "Pagina _PAGE_ van _PAGES_",
                    "infoEmpty": "Geen onkosten gevonden",
                    "infoFiltered": "(filtered from _MAX_ total records)"

                },
                // columnDefs: [
                //     {orderable: false, targets: 5},
                //     {orderable: false, targets: 6},
                //     {orderable: false, targets: 7},
                // ]
            }
        )
        $('#detailTable').DataTable(
            {
                "scrollY": "150px",
                "scrollCollapse": true,
                "paging": false,
                "searching": false,
                columnDefs: [
                    {orderable: false, targets: 3}],
                "autoWidth": true

            }
        )
    };
</script>
