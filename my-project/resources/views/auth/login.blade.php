@extends('layouts.app')

@section('content')
<section id="login" class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">ورود به همایش</h2>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="form-outline mb-4">
                  <label class="form-label" for="email">پست الکترونیکی</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="password">رمزعبور</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" />
                </div>

                <div class="d-grid">
                  <button class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">ورود</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">حساب ندارید؟ <a href="{{ route('register') }}"
                    class="fw-bold text-body"><u>ثبت نام کنید</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
