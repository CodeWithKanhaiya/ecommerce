@extends('layouts.main')
@push('title')
    <title>Checkout Page</title>
@endpush
@php
    $user = auth()->user();
    $billing = null;
    if ($user && $user->is_login) {
        $billing = App\Models\Billing::where('user_id', $user->user_id)->first();
    }
@endphp
@section('content')
    <div class="container-flue bg-light p-4">
        <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i>Checkout</h1>
    </div>
    {{-- Checkout --}}
    <section>
        <div class="container  my-5">
            <div class="row">
                <div class="col-lg-1 mb-5">
                    <a href="{{ url('cart-list/product') }}" class="btn theme-orange-btn text-white"> <i
                            class="fa-solid fa-arrow-left"></i>&nbsp;Back</a>
                </div>
                <h2>Billingn Details</h2>
                <div class="col-lg-12">
                    <form id="billingForm" action="">
                        <div class="row my-3">
                            {{-- if not login --}}
                            <div class="col-lg-12 pb-3">
                                <input id="phone" name="phone" type="tel" class="form-control" maxlength="10"
                                    placeholder="Enter your phone No."
                                    value="{{ $user && $user->is_login ? $user->phone : '' }}"
                                    @if ($user && $user->is_login) readonly @endif>
                            </div>
                            <div class="col-lg-12 mb-3">
                                @php
                                    $selectedCountry = $billing->country ?? '';
                                @endphp
                                <select class="form-select form-control" name="country"
                                    @if ($user && $user->is_login) disabled @endif>

                                    <option selected>Select your Country</option>
                                    <option value="India" {{ $selectedCountry == '1' ? 'selected' : '' }}>India</option>

                                </select>
                            </div>
                            <div class="col-lg-6 pb-3">
                                <input type="text" name="fullname" class="form-control" placeholder="Full Name"
                                    value="{{ $billing->fullname ?? '' }}"
                                    @if ($user && $user->is_login) readonly @endif>
                            </div>

                            <div class="col-lg-6 pb-3">
                                <input type="email" name="email" class="form-control" placeholder="Email"
                                    value="{{ $billing->email ?? '' }}" @if ($user && $user->is_login) readonly @endif>
                            </div>

                            <div class="col-lg-6 pb-3">
                                <input type="number" name="pincode" class="form-control" placeholder="Pincode"
                                    {{-- value="{{$billing->pincode}}" --}} value="{{ $billing->pincode ?? '' }}"
                                    @if ($user && $user->is_login) readonly @endif>
                            </div>
                            <div class="col-lg-6 pb-3">
                                <input type="text" name="landmark" class="form-control" placeholder="Landmark"
                                    {{-- value="{{$billing->landmark}}" --}} value="{{ $billing->pincode ?? '' }}"
                                    @if ($user && $user->is_login) readonly @endif>
                            </div>
                            <div class="col-lg-6 pb-3">
                                @php
                                    $selectedCity = $billing->city ?? '';
                                @endphp
                                <select class="form-select form-control" name="city"
                                    @if ($user && $user->is_login) disabled @endif>
                                    <option selected>Select your City</option>
                                    <option value="Lucknow" {{ $selectedCity == '1' ? 'selected' : '' }}>Lucknow</option>
                                </select>
                                @if ($user && $user->is_login)
                                    <input type="hidden" name="city" value="{{ $selectedCity }}">
                                @endif
                            </div>
                            <div class="col-lg-6 pb-3">
                                @php
                                    $selectedState = $billing->state ?? '';
                                @endphp
                                <select class="form-select form-control" name="state"
                                    @if ($user && $user->is_login) disabled @endif>
                                    <option selected>Select your State</option>
                                    <option value= "Utter Pradesh" {{ $selectedState == '1' ? 'selected' : '' }}>Utter
                                        Pradesh
                                    </option>

                                </select>
                            </div>
                            <div class="col-lg-12 pb-3">
                                <textarea class="form-control"name="address" placeholder=" Address"
                                    rows="3"@if ($user && $user->is_login) readonly @endif>
                                     {{-- {{$billing->address}} --}}
                                     {{ $billing->address ?? '' }}
                                </textarea>
                            </div>
                            @if (!($user && $user->is_login))
                                <div class="col-lg-12 pb-3 text-end">
                                    <button type="submit" class="btn theme-green-btn btn-lg text-white">Submit</button>
                                </div>
                            @endif

                        </div>
                    </form>
                </div>
                {{-- Otp Model --}}
                <div class="modal fade" id="otpModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form id="otpForm" action="">
                                <div class="modal-header">
                                    <h5 class="modal-title">Enter OTP</h5>
                                </div>
                                <div class="modal-body">
                                    <input type="text" name="otp" id="otp" maxlength="4" class="form-control"
                                        placeholder="Enter 4-digit OTP">
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn theme-green-btn text-white">Verify OTP</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Payment --}}

    @if ($user && $user->is_login)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRedioDefault" value="UPI"
                                id="upi" checked>
                            <label class="form-check-label" for="upi">
                                <h5>UPI</h5>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRedioDefault" value="Card"
                                id="card">
                            <label class="form-check-label" for="card">
                                <h5>Credit/Debit Card</h5>
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRedioDefault" value="COD"
                                id="cod">
                            <label class="form-check-label" for="cod">
                                <h5>Cash on Delivery</h5>
                            </label>
                        </div>

                        <div>
                            <a id="placeOrderBtn" class="btn theme-orange-btn text-light rounded-pill my-4 px-3 py-2">
                                Place Order
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <script>
            document.addEventListener('DOMContentLoaded', function() {

                const placeOrderBtn = document.getElementById('placeOrderBtn');

                if (!placeOrderBtn) {
                    return;
                }

                placeOrderBtn.addEventListener('click', function() {

                    const cart = JSON.parse(localStorage.getItem('cart')) || [];

                    if (cart.length === 0) {
                        alert('Your cart is empty');
                        return;
                    }

                    const selectedPayment = document.querySelector(
                        'input[name="flexRedioDefault"]:checked'
                    );

                    if (!selectedPayment) {
                        alert('Please select payment mode');
                        return;
                    }

                    const paymentMode = selectedPayment.value;

                    fetch('{{ route('place.order') }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                cart: cart,
                                payment_mode: paymentMode
                            })
                        })
                        .then(response => response.json())
                        .then(data => {

                            if (data.success) {
                                alert('Order placed successfully!');
                                localStorage.removeItem('cart');
                                window.location.href = '{{ url('/') }}';
                            } else {
                                alert(data.message || 'Failed to place order');
                            }

                        })
                        .catch(error => {
                            console.error('Order Error:', error);
                            alert('Something went wrong!');
                        });

                });

            });
        </script>
    @endif

    <script>
        document.getElementById('otpForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const phone = document.getElementById('phone').value;
            const otp = document.getElementById('otp').value;

            fetch('{{ route('verify.otp') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        phone: phone,
                        otp: otp
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.verified) {
                        alert('User Created & Billing Saved');
                        location.reload();
                    } else {
                        alert('Invalid OTP');
                    }
                });

        });

        document.getElementById('billingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const plainForm = Object.fromEntries(formData.entries());
            fetch('{{ route('submit.phone.billing') }}', {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify(plainForm)
                })
                .then(response => response.json())

                .then(data => {
                    if (data.otp_sent) {
                        $('#otpModal').modal('show');
                    }
                    //else {
                    //     (data.error === 'phone_exists')
                    //     alert('phonen number already registered.')
                    // }
                    else if (data.error === 'phone_exists') {
                        alert('Phone number already registered.');
                    }
                });

        });

        // document.getElementById('placeOrderBtn').addEventListener('click', function() {

        //     // Get cart from localStorage
        //     const cart = JSON.parse(localStorage.getItem('cart')) || [];

        //     if (cart.length === 0) {
        //         alert('Your cart is empty');
        //         return;
        //     }

        //     // Get selected payment mode
        //     const selectedPayment = document.querySelector(
        //         'input[name="flexRedioDefault"]:checked'
        //     );

        //     if (!selectedPayment) {
        //         alert('Please select payment mode');
        //         return;
        //     }

        //     const paymentMode = selectedPayment.nextElementSibling.innerText.trim();

        //     // Send order data
        //     fetch('{{ route('place.order') }}', {
        //             method: 'POST',

        //             headers: {
        //                 'Content-Type': 'application/json',
        //                 'Accept': 'application/json',
        //                 'X-CSRF-TOKEN': '{{ csrf_token() }}'
        //             },

        //             body: JSON.stringify({
        //                 cart: cart,
        //                 payment_mode: paymentMode
        //             })
        //         })

        //         .then(response => response.json())

        //         .then(data => {

        //             if (data.success) {

        //                 alert('Order placed successfully!');

        //                 localStorage.removeItem('cart');

        //                 window.location.href = '{{ url('/') }}';

        //             } else {

        //                 alert(data.message || 'Failed to place order');

        //             }

        //         })

        //         .catch(error => {
        //             console.error('Order Error:', error);
        //             alert('Something went wrong!');
        //         });

        // });
    </script>
@endsection
