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

    window.onload = function () {

        $('#approvalTable').DataTable({
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
                //no search, pagination and page x form y
                //-------------------------------------------
                "searching": true,
                "paging": true,
                "info": true,

                //-------------------------------------------

                "stateSave": true,
                "autoWidth": true,
                "processing": true,
                "lengthChange": true,
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
