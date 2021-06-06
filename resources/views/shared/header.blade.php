<header>
    <div class="header">
        <div class="row no-gutters header">
            <div class="col-1 no-gutters">
                <img src="/assets/logo/MyExpenseLogo.png" class="logo" alt="My expense Logo">
            </div>
            <div class="col-9">
                <p class="headertitle">MyExpense</p>
            </div>

            <div class="col-2 align-items-end mt-auto">
                @if(Auth::user()->active)
                    <h5>{{Auth::user()->firstname}} {{Auth::user()->name}} <a href="/user/profile">
                            <i class="fas fa-user pl-3"></i>
                        </a></h5>
                @endif
            </div>
        </div>
    </div>

</header>
