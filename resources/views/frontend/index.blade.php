@extends('layouts.front')

@section('title')
    Home
@endsection


@section('content')
    {{-- slider --}}
    @include('layouts.inc.slider')
    {{-- hot collection --}}
    <div class="container mt-5 hot-collection">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-7">
                <img src="../assets/images/woman.png" alt="image">
                {{-- paragrph with header tag --}}
                <div>
                    <h4 class="my-3" style="color: #f0b5ec">Hot Collection</h4>
                    <h2 class="mt-2" style="color: #545454">New Trend For Women</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos sit optio corporis nisi fuga
                        nulla, necessitatibus impedit? Natus molestiae illo aspernatur quibusdam hic maiores suscipit culpa,
                        explicabo laudantium mollitia soluta.</p>
                    <button type="button" class="btn btn-outline-secondary">Shop Now</button>
                </div>
            </div>
            <div class=" col-lg-5 col-md-6 col-sm-5">
                <div>
                    <img src="../assets/images/man image.png" alt="image">
                </div>

                <div class="my-5">
                    <img src="../assets/images/Layer 3.png" alt="image">
                </div>
            </div>

        </div>
    </div>

    {{-- hot collection --}}



    {{-- trending products --}}
    <div class="py-3">
        <div class="container">
            <div class="row">
                <table class="">
                    <tr>
                        <td style="width:38%">
                            <hr />
                        </td>
                        <td style="vertical-align:middle; text-align: center">
                            <h2 style="color: #7b7b7b">Featured Products</h2>
                        </td>
                        <td style="width:38%">
                            <hr />
                        </td>
                    </tr>
                </table>

                <div class="owl-carousel featured-carousel owl-theme mt-5">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="product img">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start">{{ $prod->selling_pice }}</span>
                                    <span class="float-end"><s>{{ $prod->original_price }}</s></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- second bar of featured products --}}
                <div class="owl-carousel featured-carousel owl-theme mt-5">
                    @foreach ($featured_products as $prod)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/products/' . $prod->image) }}" alt="product img">
                                <div class="card-body">
                                    <h5>{{ $prod->name }}</h5>
                                    <span class="float-start">{{ $prod->selling_pice }}</span>
                                    <span class="float-end"><s>{{ $prod->original_price }}</s></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- sale section --}}
    <div class="row sale-section py-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="../assets/images/Layer 12.png" alt="image">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <img src="../assets/images/nn.png" alt="image">
        </div>
    </div>
    {{-- sale section --}}



    {{-- trending categories --}}

    <div class="py-5">
        <div class="container">
            <div class="row">
                <table class="">
                    <tr>
                        <td style="width:38%">
                            <hr />
                        </td>
                        <td style="vertical-align:middle; text-align: center">
                            <h2 style="color: #7b7b7b">trending Ctaegroies</h2>
                        </td>
                        <td style="width:38%">
                            <hr />
                        </td>
                    </tr>
                </table>
                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        {{-- get back to the owl carousel --}}
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/' . $tcategory->image) }}" alt="categ img">
                                <div class="card-body">
                                    <h5>{{ $tcategory->name }}</h5>
                                    <p>
                                        {{ $tcategory->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    {{-- trending categories --}}

    <div class="py-5">
        <div class="container">
            <div class="row">

                <div class="owl-carousel featured-carousel owl-theme">
                    @foreach ($trending_category as $tcategory)
                        <div class="item">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/category/' . $tcategory->image) }}" alt="categ img">
                                <div class="card-body">
                                    <h5>{{ $tcategory->name }}</h5>
                                    <p>
                                        {{ $tcategory->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-secondary load-more ">Shop Now</button>
    </div>
    {{-- end of trending categories --}}

    {{-- md shahin alam section --}}
    <div class="pt-5 md-shahin">
        <img src="../assets/images/Layer 21.png" alt="">
    </div>


    {{-- md shahin alam section --}}


    {{-- latest blog --}}
    <div class="container py-5">
        <table class="">
            <tr>
                <td style="width:45%">
                    <hr />
                </td>
                <td style="vertical-align:middle; text-align: center">
                    <h2 style="color: #7b7b7b">latest blog</h2>
                </td>
                <td style="width:45%">
                    <hr />
                </td>
            </tr>
        </table>
        <div class="row py-5">
            <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/Layer 23.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button href="#" class="btn-outline-secondary btn">Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 py-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/Layer 24.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button href="#" class="btn-outline-secondary btn">Read more</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 py-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../assets/images/Layer 25.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button href="#" class="btn-outline-secondary btn">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- latest blog --}}

    {{-- shop by brand section --}}
    <div class="container py-5">
        <table class="">
            <tr>
                <td style="width:45%">
                    <hr />
                </td>
                <td style="vertical-align:middle; text-align: center">
                    <h2 style="color: #7b7b7b">shop by brand</h2>
                </td>
                <td style="width:45%">
                    <hr />
                </td>
            </tr>
        </table>
        <div class="row py-5">
            <div class="col-lg-3">
                <img src="../assets/images/logo 1.png" alt="" style="width: 50%">
            </div>
            <div class="col-lg-3">
                <img src="../assets/images/logo 1.png" alt="" style="width: 50%">
                
            </div>
            <div class="col-lg-3">
                <img src="../assets/images/logo 1.png" alt="" style="width: 50%">
                
            </div>
            <div class="col-lg-3">
                <img src="../assets/images/logo 1.png" alt="" style="width: 50%">
                
            </div>
        </div>
    </div>

    {{-- shop by brand section --}}

    {{-- footer section --}}
    <footer class="py-5 ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h5>shop</h5>
                    <ul>
                       <li> <a href="">shop</a></li>
                       <li> <a href="">shop</a></li>
                       <li> <a href="">shop</a></li>
                       <li> <a href="">shop</a></li>
                       <li> <a href="">shop</a></li>
                       <li> <a href="">shop</a></li> 
                    </ul>
                </div>
                <div class="col">
                    <h5>shop</h5>
                    <ul>
                        <li> <a href="">shop</a></li>
                        <li> <a href="">shop</a></li>
                        <li> <a href="">shop</a></li>
                        <li> <a href="">shop</a></li>
                        <li> <a href="">shop</a></li>
                        <li> <a href="">shop</a></li> 
                     </ul>
                </div>
                <div class="col">
                    <h5>shop</h5>
                    <ul>
                        <li><a href="">shop</a></li>
                        <li><a href="">shop</a></li>
                        <li><a href="">shop</a></li>
                        <li><a href="">shop</a></li>
                        <li><a href="">shop</a></li>
                        <li><a href="">shop</a></li> 
                     </ul>
                </div>
                <div class="col">
                    <h5>shop</h5>
                    <ul>
                        <li><a href="">shop</a></li>
                        <li><input type="text" id="username" name="username" placeholder="type your email"><br></li>
                        <li><button class="btn bt-primary subscribe-btn">subscribe</button></li>
                            <li>
                                {{-- <div> --}}
                                    <i class="fa fa-facebook"></i>-
                                    <i class="fa fa-instagram"></i>-
                                    <i class="fa fa-behance"></i>-
                                    <i class="fa fa-pinterest"></i>
                                {{-- </div> --}}
                            </li>
                     </ul>
                </div>
            </div>
        </div>
    </footer>

    <div class="visa-section">
        <div class=" ">
            <div class="">
                <h6 class="" >visa section</h6>
            </div>
        </div>
    </div>
    {{-- footer section --}}

@endsection

@section('scripts')
    <script>
        $('.featured-carousel').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
@endsection
