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
        <form action="{{route('panel.posts.store')}}" method="POST">
        @csrf
            <!-- Post -->
{{--            <select class="mdb-select md-form">--}}
{{--                <option value="" disabled selected>Choose your option</option>--}}
{{--                @foreach($posts as $post)--}}
{{--                <option value="1">{{$post->id}}</option>--}}
{{--                @endforeach--}}
{{--            </select>--}}

            <!-- Locale -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="azlocale">
                <label for="form1">Az Locale</label>
            </div>

            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="enlocale">
                <label for="form1">En Locale</label>
            </div>



            <!-- Title -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="aztitle">
                <label for="form1">Az Title</label>
            </div>

            <!-- Title -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="entitle">
                <label for="form1">En Title</label>
            </div>

            <!-- Content -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="azcontent">
                <label for="form1">Az Content</label>
            </div>

            <!-- Content -->
            <div class="md-form">
                <input type="text" id="form1" class="form-control" name="encontent">
                <label for="form1">En Content</label>
            </div>

            <button class="btn btn-success">Create</button>

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
