<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/assets/css/alphastyles.css">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">

</head>

<title>VoiceD | Customer Care - Dashboard</title>
</head>

<body>

    <div class="main-body d-flex justify-content-center align-content-center p-lg-5 p-md-2 ">

        <div class="container-fluid dash-fluid p-lg-3 row flex-md-row mx-auto">
            <div
                class=" col-lg-2 col-md-3 col-10 p-2 d-md-block align-content-start justify-content-start text-start  border-right sideNavWrapper">
                <div class="col-md-12 position-relative pt-5 pt-md-0 ">
                    <img src="./assets/images/logo.png" alt="logo" class="w-100 " />
                </div>

                <ul class="navSide w-100 d-flex flex-column mt-3 list-unstyled">
                    <li>
                        <a href="./">
                            <div class="w-100 p-3 mb-2">
                                <i class="fa fa-user mr-2"></i> Customer Registraion
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="customer-insight">
                            <div class="w-100 p-3   mb-2">
                                <i class="fa fa-users mr-2"></i> Customer
                            </div>
                        </a>

                    </li>


                    <li>
                        <a href="invoices">
                            <div class="w-100 p-3 active bg-primary text-white rounded mb-2">
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
                <div class="w-100 invoiceTable" id="cutomerInsight">

                    <div class="mb-3 row ">
                        <div class="col-md-6 col-12 ">
                            <div class="row d-flex">
                                <div class="w-75">
                                    <input type="text" class="form-control" placeholder="Search..." />
                                </div>
                                <div class="w-25 d-flex">
                                    <button type="button" class="btn btn-primary ">Search</button>
                                </div>


                            </div>
                           
                            
                        </div>
                    
                            


                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">InvoiceID</th>
                                <th scope="col">OrderID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Organization</th>
                                <th scope="col">Description</th>
                                <th scope="col">Invoice Date</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Package</th>
                                <th scope="col">Unit Price(LKR)</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Total</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Advance</th>
                                <th scope="col">Total</th>
                                <th scope="col">Outstanding</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>
                           

                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>



                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>



                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>



                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>



                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>


                            <tr>
                                <th scope="row">1</th>
                                <td>056932</td>
                                <td>900785</td>
                                <td>Sahan Jayathilake</td>
                                <td>FineCode IT Solutions</td>
                                <td>E-Commerce Website</td>
                                <td>08/12/2023</td>
                                <td>10/2/2024</td>
                                <td>Basic</td>
                                <td>210,000</td>
                                <td>1</td>
                                <td>210,000</td>
                                <td>0</td>
                                <td>50,000</td>
                                <td>210,000</td>
                                <td>160,000</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn btn-outline-primary"> Edit</button>
                                    </div>
                                </td>

                            </tr>

                        </tbody>
                    </table>
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
</body>

</html>