<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/alphastyles.css">
    <link rel="stylesheet" href="assets/animate//animate.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">


    <title>VoiceD | Customer Care - Dashboard</title>
</head>

<body>

    <div class="main-body d-flex justify-content-center align-content-center p-lg-5 p-md-2 ">

        <div class="container-fluid dash-fluid p-lg-3 row flex-md-row mx-auto">
            <div
                class="col-lg-2 col-md-3 col-10 p-2 d-md-block align-content-start justify-content-start text-start  border-right sideNavWrapper ">
                <div class="col-md-12 position-relative pt-5 pt-md-0">
                    <img src="assets/images/logo.png" alt="logo" class="w-100 " />
                </div>

                <ul class="navSide w-100 d-flex flex-column mt-3 list-unstyled">

                    <li>
                        <a href="salesDashboard">
                            <div class="w-100 p-3 active bg-primary text-white rounded mb-2">
                                <i class="fa fa-user mr-2"></i> Dashboard
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="customer">
                            <div class="w-100 p-3 mb-2">
                                <i class="fa fa-user mr-2"></i> Customer Registraion
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="customer-insight">
                            <div class="w-100 p-3  mb-2">
                                <i class="fa fa-users mr-2"></i> Customer
                            </div>
                        </a>

                    </li>


                    <li>
                        <a href="invoices">
                            <div class="w-100 p-3  mb-2">
                                <i class="fa fa-file mr-2"></i> Invoices
                            </div>
                        </a>
                    </li>


                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <div class="w-100 p-3  mb-2">
                                <i class="fa fa-sign-out mr-2"></i> SignOut
                            </div>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>



                </ul>
            </div>

            <div class="sideNavRes d-block d-md-none w-100 p-3 position-fixed z-index-6">
                <i class="fa fa-bars"></i>
            </div>

            <div class="col-lg-10 col-md-8  col-12 py-5 py-md-0 main-body-container">
                <div class="w-100 ">

                    <h4>My HighLights</h4>
                    <div class="d-flex flex-wrap">
                        <div class="indicator-card p-3 col-md-4 col-12">
                            <div class="card-1  d-flex justify-content-between flex-row animate__animated animate__fadeIn animate__delay-1s">
                                <div class="col-3 p-1 d-flex ">
                                    <div class="col-12 bg-light rounded d-flex justify-content-center align-items-center">
                                        <div class="ico-wrapper position-relative">
<img src="assets/images/invoiceIco.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3">
                                    <h4 class="">Today Invoices</h4>
                                    <h3 class=" font-weight-bold">2</h3>
                                </div>

                            </div>
                        </div>

                        <div class="indicator-card p-3 col-md-4 col-12">
                            <div class="card-2  d-flex justify-content-between flex-row animate__animated animate__fadeIn animate__delay-1s">
                                <div class="col-3 p-1 d-flex ">
                                    <div class="col-12 bg-light rounded d-flex justify-content-center align-items-center">
                                        <div class="ico-wrapper position-relative">
<img src="assets/images/customerIco.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3">
                                    <h4 class="">Total Customers</h4>
                                    <h3 class=" font-weight-bold">2</h3>
                                </div>

                            </div>
                        </div>

                        <div class="indicator-card p-3 col-md-4 col-12">
                            <div class="card-3  d-flex justify-content-between flex-row animate__animated animate__fadeIn animate__delay-1s">
                                <div class="col-3 p-1 d-flex ">
                                    <div class="col-12 bg-light rounded d-flex justify-content-center align-items-center">
                                        <div class="ico-wrapper position-relative">
<img src="assets/images/leadsIco.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3">
                                    <h4 class="">My Leads</h4>
                                    <h3 class=" font-weight-bold">2</h3>
                                </div>

                            </div>
                        </div>

                        <div class="indicator-card p-3 col-md-4 col-12">
                            <div class="card-4  d-flex justify-content-between flex-row animate__animated animate__fadeIn animate__delay-1s">
                                <div class="col-3 p-1 d-flex ">
                                    <div class="col-12 bg-light rounded d-flex justify-content-center align-items-center">
                                        <div class="ico-wrapper position-relative">
<img src="assets/images/jobsIco.png"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-9 p-3">
                                    <h4 class="">My Job Completions</h4>
                                    <h3 class=" font-weight-bold">2</h3>
                                </div>

                            </div>
                        </div>



                        




                    </div>


                </div>


                <div class="w-100 mt-5">

                    <h4>News Feed</h4>
                    

                </div>






            </div>


        </div>


    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sideNavWrapper = document.querySelector('.sideNavWrapper');
            const sideNavRes = document.querySelector('.sideNavRes i');

            sideNavRes.addEventListener('click', function () {
                sideNavWrapper.classList.toggle('open');
            });
        });
    </script>

</body>

</html>