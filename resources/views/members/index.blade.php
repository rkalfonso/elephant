@extends('adminlte::page')

@section('title', 'BlueCardMIS | All Members')

@section('content_header')
    <h1>Member Management</h1>
@stop

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h4 class="m-0 text-light">All Members</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Card Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Occupation</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($members->count())
                        @foreach ($members as $member)
                            <tr class="clickable-row" data-url="{{ route('members') }}">
                                <td>{{ $member->id }}</td>
                                <td>{{ $member->first_name }}</td>
                                <td>{{ $member->middle_name }}</td>
                                <td>{{ $member->last_name }}</td>
                                <td>{{ $member->gender }}</td>
                                <td>{{ $member->occupation }}</td>
                                <td>{{ $member->category }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="#" target="_blank" class="btn btn-sm btn-primary"><span
                                                class="fas fa-info-circle"></span></a>
                                        <a href="#" data-toggle="modal" class="btn btn-sm btn-warning"><span
                                                class="fas fa-pencil-alt"></span></a>
                                        <a href="#" data-toggle="modal" class="btn btn-sm btn-danger"><span
                                                class="fas fa-trash"></span></a>
                                    </div>

                                </td>
                            </tr>
                        @endforeach

                        {{-- @else
                <p class="mt-2">There are no posts</p> --}}
                    @endif

                </tbody>
                <tfoot>
                    <tr>
                        <th>Card Number</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Birthdate</th>
                        <th>Occupation</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@stop

@section('css')
    <style>
        tr[data-url] {
            cursor: pointer;
        }

    </style>
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');

    </script>
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });

        jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location = $(this).data("url");
            });
        });

    </script>
@stop
