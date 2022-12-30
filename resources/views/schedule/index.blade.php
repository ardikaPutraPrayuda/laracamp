@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8-offset-2">
                <div class="card">
                    <div class="card-header">
                        JADWAL PENERIMAAN PESERTA DIDIK BARU GELOMBANG-I
                    </div>
                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Jalur</th>
                                    <th>Kegiatan</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($schedules as $schedule)
                                    <tr>
                                        <th>{{ $schedule->jalur }}</th>
                                        <th>{{ $schedule->kegiatan }}</th>
                                        <th>{{ $schedule->tanggal_mulai }}</th>
                                        <th>{{ $schedule->tanggal_selesai }}</th>
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
