<div class="row justify-content-center m-auto">
    <div class="col-11 offset-1">
        <div class="container">
            <div class="row">
                <h3 class="display-4 mb-3">Details</h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class>Algemeen</h4>
                    <div class="row mt-2">
                        <div class="col-12 border detailmainbox "> @yield('detailmain')</div>
                    </div>
                    <h4 class="mt-3">Onkosten</h4>
                    <div class="row ">
                        <div class="col-12 border detailmainbox "> @yield('detailexpenses')</div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12"> @yield('detailsubmit')</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
