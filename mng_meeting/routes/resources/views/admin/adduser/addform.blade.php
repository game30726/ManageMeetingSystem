@extends('layouts/app')
@section('content')
<head>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="text-center">
                <h3>เพิ่มผู้เข้าร่วม</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-12">
                    <center><div class="col-6">
            <form method="POST" action="{{route('adduser.update',$users->id)}}">
                @method('PATCH')
                @csrf
            <input type="hidden" name="user_id" value="{{$users->id}}">
            <input class="form-control text-center" type="text" value="ชื่อ : {{$users->name}}" disabled><br><br>
            <center>    <div class="dropdown">
                    <h4>เลือกหน้าที่ในที่ประชุม</h4><br><br>
                    <select class="btn btn-light btn-lg dropdown-toggle" name="status">
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <option class="dropdown-item" selected>กรุณาเลือก</option>
                        <option class="dropdown-item" value="0">เลขานุการ</option>
                        <option class="dropdown-item" value="1">ประธานในที่ประชุม</option>
                        <option class="dropdown-item" value="2">คณะกรรมการ</option>
                        <option class="dropdown-item" value="3">ผู้เข้าร่วม</option>
                    </div>
                    </select>
                  </div>
    </center>
                
    <br><br>
    <center>
    <button type="submit" class="btn btn-success">ยืนยัน</button>&nbsp;&nbsp;&nbsp;
    </center>
</form>
                    </div></center>
            </div>
        </div>
</div>
<script>
    function show(){
        swal(
              'ขั้นตอนต่อไป',
              'กรุณาระบุตำแหน่งของผู้เข้าร่วมประชุม',
              'info'
            );
    }
</script>

@endsection