<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Jubilaciones</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('pensionPage') }}">
                    <i class="fa fa-fw fa-history"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('showBilling') }}">
                    <i class="fa fa-fw fa-history"></i>Billing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('showEdit') }}">
                    <i class="fa fa-fw fa-user-circle"></i>{{session('user_name')}}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="{{ URL::to('passwordForm') }}">
                    <i class="fa fa-fw fa-wrench"></i>
                    <span class="nav-link-text">Password</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>