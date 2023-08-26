@extends('layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add member</h1>
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

                    <form action={{route('save.member')}} method="post">
                        @csrf
                        <table>
                            <tr>
                                <td>Name</td>
                                <td><input name="name" type="text"></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td><input name="mobile" type="text"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type="submit" value="SAVE"></td>
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
