@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    YOUR FUTURE CAREER
                </p>
                <h2 class="primary-header">
                    Start Invest Today
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="item-bootcamp">
                            <img src="{{ asset('images/item_bootcamp.png') }}" alt="" class="cover">
                            <h1 class="package text-uppercase">
                                {{ $camp->title }}
                            </h1>
                            <p class="description">
                                Bootcamp ini akan mengajak Anda untuk belajar penuh mulai dari pengenalan dasar
                                sampai membangun sebuah projek asli
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-1 col-12"></div>
                    <div class="col-lg-6 col-12">
                        <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name</label>
                                <input required name="name" type="text" value="{{ Auth::user()->name }}" class="form-control" id="name" disabled>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input required name="email" type="email" class="form-control" id="email" value="{{ Auth::user()->email }}" disabled>
                            </div>
                            <div class="mb-4">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input required name="occupation" type="text" class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" id="occupation" value="{{ old('occupation') ?: Auth::user()->occupation }}">
                                @if ($errors->has('occupation'))
                                <small class="text-danger">{{ $errors->first('occupation') }}</small>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label for="card_number" class="form-label">Card Number</label>
                                <input required name="card_number" type="number" class="form-control {{ $errors->has('card_number') ? 'is-invalid' : '' }}" id="card_number" value="{{ old('card_number') }}">
                                @if ($errors->has('card_number'))
                                <small class="text-danger">{{ $errors->first('card_number') }}</small>
                                @endif
                            </div>
                            <div class="mb-5">
                                <div class="row">
                                    <div class="col-lg-7 col-12">
                                        <label for="expired" class="form-label">Expired</label>
                                        <input required name="expired" type="month" class="form-control {{ $errors->has('expired') ? 'is-invalid' : '' }}" id="expired" value="{{ old('expired') }}">
                                        @if ($errors->has('expired'))
                                        <small class="text-danger">{{ $errors->first('expired') }}</small>
                                        @endif
                                    </div>
                                    <div class="col-lg-5 col-12">
                                        <label for="cvc" class="form-label">CVC</label>
                                        <input required name="cvc" type="number" class="form-control {{ $errors->has('cvc') ? 'is-invalid' : '' }}" id="cvc" maxlength="3" value="{{ old('cvc') }}">
                                        @if ($errors->has('cvc'))
                                        <small class="text-danger">{{ $errors->first('cvc') }}</small>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Pay Now</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and
                                encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
