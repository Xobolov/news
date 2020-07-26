@extends('panel.layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="card mb-4 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

            <!--Card content-->
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 my-auto">
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page / Posts</a>
                            <span>/</span>
                            <span>Create</span>
                        </h4>
                    </div>

                </div>

            </div>


        </div>

        <!-- Form -->
        <form action="{{route('panel.posts.store', $post->id)}}" method="POST">
        @csrf

        <!-- Title -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" value="{{$post->translate('az')->title}}" name="title[az]">
                <label for="form1">Az Title</label>
            </div>

            <!-- Title -->
            <div class="md-form">
                <input type="text" id="form2" class="form-control" value="{{$post->translate('en')->title}}" name="title[en]">
                <label for="form2">En Title</label>
            </div>

            <!-- Content -->
            <div class="md-form">
                <input type="text" id="form3" class="form-control" value="{{$post->translate('az')->content}}" name="content[az]">
                <label for="form3">Az Content</label>
            </div>

            <!-- Content -->
            <div class="md-form">
                <input type="text" id="form4" class="form-control" value="{{$post->translate('en')->content}}" name="content[en]">
                <label for="form4">En Content</label>
            </div>

            <button class="btn btn-success">Update</button>

        </form>
        <!-- Form -->

    </div>

@endsection

@section('script')

    <script !src="">
        $(document).ready(function() {
            $('.mdb-select').materialSelect();
        });
    </script>

@endsection
