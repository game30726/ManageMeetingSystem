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
                <table class="table table-bordered table-hover" id="tab_logic">
                        <thead>
                            <tr>
                            <th style="border : 0px" class="text-center"></th>
                            <th style="border : 0px" width="30%"></th>
                            <th style="border : 0px"><center><button data-path="" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">เพิ่ม</button></center></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                            <th>ชื่อผู้ใช้</td>
                            <th class="text-center" width="30%">ตำแหน่ง</th>
                            <th class="text-center">ลบผู้ใช้</th>
                            <tr>
                        </thead>
                        <tbody>
                               
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เพิ่มผู้เข้าร่วม</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <table>
                    <table class="table table-striped">
                            <thead>
                              <tr>
                                <th scope="col" width="750">ชื่อผู้ใช้</th>
                                <th scope="col">เพิ่ม</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                <td width="750">{{$user->name}}</td>
                                <td>
                                <button type="submit" onclick="window.location='{{ route('adduser.edit',$user->id) }}'" class="btn btn-success">เพิ่มผู้เข้าร่วม</button>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    <br><center><a onclick="swal(
        'สำเร็จ !',
        'คุณได้เพิ่มผู้เข้าร่วมการประชุมแล้ว',
        'success'
      );" href="{{route('adduser.store')}}" class="btn btn-success">บันทึก</a>
    <button onclick="history.back()" class="btn btn-danger">ก่อนหน้านี้</button>
    </center>
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