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
    <form action="{{route('meeting.store')}}" method="POST">
            <div class="form-group">
                    <center><label>
                            <h1>สร้างการประชุม</h1>
                    </label></center>
                    <input type="number" name="time" class="form-control" placeholder="การประชุมครั้งที่" ><br>
                    <input type="text" name="place" class="form-control" placeholder="จัดการประชุมที่"><br>
                    <input type="datetime-local" name="date" class="form-control"><br>
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
