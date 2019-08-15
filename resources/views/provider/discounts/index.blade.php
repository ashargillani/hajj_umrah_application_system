@extends('provider.layout.provider-main')
@section('page-breadcrumb')
    <li><i class="fa fa-home"></i><a href="{{ route('provider.dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('discount.index') }}">Discounts</a></li>
@endsection
@section('page-content')
    <div class="panel-form">
        <div class="row">
            <div class="col-xs-12 col-sm-8">
                <h2><i class="fa fa-dollar " aria-hidden="true"></i> &nbsp;Discounts</h2>
                <label>Discounts offered against packages</label>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                @include('provider.layout.partials.message')
                <div id="dataTableContainer" class="data-table-container table-responcive">
                    <div class="panel-body">
                        <table id="table_id" class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Class</th>
                                <th>Total Days</th>
                                <th>Stars</th>
                                <th>Price</th>
                                <th>Disocunt</th>
                                <th>Discounted Price</th>
                                @if(Auth::user()->hasRole('provider'))
                                    <th>Update</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($packages) >= 1)
                                @foreach($packages as $package)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="title">{{ $package->title }}</td>
                                        <td class="class">{{ $package->class }}</td>
                                        <td class="total-days">{{ $package->totalDays }}</td>
                                        <td class="package-stars">{{ $package->packageStars }}</td>
                                        <td class="price">{{ $package->price }}</td>
                                        <td class="amount">{{ (isset($package->discount->amount)) ? $package->discount->amount : 0  }}</td>
                                        <td class="discounted-price">{{ (isset($package->discount)) ? $package->price - $package->discount->amount : $package->price }}</td>
                                        @if(Auth::user()->hasRole('admin'))
                                            <td>
                                                <a>
                                                    <button class="btn btn-info update-discount-button" value="{{ $package }}">Update</button>
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="9" class="text-center">
                                        <h4 class="label-info">No Mails have been added uptill now !</h4>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal modal-lg" id="discountModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h3><i class="fa fa-percent" aria-hidden="true"></i> &nbsp;Update Discounts</h3>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="panel-form">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <h6><b>Discount offered against package</b></h6>
                                <hr />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel-body">
                                    <form action="" id="discountUpdateForm" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <fieldset>
                                            <div class="form-group row">
                                                <label for="package_title" class="col-sm-3 col-form-label">Title</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="package_title" name="package_title" placeholder="Title" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="description" class="col-sm-3 col-form-label">Description</label>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Description" required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="package_price" class="col-sm-3 col-form-label">Price:</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="package_price" name="package_price" placeholder="Address" readonly>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Discount Unit:</label>
                                                <div class="col-sm-9">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input custom-checkbox" value="percentage" type="radio" name="discount_unit" id="discount_unit" required>
                                                        <label class="form-check-label" for="discount_unit">
                                                            Percentage
                                                        </label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input custom-checkbox" value="amount" type="radio" name="discount_unit" id="discount_unit" checked>
                                                        <label class="form-check-label" for="discount_unit">
                                                            Amount
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="amount" class="col-sm-3 col-form-label">Discount:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="discounted_price" class="col-sm-3 col-form-label">Discounted Price:</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="discounted_price" name="discounted_price" placeholder="Discounted Price" readonly>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row m-20-top">
                                            <div class="col-sm-12">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" id="discountModalSubmitBtn" name="discountModalSubmitBtn" class="btn btn-primary pull-right"><i class="fa fa-plus">&nbsp;</i>Update Package</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('additional-scripts')
    <script src="{{ asset('js/datatables.min.js') }}" type="text/javascript"></script>
    @include('provider.layout.partials.datatables')
    <script>
        $(document).ready(function () {
            var discountId = null;
            var postDiscountUrl = "{{ route('discount.update_discount') }}";
            var redirectToUrl = "{{ route('discount.index') }}";
            var discountModal = $('#discountModal');
            var packageId = null;
            var token = "{{ csrf_token() }}";
            console.log(postDiscountUrl);
            $('.update-discount-button').click(function () {
                var packageToUpdate = JSON.parse($(this).val());
                console.log(packageToUpdate);
                discountModal.find('#package_title').val(packageToUpdate.title);
                discountModal.find('#package_price').val(packageToUpdate.price);
                discountModal.find('#description').val(packageToUpdate.description);
                if (packageToUpdate.discount) {
                    discountId = packageToUpdate.discount.id;
                    packageId = packageToUpdate.id;
                    if (packageToUpdate.discount.amount) {
                        discountModal.find('#description').val(packageToUpdate.discount.description);
                        discountModal.find('#amount').val(packageToUpdate.discount.amount);
                        discountModal.find('#discounted_price').val(packageToUpdate.price - packageToUpdate.discount.amount);
                    }
                } else {
                    packageId = packageToUpdate.id;
                    discountModal.find('#amount').val(0);
                    discountModal.find('#discounted_price').val(packageToUpdate.price);
                }
                $('#discountModal').modal('show');
            });

            $('input[type=radio][name=discount_unit], input#amount').change(function () {
                let discountUnitValue = $('input[name=discount_unit]:checked').val();
                let discountAmount = $('input#amount');
                let discountPriceField = $('input#discounted_price');
                let price = $('input#package_price').val();
                if (
                    discountUnitValue === 'percentage' &&
                    discountAmount.val() >= 0 &&
                    discountAmount.val() <= 100
                ) {
                    discountPriceField.val(price - ((price/100) * discountAmount.val()));
                } else if (
                    discountUnitValue === 'amount' &&
                    discountAmount.val() <= price &&
                    discountAmount.val() >= 0
                ){
                    discountPriceField.val(price - discountAmount.val());
                } else if (discountUnitValue === 'percentage') {
                    discountAmount.val(0);
                    discountPriceField.val(price);
                    alert("The percentage for discount must be non-negative and less than 100");
                } else {
                    discountAmount.val(0);
                    discountPriceField.val(price);
                    alert("The amount for discounted price must be non-negative and less than actual price");
                }
            });

            $('#discountUpdateForm').submit(function (e) {
                e.preventDefault();
                let descriptionField = discountModal.find('#description');
                let amountField = discountModal.find('#amount');
                let priceField = discountModal.find('#package_price');
                let discountUnitValue = $('input[name=discount_unit]:checked').val();
                let discountedAmount = 0;
                // Calculate discounted amount to be offered in case of percentage
                if (discountUnitValue === 'percentage') {
                    discountedAmount = (priceField.val() * amountField.val()) / 100;
                } else {
                    discountedAmount = amountField.val();
                }
                if ( !descriptionField.val()) {
                    alert("Please explain that why are you offering this discount. A small description would do good !")
                    descriptionField.focus();
                } else {
                    $.ajax({
                        url: (discountId) ? postDiscountUrl + "/" + discountId: postDiscountUrl + "/",
                        method:"POST",
                        data:{
                            "_token": token,
                            "id": (discountId) ? discountId : "",
                            "description": descriptionField.val(),
                            "package_id": packageId,
                            "amount": discountedAmount
                        },
                        dataType: 'JSON',
                        success: function( data ) {
                            console.log(data);
                            window.location.href = redirectToUrl;
                        },
                    });
                }
            });

            $('#discountModalSubmitBtn').click(function () {
                $('#discountUpdateForm').submit();
            });
        });
    </script>
@endsection