<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Spark - Rooms</title>
    <?php require('./Include/links.php') ?>

    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body class="bg-light">

    <?php require('./Include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">OUR ROOMS</h2>
        <div class="h-line bg-dark"></div>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0 px-lg-0j">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid  flex-lg-column align-items-stretch ">
                        <h5 class="mt-2">FILTERS</h5>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flterDropDown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="flterDropDown">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">CHECK AVAILIBILITY</h5>
                                <label for="" class="form-label">Check-in</label>
                                <input type="date" class="form-control mb-3 shadow-none" id="">
                                <label for="" class="form-label ">Check-out</label>
                                <input type="date" class="form-control shadow-none" id="">
                            </div>


                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">FACILITIES</h5>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f1" for="f1">
                                    <label for="" class="form-check-label">Facility one</label>

                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f2" for="f2">
                                    <label for="" class="form-check-label">Facility two</label>

                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" class="form-check-input shadow-none me-1" id="f3" for="f3">
                                    <label for="" class="form-check-label">Facility three</label>

                                </div>


                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size:18px;">GUESTS</h5>

                                <div class="d-flex">
                                    <div class="me-3">
                                        <label for="" class="form-label">Adults</label>
                                        <input type="number" name="" class="form-control shadow-none" id="">
                                    </div>
                                    <div>
                                        <label for="" class="form-label">Childrens</label>
                                        <input type="number" name="" class="form-control shadow-none" id="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="col-lg-9 col-md-12 px-4">
                <!-- card -1 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="room1">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="guests">
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
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-3 text-danger">₹200 per night</h6>

                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none mb-2 w-100">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none w-100">More Details</a>

                        </div>
                    </div>
                </div>

                <!-- card-2 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="room1">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="guests">
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
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-3 text-danger">₹200 per night</h6>

                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none mb-2 w-100">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none w-100">More Details</a>

                        </div>
                    </div>
                </div>

                <!-- card - 3 -->
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded" alt="room1">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Simple Room Name</h5>
                            <div class="features mb-3">
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
                            <div class="guests">
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
                        </div>
                        <div class="col-md-2 text-center mt-lg-0 mt-md-0 mt-4">
                            <h6 class="mb-3 text-danger">₹200 per night</h6>

                            <a
                                href="#"
                                class="btn btn-sm btn-sm text-white custom-bg shadow-none rounded-1 fw-bold shadow-none mb-2 w-100">Book Now</a>
                            <a
                                href="#"
                                class="btn btn-sm btn-sm btn-outline-dark shadow-none rounded-1 fw-bold shadow-none w-100">More Details</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include('./Include/footer.php') ?>
    <!-- Footer -->




    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>