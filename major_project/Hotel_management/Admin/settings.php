<?php
require('include/essential.php');
adminLogin();
session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Zone - Settings</title>

    <?php require('include/links.php') ?>
    <?php require('include/Admin_header.php') ?>
</head>

<body class="bg-light">

    <div class="container-fluid" id="main_content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">SETTINGS</h3>
                <!-- General settings section -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-0">
                            <h5 class="card-title m-0 mb-3">GENERAL SETTINGS</h5>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#Edit-modal">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
                        <p class="card-text" id="site_title">Saurah</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about"></p>

                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="Edit-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="#">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>

                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="site_title" class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" />
                                    </div>
                                    <div class="mb-3">
                                        <label for="site_about" class="form-label">About us</label>
                                        <textarea
                                            name="site_about"
                                            id="site_about_inp"
                                            type="text"
                                            class="form-control shadow-none"
                                            rows="6">
                                            </textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                                    <button type="button" class="btn custom-bg text-white shadow-none" onclick="update_value(site_title.value , site_about.value);">SUBMIT</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('./include/scripts.php'); ?>
    <script>
        let general_data;

        // function getGeneral() {
        //     let site_title  = document.getElementById('site_title');
        //     let site_about = document.getElementById('site_about');

        //     let xhr  = new XMLHttpRequest();
        //     xhr.open('POST', 'ajax/settings_crud.php', true);
        //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        //     xhr.onload = function(){
        //         if(this.status === 200){
        //             general_data = JSON.parse(this.responseText);
        //             site_title.textContent = general_data.site_title;
        //             site_about.textContent = general_data.site_about;
        //         } else {
        //             console.log('Error in HTTP request');
        //         }
        //     }
        //     xhr.onerror = function(){
        //         console.log('Error in AJAX request');
        //     }


        //     xhr.send('get_general');
        // }

        // window.onload = function(){
        //     getGeneral();
        // }

        function getGeneral() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');
            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                if (this.status === 200) {
                    console.log('Raw response:', this.responseText); // Debug line

                    let general_data = JSON.parse(this.responseText);
                    site_title_inp.value = general_data.site_title;
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    site_about_inp.value = general_data.site_about;
                } else {
                    console.log('Error in HTTP request');
                }
            };

            xhr.onerror = function() {
                console.log('Error in AJAX request');
            };

            xhr.send('get_general');
        }

        function update_value(site_title_val, site_about_val) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/settings_crud.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                console.log(this.responseText);

            }
            xhr.send('site_title ='+site_title_val+'& site_about_val'+site_about_val+'& update_general');
        }

            window.onload = function() {
                getGeneral();
            };
    </script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>