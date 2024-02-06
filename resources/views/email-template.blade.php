<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css"
        integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
        <title>VoiceD | Invoice </title>
</head>


<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    .page {
        width: 210mm;
        height: 297mm;
        margin: 20mm auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .header-right {
        background: rgb(240, 101, 119);
        background: linear-gradient(96deg, rgba(138, 80, 159, 1) 0%, rgba(240, 101, 119, 1) 72%);
        border-bottom-left-radius: 16px;

    }

    .border-bottom-1 {
        border-bottom: 1px solid #161616 !important;
        border-collapse: separate !important;
        border: none;
        margin-top: 5px;
        background-color: #e8e8e8;
    }

    footer {
        display: flex;
        text-align: center;
        background: rgb(240, 101, 119);
        background: linear-gradient(96deg, rgba(138, 80, 159, 1) 0%, rgba(240, 101, 119, 1) 72%);
        position: absolute;
        bottom: 0;
        width: 100%;
        justify-content: center;
        align-items: center;

    }

    table tr td {
        text-align: start !important;
    }

    .font-bold {
        font-weight: 600;
    }

    .content {
        padding: 20px;
    }

    .table-wrapper {
        display: flex;
        justify-content: space-between !important;
    }

    .invoice-table thead th,
    .invoice-table tr,
    .invoice-table td {
        border: 1px solid #b1b1b1;
    }

    .invoice-table td {
        padding: 5px;
    }

    .invoice-table tr:nth-child(even) {
        background-color: #eaeaea;
    }

    .mid-container {
        padding: 0;

    }

    .mid-container .col-6,
    .mid-container .col-6 {
        padding: 10px;

        text-align: start !important;
    }

    .amountbox {
        height: auto;
        background-color: #e8e8e8;
    }

    .mid-container table .head-td {
        background: rgb(240, 101, 119);
        background: linear-gradient(96deg, rgba(138, 80, 159, 1) 0%, rgba(240, 101, 119, 1) 72%);
        color: white;
        padding: 5px;
        border-bottom-left-radius: 16px;
        margin-bottom: 5px;
    }

    .mid-container table tr {
        border-bottom: 2px solid #f5f5f5;
    }

    .payment-details {
        height: auto;
        background-color: #e8e8e8;
        border-bottom-left-radius: 16px;
    }
    .pdflogo
    {
        position: relative;
        object-position: center;
        padding: 15px;
    }
    .pdflogo img {
        object-fit: cover;
        width: 100%;
    }
</style>


<body>
    <div class="page">
        <header class="container-fluid  text-white ">

            <div class="row ">
                <div class="col-3 bg-white">
                    <div class="w-100 position-relative pdflogo">
                        <img src="{{ $logo }}"/>
                    </div>
                </div>
                <div class="col-9 small header-right p-4 text-left justify-content-start align-items-start ">
                    <h4 class="text-left">VoiceD Marketing Services (PVT) LTD</h4>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 ">
                            <ul class="list-unstyled ">
                                <li>274/1, High Level Road, Navinna,
                                    Maharagama, Sri Lanka.</li>
                                <li><span class="font-bold"><i class="fa fa-phone" aria-hidden="true"></i> (+94) 114 686 689</span> </li>
                                <li><span class="font-bold">BR :</span>PV00205109</li>
                                <li><span class="font-bold">TIN :</span>PV00205109</li>
                                <li> <i class="fa fa-mail-bulk "></i> digital@voiced.lk</li>
                                <li><i class="fa fa-info-circle" aria-hidden="true"></i>
                                    www.voiced.lk</li>
                            </ul>
                        </div>
                        <!-- <div class="col-4">
                            <div
                                class="text-uppercase p-2 bg-dark d-flex justify-content-center align-items-center ">
                                <h3 class="text-center">Invoice</h3>
                            </div>
                        </div> -->
                    </div>

                </div>
            </div>

        </header>

        <div class="content">
            <div class="container-fluid p-2 text-center">
                <div class="table-wrapper row text-left w-100 col-12 mx-auto justify-content-between">
                    <div class="p-0 d-flex justify-content-start text-left">
                        <h5 class="text-left">Customer</h5>
                    </div>

                    <table class="col-6 small text-left">
                        <tr class="w-100">
                            <td class="text-left col-3 w-25">Name</td>
                            <td class="col-9">
                                <div class="d-flex w-100 border-bottom-1">

                                </div>
                        </tr>

                        <tr class="">
                            <td class="text-left col-3 w-25">Address</td>
                            <td class="col-9">
                                <div class="d-flex w-100 border-bottom-1">

                                </div>
                            </td>
                        </tr>

                        <tr class="">
                            <td class="text-left col-3 w-25">Phone</td>
                            <td class="col-9">
                                <div class="d-flex w-100 border-bottom-1">

                                </div>
                            </td>
                        </tr>

                        <tr class="">
                            <td class="text-left col-3 w-25">Email</td>
                            <td class="col-9">
                                <div class="d-flex w-100 border-bottom-1">

                                </div>
                            </td>
                        </tr>

                    </table>
                    <table class="col-5 text-left small">
                        <tr class="lext-left">
                            <td class="text-left">Invoice No</td>
                            <td><input type="text" readonly class="border-1"></td>

                        </tr>

                        <tr class="lext-left">
                            <td class="lext-left">Order No</td>
                            <td><input type="text" readonly class="border-1"></td>

                        </tr>

                        <tr class="lext-left">
                            <td class="lext-left">Invoice Date</td>
                            <td><input type="text" readonly class="border-1"></td>

                        </tr>

                        <tr class="lext-left">
                            <td class="lext-left">Due Date</td>
                            <td><input type="text" readonly class="border-1"></td>

                        </tr>
                    </table>


                    <table class="w-100 border-1 mt-3 invoice-table">
                        <thead>
                            <th>#No</th>
                            <th>Desciption</th>
                            <th>Unity Price (LKR)</th>
                            <th>Qty</th>
                            <th>Total (LKR)</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>

                            <tr>
                                <td>#1</td>
                                <td>Facebook Campaign</td>
                                <td>50,000</td>
                                <td>1</td>
                                <td>50,000</td>
                            </tr>
                        </tbody>
                    </table>


                    <div class="mid-container mx-auto w-100 d-flex row mt-3 ">
                        <div class="col-6 text-left amountbox ">
                            <h6 class="font-bold">Amount in Letters</h6>
                        </div>
                        <div class="col-6  text-left ">
                            <table class="w-100">
                                <tr>
                                    <td class="col-4 head-td">
                                        Sub Total
                                    </td>
                                    <td class="col-8 p-1">
                                        <h5 class="small font-bold">LKR</h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-4 head-td">
                                        Discounts
                                    </td>
                                    <td class="col-8 p-1">
                                        <h5 class="small font-bold">LKR</h5>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-4 head-td">
                                        Total
                                    </td>
                                    <td class="col-8 p-1">
                                        <h5 class="small font-bold">LKR</h5>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>


                    <div class="mid-container mx-auto w-100 d-flex h-auto row mt-3 ">
                        <div class="col-6 text-left payment-details small">
                            <h6 class="font-bold">Payment details</h6>
                            <ul class="list-unstyled">
                                <li>Beneficiary Name : VoiceD Marketing Services (Pvt) Ltd</li>
                                <li>Bank Name : People’s Bank</li>
                                <li>Branch : Union Place</li>
                                <li>Bank Account No : 014200180014521</li>
                                <li>Branch Code : 014</li>
                            </ul>
                        </div>
                        <div class="col-6  text-center relative">
                            <div class="d-flex flex-column mt-5">
                                <p>______________________________</p>
                                <p class="small">Authorized Signature</p>
                            </div>
                            
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <footer>
            <p class="text-white mt-2 small">© VoiceD | Invoice </p>  
            
        </footer>
    </div>
</body>

</html>