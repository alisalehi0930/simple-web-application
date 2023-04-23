@extends('Layouts.app')

@section('style')

@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
        <div style="
            border: 1px solid white;
            background-color: white;
            border-radius: 8px;
            padding: 50px;
            ">

            <h2 style="
            margin-bottom: 2rem;
             text-align: center
             ">
                ورود</h2>

            <div class="mb-3" style="
            padding-bottom: 30px
            ">
                <a class="btn btn-outline-info w-100" href="{{route('loginByGoogle')}}">
                    ورود با گوگل
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                        <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"></path>
                    </svg>
                </a>
            </div>

            <form method="post" action="{{ route('login.post') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">ایمیل یا شماره موبایل</label>
                    <input type="text" class="form-control @error('data_Login') is-invalid @enderror" id="email" value="{{old('data_Login')}}" name="data_Login" placeholder="با 09 وارد کنید">
                    @error('data_Login')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">رمز عبور</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                    @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">مرا به خاطر بسپار</label>
                </div>
                <button type="submit" class="btn btn-primary">ورود</button>
            </form>
        </div>
    </div>
@endsection
