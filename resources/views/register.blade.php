@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Register</h1>
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

                    <form action={{route('save.register')}} method="post">
                        @csrf
                        <table>
                            <tr>
                                <td>Full Name</td>
                                <td><input name="fullName" type="text"></td>
                            </tr>
                            <tr>
                                <td>Contact Number</td>
                                <td><input name="contact" type="text"></td>
                            </tr>    <tr>
                                <td>NID Number</td>
                                <td><input name="nidNumber" type="text"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input name="password" type="text"></td>
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
