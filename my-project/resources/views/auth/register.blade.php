@extends('layouts.app')

@section('content')
<section id="register" class="vh-100 bg-image">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">ثبت نام در همایش</h2>
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="form-outline mb-2">
                  <label class="form-label" for="fullname">نام و نام خانوادگی</label>
                  <input type="text" name="name" id="fullname" class="form-control form-control-lg" required="required" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="username">نام کاربری</label>
                  <input type="text" name="username" id="username" class="form-control form-control-lg" required="required" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="email">پست الکترونیکی</label>
                  <input type="email" name="email" id="email" class="form-control form-control-lg" required="required" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="password">رمزعبور</label>
                  <input type="password" name="password" id="password" class="form-control form-control-lg" required="required" />
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="password_confirm">تکرار رمزعبور</label>
                  <input type="password" name="password_confirmation" id="password_confirm" class="form-control form-control-lg" required="required" />
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <label class="form-check-label" for="showEmail">نمایش ایمیل به صورت عمومی</label>
                  <input name="showEmail" class="form-check-input me-2" type="checkbox" id="showEmail"/>
                </div>

                <div class="d-grid">
                  <button class="btn btn-success btn-lg gradient-custom-4 text-body">ثبت نام</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">حساب دارید؟ <a href="{{ route('login') }}"
                    class="fw-bold text-body"><u>وارد شوید</u></a></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
