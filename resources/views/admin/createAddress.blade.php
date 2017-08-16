@extends('admin.header')
@section('adminContent')
<style type="text/css">
    .form-control{

        border: 1px solid black;

    }
</style>

        <div class="content">
            <div class="container-fluid">
                
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Enter Country</h4>
                            </div>
                            <div class="content">

                                <form class="form-inline">
                                    <div class="form-group">
                                        <label class="form-control">Enter Country</label>&nbsp;
                                        <select class="form-control">
                                            <option>--Select--</option>
                                        </select>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@endsection
