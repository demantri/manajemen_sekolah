<!-- Modal -->
@foreach ($data as $item)
<div class="modal fade" id="modal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit tahun ajaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="/tahun_ajaran/{{$item->id}}" method="POST">
                @csrf
                <div class="modal-body">

                    <input type="hidden" value="{{$item->id}}">

                    <div class="form-group row">
                        <label for="tahun_ajaran" class="col-3 col-lg-3 col-form-label text-right">Tahun Ajaran</label>
                        <div class="col-9 col-lg-9">
                            <input id="tahun_ajaran" type="text" name="tahun_ajaran" required="" placeholder="ex: 2019/2020" class="form-control" value="{{$item->tahun_ajaran}}" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="biaya" class="col-3 col-lg-3 col-form-label text-right">Biaya</label>
                        <div class="col-9 col-lg-9">
                            <input id="biaya" type="text" name="biaya" required="" class="form-control" value="{{$item->biaya}}" autocomplete="off" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
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
