<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="contact__form">

        <form action="{{ route('user.customer') }}" method="POST">
            @csrf

            @include('common.alert')

            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="empno" placeholder="EMP No" value="{{ old('empno') }}">
                    @error('empno') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="customername" placeholder="Customer Name" value="{{ old('customername') }}">
                    @error('customername') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="business" placeholder="Business" value="{{ old('business') }}">
                    @error('business') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
                    @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="text" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}">
                    @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="col-xxl-6 col-xl-6 col-12">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-12 col-xl-12 col-12">
                    <label>Invoiced Items</label>
                    <select class="form-select" placeholder="" name="invoiceditems" value="{{ old('invoiceditems') }}">
                        @error('invoiceditems') <span class="text-danger">{{ $message }}</span> @enderror
                        <option value=""></option>
                        <option value="Startup Fee">Startup Fee</option>
                        <option value="Basic Package">Basic Package</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-xxl-6 col-xl-6 col-12">
                    <label for="attachment">File Uploader</label><br>
                    <input type="file" class="form-select" name="pdf_file" id="pdf_file" accept=".pdf" value="{{ old('pdf_file') }}">
                    @error('pdf_file') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12">
                    <div class="btn_wrapper">
                        <button type="submit" class="wc-btn-primary btn-hover btn-item"><span></span> Register <br>Now <i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>