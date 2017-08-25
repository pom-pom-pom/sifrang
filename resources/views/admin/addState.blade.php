@extends('admin.header')
@section('adminContent')
<style type="text/css">
    input[type=text],input[type=number]{

        background-color: lightgray;
    }
    input[type=text]:focus,input[type=number]:focus{

        background-color: lightgray;
    }
</style>

        <div class="content">
            <div class="container-fluid">
                
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <form id="tform" class="form-inline" autocomplete="off">
                                    <div class="form-group">
                                        <label class="form-control title">Enter No. States</label>
                                        <input type="number" class="form-control" id="state">
                                        <input id="cadd" type="button" class="btn btn-primary" value="Add States">
                                    </div>
                                </form>
                            </div>
                            <div class="content">
                                
                                <a href="#" id="add">Add More+</a>
                                <form id="dform" class="form-inline">
                                  <div class="form-group">
                                      <label class="form-control title">Enter Country</label>
                                      <select class="form-control">
                                          <option>--select--</option>
                                          <option>India</option>
                                          <option>UAE</option>
                                      </select>
                                  </div>
                                  <div id="dform_div">
                                    <br>
                                    <label class="form-control">Enter States</label>
                                  </div>
                                  <button class="btn btn-primary">Submit</button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">

            $('#add').click(function(){

                $('#dform_div').append('<div><div class="form-group added"><input type="text" class="form-control" required><a href="javascript:void(0);" class="remCF"><i class="fa fa-times" aria-hidden="true">x</i></a></div></div>');

            });
            $('#cadd').click(function(){

                var num=i=$('#state').val();
                while(i!=0){

                    $('#dform_div').append('<div><div class="form-group added"><input type="text" class="form-control" required><a href="javascript:void(0);" class="remCF"><i class="fa fa-times" aria-hidden="true">x</i></a></div></div>');
                    i--;                    
                }
            });
            $('#dform').on('click','.remCF',function(){
                $(this).parent().parent().remove();
            })
        </script>
@endsection