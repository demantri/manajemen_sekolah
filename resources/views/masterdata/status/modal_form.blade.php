<!-- Modal -->
@foreach ($data as $item)
<div class="modal fade" id="modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/status/{{$item->id}}" method="POST">
                @csrf
                <div class="modal-body">

                    <input type="hidden" value="{{$item->id}}">

                    <div class="form-group row">
                        <label for="status" class="col-3 col-lg-3 col-form-label text-right">Status Siswa</label>
                        <div class="col-9 col-lg-9">
                            <input id="status" type="text" name="status" required="" placeholder="Masukan status siswa" class="form-control" value="{{$item->status}}" autocomplete="off">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-sm" data-dismiss="modal">Batalkan</button>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
