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
            $("#mySidenav").width("350px")
            $(".toggle").delay(300).fadeIn();
        })
        $("#hidebtn").click(function () {
            $("#mySidenav").width("80px")
            $(".toggle").hide();
        })
    })


    //MODALS
    //----------------------------------------------------------------------------------------------

    //Edit expenseline modal
    //----------------------------------------------------------------------------------------------
    $(document).on('click', '.btn-edit', function () {
        var id = $(this).data('id')
        var description = $(this).data('description')
        var date = $(this).data('date')
        var amount = $(this).data('amount')
        var distance = $(this).data('distance')
        var file = $(this).data('file')
        var type = $(this).data('type')
        $(".editExpenselinemodal #id").val(id);
        $(".editExpenselinemodal #description").val(description);
        $(".editExpenselinemodal #date").val(date);
        $(".editExpenselinemodal #amount").val(amount);
        $(".editExpenselinemodal #distance").val(distance);
        $(".editExpenselinemodal #attachment").val(file);
        console.log(file)
        switch (type) {
            case 1:
            case 2:
                $(".amount_input").removeClass("d-none");
                $(".distance_input").addClass("d-none");
                $(".attachment_input").removeClass("d-none");
                break;
            case 3:
            case 4:
                $(".distance_input").removeClass("d-none");
                $(".amount_input").addClass("d-none");
                $(".attachment_input").addClass("d-none");
        }
    })

    //create expeseline modal
    //----------------------------------------------------------------------------------------------
    $(document).on('click', '.btn-create', function () {
        var id = $(this).data('id')
        $(".createExpenselinemodal #id").val(id);
        console.log(id)
    })
    $('#type_create').change(function () {
        var typeselect = document.getElementById("type_create");
        console.log(typeselect.value)
        switch (typeselect.value) {
            case '1':
            case '2':
                $(".amount_input").removeClass("d-none");
                $(".distance_input").addClass("d-none");
                $(".attachment_input").removeClass("d-none");
                break;
            case '3':
            case '4':
                $(".distance_input").removeClass("d-none");
                $(".amount_input").addClass("d-none")
                $(".attachment_input").addClass("d-none");
        }
    })

    //delete expenseline modal
    //----------------------------------------------------------------------------------------------
    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id')
        $(".deleteExpenselinemodal #id").val(id);
    })

    //Reject modal
    //----------------------------------------------------------------------------------------------
    $('#rejectmodal').on('show.bs.modal', function () {
    })

    //Hidden buttons status
    //----------------------------------------------------------------------------------------------
    $(document).ready(function () {
        if (document.getElementById('status')) {
            var status = document.getElementById('status');
            console.log(status.innerText)
            switch (status.innerText) {
                case '3':
                case '5':
                case '8':
                    $('.statusedit').addClass('d-none')
            }
        }
    })


    //Tooltip Script
    //----------------------------------------------------------------------------------------------
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    //DataTable Script
    //----------------------------------------------------------------------------------------------


    window.onload = function () {
        //finance table
        //----------------------------------------------------------------------------------------------
        $('#financeTable').DataTable({
            initComplete: function () {
                this.api().columns([1, 3, 4, 5]).every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            },
            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "",
                "info": "_MAX_ Betalingen",
                "infoEmpty": "Alles is uitbetaald",
                "infoFiltered": ""

            },
            columnDefs: [
                {orderable: false, targets: [0, 7]},
                {width: '30%', targets: 0}
            ],
            "fixedColumns": true,
            "aoSearchCols": [null, null, null, null, null, {"sSearch": "Goedgekeurd KP"}]

        });

        //approver table
        //----------------------------------------------------------------------------------------------
        $('#approvalTable').DataTable({
            initComplete: function () {
                this.api().columns([1, 2, 4, 5]).every(function () {
                    var column = this;
                    var select = $('<select id=""><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            },
            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "",
                "info": "_MAX_ Goedkeuringen",
                "infoEmpty": "Er moet niets worden goedgekeurd: GOED GEWERKT!!!",
                "infoFiltered": ""

            },
            columnDefs: [
                {orderable: false, targets: [0, 7]},
                {width: '30%', targets: 0}

            ],
            "fixedColumns": true,
            "aoSearchCols": [null, null, null, null, null, {"sSearch": "Ingediend"}]


        });

        //userlist table
        //----------------------------------------------------------------------------------------------
        $('#userTable').DataTable({
            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Geen onkosten gevonden",
                "info": "Pagina _PAGE_ van _PAGES_",
                "infoEmpty": "Geen personen gevonden",
                "infoFiltered": "(filtered from _MAX_ total records)"

            },
            columnDefs: [
                {orderable: false, targets: [0, 8]}
            ]
        });

        // //parameter table
        // //----------------------------------------------------------------------------------------------
        // $('#prmTable').DataTable({
        //         //no search, pagination and page x form y
        //         //-------------------------------------------
        //         "searching": false,
        //         "paging": false,
        //         "info": false,
        //         //-------------------------------------------
        //         "stateSave": false,
        //         "autoWidth": true,
        //         "processing": false,
        //         columnDefs: [
        //             {orderable: false, targets: 2}]
        //     });

        //type table
        //----------------------------------------------------------------------------------------------
        $('#typeTable').DataTable({
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": false,
            "paging": false,
            "info": false,
            //-------------------------------------------
            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            columnDefs: [
                {orderable: false, targets: [2, 3]}
            ]
        })

        //costcenter table
        //----------------------------------------------------------------------------------------------
        $('#costcenterTable').DataTable({
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": true,
            "paging": true,
            "info": true,
            //-------------------------------------------
            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            "lengthChange": false,
            "lengthMenu": [10],
            "pageLength": 10,
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "",
                "info": "Pagina _PAGE_ van _PAGES_",
                "infoEmpty": "",
                "infoFiltered": "(filtered from _MAX_ total records)"

            },
            columnDefs: [
                {orderable: false, targets: 4}
            ]
        })

        //myExpense table
        //----------------------------------------------------------------------------------------------
        $('#myExpenseTable').DataTable({
            initComplete: function () {
                this.api().columns([1, 3, 4, 5]).every(function () {
                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo($(column.footer()).empty())
                        .on('change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );

                            column
                                .search(val ? '^' + val + '$' : '', true, false)
                                .draw();
                        });

                    column.data().unique().sort().each(function (d, j) {
                        select.append('<option value="' + d + '">' + d + '</option>')
                    });
                });
            },
            //no search, pagination and page x form y
            //-------------------------------------------
            "searching": true,
            "paging": true,
            "info": true,

            //-------------------------------------------

            "stateSave": false,
            "autoWidth": true,
            "processing": false,
            "lengthChange": false,
            "lengthMenu": [10],
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "",
                "info": "_MAX_ Onkosten",
                "infoEmpty": "Geen onkosten gevonden",
                "infoFiltered": ""

            },
            columnDefs: [
                {orderable: false, targets: 8},
                {width: '30%', targets: 0}
            ],
            "fixedColumns": true,
        });

        //expenselines table
        //----------------------------------------------------------------------------------------------
        $('#MyExpenslinesTable').DataTable({

            "stateSave": false,
            "scrollY": "30vh",
            "scrollCollapse": true,
            "paging": false,
            "searching": false,
            columnDefs: [
                {orderable: false, targets: [4, 5, 6, 7]},
                {width: '30%', targets: 0}
            ],
            "fixedColumns": true,
            "autoWidth": true,
            "language": {
                "lengthMenu": "Display _MENU_ records per page",
                "zeroRecords": "Geen onkostlijnen gevonden",
                "info": "_MAX_ Onkostlijnen",
                "infoEmpty": "",
                "infoFiltered": ""
            }


        });
    };
    $("document").ready(function(){
        setTimeout(function(){
            $("div.alert").remove();
        }, 3000 ); // 3 secs

    });
</script>
