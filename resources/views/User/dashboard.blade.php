@extends('layouts.app')
@section('content')
    <div class="alert alert-info" role="alert">
        <p class="h2">Profil akun</p>
        <p class="p">Nama Lengkap           : {{$logins->namalengkap}}  </p>
        <p class="p">Username               : {{$logins->username}}  </p>
        <p class="p">Password               : {{$logins->password}}  </p>
        <div >
            <button class="btn btn-primary" data-target="#EditModal" data-toggle="modal" >Edit</button>
            <button class="btn btn-primary"data-target="#DetailModal" data-toggle="modal">Detail Profil</button>
        </div>
    </div>
    {{--  modal detail  --}}
    <div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Detail Profil</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p class="p">Nama Lengkap           : {{$logins->namalengkap}}  </p>
                <p class="p">Tempat Tanggal Lahir   : {{$logins->ttl}}  </p>
                <p class="p">Agama                  : {{$logins->agama}}  </p>
                <p class="p">Asal                   : {{$logins->asal}}  </p>
                <p class="p">Suku                   : {{$logins->suku}}  </p>
                <p class="p">Umur                   : {{$logins->umur}}  </p>
                <p class="p">Hobi                   : {{$logins->hobi}}  </p>
                <p class="p">Username               : {{$logins->username}}  </p>
                <p class="p">Password               : {{$logins->password}}  </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      {{--  Edit Modal  --}}
      <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><b>Edit Profile</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="/user/update" method="POST">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="namalengkap">Nama Lengkap</label>
                            <input name="namalengkap" type="text" class="form-control form-control-sm" value="{{$logins->namalengkap}}">
                        </div>

                        <div class="col-sm-6">
                            <label for="username">username</label>
                            <input name="username" type="text" class="form-control form-control-sm" value="{{$logins->username}}">
                        </div>
                        
                        <div class="col-sm-6">
                            <label for="password">Password</label>
                            <input name="password" type="text" class="form-control form-control-sm" value="{{$logins->password}}">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Tempat Tanggal Lahir</label>
                            <input name="ttl" type="text" class="form-control form-control-sm" value="{{$logins->ttl}}">            
                        </div>                        
                        <div class="col-sm-6">
                            <label for="agama">Agama</label>
                            <input name="agama" type="text" class="form-control form-control-sm" value="{{$logins->agama}}">
            
                        </div>
                        <div class="col-sm-6">
                            <label for="umur">Umur</label>
                            <input name="umur" type="text" class="form-control form-control-sm" value="{{$logins->umur}}">
            
                        </div>
                        <div class="col-sm-6">
                            <label for="asal">Asal</label>
                            <input name="asal" type="text" class="form-control form-control-sm" value="{{$logins->asal}}">             
                        </div>
                        <div class="col-sm-6">
                            <label for="hobi">Hobi</label>
                            <input name="hobi" type="text" class="form-control form-control-sm" value="{{$logins->hobi}}">
                        </div>
                    </div>
                    <div>
                        <label for="suku">Suku</label>
                        <input name="hobi" type="text" class="form-control form-control-sm" value="{{$logins->suku}}"><br>
                    </div>
                    <div class="text-right">
                        <button type="button" data-dismiss="modal" class="btn btn-danger btn-sm" >Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                    </div>   
                    <input type="hidden" name="_method" value="PUT">                 
                </form>
            </div>
          </div>
        </div>
      </div>
@endsection
