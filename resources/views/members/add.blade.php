@extends('adminlte::page')

@section('title', 'BlueCardMIS | Add New Member')

@section('content_header')
    <h1>Member Management</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <!-- /.card-body -->
        <div class="card card-primary">
            <div class="card-header">
                <h5>Membership Information</h5>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('members.add') }} method="
                POST" ">
                                                                                                                                                                                                                                                                                                                                              <div class="
                card-body">
                <!-- start of the newly added -->
                <div class="row">
                    <div class="form-group col-sm-12" style="margin-bottom: 0;">
                        <label for="exampleInputEmail1">Name</label>
                    </div>

                    <div class="form-group col-sm-4">
                        <input type="text" name="first_name" id="first_name" placeholder="First Name"
                            class="form-control @error('first_name') border-red-500 @enderror"
                            value="{{ old('first_name') }}">

                        @error('first_name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-4">
                        <input type="text" name="middle_name" id="middle_name" placeholder="Middle Name"
                            class="form-control @error('middle_name') border-red-500 @enderror"
                            value="{{ old('middle_name') }}">

                        @error('middle_name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-4">
                        <input type="text" name="last_name" id="last_name" placeholder="Last Name"
                            class="form-control @error('last_name') border-red-500 @enderror"
                            value="{{ old('last_name') }}">

                        @error('last_name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{-- <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div> --}}
                <div class="row">
                    <div class="form-group col-sm-2">
                        <label for="gender">Gender</label>
                        <select class="form-control select2 @error('gender') border-red-500 @enderror" name="gender"
                            id="gender" style="width: 100%;" value="{{ old('gener') }}">
                            <option selected="selected" value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                        @error('gender')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div>
                            <input type="text" class="form-control" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="mm/dd/yyyy" data-mask>
                        </div>
                        <!-- /.input group -->
                    </div>
                    <!-- /.form group --> --}}

                    <div class="form-group col-sm-2">
                        <label for="birthdate">Date of Birth</label>
                        {{-- <input type="date" class="form-control" name="birthdate"> --}}
                        <div class="input-group">
                            {{-- <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                            </div> --}}
                            <input type="date" class="form-control @error('birthdate') border-red-500 @enderror"
                                name="birthdate" id="birthdate" data-inputmask-alias="datetime"
                                data-inputmask-inputformat="mm/dd/yyyy" data-mask value="{{ old('birthdate') }}">

                            @error('birthdate')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- /.input group -->
                    </div>

                    <div class="form-group col-sm-2">
                        {{-- <label for="exampleInputEmail1">Place of Birth</label>
                        <input type="text" class="form-control" placeholder="e.g. Santa Cruz, Laguna" name="birthplace"> --}}

                        <label for="birthplace">Birthplace</label>
                        <input type="text" name="birthplace" id="birthplace" placeholder="e.g. Santa Cruz, Laguna"
                            class="form-control @error('birthplace') border-red-500 @enderror"
                            value="{{ old('birthplace') }}">

                        @error('birthplace')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-2">
                        {{-- <label for="exampleInputEmail1">Civil Status</label>
                        <!-- <input type="text" class="form-control"> -->
                        <select class="form-control select2 " name="civilstatus" style="width: 100%;" data-select2-id="12"
                            aria-hidden="true">
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option selected="selected" value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                        </select> --}}

                        <label for="civil_status">Civil Status</label>
                        <select class="form-control select2 @error('civil_status') border-red-500 @enderror"
                            name="civil_status" id="civil_status" style="width: 100%;" value="{{ old('civil_status') }}">
                            <option value="Married">Married</option>
                            <option value="Separated">Separated</option>
                            <option selected="selected" value="Single">Single</option>
                            <option value="Widowed">Widowed</option>
                        </select>

                        @error('civil_status')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-2">
                        {{-- <label for="exampleInputEmail1">ID Presented</label>
                        <input type="text" class="form-control" placeholder="e.g. Voter's ID" name="idpresented"> --}}

                        <label for="id_presented">ID Presented</label>
                        {{-- <input type="text" name="id_presented" id="id_presented" placeholder="e.g. Santa Cruz, Laguna"
                            class="form-control @error('id_presented') border-red-500 @enderror"
                            value="{{ old('id_presented') }}"> --}}
                        <select class="form-control select2 @error('id_presented') border-red-500 @enderror"
                            name="id_presented" id="id_presented" style="width: 100%;" value="{{ old('id_presented') }}">
                            <option value="Driver's icense">Driver’s License</option>
                            <option value="Passport">Passport</option>
                            <option selected="selected" value="UMID">UMID</option>
                            <option value="Voter's ID">Voter's ID</option>
                            <option value="Postal ID">Postal ID</option>
                            <option value="PRC ID">PRC ID</option>
                        </select>

                        @error('id_presented')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="nationality">Nationality</label>
                        <input type="text" name="nationality" id="nationality" placeholder="e.g. Filipino"
                            class="form-control @error('nationality') border-red-500 @enderror"
                            value="{{ old('nationality') }}">

                        @error('nationality')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-12" style="margin-bottom: 0;">
                        <label for="exampleInputEmail1">Mailing Address</label>
                    </div>
                    <div class="form-group col-sm-2">
                        {{-- <input type="text" class="form-control" placeholder="House No." name="houseno"> --}}

                        <input type="text" name="street_number" id="street_number" placeholder="House No."
                            class="form-control @error('street_number') border-red-500 @enderror"
                            value="{{ old('street_number') }}">

                        @error('street_number')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-sm-3">
                        {{-- <input type="text" class="form-control" placeholder="Street Name" name="streetname"> --}}

                        <input type="text" name="street_name" id="street_name" placeholder="Street Name"
                            class="form-control @error('street_name') border-red-500 @enderror"
                            value="{{ old('street_name') }}">

                        @error('street_name')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-sm-3">
                        {{-- <select class="form-control select2" style="width: 100%;" data-select2-id="12" aria-hidden="true"
                            name="municipality">
                            <option selected="selected" data-select2-id="14">Municipality</option>
                        </select> --}}

                        <select name="municipality" class="form-control select2" style="width:250px">
                            <option value="">Select Municipality </option>
                            @foreach ($countries as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-sm-3">
                        {{-- <select class="form-control select2" style="width: 100%;" data-select2-id="12" aria-hidden="true"
                            name="barangay">
                            <option selected="selected" data-select2-id="14">Barangay</option>
                        </select> --}}

                        <select name="barangay" class="form-control select2" style="width:250px">
                            <option>Barangay</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-1">
                        <input type="text" class="form-control" placeholder="ZIP" name="zip">
                    </div>

                </div>
                <div class="row">
                    <div class="form-group col-sm-12" style="margin-bottom: 0;">
                        <label for="exampleInputEmail1 col-sm-12">Contact Information</label>
                    </div>

                    <div class="form-group col-sm-4">
                        <!-- <label for="exampleInputEmail1">Date of Birth</label> -->
                        {{-- <input type="text" class="form-control" placeholder="Phone No." name="phoneno"> --}}
                        <input id="phone" type="text">
                    </div>

                    <div class="form-group col-sm-4">
                        <!-- <label for="exampleInputEmail1">Place of Birth</label> -->
                        <input type="text" class="form-control" placeholder="Cell No." name="cellno">
                    </div>

                    <div class="form-group col-sm-4">
                        <!-- <label for="exampleInputEmail1">Civil Status</label> -->
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-5">
                        <label for="exampleInputEmail1">Occupation</label>
                        <input type="text" class="form-control" name="occupation">
                    </div>

                    <div class="form-group col-sm-5">
                        <label for="exampleInputEmail1">Monthly Income</label>
                        <input type="text" class="form-control" name="income">
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="exampleInputEmail1">Category</label>
                        <select class="form-control select2" name="category" style="width: 100%;" data-select2-id="12"
                            aria-hidden="true">
                            <option selected="selected" value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>
                    </div>
                </div>
                <!-- end of the newly added -->
        </div>
        <div class="modal-footer">
            <a href="{{ route('members') }}" type="button" class="btn btn-default toastrDefaultSuccess"
                data-dismiss="modal"><span class="fas fa-trash"></span> Cancel</a>
            <button type="submit" class="btn btn-primary"><span class="fas fa-check"></span> Submit</button>
            <button type="button" class="btn btn-success toastrDefaultSuccess">
                Launch Success Toast
            </button>
            <a></a>
        </div>
        </div>
        </form>

    </section>
    <!-- /.content -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/vendor/toastr/toastr.min.css">
@stop

@section('js')
    <script src="/vendor/toastr/toastr.min.js"></script>
    <script>
        console.log('Hi!');

    </script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('select[name="municipality"]').on('change', function() {
                var countryID = jQuery(this).val();
                if (countryID) {
                    jQuery.ajax({
                        url: 'add/getstates/' + countryID,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            console.log(data);
                            jQuery('select[name="barangay"]').empty();
                            jQuery.each(data, function(key, value) {
                                $('select[name="barangay"]').append(
                                    '<option value="' +
                                    key + '">' + value + '</option>');
                            });
                        }
                    });
                } else {
                    $('select[name="barangay"]').empty();
                }
            });
        });

        $(function() {

            $('.toastrDefaultSuccess').click(function() {
                toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultInfo').click(function() {
                toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultError').click(function() {
                toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });
            $('.toastrDefaultWarning').click(function() {
                toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
            });


        });

    </script>
    <script>
        $(":input").inputmask();

        $("#phone").inputmask({
            "mask": "(999) 999-9999"
        });

    </script>
@stop
