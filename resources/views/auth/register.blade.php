 @extends('layout.admin.main', [
     'namePage' => 'Tambah Admin',
 ])
 @section('title', 'EndemicFlorasia | Tambah Admin')
 @section('content')

     <div class="panel-header panel-header-sm">
     </div>
     <div class="content">
         <div class="row">
             <div class="col-md-8">
                 <div class="card">
                     <div class="card-header">
                         <h5 class="title">Tambah Admin</h5>
                     </div>
                     <div class="card-body">
                         <form action="/register" method="POST" class="form-register">
                             @csrf

                             <div class="row ">
                                 <div class="col-md-7">
                                     <div class="form-group">
                                         <label>Nama</label>
                                         <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                             name="nama" id="exampleInputEmail1" aria-describedby="emailHelp"
                                             placeholder="Masukan Nama" required value="{{ old('nama') }}">
                                         @error('nama')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-7">
                                     <div class="form-group">
                                         <label>Username</label>
                                         <input type="text" class="form-control @error('username') is-invalid @enderror"
                                             name="username" id="exampleInputEmail1" aria-describedby="emailHelp"
                                             placeholder="Username" required value="{{ old('username') }}">
                                         @error('username')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="floatingInput">Email</label>
                                         <input type="email" id="email"
                                             class="form-control  @error('email') is-invalid @enderror" name="email"
                                             id="exampleInputEmail1" aria-describedby="emailHelp"
                                             placeholder="name@example.com" required value="{{ old('email') }}">
                                         @error('email')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="floatingPassword">Password</label>
                                         <input type="password" id="password"
                                             class="form-control  @error('password') is-invalid @enderror" name="password"
                                             class="form-control" aria-describedby="passwordHelpInline"
                                             placeholder="password" required>
                                         @error('password')
                                             <div class="invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                         <span id="password" class="form-text">
                                             Must be 8-20 characters long.
                                         </span>
                                     </div>
                                 </div>
                             </div>
                             <div class="row pt-3">
                                 <div class="col-md-7">
                                     <div class="form-group">
                                         <label for="konfirmasiPassword">Konfirmasi Password</label>
                                         <input type="password" name="password_confirmation"
                                             class="form-control  @error('password_confirmation') is-invalid @enderror">
                                         @error('password_confirmation')
                                             <div class="   invalid-feedback">
                                                 {{ $message }}
                                             </div>
                                         @enderror
                                     </div>
                                 </div>
                             </div>

                             <button type="submit" class="btn btn-primary mt-5 ">Submit</button>
                     </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
     </div>

 @endsection


 <main class="form-signin w-100 m-auto">
