
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

        $('#approval').DataTable( {
            "paging": false, // Allow data to be paged
            "lengthChange": false,
            "searching": false, // Search box and search function will be actived
            "ordering": false,
            "info": false,
            "autoWidth": true,
            "processing": true,  // Show processing
            "serverSide": false,  // Server side processing
            "deferLoading": 0, // In this case we want the table load on request so initial automatical load is not desired
            "pageLength": 5,
        });

    };

</script>
