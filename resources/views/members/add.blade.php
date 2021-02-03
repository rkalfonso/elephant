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
        <form method="POST" action="{{ route('members.add') }}">
          <div class="card-body">
            <!-- start of the newly added -->
            <div class="row">
              <div class="form-group col-sm-12" style="margin-bottom: 0;">
                <input type="hidden" name="memberid">
                <label for="exampleInputEmail1">Name</label>
              </div>

              <div class="form-group col-sm-4">
                <!-- <label for="exampleInputEmail1">Name</label> -->
                <input type="text" class="form-control" placeholder="First Name" name="fname">
              </div>

              <div class="form-group col-sm-4">
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="Middle Name" name="mname">
              </div>

              <div class="form-group col-sm-4">
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="Last Name" name="lname">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-2">
                <label>Gender</label>
                <select class="form-control" name="gender" style="width: 100%;" data-select2-id="12" aria-hidden="true">
                  <option selected="selected" value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>

              <div class="form-group col-sm-2">
                <label for="exampleInputEmail1">Date of Birth</label>
                <input type="date" class="form-control" name="birthdate">
              </div>

              <div class="form-group col-sm-2">
                <label for="exampleInputEmail1">Place of Birth</label>
                <input type="text" class="form-control" placeholder="e.g. Santa Cruz, Laguna" name="birthplace">
              </div>

              <div class="form-group col-sm-2">
                <label for="exampleInputEmail1">Civil Status</label>
                <!-- <input type="text" class="form-control"> -->
                <select class="form-control select2 " name="civilstatus" style="width: 100%;" data-select2-id="12" aria-hidden="true">
                  <option value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option selected="selected" value="Single">Single</option>
                  <option value="Widowed">Widowed</option>
                </select>
              </div>

              <div class="form-group col-sm-2">
                <label for="exampleInputEmail1">ID Presented</label>
                <input type="text" class="form-control" placeholder="e.g. Voter's ID" name="idpresented">
              </div>

              <div class="form-group col-sm-2">
                <label for="exampleInputEmail1">Nationality</label>
                <input type="text" class="form-control" placeholder="e.g. Filipino" name="nationality">
              </div>
            </div>

            <div class="row">
              <div class="form-group col-sm-12" style="margin-bottom: 0;">
                <label for="exampleInputEmail1">Mailing Address</label>
              </div>
              <div class="form-group col-sm-2">
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="House No." name="houseno">
              </div>
              <div class="form-group col-sm-3">
                <!-- <label for="exampleInputPassword1"> </label> -->
                <input type="text" class="form-control" placeholder="Street Name" name="streetname">
              </div>

              <div class="form-group col-sm-3">
                <select class="form-control select2" style="width: 100%;" data-select2-id="12" aria-hidden="true" name="municipality">
                  <option selected="selected" data-select2-id="14">Municipality</option>
                </select>
              </div>

              <div class="form-group col-sm-3">
                <select class="form-control select2" style="width: 100%;" data-select2-id="12" aria-hidden="true" name="barangay">
                  <option selected="selected" data-select2-id="14">Barangay</option>
                </select>
              </div>

              <div class="form-group col-sm-1">
                <input type="text" class="form-control" placeholder="ZIP Code" name="zip">
              </div>

            </div>
            <div class="row">
              <div class="form-group col-sm-12" style="margin-bottom: 0;">
                <label for="exampleInputEmail1 col-sm-12">Contact Information</label>
              </div>

              <div class="form-group col-sm-4">
                <!-- <label for="exampleInputEmail1">Date of Birth</label> -->
                <input type="text" class="form-control" placeholder="Phone No." name="phoneno">
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
                <select class="form-control select2" name="category" style="width: 100%;" data-select2-id="12" aria-hidden="true">
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
            <a href="{{ route('members') }}" type="button" class="btn btn-default" data-dismiss="modal"><span class="fas fa-trash"></span> Cancel</a>
            <button type="submit" class="btn btn-primary"><span class="fas fa-check"></span> Submit</button>
            <a ></a>
          </div>
      </div>
      </form>

    </section>
    <!-- /.content -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
