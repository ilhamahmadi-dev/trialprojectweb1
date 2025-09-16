<form action="{{ route('siswa.store') }}" method="POST">
    @csrf
    <input type="text" name="nis" placeholder="NIS"><br>
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="date" name="tgl_lahir"><br>
    <select name="jenis_kelamin">
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <button type="submit">Simpan</button>
</form>
