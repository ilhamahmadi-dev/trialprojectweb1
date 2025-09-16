<h1>Form Tambah Guru</h1>
<form action="{{ route('guru.store') }}" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama" required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Simpan</button>
</form>
