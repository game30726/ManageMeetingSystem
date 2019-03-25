@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('แก้ไขข้อมูลส่วนตัว') }}</div>

                <div class="card-body">
                    <form action="{{ route('profile.update',$profile->id) }}" method="POST">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $profile->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tel" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์โทรศัพท์') }}</label>

                            <div class="col-md-6">
                                <input id="tel" type="text" class="form-control" name="tel" value="{{ $profile->tel }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                            <input id="email" type="email" name="email" class="form-control" value="{{ $profile->email }}">
                        </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                    <button onclick="swal(
                                        'สำเร็จ !',
                                        'คุณได้แก้ไขข้อมูลส่วนตัวแล้ว',
                                        'success'
                                      );" class="btn btn-success" type="submit">
                                    {{ __('แก้ไข') }}
                                </button>
                                <button type="reset" class="btn btn-danger">เริ่มใหม่</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
