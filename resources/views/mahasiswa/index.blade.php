<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-primary " role="alert">
            {{session('sukses')}}
        </div>
        @endif 
        <div class="row">
        <div class="col-6">
           <h1>DATA MAHASISWA</h1>
        </div>
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
            </button>
         
        </div>
            <table class='table table-hover'>
                <tr>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>JURUSAN</th>
                    <th>FAKULTAS</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_mahasiswa as $mahasiswa)
                <tr>
                    <td>{{$mahasiswa->nama}}</td>
                    <td>{{$mahasiswa->jenis_kelamin}}</td>
                    <td>{{$mahasiswa->agama}}</td>
                    <td>{{$mahasiswa->jurusan}}</td>
                    <td>{{$mahasiswa->fakultas}}</td>
                    <td>{{$mahasiswa->alamat}}</td>
                    <td>
                        <a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Update </a>
                        <a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                    <td></td> 
                </tr>
                @endforeach
            </table>   
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                <form action="/mahasiswa/create" method="POST">
                {{csrf_field()}}
                    <div class="form-group" >
                        <label for="exampleInputEmail1">NAMA</label>
                        <input name="nama" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Kelamin</label>
                        <select  name="jenis_kelamin" class="form-control"  id="exampleInputEmail1" >
                            <option ></option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Agama</label>
                        <select  name="agama" class="form-control"  id="exampleInputEmail1" >
                            <option ></option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buda">Buda</option>
                            <option value="Kristen">Kristen</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jurusan</label>
                        <input name="jurusan" type="text"  class="form-control" id="exampleInputEmail1" aria-describedby="Jurusan">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fakultas</label>
                        <input name="fakultas" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="Fakultas">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input name="alamat" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="Alamat">
                    </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
            </div>
            </div>
    
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
