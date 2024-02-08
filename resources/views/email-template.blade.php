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

        .header-wrapper,
        .footer-wrapper {
            /* background-color: rgb(138, 80, 159) !important;
            text-align: center !important;
            color: #FAFAFA !important; */
            position: relative;
            object-position: center;
        }

        .footer-wrapper img,
        .header-wrapper img {
            width: 100%;
        }

        .content {
            padding: 20px;
        }

        footer {
            text-align: center;
            width: 100%;
            position: fixed;
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
            text-align: center !important;
            color: #FAFAFA !important;
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
            background-color: #3D3D3D;
            color: #FFFFFF;
            font-weight: 400 !important;
        }

        .invoice-table table thead th {
            padding: 10px;
        }

        .invoice-table table tbody tr td {
            padding: 10px;
        }

        .amount-box {
            background-color: #F0F0F0;
            padding: 5px;
        }
    </style>
</head>

<body>
    <header>
        <div class="header-wrapper">
            <img src="https://erp.voiced.lk/public/general/pdfheader.png" class="pdfheader">
        </div>
    </header>
    <div class="content">
        <!-- Your dynamic content goes here -->
        <div class="table-wrapper ">
            <table class="customer-details ">
                <tr>
                    <td>Name</td>
                    <td>{{ $name }}</td>
                </tr>
                <tr>
                    <td>NIC</td>
                    <td>{{ $nic }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <td>Contact No</td>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <td>Address</td>
                    <td>{{ $address }}</td>
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
                        <td>StartUp Fee</td>
                        <td>2,990</td>
                        <td>1</td>
                        <td>2,990</td>
                        <td>2,990</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>{{ $invoiceditems }}</td>
                        <td>3,000</td>
                        <td>1</td>
                        <td>3,000</td>
                        <td>3,000</td>
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
        <div class="footer-wrapper">
            <img src="https://erp.voiced.lk/public/general/pdffooter.png" class="pdfheader">
        </div>
    </footer>
</body>

</html>