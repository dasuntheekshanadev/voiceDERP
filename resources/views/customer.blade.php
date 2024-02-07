<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../assets/css/alphastyles.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/font-awesome.min.css">


<title>VoiceD | Customer Care - Dashboard</title>
</head>

<body>

    <div class="main-body d-flex justify-content-center align-content-center p-lg-5 p-md-2 ">

        <div class="container-fluid dash-fluid p-lg-3 row flex-md-row mx-auto">
            <div class="col-lg-2 col-md-3 col-10 p-2 d-md-block align-content-start justify-content-start text-start  border-right sideNavWrapper ">
                <div class="col-md-12 position-relative pt-5 pt-md-0">
                    <img src="./assets/images/logo.png" alt="logo" class="w-100 " />
                </div>

                <ul class="navSide w-100 d-flex flex-column mt-3 list-unstyled">
                    <li>
                        <a href="home">
                            <div class="w-100 p-3 active bg-primary text-white rounded mb-2">
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

                </ul>
            </div>

            <div class="sideNavRes d-block d-md-none w-100 p-3 position-fixed z-index-6">
                <i class="fa fa-bars"></i>
            </div>

            <div class="col-lg-10 col-md-8  col-12 py-5 py-md-0">

                <div class="w-100" id="cutomerRegistration">
                    <h3>Customer Registration Form</h3>
                    <p>Please fill all the required Fields</p>

                    <div class="mt-2 w-100 border-1 border-top py-2 ">
                        <h5>Customer Details</h5>
                    </div>

                    <form action="{{ route('user.customer') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @include('common.alert')



                        <div class="d-flex p-2 flex-column">
                            <div class="row ">
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" id="floatingText" value="{{ old('firstname') }}" required />
                                        <label for="floatingTextarea">First Name <span class="">*</span></label>
                                        @error('firstname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="text" name="lastname" class="form-control" placeholder="Last Name" id="floatingText" value="{{ old('lastname') }}" required />
                                        <label for="floatingTextarea">Last Name <span class="">*</span></label>
                                        @error('lastname') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="text" name="nic" class="form-control" placeholder="NIC" id="floatingText" value="{{ old('nic') }}" required />
                                        <label for="floatingTextarea">NIC <span class="">*</span></label>
                                        @error('nic') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="text" name="address" class="form-control" placeholder="Address" id="floatingText" value="{{ old('address') }}" required />
                                        <label for="floatingTextarea">Address <span class="">*</span></label>
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row ">
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="text" name="phone" class="form-control" placeholder="contactno" id="floatingText" value="{{ old('phone') }}" required />
                                        <label for="floatingTextarea">Contact No <span class="">*</span></label>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12 px-1">
                                    <div class="form-floating mb-2">
                                        <input type="email" name="email" class="form-control" placeholder="Email" id="floatingText" value="{{ old('email') }}" required />
                                        <label for="floatingTextarea">Email <span class="">*</span></label>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            </div>



                            <!-- <div class="row ">
                                <div class="col-md-6 col-12 px-1">
                                    <div class="input-group mb-2">
                                        <label class="input-group-text" for="inputnic">Upload NIC</label>
                                        <input type="file" class="form-control" id="inputnic" required>
                                      </div>
                                </div>
                                <div class="col-md-6 col-12 px-1">
                                    <div class="input-group mb-2">
                                        <label class="input-group-text" for="inputbr" >Upload BR</label>
                                        <input type="file" class="form-control" id="inputbr" >
                                      </div>
                                </div>
                            </div> -->


                            <div class="row ">
                                <div class="col-md-6 col-12 px-1">
                                    <div class="input-group mb-2">
                                        <label class="input-group-text" for="ods">Other Documents</label>
                                        <input type="file" class="form-control" name="pdf_file" id="pdf_file" accept=".pdf" value="{{ old('pdf_file') }}" required>
                                        @error('pdf_file') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>




                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="excustomer">
                                <label class="form-check-label" for="excustomer">
                                    Existing Customer
                                </label>
                            </div>


                        </div>



                        <div class="mt-2 w-100 border-1 border-top py-2 ">
                            <h5>Package Details</h5>
                        </div>





                        <div class="d-flex p-2 flex-column">




                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6 col-12 px-1">
                                    <select class="form-select" aria-label="Default select example" name="invoiceditems" value="{{ old('invoiceditems') }}" required>
                                    @error('invoiceditems') <span class="text-danger">{{ $message }}</span> @enderror
                                        <option selected disabled>Select Package</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="col-md-6 col-12 px-1 mt-2 mt-md-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="baseplan" required>
                                        <label class="form-check-label" for="baseplan">
                                            Select Startup Plan
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-start align-items-start mt-3">

                                <div class="w-auto px-1">
                                    <button type="button" class="btn btn-outline-danger ">Clear Form</button>
                                </div>

                                <div class="w-auto px-1">
                                    <button type="submit"  class="btn btn-primary">Register</button>
                                </div>



                            </div>



                        </div>







                    </form>
                </div>

            </div>


        </div>


    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sideNavWrapper = document.querySelector('.sideNavWrapper');
            const sideNavRes = document.querySelector('.sideNavRes i');

            sideNavRes.addEventListener('click', function() {
                sideNavWrapper.classList.toggle('open');
            });
        });
    </script>

</body>

</html>