<button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal{{$value->kode_mobil}}">
    Ubah
  </button>
<!-- Modal -->
<div class="modal fade" id="editmodal{{$value->kode_mobil}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
            <form action="{{ url('tambah/'.$value->kode_mobil) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="kode_mobil">Kode Mobil :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="kode_mobil" placeholder="Kode Model" value="{{$value->kode_mobil}}">
                </div>
                <div class="form-group">
                  <label for="merk">Merk :</label>
                  <input type="text" class="form-control" id="merk" name="merk" placeholder="Merk" value="{{$value->merk}}">
                </div>
                <div class="form-group">
                    <label for="type">Type :</label>
                    <input type="text" class="form-control" id="type" name="type" placeholder="Type" value="{{$value->type}}">
                </div>
                <div class="form-group">
                    <label for="warna">Warna :</label>
                    <input  type="text" class="form-control" name="warna" placeholder="Warna" value="{{$value->warna}}">
                </div>
                <div class="form-group">
                    <label for="harga_mobil">Harga Mobil :</label>
                    <input  type="text" class="form-control" name="harga_mobil" placeholder="Harga Mobil" value="{{$value->harga_mobil}}">
                </div>
                <div class="form-group">
                    <label for="gambar">gambar :</label>
                    <img src="{{ asset('img') }}/{{$value->gambar}}" width="100" alt="">
                    <input  type="file" class="form-control" name="gambar" placeholder="gambar" value="{{$value->gambar}}" >

                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="update" >Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
