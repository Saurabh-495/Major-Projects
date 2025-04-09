<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Spark - Contact us</title>
    <?php require('./Include/links.php') ?>

    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


</head>

<body class="bg-light">

    <?php require('./Include/header.php') ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt magnam vitae ab <br> possimus officiis! Ad dignissimos aliquam repellat voluptates minima?</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 mb-5 px-4 ">
                <div class="bg-white rounded shadow  p-4 ">

                    <iframe class="w-100 rounded mb-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.5444185209926!2d83.42762057521759!3d26.72699767675834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39915d4a5f478631%3A0xc8fd89e96d2bb382!2sHotel%20The%20Spark!5e0!3m2!1sen!2sin!4v1743332504812!5m2!1sen!2sin" height="320" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://maps.app.goo.gl/idZzWiTApig72hQf9" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <!-- Address -->
                        <!-- Google Maps Link -->
                        <i class="bi bi-geo-alt-fill text-dark"></i> 83, Sector-25, Gandhi Nagar, Hyderabad, Telangana, Indi
                    </a>
                    <h5 class="mt-4">Call us</h5>
                    <a href="tel: +916394634470" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill text-dark"></i> +916394634470</a>
                    <br>
                    <a href="tel: +916394634470" class="d-inline-block  text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill text-dark"></i> +916394634470</a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: k50553005@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark"><i class="bi bi-envelope-fill text-dark"></i> hotel_theSparkGKP@gmail.com</a>

                    <h5 class="mt-4">FOLLOW US</h5>
                    <a href="" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-facebook me-1"></i>
                    </a>
                    <a href="" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter me-1"></i>
                    </a>
                    <a href="" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-instagram me-1"></i>
                    </a>

                </div>
            </div>
            <div class="col-lg-6 col-md-6  px-4 ">
                <div class="bg-white rounded shadow p-4 ">
                    <form>
                        <h5>Send a Message</h5>
                        <div class="mt-3">
                            <label class="form-label fw-600">Name </label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label fw-600">Email </label>
                            <input type="email" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label fw-600">Subject </label>
                            <input type="text" class="form-control shadow-none" />
                        </div>
                        <div class="mt-3">
                            <label class="form-label fw-600">Subject </label>
                            <textarea class="form-control shadow-none" rows="5" style="resize: none;"></textarea>
                        </div>
                        <!-- button -->
                         <button type="submit" class="btn text-white custom-bg shadow-none mt-4">SEND</button>
                    </form>
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