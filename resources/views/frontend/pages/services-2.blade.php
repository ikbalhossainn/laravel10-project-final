@extends('frontend.layouts.app')
@section('content')


        <!-- Inner Banner -->
        <div class="inner-banner inner-bg8">
            <div class="container">
                <div class="inner-title">
                    <ul>
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li> Services Style Two</li>
                    </ul>
                    <h3>Services Style Two</h3>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services Area Three -->
        <div class="services-area-three pt-100 pb-70">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">Our Services</span>
                    <h2>Our Services on the Global Market for Our Client's Reservation</h2>
                </div>

                <div class="row pt-45">
                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-hotel"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Hotel Room Reservation into the Desire Places</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-resort"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Resort Reservation Into the Good and Suitable Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-buildings"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Weeding Hall Reservation in the Suitable and Good Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6">
                        <div class="service-item-two">
                            <i class="flaticon-businessmen"></i>
                            <div class="content">
                                <h3><a href="service-details.html">Conference Room Reservation in the Suitable and Good Place</a></h3>
                                <p>
                                    You can easily reserve a hotel room in a good place as you want. This will be able to make good feelings. 
                                    This will be really effective for us and all & all of the customers & clients.
                                </p>
                                <a href="service-details.html" class="read-btn">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="pagination-area">
                            <a href="#" class="prev page-numbers">
                                <i class='bx bx-chevrons-left'></i>
                            </a>

                            <span class="page-numbers current" aria-current="page">1</span>
                            <a href="#" class="page-numbers">2</a>
                            <a href="#" class="page-numbers">3</a>
                            
                            <a href="#" class="next page-numbers">
                                <i class='bx bx-chevrons-right'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Area Three End -->

        <!-- Room Area -->
        <div class="room-area pt-100 pb-70 section-bg">
            <div class="container">
                <div class="section-title text-center">
                    <span class="sp-color">EXCLUSIVE OFFERS</span>
                    <h2>You Can Get an Exclusive Offer</h2>
                </div>
                <div class="row pt-45">
                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('')}}assets/frontend/img/room/room-style-img1.jpg" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Luxury Room</a>
                                        </h3>
                                        <span>320 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 4 Person</li>
                                            <li><i class='bx bx-expand'></i> 35m2 / 376ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('')}}assets/frontend/img/room/room-style-img2.jpg" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Single Room</a>
                                        </h3>
                                        <span>300 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 1 Person</li>
                                            <li><i class='bx bx-expand'></i> 25m2 / 276ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Smallsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('')}}assets/frontend/img/room/room-style-img3.jpg" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Family Room</a>
                                        </h3>
                                        <span>400 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 6 Person</li>
                                            <li><i class='bx bx-expand'></i> 55m2 / 476ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="room-card-two">
                            <div class="row align-items-center">
                                <div class="col-lg-5 col-md-4 p-0">
                                    <div class="room-card-img">
                                        <a href="room-details.html">
                                            <img src="{{asset('')}}assets/frontend/img/room/room-style-img4.jpg" alt="Images">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-7 col-md-8 p-0">
                                    <div class="room-card-content">
                                         <h3>
                                             <a href="room-details.html">Deluxe Room</a>
                                        </h3>
                                        <span>340 / Per Night </span>
                                        <div class="rating">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, adipiscing elit. Suspendisse et faucibus felis, sed pulvinar purus.</p>
                                        <ul>
                                            <li><i class='bx bx-user'></i> 4 Person</li>
                                            <li><i class='bx bx-expand'></i> 45m2 / 376ft2</li>
                                        </ul>

                                        <ul>
                                            <li><i class='bx bx-show-alt'></i> Sea Balcony</li>
                                            <li><i class='bx bxs-hotel'></i> Kingsize / Twin</li>
                                        </ul>
                                        
                                        <a href="room-details.html" class="book-more-btn">
                                            Book Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Room Area End -->

@endsection