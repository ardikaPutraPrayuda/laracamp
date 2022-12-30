@extends('layouts.app')

@section('content')
<section class="checkout">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    YOUR FUTURE
                </p>
                <h2 class="primary-header">
                    Start your future here
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9 col-12">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('checkout.store', $camp->id) }}" class="basic-form" method="POST">
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Full Name</label>
                                <input name="name"type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ Auth::user()->name }}" required/>
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Alamat Email</label>
                                <input name="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ Auth::user()->email }}" required/>
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Jenis Kelamin</label>
                                <input name="occupation" type="text" class="form-control {{ $errors->has('occupation') ? 'is-invalid' : '' }}" value="{{ old('occupation') ?: Auth::user()->occupation }}" placeholder="Laki-laki/Perempuan" required/>
                                @if ($errors->has('occupation'))
                                    <p class="text-danger">{{ $errors->first('occupation') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Nomor Telepon</label>
                                <input name="phone" type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') ?: '' }}" required/>
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Alamat</label>
                                <input name="address" type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address') ?: '' }}" required/>
                                @if ($errors->has('address'))
                                    <p class="text-danger">{{ $errors->first('address') }}</p>
                                @endif
                            </div>
                            <button type="submit" class="w-100 btn btn-primary">Bayar Sekarang</button>
                            <p class="text-center subheader mt-4">
                                <img src="{{ asset('images/ic_secure.svg') }}" alt=""> Your payment is secure and encrypted.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
