    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>This is me</title>

        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        <style>
            /* ปรับขนาดของคาร์เซล */
            #carouselExampleIndicators {
                max-width: 2000px;
                /* กำหนดความกว้างสูงสุดที่ต้องการ */
                margin: 40px auto;
                /* เพิ่มระยะห่างจากด้านบน */
            }

            .carousel-item img {
                height: 700px;
                /* กำหนดความสูงของภาพ */
                object-fit: cover;
                /* ให้ภาพเต็มพื้นที่โดยไม่เสียสัดส่วน */
            }
        </style>
    </head>

    <body>
        @extends('layouts.navbar')
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </body>
    <h3>ผลงานที่เด่นของฉัน</h3>
    </html>
