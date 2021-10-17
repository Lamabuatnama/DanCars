<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihmobilModal">
    Pilih Data Mobil
  </button>
  <!-- Modal -->
  <div  id="pilihmobilModal" class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="sLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="sLabel">Data Pembeli</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
            <table id="tm" class="table table-bordered" >
            <tr>
                <td>No.</td>
                <td>KODE MOBIL</td>
                <td>MERK</td>
                <td>TYPE</td>
                <td>WARNA</td>
                <td>HARGA MOBIL</td>
                <td>GAMBAR</td>
                <td>Pilih</td>
            </tr>
            @foreach ($mobil as $value )
            <tr>

                    <td>{{ $i = (isset($i)?++$i:$i=1)}}</td>
                    <td>{{$value->kode_mobil}} </td>
                    <td>{{$value->merk}}</td>
                    <td>{{$value->type}}</td>
                    <td>{{$value->warna}}</td>
                    <td>{{$value->harga_mobil}}</td>
                    <td><img src="{{ asset('img') }}/{{$value->gambar}}" width="100" alt=""></td>
                    <td><button class="pilih-mobil" >Pilih</button></td>

            </tr>
            @endforeach
        </table>
        </div>
      </div>
    </div>
  </div>
  <table class="table table-bordered">
    <tr>
        <td class="table-primary">nama</td>
        <td><span id="m-nama" name="kode_mobil"></span></td>
        <td class="table-primary">merk</td>
        <td><span id="m-merk" name="merk"></span></td>
        <td class="table-primary">type</td>
        <td><span id="m-type" name="type"></span></td>


    </tr>
    <tr>
        <td class="table-primary">warna</td>
        <td><span id="m-warna" name="warna"></span></td>
        <td class="table-primary">harga</td>
        <td><span id="m-harga" class="harga"></span></td>

    </tr>

</table>

