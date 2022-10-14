@extends('templete.html')

@section('login')
    <form method="POST" method="/sign-in">
        @csrf
        <div class="row ">
            <div class=" ms-4 mb-1 pe-5">
                <label for="username" class="form-label"><i class="bi bi-person-fill pe-2"></i>Username</label>
                <input type="text" value="{{old('username')}}" name="username" class="form-control" id="username">
                @error('username')
                    <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                    </div>
                @enderror
                <div id="emailHelp" class="form-text">Batas Username :
                    <ul>
                        <li>Minimal 5 huruf</li>
                    </ul>
                </div> 
            </div>
            <div class=" ms-4 mb-1 pe-5">
                <label for="password" class="form-label"><i class="bi bi-lock-fill pe-2"></i>password</label>
                <input type="password" name="password" class="form-control" id="password">
                @error('password')
                    <div id="emailHelp" class="form-text text-danger">
                        {{$message}}
                    </div>
                @enderror
                <div id="emailHelp" class="form-text">Batas password :
                    <ul>
                        <li>Minimal 5 huruf</li>
                    </ul>
                </div>
            </div>
            <div class=" ms-4 mb-1 pe-5">
                <label for="konfirmasi" class="form-label"><i class="bi bi-key-fill pe-2"></i>Konfirmasi</label>
                <input type="password" name="konfirmasi" class="form-control" id="konfirmasi">
            </div>
            <div class="d-grid ps-5 pe-5 mt-5 mb-3">
                <button class="btn btn-outline-dark" name="submit" type="submit">Sign In</button>
            </div>
        </div>
    </form>
@endsection


