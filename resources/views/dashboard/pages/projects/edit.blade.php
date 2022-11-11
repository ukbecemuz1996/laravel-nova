@extends('dashboard.layout.layout')

@section('page-title', 'Edit Project');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Project</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ route('projects.list.view') }}">Projects</a></li>
                            <li class="breadcrumb-item active">Edit Project</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Project</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('projects.update', ['id' => $project['id']]) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input name="title" type="text"
                                                    class="form-control @error('title') is-invalid  @enderror"
                                                    id="title" placeholder="Enter title"
                                                    value="{{ old('title', $project['title']) }}">
                                                @error('title')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="subtitle">Subtitle</label>
                                                <input name="subtitle" type="text"
                                                    class="form-control @error('subtitle') is-invalid  @enderror"
                                                    id="subtitle" placeholder="Enter subtitle"
                                                    value="{{ old('subtitle', $project['subtitle']) }}">
                                                @error('subtitle')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="client">Client</label>
                                                <input name="client" type="text"
                                                    class="form-control @error('client') is-invalid  @enderror"
                                                    id="client" placeholder="Enter client"
                                                    value="{{ old('client', $project['client']) }}">
                                                @error('client')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="project_url">Project URL</label>
                                                <input name="project_url" type="text"
                                                    class="form-control @error('project_url') is-invalid  @enderror"
                                                    id="project_url" placeholder="Enter project_url"
                                                    value="{{ old('project_url', $project['project_url']) }}">
                                                @error('project_url')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="project_date">Project Date</label>
                                                <input name="project_date" type="date"
                                                    class="form-control @error('project_date') is-invalid  @enderror"
                                                    id="project_date" placeholder="Enter project_date"
                                                    value="{{ old('project_date', $project['project_date']) }}">
                                                @error('project_date')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="description"
                                                    placeholder="Enter description">{{ old('description', $project['description']) }}</textarea>
                                                @error('description')
                                                    <span id="exampleInputEmail1-error"
                                                        class="error invalid-feedback">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <ul
                                                        style="height:400px;overflow:auto;padding-inline-start:0px;list-style: none">
                                                        @forelse ($cats as $cat)
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" name="cats[]"
                                                                        value="{{ $cat->id }}"
                                                                        @checked($cat->projects->count() > 0) />
                                                                    {{ $cat->name }}
                                                                </label>
                                                            </li>
                                                        @empty
                                                            <p>There is no categories</p>
                                                        @endforelse
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
