<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-3">
                <a href="{{ route('siswas.index') }}" class="btn btn-md btn-secondary"><< KEMBALI</a>
                </div>
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('siswas.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">NAMA</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" placeholder="~ Pilih Nama ~">
                            
                                <!-- error message untuk title -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
        

                            <div class="form-group">
                                <label class="font-weight-bold">KELAS</label>
                                <select class="form-control @error('kelas') is-invalid @enderror" name="kelas" size="1">
                                    <option value="" selected disabled>~ Pilih Kelas & Jurusan ~</option>
                                    <option value="X PPLG" {{ (old('kelas') == 'X PPLG') ? 'selected' : '' }}>X PPLG</option>
                                    <option value="XI PPLG" {{ (old('kelas') == 'XI PPLG') ? 'selected' : '' }}>XI PPLG</option>
                                    <option value="XII PPLG" {{ (old('kelas') == 'XII PPLG') ? 'selected' : '' }}>XII PPLG</option>
                                    <option value="X TE" {{ (old('kelas') == 'X TE') ? 'selected' : '' }}>X TE</option>
                                    <option value="XI TE" {{ (old('kelas') == 'XI TE') ? 'selected' : '' }}>XI TE</option>
                                    <option value="XII TE" {{ (old('kelas') == 'XII TE') ? 'selected' : '' }}>XII TE</option>
                                </select>

                                <!-- error message untuk nama -->
                                @error('kelas')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    // CKEDITOR.replace( 'kelas' );
</script>
</body>
</html>