@extends('layouts.app')
@section('content')

<div class="container">
    <div class="card">
            <div class="card-header"><h2>เพิ่มเอกสารการประชุม</h2></div>
        <div class="card-body">
            <h5 style="font-weight : bold">วาระการประชุมที่ 1 เรื่อง แจ้งเพื่อทราบ</h5>
            <div class="container">
                <div class="row clearfix">
                        <div class="col-12" id="tab_logic">
                                <div id='addr0'>
                                    <br><div>
                                    วาระการประชุมที่ 1.1
                                    </div><br>
                                    <div>
                                    <input type="text" name='name0'  placeholder='กรุณาระบุเรื่อง' class="form-control"/>
                                    </div><br>
                                    <div>
                                    <textarea type="text" name='detail0' placeholder='กรุณาระบุมติ' class="form-control"></textarea>
                                    </div><br>
                                    <div>
                                    <textarea type="text" name='result0' placeholder='สรุปการประชุม' class="form-control"></textarea>
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
     $('#addr'+i).html("<div><br>วาระการประชุมที่ 1."+ (i+1) +"</div><br><div><input name='name"+i+"' type='text' placeholder='กรุณาระบุเรื่อง' class='form-control input-md'/></div><br><div><textarea  name='detail"+i+"' type='text' placeholder='กรุณาระบุมติ'  class='form-control input-md'></textarea></div><br><div><textarea  name='result"+i+"' type='text' placeholder='สรุปการประชุม'  class='form-control input-md'></textarea></div><br><div><input type='file' class='form-control' multiple></div><br><hr><br>");

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


