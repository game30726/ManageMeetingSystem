@extends('layouts.app')
@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">การประชุมและรายงานทั้งหมดของรายงานการประชุมครั้งที่ {{$meeting['time']}}</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="panel-body">
                            <ul>
                            <li>การประชุมครั้งที่ : {{$meeting['time']}}</li>
                            <li>สถานที่จัดการประชุม : {{$meeting['place']}}</li>
                            <li>เวลาเริ่มการประชุม : {{$meeting['date']}}</li>
                            </ul>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection