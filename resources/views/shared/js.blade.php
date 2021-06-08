<script>
    //SideNav Script
    //----------------------------------------------------------------------------------------------
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";


    }

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


        console.log(id, description, date, amount, distance, file)

    })
    $(document).on('click', '.btn-create', function () {
        var id = $(this).data('id')
        $(".createExpenselinemodal #id").val(id);
        console.log(id)

    })
    $(document).on('click', '.btn-delete', function () {
        var id = $(this).data('id')
        $(".deleteExpenselinemodal #id").val(id);
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
    //Reject modal
    //----------------------------------------------------------------------------------------------
    $('#rejectmodal').on('show.bs.modal', function () {
    })
    //Tooltip Script
    //----------------------------------------------------------------------------------------------
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // $(function () {
    //     $('body').tooltip({
    //         selector: '[data-toggle="tooltip"]',
    //         html: true,
    //     }).on('click', '[data-toggle="tooltip"]', function () {
    //         // hide tooltip when you click on it
    //         $(this).tooltip('hide');
    //     });
    // });
    //DataTable Script
    //----------------------------------------------------------------------------------------------

    $(document).ready(function () {
        // Setup - add a text input to each footer cell

    });

    window.onload = function () {

        var table = $('#financeTable').DataTable({
            initComplete: function () {
                this.api().columns([1,2, 4, 5]).every(function () {
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
                {orderable: false, targets: [3, 6]},
                { width: '30%', targets: 0 }
            ],
            "fixedColumns": true,

        });


        $('#approvalTable').DataTable({
            initComplete: function () {
                this.api().columns([1,2, 4, 5]).every(function () {
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
                "info": "_MAX_ Goedkeuringen",
                "infoEmpty": "Er moet niets worden goedgekeurg: GOED GEWERKT!!!",
                "infoFiltered": ""

            },
            columnDefs: [
                {orderable: false, targets: 6},
                { width: '30%', targets: 0 }

            ],
            "fixedColumns": true,


        });
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
                "stateSave": false,
                "autoWidth": true,
                "processing": false,
                columnDefs: [
                    {orderable: false, targets: 2}]
            }
        )
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
            "pageLength": 50,
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
                    { width: '30%', targets: 0 }
                    ],
            "fixedColumns": true,
            }
        )
        $(document).ready(function () {
            $('#MyExpenslinesTable').DataTable({

                "stateSave": false,
                "scrollY": "30vh",
                "scrollCollapse": true,
                "paging": false,
                "searching": false,
                columnDefs: [
                    {orderable: false, targets: [4, 5, 6, 7]},
                    { width: '30%', targets: 0 }
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
        });
    };
</script>
