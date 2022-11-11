@extends('dashboard.layout.layout')

@section('page-title', 'Projects')

@section('main-content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Projects</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Projects</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('projects.create.view') }}" class="btn btn-dark">Add New Project</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Client</th>
                                            <th>Project URL</th>
                                            <th>Project Date</th>
                                            <th style="width: 40px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                            <tr>
                                                <td>{{ $project->id }}.</td>
                                                <td>
                                                    {{ $project->title }}
                                                </td>
                                                <td>{{ $project->subtitle }} </td>
                                                <td>{{ $project->client }} </td>
                                                <td>
                                                    @isset($project->project_url)
                                                        <a href="{{ $project->project_url }}" target="_blank">Press To
                                                            Navigate</a>
                                                    @endisset
                                                </td>
                                                <td>{{ $project->project_date }}</td>
                                                <td>
                                                    <a href="{{ route('projects.edit.view', ['id' => $project->id]) }}"
                                                        class="btn btn-outline-warning btn-xs">Edit</a>
                                                    <br />
                                                    <form action="{{ route('projects.delete', ['id' => $project->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-outline-danger btn-xs">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer clearfix">
                                {{-- {{ $services->links() }} --}}
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
