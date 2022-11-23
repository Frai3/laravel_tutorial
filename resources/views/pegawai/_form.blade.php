Nama Lengkap : <input type="text" name="nama" value="{{ $model->nama }}"><br />
@foreach($errors->get('nama') as $msg)
    <p class="text-danger">{{ $msg }}</p>
@endforeach
Tanggal Lahir : <input type="date" name="tanggal_lahir" value="{{ $model->tanggal_lahir }}"><br />
@foreach($errors->get('tanggal_lahir') as $msg)
    <p class="text-danger">{{ $msg }}</p>
@endforeach
Gelar : <input type="text" name="gelar" value="{{ $model->gelar }}"><br />
NIP : <input type="text" name="nip" value="{{ $model->nip }}"><br />
@foreach($errors->get('nip') as $msg)
    <p class="text-danger">{{ $msg }}</p>
@endforeach
<button type="submit">SIMPAN</button>