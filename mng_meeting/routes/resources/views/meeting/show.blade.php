@extends('layouts.app')
@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">
                            <center><img src="../../ict_tran.png" class="img-responsive" width="7%"></center><br>
                            <h5 class="text-center" style="font-weight : bold">คณะเทคโนโลยีสารสนเทศและการสื่อสารมหาวิทยาลัยพะเยา</h5>
                            <p class="text-center" style="font-weight : bold">เรื่อง : {{$meeting['name']}}</p>
                            <p class="text-center" style="font-weight : bold">การประชุมครั้งที่ : {{$meeting['time']}}</p>
                            <p class="text-center" style="font-weight : bold">ชุดคณะกรรมการ : @if($meeting->group_meeting === '0')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '1')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '2')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '3')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '4')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '5')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '6')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '7')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '8')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '9')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '10')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '11')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '12')คณะกรรมการประจำคณะ
                                    @elseif($meeting->group_meeting === '13')คณะกรรมการประจำคณะ
                                        @else 
                                            @endif</p>
                            <p class="text-center" style="font-weight : bold">สถานที่จัดการประชุม : {{$meeting['place']}}</p>
                        </div>
                        <h5>วาระการประชุมที่ 1 เรื่อง แจ้งเพื่อทราบ</h5>
                        .....
                        <hr>
                        <h5>วาระการประชุมที่ 2 เรื่อง พิจารณารับรองรายงานการประชุม</h5>
                        .....
                        <hr>
                        <h5>วาระการประชุมที่ 3 เรื่อง สือเนื่อง</h5>
                        .....
                        <hr>
                        <h5>วาระการประชุมที่ 4 เรื่อง เสนอเพื่อพิจารณา</h5>
                        .....
                        <hr>
                        <h5>วาระการประชุมที่ 5 เรื่อง อื่นๆ</h5>
                        .....
                        <hr>
                       </center>
                       <center><input type="button" class="btn btn-outline-danger" onclick="history.back();" value="Back"><center>
                </div>
            </div>
        </div>
    </div>


@endsection
