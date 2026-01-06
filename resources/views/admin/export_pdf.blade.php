<h2>Data Pendaftar PPDB</h2>

<table width="100%" border="1" cellspacing="0" cellpadding="6">
    <thead>
        <tr style="background:#f2f2f2; font-weight:bold;">
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>No Kontak</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Asal Sekolah</th>
            <th>Kompetensi Keahlian</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($pendaftar as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_lengkap }}</td>
            <td>{{ $p->no_kontak }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->jenis_kelamin }}</td>
            <td>{{ $p->asal_sekolah }}</td>
            <td>{{ $p->kompetensi_keahlian }}</td>
            <td>
                @if($p->status == 'diterima')
                    Diterima
                @elseif($p->status == 'ditolak')
                    Ditolak
                @else
                    Belum Diproses
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

