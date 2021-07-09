@extends('layouts.default')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Pengenalan Sistem Pakar Diagnosa Penyakit Tanaman</div>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="col-8">Nama Tanaman</th>
                        <th class="col-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tanaman as $tanaman)
                    <tr>
                        <td>{{ $tanaman->nama }}</td>
                        <td>
                            <a href="{{ route('diagnosa.preform', $tanaman->id) }}" class="btn btn-success">Diagnosa Penyakit</a>
                            <a href="{{ route('daftar.penyakit', $tanaman->id) }}" class="btn btn-primary">Daftar Penyakit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
