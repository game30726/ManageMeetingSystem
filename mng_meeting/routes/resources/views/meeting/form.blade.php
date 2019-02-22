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
                    <center><label><h1>สร้างการประชุม</h1></label></center>
                            <select class="form-control form-control-lg" name="group_meeting" required>
                              <option selected>เลือกชุดคณะกรรมการ</option>
                              @if(Auth::user()->group_meeting === '0')
                              <option name="group_meeting" value="0">คณะกรรมการประจำคณะ</option>
                              @elseif(Auth::user()->group_meeting === '1')
                              <option name="group_meeting" value="1">คณะกรรมการกิจการนิสิต</option>
                              @elseif(Auth::user()->group_meeting === '2')
                              <option name="group_meeting" value="2">คณะกรรมการวิชาการ</option>
                              @elseif(Auth::user()->group_meeting === '3')
                              <option name="group_meeting" value="3">คณะกรรมการ ITA</option>
                              @elseif(Auth::user()->group_meeting === '4')
                              <option name="group_meeting" value="4">คณะกรรมการงานบุคคล</option>
                              @elseif(Auth::user()->group_meeting === '5')
                              <option name="group_meeting" value="5">คณะกรรมการบริหารวิชาการ</option>
                              @elseif(Auth::user()->group_meeting === '6')
                              <option name="group_meeting" value="6">คณะกรรมการบริหารงานวิจัย</option>
                              @elseif(Auth::user()->group_meeting === '7')
                              <option name="group_meeting" value="7">คณะกรรมการควบคุมภายใน</option>
                              @elseif(Auth::user()->group_meeting === '8')
                              <option name="group_meeting" value="8">คณะกรรมการบริหารความเสี่ยง</option>
                              @elseif(Auth::user()->group_meeting === '9')
                              <option name="group_meeting" value="9">คณะกรรมการพัฒนาระบบสารสนเทศ</option>
                              @elseif(Auth::user()->group_meeting === '10')
                              <option name="group_meeting" value="10">คณะกรรมการประกันคุณภาพทางการศึกษา</option>
                              @elseif(Auth::user()->group_meeting === '11')
                              <option name="group_meeting" value="11">คณะกรรมการจรรยาบรรณและคุณธรรมของบุคคลากร</option>
                              @elseif(Auth::user()->group_meeting === '12')
                              <option name="group_meeting" value="12">คณะกรรมการบำรุงศิลปวัฒนธรรมและสิ่งแวดล้อม</option>
                              @elseif(Auth::user()->group_meeting === '13')
                              <option name="group_meeting" value="13">คณะกรรมการตรวจสอบและรับรองการเผยแพร่ผลงานทางวิชาการ</option>
                              @else
                              @endif
                            </select><br>
                    <input type="text" name="name" class="form-control" placeholder="การประชุมเรื่อง" ><br>
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
