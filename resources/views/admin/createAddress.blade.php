@extends('admin.header')
@section('adminContent')
<style type="text/css">
    input[type=text],input[type=number]{

        background-color: lightgray;
    }
    input[type=text]:focus,input[type=number]:focus{

        background-color: lightgray;
    }

    span.reference{
        position:fixed;
        left:5px;
        top:5px;
        font-size:10px;
        text-shadow:1px 1px 1px #fff;
    }
    span.reference a{
        color:#555;
        text-decoration:none;
        text-transform:uppercase;
    }
    span.reference a:hover{
        color:#000;
        
    }
    h1{
        color:#ccc;
        font-size:36px;
        text-shadow:1px 1px 1px #fff;
        padding:20px;
    }
    .add{

        float:right;
        margin-top: 5px;
    }
    .remCF{

        float: right;
    }

</style>

        <div class="content">
            <div class="container-fluid">
                
               
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
<!--                             <div class="header">
                                <form id="tform" class="form-inline" autocomplete="off">
                                    <div class="form-group">
                                        <label class="form-control title">Enter No. Countries</label>
                                        <input type="number" class="form-control" id="country">
                                        <input id="cadd" type="button" class="btn btn-primary" value="Add Countries">
                                    </div>
                                </form>
                            </div> -->
                            <div class="content col-md-offset-2">
                                

                            <h1 class="col-md-offset-3">Enter Details</h1>
                            <div id="wrapper">
                                <div id="steps">
                                    <form id="formElem" name="formElem" action="" method="post">
                                        <fieldset class="step">
                                            <legend>Countries</legend>
                                            <p>
                                                <label for="count_num">Number of countries</label>
                                                <input type="number" min=0 id="count_num" name="count_num" />
                                                <a href="#" class="add" id="addc">Add countries+</a>
                                            </p>
                                            <p id="countries">
                                                <label>Enter Countries</label><br>
                                            </p>
                <!--                             <p>
                                                <label for="email">Email</label>
                                                <input id="email" name="email" placeholder="info@tympanus.net" type="email" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="password">Password</label>
                                                <input id="password" name="password" type="password" AUTOCOMPLETE=OFF />
                                            </p>
                 -->                        </fieldset>
                                        <fieldset class="step">
                                            <legend>State</legend>
                                            <p>
                                                <label for="cname">Enter Country</label>
                <!--                                 <input id="name" name="name" type="text" AUTOCOMPLETE=OFF />
                 -->
                                                <select id="cname">
                                                    <option>--Select Country--</option>
                                                    <option>India</option>
                                                    <option>China</option>
                                                    <option>UAE</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="count_snum">Number of states</label>
                                                <input type="number" min=0 id="count_snum" name="count_snum" />
                                                <a href="#" class="add" id="adds">Add states+</a>
                                            </p>
                                            <p id="states">
                                                <label>Enter States</label><br>
                                            </p>

                <!--                             <p>
                                                <label for="country">Country</label>
                                                <input id="country" name="country" type="text" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="phone">Phone</label>
                                                <input id="phone" name="phone" placeholder="e.g. +351215555555" type="tel" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="website">Website</label>
                                                <input id="website" name="website" placeholder="e.g. http://www.codrops.com" type="tel" AUTOCOMPLETE=OFF />
                                            </p>
                 -->

                                        </fieldset>
                                        <fieldset class="step">
                                            <legend>District</legend>
                                            <p>
                                                <label for="sname">Enter State</label>
                                                <select id="sname" name="sname">
                                                    <option>Assam</option>
                                                    <option>Madhya Pradesh</option>
                                                    <option>Maharashtra</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="count_dnum">Number of Districts</label>
                                                <input type="number" min=0 id="count_dnum" name="count_dnum" />
                                                <a href="#" class="add" id="add_d">Add districts+</a>
                                            </p>
                                            <p id="districts">
                                                <label>Enter Districts</label><br>
                                            </p>
                <!--                             <p>
                                                <label for="cardnumber">Card number</label>
                                                <input id="cardnumber" name="cardnumber" type="number" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="secure">Security code</label>
                                                <input id="secure" name="secure" type="number" AUTOCOMPLETE=OFF />
                                            </p>
                                            <p>
                                                <label for="namecard">Name on Card</label>
                                                <input id="namecard" name="namecard" type="text" AUTOCOMPLETE=OFF />
                                            </p>
                 -->
                                         </fieldset>
                                        <fieldset class="step">
                                            <legend>Settings</legend>
                                            <p>
                                                <label for="newsletter">Newsletter</label>
                                                <select id="newsletter" name="newsletter">
                                                    <option value="Daily" selected>Daily</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Monthly">Monthly</option>
                                                    <option value="Never">Never</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="updates">Updates</label>
                                                <select id="updates" name="updates">
                                                    <option value="1" selected>Package 1</option>
                                                    <option value="2">Package 2</option>
                                                    <option value="0">Don't send updates</option>
                                                </select>
                                            </p>
                                            <p>
                                                <label for="tagname">Newsletter Tag</label>
                                                <input id="tagname" name="tagname" type="text" AUTOCOMPLETE=OFF />
                                            </p>
                                        </fieldset>
                                        <fieldset class="step">
                                            <legend>Confirm</legend>
                                            <p>
                                                Everything in the form was correctly filled 
                                                if all the steps have a green checkmark icon.
                                                A red checkmark icon indicates that some field 
                                                is missing or filled out with invalid data. In this
                                                last step the user can confirm the submission of
                                                the form.
                                            </p>
                                            <p class="submit">
                                                <button id="registerButton" type="submit">Register</button>
                                            </p>
                                        </fieldset>
                                    </form>
                                </div>
                                <div id="navigation" style="display:none;">
                                    <ul>
                                        <li class="selected">
                                            <a href="#" id="enter_country">Countries</a>
                                        </li>
                                        <li>
                                            <a href="#" id="enter_state">States</a>
                                        </li>
                                        <li>
                                            <a href="#" id="enter_district">District</a>
                                        </li>
                                        <li>
                                            <a href="#">Sub Division</a>
                                        </li>
                                        <li>
                                            <a href="#">Confirm</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>                                


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            
            $("#addc").click(function(){

                var num=i=$('#count_num').val();
                while(i!=0){

                    $('#countries').append('<div><div class="form-group added"><input type="text" style="float:right;" class="count_input" required></div><a href="javascript:void(0);" class="remCF"><i class="fa fa-times" aria-hidden="true">x</i></a></div>');
                    i--;                    
                }

            });
            $('#adds').click(function(){

                var num=i=$('#count_snum').val();
                while(i!=0){

                    $('#states').append('<div><div class="form-group added"><input type="text" style="float:right;" class="count_sinput" required></div><a href="javascript:void(0);" class="remCF"><i class="fa fa-times" aria-hidden="true">x</i></a></div>');
                    i--;                    
                }

            });
            $('#add_d').click(function(){

                var num=i=$('#count_dnum').val();
                while(i!=0){

                    $('#districts').append('<div><div class="form-group added"><input type="text" style="float:right;" class="count_dinput" required></div><a href="javascript:void(0);" class="remCF"><i class="fa fa-times" aria-hidden="true">x</i></a></div>');
                    i--;                    
                }
                //alert('ok');
            });

            $('#formElem').on('click','.remCF',function(){
                $(this).parent().remove();
            });
        </script>
@endsection