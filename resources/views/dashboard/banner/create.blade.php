@extends(config('pagman.layout', 'pagman::core.layouts.master'))

@section('title', 'Posts | Create')
@section('pageHeading', 'Add | Banner')

@section('pageActions')
<div class="dropdown d-inline mr-2">
    <a class="dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                <i class="fa fa-plus"></i> Create Post
    </a>
    <div class="dropdown-menu" aria-labelledby="triggerId">
        <a class="dropdown-item" href="{{ route('pagman.posts.create') }}">Standard Post</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Custom Posts</h6>
        @php
            $custom_posts = array_keys(custom_posts_types());
        @endphp
        @if ($count = count($custom_posts))
            @for ($i = 0; $i < $count; $i++)
                <a class="dropdown-item" style="text-transform: capitalize;" href="{{ route('pagman.posts.posttype.create', ['posttype' => $custom_posts[$i]]) }}">{{ $custom_posts[$i].' Post' }}</a>
            @endfor
        @endif
    </div>
</div>
<div class="dropdown d-inline mr-5">
    <a class="dropdown-toggle" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
                <i class="fa fa-folder"></i> Posts
    </a>
    <div class="dropdown-menu shadow" aria-labelledby="triggerId">
        <a class="dropdown-item" href="{{ route('pagman.posts') }}">All Posts</a>
        
    </div>
</div>

@endsection

@section('requiredJs')
<script src="{{ asset('ckeditor/ckeditor.js') }}" defer></script>
<script src="{{ asset('pagman/js/pagman.js') }}" defer></script>
@endsection


@section('requiredCss')
<link href="{{ asset('pagman/css/pagman.css') }}" rel="stylesheet">
@endsection

@section('content')
<section class="mt-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                @include('pagman::core.includes.alerts.createdresponse')
            </div>
        </div>
        <form action="{{ route('pagman.posts.store') }}" class="row" id="createStandardPostForm" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Column 1 -->
            <div class="col-lg-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <input type="text" name="post_type" value="banner" class="d-none">
                    </div>
                </div>
            </div>

            <!-- post title, name and content -->
            <div class="col-lg-6">
                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <label for="title">Post Title</label>
                        <textarea name="post_title" id="title" cols="10" rows="1" class="form-control" placeholder="Post Title">{{ old('post_title') }}</textarea>
                        <small class="text-danger post-title-error">{{ $errors->first('post_title') }}</small>
                    </div>
                </div>
                <div class="card shadow-sm">
                    <div class="card-body p-0">
                        <textarea name="post_content" id="content" class="form-control" cols="30" rows="10" >
                            {{ old('post_content') }}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <!-- Post Featured Image -->
                <div class="card shadow-sm mb-3">
                    <div class="card-header">
                        <h6>Featured Image</h6>
                    </div>
                    <div class="card-body p-0">
                        <img src="{{ asset('pagman/img/post_featured_image.png') }}" alt="" id="imageHolderId" class="img-fluid">
                    </div>
                    <div class="card-footer">
                        <input type="file" name="post_featured_image" id="selectPostFeaturedImage" /><hr />
                        <small class="text-danger featured-image-error">
                            {{ $errors->first('post_featured_image') }}
                        </small><hr />
                        <a class="text-primary" data-toggle="collapse" href="#postImageSize" aria-expanded="false" aria-controls="contentId">
                            Standard Recommended Image Sizes
                        </a>
                        <div class="collapse" id="postImageSize">
                            <!-- here -->
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="dropup">
                            <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Save Post
                                    </button>
                            <div class="dropdown-menu" aria-labelledby="triggerId">
                                <input type="submit" value="save" class="dropdown-item" />
                                <input type="submit" value="Save & Publish" class="dropdown-item" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 text-center text-success success"></div>
            <div class="col-lg-12 text-center text-danger error"></div>
        </form>
    </div>
</section>

@endsection