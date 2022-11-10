@extends('dashboard.layout.layout')

@section('page-title', 'Hero Section');

@section('main-content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hero</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Sections</li>
                            <li class="breadcrumb-item active">Hero</li>
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
                                <h3 class="card-title">Hero Section</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('section.hero.action') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="image_hidden" value="{{ $sectionData['image'] }}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input name="title" type="text"
                                            class="form-control @error('title') is-invalid  @enderror" id="title"
                                            placeholder="Enter title" value="{{ old('title', $sectionData['title']) }}">
                                        @error('title')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea name="description" class="form-control @error('description') is-invalid  @enderror" id="description"
                                            placeholder="Enter description">{{ old('description', $sectionData['description']) }}</textarea>
                                        @error('description')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="get_started_link">Get started link</label>
                                        <input name="get_started_link" type="text"
                                            class="form-control @error('get_started_link') is-invalid  @enderror"
                                            id="get_started_link" placeholder="Enter get started link"
                                            value="{{ old('get_started_link', $sectionData['get_started_link']) }}">
                                        @error('get_started_link')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="watch_video_link">Watch video link</label>
                                        <input name="watch_video_link" type="text"
                                            class="form-control @error('watch_video_link') is-invalid  @enderror"
                                            id="watch_video_link" placeholder="Enter watch video link"
                                            value="{{ old('watch_video_link', $sectionData['watch_video_link']) }}">
                                        @error('watch_video_link')
                                            <span id="exampleInputEmail1-error"
                                                class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Select Hero Image</label>
                                        <div class="custom-file">
                                            <input name="image" type="file"
                                                class="custom-file-input @error('image') is-invalid  @enderror"
                                                id="image">
                                            <label class="custom-file-label" for="image">Choose Image</label>
                                        </div>
                                        @error('image')
                                            <span id="exampleInputEmail1-error" class="error invalid-feedback"
                                                style="display: block;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    @isset($sectionData['image'])
                                        <img src="{{ asset('storage/images/' . $sectionData['image']) }}"
                                            style="width: 100px;height: 100px;object-fit: cover;" />
                                    @endisset
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
