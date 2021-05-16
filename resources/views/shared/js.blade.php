
<script>
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

    window.onload = function () {

        $('#approvalTable').DataTable( {
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
                { orderable: false, targets: 5 }
            ]
        });
        $('#userTable').DataTable( {
        });
        $('#prmTable').DataTable({

        })
        $('#typeTable').DataTable({

        })



    };

</script>
