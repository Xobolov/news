@extends('web.layouts.app')

@section('content')
    <!-- Carousel Wrapper -->
    @include('web.includes.carousel')
    <!-- Carousel Wrapper -->

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8">
                <!-- Section: Magazine posts -->
                <section class="section extra-margins mt-2">

                    <h4 class="font-weight-bold"><strong>{{--$category->title--}}111
                        </strong></h4>

                    <hr class="red title-hr">

                    <!-- Grid row -->
                    <div class="row mb-4">



                        @foreach($posts as $post)



                        <!-- Grid column -->
                        <div class="col-md-6 text-left mt-3">

                            <!-- Card -->
                            <div class="card">

                                <!-- Card image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Technology/4-col/img%20(1).jpg"
                                         class="card-img-top" alt="Sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                                <!-- Card image -->
                                <!-- Card content -->
                                <div class="card-body">

                                    <!-- Title -->
                                    <h4 class="card-title"><strong>Card title</strong></h4>

                                    <hr>

                                    <!-- Text -->
                                    <p class="card-text mb-3">{{$post->content}}</p>

                                    <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>

                                        27/08/2017</p>

                                    <p class="font-small grey-text mb-0">Anna Smith</p>

                                    <p class="text-right mb-0 font-small font-weight-bold"><a>read more <i
                                                class="fas fa-angle-right"></i></a></p>

                                </div>
                                <!-- Card content -->

                            </div>
                            <!-- Card -->

                        </div>
                        <!-- Grid column -->



@endforeach







                    </div>

                </section>

                <!-- Section: Magazine posts -->

                <!-- Pagination dark -->
                <nav>

                    <ul class="pagination pg-dark flex-center pt-4">

                        <!-- Arrow left -->
                        <li class="page-item">

                            <a class="page-link" aria-label="Previous">

                                <span aria-hidden="true">&laquo;</span>

                                <span class="sr-only">Previous</span>

                            </a>

                        </li>

                        <!-- Numbers -->
                        <li class="page-item active"><a class="page-link">1</a></li>

                        <li class="page-item"><a class="page-link">2</a></li>

                        <li class="page-item"><a class="page-link">3</a></li>

                        <li class="page-item"><a class="page-link">4</a></li>

                        <li class="page-item"><a class="page-link">5</a></li>

                        <!-- Arrow right -->
                        <li class="page-item">

                            <a class="page-link" aria-label="Next">

                                <span aria-hidden="true">&raquo;</span>

                                <span class="sr-only">Next</span>

                            </a>

                        </li>

                    </ul>

                </nav>
                <!-- Pagination dark grey -->


            </div>

            <div class="col-md-4">

                <!-- Section: Categories -->
                <section class="section mb-5">

                    <h4 class="font-weight-bold mt-2"><strong>CATEGORIES</strong></h4>

                    <hr class="red title-hr">

                    <ul class="list-group z-depth-1 mt-4">

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Business</a>

                            <span class="badge badge-danger badge-pill">4</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Entertainment</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Health</a>

                            <span class="badge badge-danger badge-pill">1</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Lifestyle</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Photography</a>

                            <span class="badge badge-danger badge-pill">1</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Technology</a>

                            <span class="badge badge-danger badge-pill">2</span>

                        </li>

                        <li class="list-group-item d-flex justify-content-between align-items-center">

                            <a>Sport</a>

                            <span class="badge badge-danger badge-pill">5</span>

                        </li>

                    </ul>

                </section>

                <!-- Section: Categories -->

                <!-- Section: Categories -->
                <h4 class="font-weight-bold"><strong>POPULAR POSTS</strong></h4>

                <hr class="red title-hr mb-4">

                <!-- Carousel Wrapper -->
                <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">

                    <!-- Indicators -->
                    <ol class="carousel-indicators">

                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>

                        <li data-target="#carousel-example-2" data-slide-to="1"></li>

                        <li data-target="#carousel-example-2" data-slide-to="2"></li>

                    </ol>
                    <!-- Indicators -->

                    <!-- Slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active">

                            <div class="view">

                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/7.jpg"
                                     alt="First slide">

                                <div class="mask rgba-black-light"></div>

                            </div>

                            <div class="carousel-caption">

                                <h3 class="h3-responsive font-weight-bold">This is news</h3>

                                <p>First text</p>

                            </div>

                        </div>

                        <div class="carousel-item">

                            <!-- Mask color -->
                            <div class="view">

                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/5.jpg"
                                     alt="Second slide">

                                <div class="mask rgba-black-light"></div>

                            </div>

                            <div class="carousel-caption">

                                <h3 class="h3-responsive font-weight-bold">This is news</h3>

                                <p>Secondary text</p>

                            </div>

                        </div>

                        <div class="carousel-item">

                            <!-- Mask color -->
                            <div class="view">

                                <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/6.jpg"
                                     alt="Third slide">

                                <div class="mask rgba-black-light"></div>

                            </div>

                            <div class="carousel-caption">

                                <h3 class="h3-responsive font-weight-bold">This is news</h3>

                                <p>Third text</p>

                            </div>

                        </div>

                    </div>

                    <!-- Slides -->
                    <!-- Controls -->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">

                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                        <span class="sr-only">Previous</span>

                    </a>

                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">

                        <span class="carousel-control-next-icon" aria-hidden="true"></span>

                        <span class="sr-only">Next</span>

                    </a>
                    <!-- Controls -->

                </div>
                <!-- Carousel Wrapper -->

                <!-- Section: Advertisment -->
                <section class="section mt-5">

                    <h6 class="grey-text text-center mb-3"><strong>- Reklam -</strong></h6>

                    <!-- Jumbotron -->
                    <div class="jumbotron text-center">

                        <!-- Title -->
                        <h1 class="card-title h2-responsive mt-2"><strong>Material Design for Bootstrap</strong></h1>

                        <!-- Subtitle -->
                        <p class="blue-text mb-4 mt-5 font-weight-bold">Powerful and free Material Design UI KIT</p>

                        <!-- Text -->
                        <div class="d-flex justify-content-center">

                            <p class="card-text mb-1" style="max-width: 43rem;">Sed ut perspiciatis unde omnis iste natus sit

                                voluptatem accusantium doloremque laudantium,

                                totam rem aperiam.

                            </p>

                        </div>

                        <hr class="my-4">

                        <p>dasd</p>

                    </div>
                    <!-- Jumbotron -->

                </section>
                <!-- Section: Advertisment -->

                <!-- Section: Newsletter -->
                <section class="section mt-5">

                    <h4 class="font-weight-bold"><strong>NEWSLETTER</strong></h4>

                    <hr class="red title-hr mb-4">

                    <!-- Newsletter -->
                    <div class="card z-depth-1 widget-spacing mt-0">

                        <div class="card-body">

                            <!-- Header -->
                            <div class="text-center">

                                <h4>Subscribe:</h4>

                                <hr class="mt-2">

                            </div>

                            <!-- Body -->
                            <p class="font-small text-center">We'll write rarely, but only the best content.</p>

                            <!-- Body -->
                            <div class="md-form">

                                <i class="fas fa-user prefix grey-text"></i>

                                <input type="text" id="form3" class="form-control">

                                <label for="form3">Your name</label>

                            </div>

                            <div class="md-form">

                                <i class="fas fa-envelope prefix grey-text"></i>

                                <input type="text" id="form2" class="form-control">

                                <label for="form2">Your email</label>

                            </div>

                            <div class="text-center">

                                <button class="btn btn-primary">Send</button>

                            </div>

                        </div>

                    </div>

                </section>
                <!-- Section: Newsletter -->


                <!-- Section: Featured posts -->
                <section class="section widget-content mt-5">

                    <!-- Heading -->
                    <h4 class="font-weight-bold pt-2"><strong>FEATURED POSTS</strong></h4>

                    <hr class="red title-hr mb-4">

                    <!-- Card -->
                    <div class="card card-body pb-0">

                        <!-- Grid row -->
                        <div class="row">

                            <div class="col-4">

                                <!-- Image -->
                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(121).jpg"
                                         class="img-fluid rounded-0" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                            </div>

                            <!-- Excerpt -->
                            <div class="col-8">

                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                <div class="post-data">

                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 18/08/2017</p>

                                </div>

                            </div>
                            <!-- Excerpt -->

                        </div>
                        <!-- Grid row -->

                        <hr>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Image -->
                            <div class="col-4">

                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(30).jpg"
                                         class="img-fluid rounded-0" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                            </div>
                            <!-- Image -->

                            <!-- Excerpt -->
                            <div class="col-8">

                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                <div class="post-data">

                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2017</p>

                                </div>

                            </div>
                            <!-- Excerpt -->

                        </div>
                        <!-- Grid row -->

                        <hr>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Image -->
                            <div class="col-4">

                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(118).jpg"
                                         class="img-fluid rounded-0" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                            </div>
                            <!-- Image -->

                            <!-- Excerpt -->
                            <div class="col-8">

                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                <div class="post-data">

                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 27/08/2017</p>

                                </div>

                            </div>
                            <!-- Excerpt -->

                        </div>
                        <!-- Grid row -->

                        <hr>

                        <!-- Grid row -->
                        <div class="row">

                            <!-- Image -->
                            <div class="col-4">

                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(124).jpg"
                                         class="img-fluid rounded-0" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                            </div>
                            <!-- Image -->

                            <!-- Excerpt -->
                            <div class="col-8">

                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>

                                <div class="post-data">

                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>

                                </div>

                            </div>
                            <!-- Excerpt -->

                        </div>
                        <!-- Grid row -->

                        <hr>

                        <!-- Grid row -->
                        <div class="row mb-0">

                            <!-- Image -->
                            <div class="col-4">

                                <div class="view overlay">

                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg"
                                         class="img-fluid rounded-0" alt="sample image">

                                    <a>

                                        <div class="mask rgba-white-slight"></div>

                                    </a>

                                </div>

                            </div>
                            <!-- Image -->

                            <!-- Excerpt -->
                            <div class="col-8">

                                <h6 class="mt-0  mb-3"><a><strong>This is title of the news</strong></a></h6>

                                <div class="post-data">

                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2018</p>

                                </div>

                            </div>
                            <!-- Excerpt -->

                        </div>
                        <!-- Grid row -->

                        <hr>

                    </div>

                </section>
                <!-- Section: Featured posts -->
            </div>
        </div>
    </div>

@endsection
