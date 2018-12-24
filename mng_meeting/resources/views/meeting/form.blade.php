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
                        @if (isset($meeting))
                            <h1>แก้ไขการสร้างการประชุม</h1>
                        @else
                            <h1>สร้างการประชุม</h1>
                        @endif
                        
                    </label></center>
                    @if (isset($meeting))
                <form action="{{route('meeting.update',$meeting->id)}}" method="POST">
                <input type="number" name="time" class="form-control" placeholder="การประชุมครั้งที่" value="{{$meeting->time}}"><br>
                    <input type="text" name="place" class="form-control" placeholder="จัดการประชุมที่"value="{{$meeting->place}}"><br>
                    <input type="datetime-local" name="date" class="form-control"value="{{$meeting->date}}"><br>
                    <center><button type="submit" class="btn btn-outline-success">แก้ไข</button>
                    @else
                    <input type="number" name="time" class="form-control" placeholder="การประชุมครั้งที่" ><br>
                    <input type="text" name="place" class="form-control" placeholder="จัดการประชุมที่"><br>
                    <input type="datetime-local" name="date" class="form-control"><br>
                    <center><button type="submit" class="btn btn-outline-success">เสร็จสิ้น</button>
                    <button type="reset" class="btn btn-outline-danger">เริ่มใหม่</button></center>
                    @endif
            </div>
            @csrf
        </form>
    </div>
@endsection