<!-- Modal -->
@foreach ($data as $item)
<div class="modal fade" id="modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

            <input type="text" value="{{$item->id}}">

            {{-- <div class="form-group">
                <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                <div class="col-12 col-lg-10">
                    <input id="kelas" type="text" required="" placeholder="Kelas" class="form-control" name="kelas" autocomplete="off">
                    @if ($errors->has('kelas'))
                        <span class="text-danger">{{ $errors->first('kelas') }}</span>
                    @endif
                </div>
            </div> --}}

            <div class="form-group row">
                <label for="kelas" class="col-3 col-lg-2 col-form-label text-right">Kelas</label>
                <div class="col-9 col-lg-10">
                    <input id="kelas" type="text" required="" placeholder="Kelas" class="form-control" value="{{$item->kelas}}">
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
</div>
@endforeach
