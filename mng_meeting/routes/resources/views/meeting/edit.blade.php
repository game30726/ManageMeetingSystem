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
        <form method="post" action="{{ route('meeting.update', $meeting->id) }}">
                @method('PATCH')
                @csrf
            <div class="form-group">
                    <center><label>
                            <h1>แก้ไขเอกสาร</h1>
                    </label></center>
                    <input type="text" name="name" class="form-control" value="{{$meeting -> name}}"><br>
                    <input type="number" name="time" class="form-control" value="{{$meeting -> time}}"><br>
                    <input type="text" name="place" class="form-control" value="{{$meeting -> place}}"><br>
                    <input type="datetime-local" name="date" class="form-control" value="{{$meeting -> date}}" ><br>
                   <br><br><br>
                    <center><button onclick="swal(
                        'สำเร็จ !',
                        'คุณได้แก้ไขประชุมแล้ว',
                        'success'
                      );" type="submit" class="btn btn-outline-success">อัพเดท</button>
                    <button type="back" class="btn btn-outline-danger">ยกเลิก</button></center>
            </div>
            @csrf
        </form>
    </div>
@endsection
