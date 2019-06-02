@extends('backend.layouts.master')

@section('css')
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/backend')}}/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <link href="{{asset('/backend')}}/assets/node_modules/wizard/steps.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="{{asset('/backend')}}/assets/node_modules/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
@endsection

@section('content') 
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" >

            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Student</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                                <li class="breadcrumb-item active">Add</li>
                            </ol>
                            <button type="button" class="btn btn-info d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <div class="row" id="validation">
                    <div class="col-12">

                    </div>
                    </div>
                <div class="row" id="validation">
                    <div class="col-12">
                        <div class="card wizard-content">
                            <div class="card-body">
                                <h6 class="card-subtitle"><code>Note:</code> Create a class and section before create new student.</h6>
                                <hr/>
                                <form action="{{url('student/store')}}" method="post" enctype="multipart/form-data" class="validation-wizard wizard-circle">
                                    {{csrf_field()}}
                                    <!-- Step 1 -->
                                    <h6>Student Info</h6>
                                    <section>
                                        
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="first_name" class="block">First Name <span class="star_mark">*</span></label>
                                                    
                                                        <input id="first_name"  name="first_name" type="text" value="{{old('first_name')}}" placeholder="First name" class="required form-control">
                                                    </div>

                                                
                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="last_name" class="block">Last Name <span class="star_mark">*</span></label>
                                                        <input id="last_name"  value="{{old('last_name')}}" placeholder="Last name" name="last_name" type="text" class="required form-control">
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="stnd_dob" class="block">Date of birth<span class="star_mark">*</span></label>
                                                        <input id="dropper-radius" class="form-control" type="date" value="{{old('stnd_dob')}}" name="stnd_dob" placeholder="Select birthday" />
                                                    </div>

                                                </div>

                                                <div class="form-group row">

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="Gender" class="block">Gender<span class="star_mark">*</span></label>
                                                        <select name="gender" class="form-control form-control-default">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                           
                                                        </select>
                                                    </div>

                                                     <div class="col-sm-4 col-lg-4">
                                                        <label for="religion" class="block">Religion <span class="star_mark">*</span></label>
                                                    
                                                        <select id="religion" name="religion" class="form-control form-control-default">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                           
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="blood" class="block">Blood Group <span class="star_mark">*</span></label>
                                                    
                                                        <select id="blood" name="blood" class="form-control form-control-default">
                                                            <option value="opt1">Select Blood Group</option>
                                                            <option value="A+">A+</option>
                                                            <option value="A-">A-</option>
                                                            <option value="B+">B+</option>
                                                            <option value="B-">B-</option>
                                                            <option value="O+">O+</option>
                                                            <option value="O-">O-</option>
                                                            <option value="AB+">AB+</option>
                                                            <option value="AB-">AB+</option>
                                                           
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group row">

                                                     <div class="col-sm-4 col-lg-4">
                                                        <label for="nationality" class="block">Nationality <span class="star_mark">*</span></label>
                                                        <select id="nationality" name="nationality" class="form-control form-control-default">
                                                            <option value="opt1">Select nationality</option>
                                                            <option value="A+">Bangladeshi</option>
                                                            <option value="A-">Others</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="mobile" class="block">Mobile No <span class="star_mark">*</span></label>
                                                        <input id="mobile"  value="{{old('first_name')}}" placeholder="Mobile no" name="stn_mobile" type="text" class="required form-control">
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="phato" class="block">Phato</label>
                                                       <input id="phato" name="stn_phato" type="file" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                     <div class="col-sm-4 col-lg-4">
                                                        <label for="extra_activity" class="block">Extra Curricular Activity</label>
                                                       <textarea rows="3" cols="3" name="extra_activity" class="form-control" value="{{old('first_name')}}" placeholder="Extra Curricular Activity"></textarea>
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="present_address" class="block">Present Address</label>
                                                       <textarea rows="3" cols="3" name="present_address" class="form-control" value="{{old('first_name')}}" placeholder="Present Address"></textarea>
                                                    </div>

                                                    <div class="col-sm-4 col-lg-4">
                                                        <label for="permanent_address" class="block">Permanent Address</label>
                                                       <textarea name="permanent_address" rows="3" cols="3" class="form-control" value="{{old('first_name')}}" placeholder="Permanent Address"></textarea>
                                                    </div>
                                                
                                                </div>
                                        
                                    </section>
                                    <!-- Step 2 -->
                                    <h6>Guardian Info</h6>
                                    <section>
                                        
                                            <div class="form-group row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="fa_name" class="block">Father name <span class="star_mark">*</span></label>
                                               
                                                    <input id="fa_name" name="fa_name" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Father name">
                                                </div>
                                            
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="fa_mobile" class="block">Father Mobile <span class="star_mark">*</span></label>
                                                    <input id="fa_mobile" name="fa_mobile" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Father Mobile">
                                                </div>
                                            
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="fa_profession" class="block">Father Profession</label>
                                                
                                                    <input id="fa_profession" name="fa_profession" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Father Profession">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="ma_name" class="block">Mother name <span class="star_mark">*</span></label>
                                               
                                                    <input id="ma_name" name="ma_name" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter ">
                                                </div>
                                            
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="ma_mobile" class="block">Mother Mobile <span class="star_mark">*</span></label>
                                                    <input id="ma_mobile" name="ma_mobile" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Mother Mobile">
                                                </div>
                                            
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="ma_profession" class="block">Mother Profession</label>
                                                    <input id="ma_profession" name="ma_profession" type="text" class="form-control required">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="lg_name" class="block">Local Guardian <span class="star_mark">*</span></label>
                                               
                                                    <input id="lg_name" name="lg_name" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Local Guardian Name">
                                                </div>
                                                
                                                 <div class="col-sm-4 col-lg-4">
                                                    <label for="lg_relation" class="block">Local Guardian Relation <span class="star_mark">*</span></label>
                                                    <select id="lg_relation" name="lg_relation" class="form-control form-control-default">
                                                        <option value="">Select Relation</option>
                                                        <option value="Brother">Brother</option>
                                                        <option value="Sister">Sister</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="lg_mobile" class="block">Local Guardian Mobile <span class="star_mark">*</span></label>
                                                    <input id="lg_mobile" name="lg_mobile" type="text" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Guardian Mobile">
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-sm-4 col-lg-4">
                                                    <label for="lg_profession" class="block">Local Guardian Profession</label>
                                                    <input id="lg_profession" name="lg_profession" type="text" value="{{old('first_name')}}" placeholder="Enter Guardian Profession" class="form-control required">
                                                </div>
                                            </div>
                                       
                                    </section>
                                    <!-- Step 3 -->
                                    <h6>Academic Information</h6>
                                    <section>
                                         <div class="form-group row">
                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="class" class="block">Class <span class="star_mark">*</span> </label>
                                               
                                                    <select name="class" id="class" class="form-control form-control-default">
                                                            <option value="opt1">Select One Value Only</option>
                                                            <option value="opt2">Type 2</option>
                                                            <option value="opt3">Type 3</option>
                                                           
                                                        </select>
                                                </div>
                                                
                                                 <div class="col-sm-3 col-lg-3">
                                                    <label for="section" class="block">Section <span class="star_mark">*</span></label>
                                                    <select class="custom-select form-control required" id="section" name="section">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="group" class="block">Group <span class="star_mark">*</span></label>
                                                   <select class="custom-select form-control required" id="group" name="group">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="shift" class="block">Shift </label>
                                                    <select class="custom-select form-control required" id="shift" name="shift">
                                                        <option value="">Select Result</option>
                                                        <option value="Selected">Selected</option>
                                                        <option value="Rejected">Rejected</option>
                                                        <option value="Call Second-time">Call Second-time</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                
                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="id_card_no" class="block">ID Card No </label>
                                                    <input id="id_card_no" name="id_card_no" type="text" value="{{old('first_name')}}" placeholder="Id card number" class="form-control required">
                                                </div>
                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="roll_no" class="block">Roll No</label>
                                                    <input id="roll_no" name="roll_no"  value="{{old('first_name')}}" placeholder="Roll number" type="text" class="form-control required">
                                                </div>
                                                <div class="col-sm-3 col-lg-3">
                                                    <label for="four_subject" class="block">4th subject</label>
                                                    <input id="four_subject" name="four_subject"  value="{{old('first_name')}}" placeholder="4th subject" type="text" class="form-control required">
                                                </div>
                                            </div>
                                    </section>
                                    <!-- Step 4 -->
                                    <h6>Access Info</h6>
                                    <section>
                                        <div class="row">

                                            <div class="col-sm-3 col-lg-3">
                                                <label for="username">Username <span class="star_mark">*</span></label>
                                                <input type="text" name="username" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Access Username" id="username">
                                            </div>
                                            <div class="col-sm-3 col-lg-3">
                                                <label for="email">Email </label>
                                                <input type="text" name="email" class="form-control required" value="{{old('first_name')}}" placeholder="Enter email" id="email">
                                            </div>
                                            <div class="col-sm-3 col-lg-3">
                                                <label for="password">Password <span class="star_mark">*</span></label>
                                                <input type="password" name="password" class="form-control required" value="{{old('first_name')}}" placeholder="Enter Access password" id="password">
                                            </div>
                                          
                                        </div>
                                        <div class="row">
                                        <div class="col-md-7 align-self-center text-right">
                                            <div class="d-flex justify-content-end align-items-center">
                                                
                                                <button type="sbumit" class="btn btn-info d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Submit Form</button>
                                            </div>
                                        </div>
                                        </div>
                                    </section>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- ============================================================== -->
                <!-- End PAge Content -->
              
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
@endsection
@section('js')
    <script src="{{asset('/backend')}}/assets/node_modules/moment/moment.js"></script>
    <!-- This Page JS -->
    <script src="{{asset('/backend')}}/assets/node_modules/wizard/jquery.steps.min.js"></script>
    <script src="{{asset('/backend')}}/assets/node_modules/wizard/jquery.validate.min.js"></script>
    <script src="{{asset('/backend')}}/assets/node_modules/sweetalert/sweetalert.min.html"></script>
    <script>
        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: ""
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

            }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: ""
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
@endsection