@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
            <div class="card-header"><h2>จัดการเอกสารการประชุม</h2></div>
        <div class="card-body">

{{-- 11111111111111111111111111111111111111111 --}}

            <h5 style="font-weight : bold">วาระการประชุมที่ 1 เรื่อง แจ้งเพื่อทราบ</h5>
            <div class="container">
                <br>วาระการประชุมที่ 1.1 เรื่อง ประธานแจ้งในที่ประชุม
                <div class="row clearfix">
                        <div class="col-12" id="tab_logic">
                                <div id='addr0'>
                                    <br><div>
                                    &nbsp;&nbsp;&nbsp;วาระการประชุมที่ 1.1.1 เรื่อง ประธานแจ้งในที่ประชุม
                                    </div><br>
                                    <div>
                                    <input type="text" name='name0'  placeholder='กรุณาระบุเรื่อง' class="form-control"/>
                                    </div><br>
                                    <div><input type="file" class="form-control" multiple></div><br><hr>
                                </div>
                                <div id='addr1'></div>
                        </div>
                </div>
                <a id="add_row" class="btn btn-primary pull-left">เพิ่มหัวข้อ</a>&nbsp;&nbsp;<a id='delete_row' class="pull-right btn btn-danger">ลบหัวข้อ</a><br><br>
                <br>วาระการประชุมที่ 1.2 เรื่อง ฝ่ายเลขานุการแจ้งให้ที่ประชุมทราบ
                <div class="row clearfix">
                        <div class="col-12" id="tab_logic">
                                <div id='addr0'>
                                    <br><div>
                                    &nbsp;&nbsp;&nbsp;วาระการประชุมที่ 1.2.1
                                    </div><br>
                                    <div>
                                    <input type="text" name='name0'  placeholder='กรุณาระบุเรื่อง' class="form-control"/>
                                    </div><br>
                                    <div><input type="file" class="form-control" multiple></div><br><hr>
                                </div>
                                <div id='addr1'></div>
                        </div>
                </div>
                </div>
                <br><a id="add_row" class="btn btn-primary pull-left">เพิ่มหัวข้อ</a>&nbsp;&nbsp;<a id='delete_row' class="pull-right btn btn-danger">ลบหัวข้อ</a><br><br><hr><br><br>
            
{{-- 22222222222222222222222222222222222222 --}}

                <h5 style="font-weight : bold">วาระการประชุมที่ 2 เรื่อง พิจารณารับรองรายงานการประชุม</h5>
                <div class="container">
                    <br>วาระการประชุมที่ 1.1 เรื่อง ประธานแจ้งในที่ประชุม
                    <div class="row clearfix">
                            <div class="col-12" id="tab_logic">
                                    <div id='addr0'>
                                        <br><div>
                                        &nbsp;&nbsp;&nbsp;วาระการประชุมที่ 1.1.1 เรื่อง ประธานแจ้งในที่ประชุม
                                        </div><br>
                                        <div>
                                        <input type="text" name='name0'  placeholder='กรุณาระบุเรื่อง' class="form-control"/>
                                        </div><br>
                                        <div><input type="file" class="form-control" multiple></div><br><hr>
                                    </div>
                                    <div id='addr1'></div>
                            </div>
                    </div>
                    </div>
                    <br><a id="add_row" class="btn btn-primary pull-left">Add Row</a>&nbsp;&nbsp;<a id='delete_row' class="pull-right btn btn-danger">Delete Row</a>
            
            
            
            
                <br><br><center><button type="submit" class="btn btn-success">บันทึก</button><center>

            </div>
        </div>
    </div>
<script>
        $(document).ready(function(){
     var i=1;
    $("#add_row").click(function(){
     $('#addr'+i).html("<div><br>วาระการประชุมที่ 1.1."+ (i+1) +"</div><br><div><input name='name"+i+"' type='text' placeholder='กรุณาระบุเรื่อง' class='form-control input-md'/></div><br><div><textarea  name='detail"+i+"' type='text' placeholder='กรุณาระบุมติ'  class='form-control input-md'></textarea></div><br><div><textarea  name='result"+i+"' type='text' placeholder='สรุปการประชุม'  class='form-control input-md'></textarea></div><br><div><input type='file' class='form-control' multiple></div><br><hr><br>");

     $('#tab_logic').append('<div id="addr'+(i+1)+'"></div>');
     i++;
 });
    $("#delete_row").click(function(){
        if(i>1){
        $("#addr"+(i-1)).html('');
        i--;
        }
    });
});
   </script>
@endsection


