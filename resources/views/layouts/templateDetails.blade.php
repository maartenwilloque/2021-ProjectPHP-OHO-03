<div class="row justify-content-center m-auto">
    <div class="col-11 offset-1">
        <div class="container">
            <div class="row">
                <h3 class="display-4 mb-5">Details</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4>Algemeen</h4>
                    <div class="row detailbox">
                        <div class="col-12"> @yield('detailmain')</div>
                    </div>
                    <h4>Onkosten</h4>
                    <div class="row detailbox">
                        <div class="col-12"> @yield('detailexpenses')</div>
                    </div>
                    <div class="row detailbox">
                        <div class="col-12"> @yield('detailsubmit')</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
