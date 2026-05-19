@extends('belakang.tpl')
@section('bc')
<li>
    <a href="{{url('/panel/menu')}}">Menu</a>
    <i class="fa fa-angle-right"></i>
</li>
<li>
    <span>Ubah menu</span>
</li>
@endsection

@section('isi')
<div class="portlet light ">
    <div class="portlet-title">
        <div class="caption font-green">
            <i class="icon-doc font-green"></i>
            <span class="caption-subject bold uppercase"> Ubah menu</span>
        </div>
        <div class="actions">
            <div class="btn-group">
                <a class="btn btn-sm btn-warning" href="{{url('/panel/menu')}}"> <i class="fa fa-arrow-left"></i> Kembali
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" method="POST" action="{{url('panel/menu/'.$post->id)}}">
        {{ csrf_field() }}{{ method_field('PUT') }}
            <div class="form-body">
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="nama" value="{{$post->nama}}" >
                    <label for="form_control_1">Nama menu</label>
                    <span class="help-block">Masukkan nama menu (singkat, padat, jelas)</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label">
                    <input type="text" class="form-control" id="form_control_1" name="urutan" value="{{$post->urutan}}" >
                    <label for="form_control_1">Urutan</label>
                    <span class="help-block">Masukkan angka untu proses pengurutan saat menampilkan menu</span>
                </div>
                <div class="form-group form-md-line-input form-md-floating-label col-md-12">
                    <div class="row">
                        <select class="form-control edited" id="form_control_1" name="parent">
                        @if($post->parent == 0)
                            <option value="0" selected>-- Top level menu --</option>
                            @foreach($parents as $par)
                            <option value="{{$par->id}}">{{$par->nama}}</option>
                            @endforeach
                        @else
                                <option value="0">-- Top level menu --</option>
                            @foreach($parents as $par)
                                <option value="{{$par->id}}" {{ $par->id == $post->parent ? 'selected="selected"' : '' }} >{{$par->nama}}</option>
                            @endforeach
                        @endif
                        </select>
                        <label for="form_control_1">Parent</label>
                    </div>
                </div>
                <div class="form-group last">
                    <label class="form_control_1">Isi Menu</label>
                    <textarea id="siduy" name="isi">{!! $post->isi !!}</textarea>
                </div>
            </div>
            <div class="form-actions noborder">
                <button type="submit" class="btn blue">Simpan</button>
                <a href="{{url('/panel/menu')}}" class="btn default">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('admin/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/pages/scripts/components-date-time-pickers.js')}}" type="text/javascript"></script>
<script src="{{asset('vendor/laravel-filemanager/js/lfm.js')}}"></script>
<script type="text/javascript">
var domain = "{{url('/')}}/laravel-filemanager";
$('#lfm').filemanager('image', {prefix: domain});
</script>
<script src="{{asset('admin/tinymce/tinymce.min.js')}}"></script>
<script type="text/javascript">
var editor_config = {
    path_absolute : "{{url('/')}}/",
    selector: "#siduy",
    height: 300,
    menubar: true,
    plugins: [
      "advlist autolink lists link image charmap preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "no",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>
@endsection