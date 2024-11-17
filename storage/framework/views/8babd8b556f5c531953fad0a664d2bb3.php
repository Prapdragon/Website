<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open Profile</title>
    <style>
        body {
            background-image: url(backgroundver2-9.jpg);
            background-size: cover;
            /* ทำให้รูปพื้นหลังครอบคลุมพื้นที่ทั้งหน้าจอ */
            background-position: center 0px;
            /* ทำให้รูปพื้นหลังอยู่ตรงกลางของหน้าจอ */
            background-attachment: fixed;
            /* ทำให้พื้นหลังไม่เลื่อนตามการเลื่อนหน้าจอ */
        }


        /* เพิ่มการปรับแต่งให้ปุ่มมีแอนิเมชัน */
        .container button {
            position: relative;
            overflow: hidden;
            background-color: #007bff;
            border: 2px solid #007bff;
            color: white;
            font-size: 1.5rem;
            padding: 10px 30px;
            cursor: pointer;
            border-radius: 5px;
            transition: transform 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        }

        /* เพิ่ม text-shadow ให้กับข้อความในปุ่ม */
        .container button h1 {
            text-shadow: 2px 2px 4px black;
            /* เพิ่มเงาสีดำให้กับข้อความ */
        }

        .container button:hover {
            background-color: #0056b3;
            transform: scale(1.1);
            /* ทำให้ปุ่มขยายขนาดเมื่อ hover */
        }

        .container button:active {
            transform: scale(0.95);
            /* ทำให้ปุ่มย่อขนาดเมื่อคลิก */
            background-color: #004085;
        }

        .container button a {
            text-decoration: none;
            color: white;
        }

        #left-head {
            display: flex;
            left: 0 auto;
            max-width: 960px;
            text-shadow: 2px 2px 4px red;
        }

        #photo {
            max-width: 960px;
            height: 500px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #welcome {
            text-align: center;
            text-shadow: 5px 5px 5px black;
        }

        .card-img {
            max-width: 960px;
            height: 500px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center
        }

        .container {
            align-items: flex-end;
            justify-content: center;
            display: flex;
            max-width: 960px;
            height: 100px;
            margin: 0 auto;
            text-shadow: 5px 5px 5px black;
        }

        /* ปรับขนาดข้อความ Name Nopphadon Ladadok */
        #left-head h1 {
            font-family: 'Arial', sans-serif;
            /* ฟอนต์ที่ดูสะอาดตาและทันสมัย */
            font-size: 1.5rem;
            /* ขนาดตัวอักษรเล็กลงตามที่คุณต้องการ */
            color: #ffffff;
            /* สีข้อความเป็นขาว */
            text-align: center;
            /* จัดข้อความให้อยู่กลาง */
            text-shadow: 4px 4px 8px rgba(0, 0, 0, 0.6);
            /* เพิ่มเงาเพื่อให้ข้อความดูโดดเด่น */
            padding: 20px 0;
            /* เพิ่มพื้นที่รอบๆ ข้อความ */
            font-weight: bold;
            /* ทำให้ข้อความหนาขึ้น */
        }

        /* ปรับปรุงข้อความ Welcome */
#welcome h1 {
    font-family: 'Georgia', serif; /* ฟอนต์ที่มีความหรูหรา */
    font-size: 2.5rem; /* ขนาดตัวอักษรที่ใหญ่ขึ้น เพื่อให้ชัดเจนและเด่นขึ้น */
    color: #ffcc00; /* สีทอง ทำให้ข้อความดูสะดุดตา */
    text-align: center; /* จัดข้อความให้อยู่กลาง */
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.7), 0 0 25px rgba(255, 204, 0, 0.8); /* เพิ่มเงาให้ข้อความและประกายเพื่อให้เด่น */
    margin-top: 30px; /* เพิ่มระยะห่างจากส่วนอื่น */
    font-weight: 700; /* ทำให้ข้อความหนาขึ้น */
    letter-spacing: 2px; /* เพิ่มระยะห่างระหว่างตัวอักษรให้ดูโปร่งและสวยงาม */
    text-transform: uppercase; /* ทำให้ข้อความเป็นตัวพิมพ์ใหญ่ทั้งหมด */
    animation: glow 1.5s ease-in-out infinite; /* เพิ่มแอนิเมชั่นให้ข้อความกระพริบ */
}

/* เพิ่มแอนิเมชั่นไฟส่องแสงให้ข้อความ */
@keyframes glow {
    0% {
        text-shadow: 0 0 5px #ffcc00, 0 0 10px #ffcc00, 0 0 20px #ffcc00;
    }
    50% {
        text-shadow: 0 0 10px #ffcc00, 0 0 20px #ffcc00, 0 0 30px #ffcc00;
    }
    100% {
        text-shadow: 0 0 5px #ffcc00, 0 0 10px #ffcc00, 0 0 20px #ffcc00;
    }
}

    </style>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <div id="left-head">
        <h1 class="mx-2 my-2 d-flex justify-content-start card p-2 text-dark">Name Nopphadon Ladadok</h1>
    </div>

    <div id="welcome">
        <h1 class="my-2 text-info text-danger">Welcome to my E-Profile</h1>
    </div>

    <div id="photo">
        <div class="card" style="width: 20rem;">
            <div class="card_img">
                <div class="card-img-warpper">
                    <img src="LINE_ALBUM_Prab_241030_1 - Copy.jpg" class="card-img-warpper"
                        style="max-width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <button class="btn btn-primary">
            <a href="introduce">
                <h1 class="text-white">Into My Profile</h1>
            </a>
        </button>
    </div>

    <div class="container">
        <h3 class="text-white">Made by Prapdragon</h3>
    </div>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\index\resources\views/profile.blade.php ENDPATH**/ ?>