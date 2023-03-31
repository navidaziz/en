<style>
    .menuLogo {
        margin-top: -3px;
        border: 2px solid #fff;
        -moz-border-radius: 190px;
        -webkit-border-radius: 190px;
        border-radius: 190px;
        background-color: white;
        width: 30px;
        height: 30px;
    }
</style>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="http://psra.gkp.pk/v1/assets/admin/img/psra_log.png" class="menuLogo" />
            PSRA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background: lightgray !important;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('home2')}}">Home</a>
                </li>

                <li role="presentation" class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        PSRA Wings </a>
                    <ul class="dropdown-menu">
                        <li> <a class="dropdown-item" href="{{route('registration')}}"> Registration Wing </a></li>
                        <li><a class="dropdown-item" href="{{route('administration')}}"> Administration Wing </a></li>
                        <li> <a class="dropdown-item" href="{{route('operation')}}"> Operation Wing</a></li>
                        <!--<li role="separator" class="divider"></li> -->
                        <!--<li><a href="#">Separated link</a></li> -->
                    </ul>
                </li>

                <li role="presentation" class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Apply Online </a>
                    <ul class="dropdown-menu">
                        <li> <a target="new" class="dropdown-item" href="https://psra.gkp.pk/schoolReg/user/login"> Private Schools </a></li>
                        <li><a target="new" class="dropdown-item" href="https://drive.google.com/open?id=1fH2a56qz-_l2OZi6Hnh89ZIloyYWPmnsAGNnWURIQD8"> Tuition Academies </a></li>
                        <li> <a target="new" class="dropdown-item" href="{{asset('/assets/downloads/Medical-Institutes-Registration-Form.pdf')}}"> Medical Institutes</a></li>
                        <!--<li role="separator" class="divider"></li> -->
                        <!--<li><a href="#">Separated link</a></li> -->
                    </ul>
                </li>

                <li role="presentation" class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Downloads </a>
                    <ul class="dropdown-menu">
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/Registration-Renewal-Upgradation Fee Structure.pdf')}}"> Fee Schedule </a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/Bank Challan.pdf')}}"> Bank Reciept </a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/Affadavit.pdf')}}"> Affadavit Speciment </a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/PSRA Act 2017.pdf')}}"> PSRA Act</a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/PSRA Regulation 2017-18.pdf')}}">PSRA Regulations</a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/Ammendments.pdf')}}"> Ammendment In Regulations</a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('/assets/downloads/PSRA Norms and Standards.pdf')}}"> Norms and Standards</a></li>
                        <!-- <li><a class="dropdown-item" href="{{route('notification')}}"> Notification</a></li>
                        <li><a class="dropdown-item" href="{{route('circular')}}"> Circular</a></li> -->

                    </ul>
                </li>

                <li role="presentation" class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Procedures </a>
                    <ul class="dropdown-menu">
                        <li><a target="new" class="dropdown-item" href="{{asset('assets/downloads/Procedure - Change of School Name, Ownership and location.pdf')}}"> Change of Name,Building/Ownership and Applicant Certificate </a></li>
                        <li><a target="new" class="dropdown-item" href="{{asset('assets/Procedure- PSRA Registration-Renewal-Upgradation.pdf')}}">Apply for New Registration, Renewal, Upgradation </a></li>

                    </ul>
                </li>

                <li role="presentation" class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" style="color:white !important" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PSRA Services </a>
                    <ul class="dropdown-menu">
                        <li><a target="new" class="dropdown-item" href="https://psra.gkp.pk/uploads/complaint.pdf">Lodging a Complaint</a></li>
                        <li><a target="new" class="dropdown-item" href="https://psra.gkp.pk/uploads/PSRA Services List.pdf">PSRA Services List</a></li>
                        <li><a target="new" class="dropdown-item" href="https://psra.gkp.pk/uploads/procedure for_change.pdf"> Change of Name,Building/Ownership and Applicant Certificate </a></li>
                        <li><a target="new" class="dropdown-item" href="https://psra.gkp.pk/uploads/how_to_register_and_renew.pdf">Apply for New Registration, Renewal, Upgradation </a></li>

                    </ul>
                </li>




            </ul>


            <a class=" button btn btn-danger " href="https://psra.gkp.pk/schoolReg/user/login">Apply For Session 2022-23</a>
        </div>
    </div>
</nav>
</header>