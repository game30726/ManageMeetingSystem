@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header text-center">ยินดีต้อนรับ Admin {{Auth::user()->name}}</div>
                <div class="card-body"><center>
                <button type="button" onclick="window.location='{{route('typeadmin.create',Auth::user()->id)}}'" class="btn btn-primary btn-lg">เข้าสู่หน้าสร้างชุดคณะกรรมการ</button>
                    <button type="button" onclick="window.location='#'" class="btn btn-success btn-lg">เข้าสู่หน้าเลขานุการ</button></center>
                </div>
            </div><br><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">ชุดคณะกรรมการทั้งหมด</div>
                    <div class="card-body">
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">ชื่อชุดคณะกรรมการ</th>
                                    <th scope="col">ฟังก์ชัน</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($namegroups as $name)
                                  <tr>
                                    <td>{{$name->name}}</td>
                                    <td><button type="button" onclick="window.location='{{ route('adduser.index',$name->id) }}'" class="btn btn-warning">เพิ่มเลขานุการ</button></td>    
                                   </tr>
                                   @endforeach
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
