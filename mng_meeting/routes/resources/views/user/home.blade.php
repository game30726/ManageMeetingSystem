@extends('layouts.app')

@section('content')
<div class="container-fluid"><center>
<div class="col-10">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><h4>การประชุมทั้งหมด</h4></div>
                <div class="row">
                        @if(\Session::has('error'))
                        <div class="alert alert-danger">
                          {{\Session::get('error')}}
                        </div>
                      @endif
                  @if (Session::has('massage'))
                      <div class="alert alert-info">
                          {{ Session::get('message') }}
                      </div>
                  @endif
                  <table class="table table-striped">
                          <thead>
                            <tr>
                              <th scope="col">ครั้งที่</th>
                              <th scope="col">เรื่อง</th>
                              <th scope="col">ชุดคณะกกรมการ</th>
                              <th scope="col">สถานที่</th>
                              <th scope="col">วันที่</th>
                              <th scope="col">ฟังก์ชันการทำงาน</th>
                            </tr>
                          </thead>
                          <tbody>
                                  @foreach($meeting as $mt)
                                  <tr>
                                      <td>{{$mt->time}}</td>
                                      <td>{{$mt->name}}</td>
                                      <td>@if($mt->group_meeting === '0')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '1')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '2')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '3')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '4')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '5')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '6')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '7')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '8')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '9')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '10')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '11')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '12')คณะกรรมการประจำคณะ
                                            @elseif($mt->group_meeting === '13')คณะกรรมการประจำคณะ
                                                @else 
                                                    @endif</td>
                                      <td>{{$mt->place}}</td>
                                      <td>{{$mt->date}}</td>
                                  <td><a href="{{route('meeting.show', $mt->id)}}" class="btn btn-primary">เข้าร่วมการประชุม</a></td>
                                  </tr>
                                  @endforeach

                          </tbody>
                      </table>
                </div>
                <div class="card-body">
                        
            </div>
        </div>
    </div>
</div>
</center></div>
@endsection


{{--
                </div> --}}