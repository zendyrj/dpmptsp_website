

<div class="modal-header">
      @foreach($parent as $data)
      <center><h4 class="modal-title">PENGADUAN <span class="label label-danger">Nama Dirahasiakan</span></h4></center>
      <center><h5 class="modal-title">DENGAN SUBJECT : {{$data->subject}}</h5></center>
	   @endforeach
</div>
<div class="modal-body">
  @foreach($pengaduans as $pengaduans)

      @if ($pengaduans->status_balas != 'admin')
      <div class="row" style="margin-top: 5px">
            <div class="col-sm-6">
              
            </div>
            <div class="col-sm-6">
              <div style="background: linear-gradient(110deg, #3bbefd 60%, #c3f5f2 60%); padding: 10px 5px 10px 5px;border-radius: 7px;text-align: left">
                <b>Nama Pengadu </b>
                <b><span class="label label-danger">Nama Dirahasiakan</span></b><br>
                <p>{{$pengaduans->laporan}}</p>
                @if (is_null($pengaduans->file))

                @else
                  <p><b><a target="_blank" href="pengaduan/{{$pengaduans->file}}" style="color: #0037ff">Dokumen</a></b></p>
                @endif
                <p><strong>{{ date('d F Y',strtotime($pengaduans->created_at)) }} Jam {{ date('H:i',strtotime($pengaduans->created_at)) }}</strong></p>
              </div>
            </div>
          </div></center>
      @else
<div class="row" style="margin-top: 5px">
            <div class="col-sm-6">
              <div style="background: linear-gradient(110deg, #fdcece 60%, #fbe2e2 60%); padding: 10px 5px 10px 5px;border-radius: 7px;text-align: left">
                <b>{{$pengaduans->nama}}</b><br>
                <p>{{$pengaduans->laporan}}</p>
                @if (is_null($pengaduans->file))

                @else
                  <p><b><a target="_blank" href="pengaduan/{{$pengaduans->file}}" style="color: #0037ff">Dokumen</a></b></p>
                @endif
                <p><strong>{{ date('d F Y',strtotime($pengaduans->created_at)) }} Jam {{ date('H:i',strtotime($pengaduans->created_at)) }}</strong></p>
              </div>
            </div>
            <div class="col-sm-6">
              
            </div>
          </div></center>
      @endif
  
  @endforeach
  <br>
  <div class="row">
    <div class="col-sm-12">
      <form id="contact-form" class="contact-form" method="post" action="{{url('pengaduan-balasan')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @foreach($parent as $data)
          <input type="hidden" name="id_parent" value="{{$data->id}}">
          <input type="hidden" name="subject" value="{{$data->subject}}">
          <input type="hidden" name="nama" value="{{$data->nama}}">
        @endforeach
        
        <div class="form-group">

          <div class="col-sm-10">
            <label for="nama_pengadu">NIK <span style="color: red"> * </span></label>
            <span class="label label-warning">Harap Masukkan NIK dengan benar</span>
            <input type="text" class="form-control" name="nik" placeholder="Masukkan NIK" style="border:1px solid #ccc" required>
          </div>
          <div class="col-sm-10">
            <label for="nama_pengadu">No. Telp <span style="color: red"> * </span></label>
            <span class="label label-warning">Harap Masukkan No. Telp dengan benar</span>
            <input type="text" class="form-control" name="telp" placeholder="Masukkan No. Telp" style="border:1px solid #ccc" required>
          </div>
          <div class="col-sm-10">
            <label for="nama_pengadu">Isi Balasan <span style="color: red"> * </span></label>
            <input type="text" class="form-control" name="isi_balasan" placeholder="Ketikan sesuatu untuk membalas" style="border:1px solid #ccc" required>
          </div>
          <div class="col-sm-10">

            <label for="nama_pengadu">File <span style="color: grey"> Tidak wajib </span> </label><span class="label label-primary"> <b style="color: #e3f112"> Hanya untuk file Gambar dan PDF, maksimal ukuran 5MB</span>
            <input type="file" class="form-control" name="file" placeholder="Dokumen" style="border:1px solid #ccc" accept="image/*,application/pdf">

          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-sm-10">

            <button type="submit" name="submit" class="btn btn-success">KIRIM</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  	
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>