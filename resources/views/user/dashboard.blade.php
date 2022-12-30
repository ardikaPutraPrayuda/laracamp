@extends('layouts.app')

@section('content')
<section class="dashboard my-5">
    <div class="container">
        <div class="row text-left">
            <div class=" col-lg-12 col-12 header-wrap mt-4">
                <p class="story">
                    DASHBOARD
                </p>
                <h2 class="primary-header ">
                    DAFTAR TAGIHAN
                </h2>
            </div>
        </div>
        <div class="row my-5">
            @include('components.alert')
            <table class="table">
                <tbody>
                    @forelse ($checkouts as $checkout)
                    <tr class="align-middle">
                        <td>
                            <p class="mb-2">
                                <strong>{{ $checkout->Camp->title }}</strong>
                            </p>
                            <p>
                                {{ $checkout->created_at->format('M d, y') }}
                            </p>
                        </td>
                        <td>
                            <strong>Rp.{{ $checkout->Camp->price }}k</strong>
                        </td>
                        <td>
                            <strong>{{ $checkout->payment_status }}</strong>
                        </td>
                        <td>
                            @if ($checkout->payment_status == 'waiting')
                                <a href="{{ $checkout->midtrans_url }}" class="btn btn-primary">Bayar Disini</a>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <h3>Tidak ada tagihan untuk saat ini</h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
