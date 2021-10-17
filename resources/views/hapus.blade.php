<td><form action="{{ url('tambah/'.$value->kode_mobil) }}" method="post">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" type="submit"> DELETE</button>
</form>
</td>

<thead>
    <tr>No.</tr>
    <tr>No. KTP</tr>
    <tr>Nama</tr>
    <tr>No. HP</tr>
    <tr>Pilih</tr>
</thead>
<tbody>
    @foreach ($pelanggan as $p )
        <td>{{ $i = (isset($i)?++$i:$i=1)}}</td>
        <td>{{ $p->ktp_pembeli }}</td>
        <td>{{ $p->nama_pembeli }}</td>
        <td>{{ $p->telp_pembeli }}</td>
    @endforeach
</tbody>
