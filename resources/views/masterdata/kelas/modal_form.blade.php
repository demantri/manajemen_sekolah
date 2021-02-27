<!-- Modal -->
@foreach ($data as $item)
<div class="modal fade" id="modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/kelas/{{$item->id}}" method="POST">
                @csrf
                <div class="modal-body">

                    <input type="hidden" value="{{$item->id}}">

                    <div class="form-group row">
                        <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                        <div class="col-9 col-lg-10">
                            <input id="kelas" type="text" name="kelas" required="" placeholder="Kelas" class="form-control" value="{{$item->kelas}}">
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
