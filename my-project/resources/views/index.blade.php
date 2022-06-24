@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card mt-5 mb-5">
        <div class="card-body">
            <div class="alert alert-success">تا الان {{ $users->count() }} نفر ثبت نام کرده‌اند.</div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">نام</th>
                  <th scope="col">نام کاربری</th>
                  <th scope="col">پست الکترونیک</th>
                  <th scope="col">در تاریخ</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                  <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->showEmail ? $user->email : 'مخفی' }}</td>
                    <td>{{ $user->created_at }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection