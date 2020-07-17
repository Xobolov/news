@extends('panel.layouts.app')

@section('content')

<div class="container-fluid">

    <div class="card mb-4 wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">

        <!--Card content-->
        <div class="card-body">

            <div class="row">

                <div class="col-md-6 my-auto">
                    <h4 class="mb-2 mb-sm-0 pt-1">
                        <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page / Categories</a>
                        <span>/</span>
                        <span>Create</span>
                    </h4>
                </div>

            </div>

        </div>


    </div>

    <!-- Form -->
    <form action="{{route('panel.categories.store')}}" method="POST">
        @csrf

    <!-- Name -->
    <div class="md-form">
        <input type="text" id="form1" class="form-control" name="name">
        <label for="form1">Name</label>
    </div>

    <button class="btn btn-success">Create</button>

</form>
<!-- Form -->



</div>

@endsection
