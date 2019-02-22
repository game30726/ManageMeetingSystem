@extends('layouts.app')
@section('content')

    <div class="container col-md-5">
        <br><br><br>
        @if (count($errors) >0 )
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
        @endif
    <form action="{{route('typeadmin.store')}}" method="POST">
            <div class="form-group">
                    <input type="text" name="namegroup" class="form-control" placeholder="กรุณากรอกชื่อชุดคณะกรรมการ"><br>
                    <center><button onclick="swal(
                        'สำเร็จ !',
                        'คุณได้สร้างการประชุมเรียบร้อยแล้ว',
                        'success'
                      );" type="submit" class="btn btn-outline-success">บันทึก</button>
                    <button type="reset" class="btn btn-outline-danger">เริ่มใหม่</button></center>
            </div>
            @csrf
        </form>
    </div>
@endsection
