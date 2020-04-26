<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <h1>EDIT DATA MAHASISWA</h1>
        @if(session('sukses'))
        <div class="alert alert-primary " role="alert">
            {{session('sukses')}}
        </div>
        @endif 
        <div class="row">
        <div class="col-lg-12">
            <form action="/mahasiswa/{{$mahasiswa->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group" >
                            <label for="exampleInputEmail1">NAMA</label>
                            <input name="nama" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="Nama" value="{{$mahasiswa->nama}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                            <select  name="jenis_kelamin" class="form-control"  id="exampleInputEmail1" >
                                <option ></option>
                                <option value="L" @if($mahasiswa->jenis_kelamin == 'L' )selected @endif>Laki-Laki</option>
                                <option value="P" @if($mahasiswa->jenis_kelamin == 'P' )selected @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Agama</label>
                            <select  name="agama" class="form-control"  id="exampleInputEmail1" >
                                <option ></option>
                                <option value="Ismlam" @if($mahasiswa->agama == 'Islam' )selected @endif>Islam</option>
                                <option value="Hindu" @if($mahasiswa->agama == 'Hindu' )selected @endif>Hindu</option>
                                <option value="Buda"@if($mahasiswa->agama == 'Buda' )selected @endif>Buda</option>
                                <option value="Kristen" @if($mahasiswa->agama == 'Kristen' )selected @endif>Kristen</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input name="jurusan" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="Jurusan" value="{{$mahasiswa->jurusan}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Fakultas</label>
                            <input name="fakultas" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="Fakultas" value="{{$mahasiswa->fakultas}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Alamat</label>
                            <input name="alamat" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="Alamat" value="{{$mahasiswa->alamat}}">
                        </div>
                    
                    </div>
                        <button type="submit" class="btn btn-warning">Update</button>
            </form>
            </div>
        </div>
    
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
