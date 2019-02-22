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
        @foreach ($mail as $m)
            @endforeach
    <form action="{{route('admin.sendmail')}}" method="POST">
            <div class="form-group">
                    <center><label><h1>สร้างเอกสารเชิญประชุม</h1></label></center>
            <input type="text" name="name" class="form-control" placeholder="{{$m->name}}" disabled><br>
                    <input type="number" name="time" class="form-control" placeholder="{{$m->time}}" disabled><br>

                    <input type="text" name="place" class="form-control" placeholder="@if($m->group_meeting === '0')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '1')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '2')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '3')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '4')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '5')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '6')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '7')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '8')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '9')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '10')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '11')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '12')คณะกรรมการประจำคณะ
                    @elseif($m->group_meeting === '13')คณะกรรมการประจำคณะ
                        @else 
                            @endif" disabled><br>
                    <input type="number" name="time" class="form-control" placeholder="{{$m->place}}" disabled><br>
            <input type="text" name="date" class="form-control" placeholder="{{$m->date}}" disabled><br>
                    <center><button onclick="swal(
                        'สำเร็จ !',
                        'คุณได้สร้างการประชุมเรียบร้อยแล้ว',
                        'success'
                      );" type="submit" class="btn btn-outline-success">บันทึก</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
