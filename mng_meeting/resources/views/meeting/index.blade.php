@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-header">การประชุมและรายงานทั้งหมด</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Session::has('massage'))
                        <div class="alert alert-info">
                            {{ Session::get('message') }}
                        </div>
                    @endif
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">ครั้งที่</th>
                                <th scope="col">สถานที่</th>
                                <th scope="col">วันที่</th>
                                <th scope="col">Function</th>
                              </tr>
                            </thead>
                            <tbody>
                                    @foreach($meeting as $mt)
                                    <tr>
                                        <td>{{$mt->id}}</td>
                                        <td>{{$mt->time}}</td>
                                        <td>{{$mt->place}}</td>
                                        <td>{{$mt->date}}</td>
                                    <td>
                                            <form action="{{ route('meeting.destroy', $mt->id)}}" method="post">
                                              @csrf
                                              @method('DELETE')
                                              <button class="btn btn-danger" type="submit">Delete</button>
                                            <a href="{{route('meeting.show', $mt->id)}}" class="btn btn-primary">ดูข้อมูล</a>
                                            <a href="{{route('meeting.edit', $mt->id)}}" class="btn btn-info">แก้ไข</a>
                                            <a href="{{route('meeting.show', $mt->id)}}" class="btn btn-warning">เพิ่มเอกสาร</a>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                
                            </tbody>
                        </table>
                        <div class="row">
                                <div class="col-xs-5">
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{Route('meeting.create')}}" class="btn btn-primary pull-center">เพิ่ม</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
