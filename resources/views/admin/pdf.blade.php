<style>
    table {
        width: 100%;
        table-layout: fixed;
        font-size: 12px;
    }
    td, th {
        word-wrap: break-word;
        padding: 5px;
    }
</style>


<table width="100%" border="1" cellspacing="0" cellpadding="5">
    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>JK</th>
                        <th>Jurusan</th>
                        <th>Asal Sekolah</th>
                        <th>No HP</th>
                        <th>Alamat</th>
    </tr>
    @foreach ($siswa as $row)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $row->nama }}</td>
    <td>{{ $row->nisn }}</td>
    <td>{{ $row->jk }}</td>
    <td>{{ $row->kompetensi_keahlian }}</td>
    <td>{{ $row->asal_sekolah }}</td>
    <td>{{ $row->no_hp }}</td>
    <td>{{ $row->alamat }}</td>
</tr>
@endforeach

</table>
