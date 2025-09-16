<h1>Daftar Siswa</h1>
<a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>
<ul>
    @foreach ($siswas as $siswa)
        <li>{{ $siswa->nis }} - {{ $siswa->nama }}</li>
    @endforeach
</ul>
