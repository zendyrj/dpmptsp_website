@extends('belakang.tpl')
@section('bc')
<li>
    <span>Slider</span>
</li>
@endsection

@section('isi')

@if(Session::has('berhasil'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> {{Session::get('berhasil')}}.
  </div>
@endif
<div class="row">
<div class="col-md-6">
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-picture font-green"></i>
            <span class="caption-subject bold uppercase"> Tambah Gambar Slider</span>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/slider')}}">
        {{ csrf_field() }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label col-md-12">
                    <div class="input-group">
                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                        <label for="form_control_1">Gambar Sampul</label>
                        <span class="help-block">Ukuran gambar 1900 x 550 pixel</span>
                        <span class="input-group-addon">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-xs btn-primary">
                                <i class="icon-magnifier-add"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="col-md-6">
<div class="portlet light">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-info font-green"></i>
            <span class="caption-subject bold uppercase"> Gambar</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <?php $x=1; ?>
            @foreach ($slides as $slide)
            <div class="col-md-6" style="padding: 3px; margin-bottom: 5px;">
                <div>
                    <img class="img-responsive" src="{{asset($slide->link)}}">
                    <div class="col-md-10" style="padding-bottom: 2px; border-bottom:solid 1px;">Slide-{{$x}}</div>
                    <div class="col-md-2" style="border-bottom:solid 1px;"">

                    <button type="button" class="btn btn-xs btn-danger" data-toggle="modal"
                             data-frm="<form id='hapus-slide-{{$slide->id}}' action='{{url('/panel/slider/'.$slide->id)}}' method='POST'><input type='hidden' name='_token' value='{{ csrf_token() }}'><input type='hidden' name='_method' value='DELETE'><button type='button' data-dismiss='modal' class='btn dark btn-outline'>Tidak</button><button type='submit' class='btn red'>Hapus</button></form>"

                             data-title="Apakah anda yakin menghapus Slide-{{$x++}}'?"
                             data-target="#HapusModal" ><i class="icon-close"></i>
                    </button>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
</div>

<div id="HapusModal" class="modal fade" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <div class="modal-body" id="isi"></div>
            </div>
            <div class="modal-footer">
                
                <span id="z"></span>
                <!-- <a id="y" class="btn green">Ya</a> -->
            </div>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script type="text/javascript">
    $(function() {
        $('#HapusModal').on("show.bs.modal", function (e) {
             $("#isi").html($(e.relatedTarget).data('title'));
             $("#z").html($(e.relatedTarget).data('frm'));
        });
    });
</script>
<script type="text/javascript">
var domain = "{{url('/')}}/laravel-filemanager";
$('#lfm').filemanager('image', {prefix: domain});
</script>
@endsection