<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Spark - home</title>
    <?php require('./Include/links.php') ?>
    
    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

 
    <style>
        .availibility-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availibility-form {
                margin-top: 25px;
                z-index: 2;
                padding: 0 35px;
            }
        }
    </style>
</head>

<body class="bg-light">
   
    <?php require('./Include/header.php')?> 

    <!-- Swiper Start -->
    <div class="container-fluid px-lg-4 mt-4">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/carousel/img2.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/img1.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/img3.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/img4.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/img5.png" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="./images/carousel/img6.png" class="w-100 d-block" />
                </div>
            </div>

        </div>
    </div>
    <!-- Swiper Ends -->

    <!-- Availibility check form start -->
    <div class="container availibility-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check Booking Availibility</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight: 500">Check-in</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label for="" class="form-label" style="font-weight: 500">Check-out</label>
                            <input type="date" class="form-control shadow-none" />
                        </div>
                        <!-- For Adults -->
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" for="">Adult</label>

                            <select
                                class="form-select shadow-none"
                                style="font-weight: 500"
                                aria-label="Default select example">
                                <option selected disabled>Open the select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <!-- For Childrens -->
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" for="">Childrens</label>

                            <select
                                class="form-select shadow-none"
                                style="font-weight: 500"
                                aria-label="Default select example">
                                <option selected disabled>Open the select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button
                                type="button"
                                class="btn custom-bg shadow-none text-white">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Availibility check form ends -->

    <!-- Rooms cards Section start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">
            <!-- Card-1 Start -->
            <div class="col-lg-4 col-md-6 my-3">
                <div
                    class="card border-0 shadow"
                    style="max-width: 350px; margin: auto">
                    <img src="./images/rooms/1.jpg" class="card-img-top" alt="Room 1" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Standard Room</h5>
                        <h6 class="text-center text-danger mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Bathrooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                wifi
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Telivision
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                AC
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                5 Adults
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                4 Children
                            </span>
                            
                        </div>


                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly">
                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card-1 Ends -->

            <!-- Card-2 Start -->
            <div class="col-lg-4 col-md-6 my-3">
                <div
                    class="card border-0 shadow"
                    style="max-width: 350px; margin: auto">
                    <img src="./images/rooms/2.png" class="card-img-top" alt="Room 1" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Standard Room</h5>
                        <h6 class="text-center text-danger mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Bathrooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                wifi
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Telivision
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                AC
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>
                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                5 Adults
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                4 Children
                            </span>
                            
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly">
                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card-2 Ends -->

            <!-- Card-3 Start -->
            <div class="col-lg-4 col-md-6 my-3">
                <div
                    class="card border-0 shadow"
                    style="max-width: 350px; margin: auto">
                    <img src="./images/rooms/3.png" class="card-img-top" alt="Room 1" />
                    <div class="card-body">
                        <h5 class="card-title text-center">Standard Room</h5>
                        <h6 class="text-center text-danger mb-4">₹200 per night</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                2 Rooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Bathrooms
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                1 Balcony
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                3 Sofa
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Facilities</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                wifi
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Telivision
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                AC
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                Room Heater
                            </span>
                        </div>

                        <div class="guests mb-4">
                            <h6 class="mb-1">Guests</h6>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                5 Adults
                            </span>
                            <span
                                class="badge rounded-pill bg-light text-dark bg-light text-wrap lh-base">
                                4 Children
                            </span>
                            
                        </div>

                        <div class="rating mb-4">
                            <h6 class="mb-1">Rating</h6>
                            <span class="badge rounded-fill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-evenly">
                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none">More Details</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card-3 Ends -->

            <!-- More Rooms Button -->
            <div class="col-lg-12 text-center mt-5">
                <a
                    href="#"
                    class="btn btn-sm btn-outline-dark rounded-1 fw-bold shadow-none">More Rooms >>></a>
            </div>
        </div>
    </div>
    <!-- Rooms cards Section ends -->

    <!-- Our Facilities Section Start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/ac.svg" width="80px" />
                <h5 class="mt-3">AC</h5>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div
                class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px" />
                <h5 class="mt-3">Wifi</h5>
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a
                    href="#"
                    class="btn btn-sm btn-outline-dark rounded-1 fw-bold shadow-none">More Facilities >>></a>
            </div>
        </div>
    </div>
    <!-- Our Facilities Section Ends -->

    <!-- Testimonials Section Start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
    <div class="container mt-4">
        <!-- Swiper -->
        <div class="swiper hello">
            <div class="swiper-wrapper">

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random user1</h6>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta doloribus autem, culpa ut error impedit? Voluptatum, praesentium sequi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white shadow p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random user3</h6>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta doloribus autem, culpa ut error impedit? Voluptatum, praesentium sequi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/facilities/wifi.svg" width="30px" alt="">
                        <h6 class="m-0 ms-2">Random user2</h6>
                    </div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta doloribus autem, culpa ut error impedit? Voluptatum, praesentium sequi.</p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="col-lg-12 text-center mt-5">
                <a
                    href="#"
                    class="btn btn-sm btn-outline-dark rounded-1 fw-bold shadow-none">Know More >>></a>
            </div>
    <!-- Testimonials Section Ends -->


    <!-- Reach us Section Start -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.5444185209926!2d83.42762057521759!3d26.72699767675834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39915d4a5f478631%3A0xc8fd89e96d2bb382!2sHotel%20The%20Spark!5e0!3m2!1sen!2sin!4v1743332504812!5m2!1sen!2sin" height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-4 col-md-4">

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call us</h5>
                    <a href="tel: +916394634470" class="d-inline-block mb-2 text-decoration-none">
                        <i class="bi bi-telephone-fill text-dark"></i> +916394634470</a>
                    <br>
                    <a href="tel: +916394634470" class="d-inline-block  text-decoration-none">
                        <i class="bi bi-telephone-fill text-dark"></i> +916394634470</a>
                </div>

                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow us</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-twitter me-1"></i> Twitter</span>
                    </a>
                    <br>
                    <a href=""><span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-instagram me-1"></i> Instagram</span></a>
                    <br>
                    <a href="#"><span class="badge bg-light text-dark fs-6 p-2"> <i class="bi bi-facebook me-1"></i> Facebook</span></a>

                </div>
            </div>
        </div>
    </div>
    <!-- Reach us Section Ends -->

                        <!-- Footer -->
                         <?php require('./Include/footer.php')?>
                        <!-- Footer -->

    <!-- Initialize Swiper -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".mySwiper", {
                spaceBetween: 30,
                effect: "fade",
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
            });



        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var swiper = new Swiper(".hello", {
                
                effect: "flip",
                grabCursor: true,
                pagination: {
                    el: ".swiper-pagination",
                },
                loop: true,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

            });
        });
    </script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>