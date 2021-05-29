
    <body>
    <h3><center>Agus Dwi S P (1461900039)</center></h3>
    <h3><center>Data Anggota dengan Inner Join</center></h3>
    <center><form action="/anggota/cari" method="GET">
    <input type="text" name="lihat" placeholder="Masukkan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">
    </form></center>

    <p><center>Tampilkan Data Pinjam :</center></p>
    <center><form action="/anggota/lain" method="GET">
    <input type="text" name="lihat" placeholder="Masukkan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">

    <p><center>Cari Nama Peminjam :</center></p>
    <center><form action="/anggota/angel" method="GET">
    <input type="text" name="lihat" placeholder="Masukkan disini" value="{{ old('cari') }}">
    <input type="submit" value="CARI">

</form></center>
    </form>
        <div style="overflow-x:auto;">
            <table>
                <thead>
                    <tr>
                    <th>Anggota_Id</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Pinjam</th>
                    <th>No Telpon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($anggota as $p)
                    <tr>
                    <td>{{ $p->anggota_id }}</td>
                    <td>{{ $p->anggota_nama }}</td>
                    <td>{{ $p->anggota_alamat }}</td>
                    <td>{{ $p->tgl_pinjam }}</td>
                    <td>{{ $p->anggota_telp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>