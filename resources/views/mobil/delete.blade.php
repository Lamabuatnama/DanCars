<button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deletemodal{{$value->kode_mobil}}">
    Hapus
  </button>
<!-- Modal -->
<div class="modal fade" id="deletemodal{{$value->kode_mobil}}" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Mobil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div >
        <form action="{{ url('tambah/'.$value->kode_mobil) }}" method="post">
            @csrf
            @method('DELETE')
            <h1 class="text-center">YAKIN INGIN MENGHAPUS</h1>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button class="btn btn-danger" type="submit"> DELETE</button>
          </form>
        </div>
      </div>
    </div>
  </div>
