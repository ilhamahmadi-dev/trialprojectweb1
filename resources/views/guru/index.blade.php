@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Guru</h1>

        {{-- Tampilkan pesan sukses kalau ada --}}
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Tombol tambah --}}
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">+ Tambah Guru</a>

        {{-- Tabel daftar guru --}}
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($gurus as $index => $guru)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->email }}</td>
                        <td>{{ $guru->status }}</td>
                        <td>
                            <a href="{{ route('guru.edit', $guru->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('guru.destroy', $guru->id) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data guru</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
