<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your PDF Title</title>

    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            position: relative;
            overflow-x: hidden !important;
            box-sizing: border-box;
        }

        header {

            width: 100%;
        }

        .header-wrapper {
            display: flex;
            padding: auto;
            width: 100%;
            text-align: center !important;
            justify-content: center !important;
            align-items: center !important;
        }

        .content {
            padding: 20px;
        }

        footer {

            text-align: center;
            background: rgb(138, 80, 159);
            position: fixed;
            width: 100%;
            display: inline-block;
            justify-content: center;
            align-items: center;
            padding: 10px;
            bottom: 0 !important;

        }



        .customer-details,
        .invoice-details {
            width: 100%;
            padding: 10px;

        }

        .invoice-details tr td,
        .customer-details tr td {
            padding: 5px;
            font-size: 10pt !important;
            border: 1px solid #565656;
        }



        .header-wrapper {
            background-color: rgb(138, 80, 159) !important;
            text-align: center !important;
            color: #fafafa !important;
        }

        .header-wrapper ul {
            list-style: none !important;

        }

        .invoice-details tr td:first-child,
        .customer-details tr td:first-child {
            font-weight: 600 !important;

        }

        .invoice-table {
            width: 100%;
        }

        .invoice-table table {
            width: 100%;
        }

        .invoice-table table thead {
            background-color: #3d3d3d;
            color: #ffffff;
            font-weight: 400 !important;
        }

        .invoice-table table thead th {
            padding: 10px;
        }

        .invoice-table table tbody tr td {
            padding: 10px;
        }

        .amount-box {
            background-color: #f0f0f0;
            padding: 5px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-wrapper">


            <ul class="">
                <li>
                    <h1>
                        274/1, High Level Road, Navinna,
                        Maharagama, Sri Lanka.
                    </h1>
                </li>
                <li><span class="font-bold"><i class="fa fa-phone" aria-hidden="true"></i> (+94) 114 686 689</span>
                </li>
                <li><span class="font-bold">BR :</span>PV00205109</li>
                <li><span class="font-bold">TIN :</span>PV00205109</li>
                <li> <i class="fa fa-mail-bulk "></i> digital@voiced.lk</li>
                <li><i class="fa fa-info-circle" aria-hidden="true"></i>
                    www.voiced.lk</li>
            </ul>

        </div>
    </header>

    <div class="content">
        <!-- Your dynamic content goes here -->
        <div class="table-wrapper ">
            <table class="customer-details ">
                <tr>
                    <td>Name</td>
                    <td>Kasun Perera</td>
                </tr>

                <tr>
                    <td>NIC</td>
                    <td>200015225489</td>
                </tr>

                <tr>
                    <td>BR No</td>
                    <td>THY89865</td>
                </tr>

                <tr>
                    <td>Contact No</td>
                    <td>0112548596</td>
                </tr>

                <tr>
                    <td>Address</td>
                    <td>No 34/B, Malibon Road, Mawanalla </td>
                </tr>
            </table>


            <table class="invoice-details">
                <tr>
                    <td>Invoice No</td>
                    <td>#554822</td>
                </tr>

                <tr>
                    <td>Order Id</td>
                    <td>#214020</td>
                </tr>

                <tr>
                    <td>Invoice Date</td>
                    <td>23/02/2024</td>
                </tr>

                <tr>
                    <td>Due Date</td>
                    <td>23/02/2024</td>
                </tr>

            </table>


        </div>


        <section class="invoice-table">
            <table class="invoice-table-wrapper">
                <thead>
                    <th>#No</th>
                    <th>Description</th>
                    <th>Unit Price (LKR)</th>
                    <th>QTY</th>
                    <th>Advance</th>
                    <th>SubTotal</th>

                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>E-Commerce Web</td>
                        <td>285,000</td>
                        <td>1</td>
                        <td>120,000</td>
                        <td>285,000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>E-Commerce Web</td>
                        <td>285,000</td>
                        <td>1</td>
                        <td>120,000</td>
                        <td>285,000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>E-Commerce Web</td>
                        <td>285,000</td>
                        <td>1</td>
                        <td>120,000</td>
                        <td>285,000</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>E-Commerce Web</td>
                        <td>285,000</td>
                        <td>1</td>
                        <td>120,000</td>
                        <td>285,000</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <div class="amount-box">
                <h5>Amount in Letters</h5>
                <div class="letter-box">

                </div>
            </div>
        </section>


    </div>



    <footer>
        <p>&copy;
            <?php echo date("Y"); ?> Your Company Name. All rights reserved.
        </p>
    </footer>
</body>

</html>