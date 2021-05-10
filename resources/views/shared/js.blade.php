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


</script>
