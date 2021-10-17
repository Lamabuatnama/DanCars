<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihPelangganModal">
    Pilih Data Pembeli
  </button>
  <!-- Modal -->
  <div  id="pilihPelangganModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sLabel">Data Pembeli</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
            <table id="tp" class="table table-bordered" >
            <tr>
                <td>No.</td>
                <td>No. KTP</td>
                <td>Nama</td>
                <td>No. HP</td>
                <td>Pilih</td>
            </tr>
            @foreach ($pelanggan as $p )
            <tr>

                    <td>{{ $i = (isset($i)?++$i:$i=1)}}</td>
                    <td>{{ $p->ktp_pembeli }}</td>
                    <td>{{ $p->alamat_pembeli}}</td>
                    <td>{{ $p->nama_pembeli }}</td>
                    <td>{{ $p->telp_pembeli }}</td>
                    <td><button class="pilih-pelanggan" data-bs-dismiss="modal">Pilih</button></td>

            </tr>
            @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-bordered">
    <tr>
        <td class="table-primary">ktp</td>
        <td><span id="v-ktp" name="ktp_pembeli"></span></td>
        <td class="table-primary" for='v-nama' >Nama</td>
        <td><span id="v-nama" name="nama_pembeli"></span></td>
    </tr>
    <tr>
        <td class="table-primary">Alamat</td>
        <td><span id="v-alamat" name="alamat_pembeli"></span></td>
        <td class="table-primary">Telepon</td>
        <td><span id="v-telp" name="telp_pembeli"></span></td>


    </tr>

</table>
