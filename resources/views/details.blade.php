@extends('partials.includes')

@section('body')
     <!-- Start Shop Detail  -->
     <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="articles/ordinateur/macbook.145000.jpg" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="https://images.itnewsinfo.com/lmi/articles/grande/000000069518.jpg" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="https://images.itnewsinfo.com/lmi/articles/grande/000000072303.jpg" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators" style="margin-top: 10px">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="articles/ordinateur/macbook.145000.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="https://images.itnewsinfo.com/lmi/articles/grande/000000069518.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="https://images.itnewsinfo.com/lmi/articles/grande/000000072303.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2>Macbook</h2>
                        <h5> <del> 60.00 FCFA</del> 40.79 FCFA</h5>
                            <p>
                                <h4>Description:</h4>
                                <p>Nam sagittis a augue eget scelerisque. Nullam lacinia consectetur sagittis. Nam sed neque id eros fermentum dignissim quis at tortor. Nullam ultricies urna quis sem sagittis pharetra. Nam erat turpis, cursus in ipsum at,
                                    tempor imperdiet metus. In interdum id nulla tristique accumsan. Ut semper in quam nec pretium. Donec egestas finibus suscipit. Curabitur tincidunt convallis arcu. </p>
                                <ul>
                                    
                                    <li>
                                        <div class="form-group quantity-box">
                                            <label class="control-label">Quantite</label>
                                            <input class="form-control" value="0" min="0" max="20" type="number">
                                        </div>
                                    </li>
                                </ul>

                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Acheter</a>
                                        <a class="btn hvr-hover" data-fancybox-close="" href="#">Ajouter a panier</a>
                                    </div>
                                </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- End Cart -->
@endsection