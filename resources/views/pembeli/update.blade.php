<button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editmodal{{$value->ktp_pembeli}}">
    Ubah
  </button>
<!-- Modal -->
<div class="modal fade" id="editmodal{{$value->ktp_pembeli}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mobil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

        </div>
            <form action="{{ url('pembeli/'.$value->ktp_pembeli) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
              <div class="card-body">
                <div class="form-group">
                  <label for="ktp_pembeli">Kode Mobil :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="ktp_pembeli" placeholder="Kode Model" value="{{$value->ktp_pembeli}}">
                </div>
                <div class="form-group">
                  <label for="nama_pembeli">nama_pembeli :</label>
                  <input type="text" class="form-control" id="nama_pembeli" name="nama_pembeli" placeholder="nama_pembeli" value="{{$value->nama_pembeli}}">
                </div>
                <div class="form-group">
                    <label for="alamat_pembeli">alamat_pembeli :</label>
                    <input type="text" class="form-control" id="alamat_pembeli" name="alamat_pembeli" placeholder="alamat_pembeli" value="{{$value->alamat_pembeli}}">
                </div>
                <div class="form-group">
                    <label for="telp_pembeli">telp_pembeli :</label>
                    <input  alamat_pembeli="text" class="form-control" name="telp_pembeli" placeholder="telp_pembeli" value="{{$value->telp_pembeli}}">
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
