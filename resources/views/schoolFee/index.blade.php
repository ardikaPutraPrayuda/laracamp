@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8-offset-2">
                <div class="card">
                    <div class="card-header">
                        BIAYA PENERIMAAN PESERTA DIDIK BARU GELOMBANG-I
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jenjang Sekolah</th>
                                    <th>Biaya</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($fees as $fee)
                                    <tr>
                                        <th>{{ $fee->jenjang_sekolah }}</th>
                                        <th>Rp.{{ $fee->biaya }}</th>
                                    </tr>
                                @empty
                                    <td colspan="3">No Data</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
