@extends('panel.layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="card mb-4 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

            <!--Card content-->
            <div class="card-body">

                <div class="row">

                    <div class="col-md-6 my-auto">
                        <h4 class="mb-2 mb-sm-0 pt-1">
                            <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                            <span>/</span>
                            <span>Posts</span>
                        </h4>
                    </div>

                    <div class="col-md-4 my-auto">
                        <form class="d-flex justify-content-center">
                            <!-- Default input -->
                            <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                            <button class="btn btn-primary btn-sm my-0 p waves-effect waves-light" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-md-1 text-center pt-lg-0 pt-md-0 pt-sm-3">
                        <a href="{{route('panel.posts.create')}}"><button type="button" class="btn btn-success btn-md btn-rounded waves-effect">Insert</button></a>
                    </div>

                </div>

            </div>

        </div>


        <table class="table text-center">
            <thead>
            <tr>
                <th scope="col">Post ID</th>
                <th scope="col">Translation ID</th>
                <th scope="col">Locale</th>
                <th scope="col">Slug</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>

            @foreach($posts as $key => $post)

                @foreach(config("translatable.locales") as $locale)

                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <th scope="row">{{$post->translate($locale)->id}}</th>
                    <td>{{$post->translate($locale)->title}}</td>
                    <td>{{$post->translate($locale)->content}}</td>
                    <td><a href="{{route('panel.posts.edit',$post->translate($locale)->id)}}"><button type="button" class="btn btn-outline-primary btn-rounded waves-effect">Update</button></a></td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger btn-rounded waves-effect">Delete</button>
                        </form>
                    </td>
                </tr>

                @endforeach

            @endforeach
            </tbody>
        </table>



    </div>

@endsection
