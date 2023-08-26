@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Student</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <div class="row">

                    <form   action={{route('save.student')}} method="post">
                        @csrf
                        <table>
                            <tr>
                                <td>Student Name</td>
                                <td><input name="name" type="text"></td>
                            </tr>
                            <tr>
                                <td>Fathser's Name</td>
                                <td><input name="father" type="text"></td>
                            </tr>    <tr>
                                <td>Fathser's Name</td>
                                <td><input name="mother" type="text"></td>
                            </tr>
                            <tr>
                                <td>Roll</td>
                                <td><input name="roll" type="text"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="Register"></td>
                            </tr>
                        </table>
                    </form>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
<!-- /.content-wrapper -->
