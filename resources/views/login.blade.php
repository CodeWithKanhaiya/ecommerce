@extends('layouts.main')
@push('title')
    <title>Login</title>
@endpush

@section('content')

<div class="container-fluid bg-light p-4">
    <h1 class="text-center">
        <i class="fa-solid fa-user"></i> User Login
    </h1>
</div>

<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">

                    <div class="col-lg-6">
                        <img src="{{ asset('assets/images/register.jpg') }}" class="img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <form id="loginForm">

                            {{-- Phone Number --}}
                            <div class="mb-3">
                                <div class="form-text mb-2">
                                    Please enter your mobile number
                                </div>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    maxlength="10"
                                    pattern="[0-9]{10}"
                                    class="form-control form-control-lg"
                                    placeholder="Enter 10 digit mobile number"
                                    required
                                >
                            </div>

                            {{-- OTP Section --}}
                            <div class="mb-3 otp-section d-none">
                                <div class="form-text mb-2">
                                    Please enter your OTP
                                </div>

                                <input
                                    type="text"
                                    id="otp"
                                    name="otp"
                                    maxlength="4"
                                    class="form-control form-control-lg"
                                    placeholder="Enter OTP"
                                >
                            </div>

                            <button
                                type="submit"
                                id="loginBtn"
                                class="btn theme-orange-btn text-light form-control form-control-lg">
                                Login
                            </button>

                            <div id="loginError" class="text-danger mt-3"></div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById('loginForm');
    const phoneInput = document.getElementById('phone');
    const otpInput = document.getElementById('otp');
    const otpSection = document.querySelector('.otp-section');
    const errorDiv = document.getElementById('loginError');
    const loginBtn = document.getElementById('loginBtn');

    form.addEventListener('submit', function (e) {

        e.preventDefault();

        const phone = phoneInput.value.trim();
        const otp = otpInput.value.trim();

        errorDiv.textContent = '';

        // Phone number validation
        if (!/^[0-9]{10}$/.test(phone)) {
            errorDiv.textContent = 'Please enter a valid 10 digit mobile number.';
            return;
        }

        loginBtn.disabled = true;

        // OTP section visible hai to OTP verify hoga
        if (!otpSection.classList.contains('d-none')) {

            if (!otp) {
                errorDiv.textContent = 'Please enter OTP.';
                loginBtn.disabled = false;
                return;
            }

            fetch('{{ route("authentication.verify.otp") }}', {
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
                    window.location.href = data.dashboard_url;
                } else {
                    errorDiv.textContent = data.error || 'Login failed.';
                }

            })
            .catch(error => {
                console.error('OTP Error:', error);
                errorDiv.textContent = 'Something went wrong. Please try again.';
            })
            .finally(() => {
                loginBtn.disabled = false;
            });

        } else {

            // Phone number check hoga
            fetch('{{ route("verify.phone") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({
                    phone: phone
                })
            })
            .then(response => response.json())
            .then(data => {

                if (data.exists) {
                    otpSection.classList.remove('d-none');
                    otpInput.setAttribute('required', 'required');
                    otpInput.focus();
                    errorDiv.textContent = '';
                } else {
                    errorDiv.textContent = data.error || 'Phone number not registered.';
                }

            })
            .catch(error => {
                console.error('Phone Error:', error);
                errorDiv.textContent = 'Something went wrong. Please try again.';
            })
            .finally(() => {
                loginBtn.disabled = false;
            });

        }

    });

});
</script>

@endsection
