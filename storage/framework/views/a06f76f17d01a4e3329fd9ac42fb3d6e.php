<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My skill</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        /* จัดตำแหน่ง .content สำหรับข้อความ "Prap Skill" และ "Explore my skills" */
        .content {
            width: 85%;
            position: absolute;
            top: 50px;
            /* ห่างจากขอบบน 50px */
            left: 50px;
            /* ห่างจากขอบซ้าย 50px */
            display: flex;
            flex-direction: column;
            /* วางข้อความในแนวตั้ง */
            justify-content: flex-start;
            align-items: flex-start;
            /* จัดตำแหน่งให้ข้อความอยู่ซ้ายสุด */
        }

        /* เปลี่ยนสีอักษรเป็นสีดำ */
        .content .header {
            color: #000000;
            /* สีดำ */
            text-align: left;
            /* ตั้งให้ข้อความอยู่ทางซ้าย */
            padding: 10px;
        }

        .content .header h1 {
            font-size: 4.5rem;
        }

        .content .header h3 {
            font-size: 2.3rem;
            letter-spacing: 2px;
        }

        /* กำหนดการแสดงกริดของ bg1, bg2, bg3, bg4 ให้อยู่ที่ขวาของหน้า */
        .grid-card {
            display: grid;
            grid-template-columns: repeat(2, 200px);
            grid-template-rows: repeat(2, 230px);
            grid-gap: 40px;
            position: absolute;
            right: 50px;
            /* ห่างจากขอบขวา 50px */
            top: 50%;
            /* จัดให้กริดอยู่ตรงกลางแนวตั้ง */
            transform: translateY(-50%);
            /* ย้ายกริดให้อยู่กลาง */
        }

        .grid-card .box {
            width: 100%;
            height: 230px;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            border-radius: 15px;
            cursor: pointer;
            /* เปลี่ยนเป็น pointer เมื่อชี้ที่บล็อก */
            transition: all 0.3s ease;
            /* เพิ่ม transition สำหรับการเปลี่ยนขอบ */
        }

        .grid-card .box:hover {
            border: 5px solid black;
            /* เมื่อ hover จะขึ้นขอบสีดำ */
        }

        .grid-card .box:active {
            border: 5px solid black;
            /* เมื่อคลิก จะขึ้นขอบสีดำ */
        }

        /* เมื่อคลิกที่ bg1, bg2, bg3, bg4 ให้เพิ่มคลาส fullscreen */
        .fullscreen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            /* สีพื้นหลังสีขาว */
            z-index: 1000;
            /* ให้แสดงอยู่เหนือทุกสิ่ง */
            display: flex;
            justify-content: center;
            align-items: center;
            transform: scale(0);
            /* เริ่มจากขนาด 0 เพื่อให้เกิดแอนิเมชัน */
            transition: transform 0.5s ease;
            /* เพิ่มแอนิเมชันการสูม */
        }

        .fullscreen.show {
            transform: scale(1);
            /* เมื่อเพิ่มคลาส 'show' จะขยายเต็มหน้าจอ */
        }

        /* ปุ่มกากบาท */
        .close-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 2.5rem;
            color: rgb(255, 255, 255);
            cursor: pointer;
            z-index: 1010;
            /* อยู่เหนือส่วนอื่นๆ */
            transition: transform 0.3s ease;
            /* เพิ่ม transition สำหรับการขยาย */
        }

        /* ซูมปุ่มกากบาทเมื่อเมาส์ hover */
        .close-btn:hover {
            transform: scale(1.2);
            /* ซูมปุ่มขึ้นเมื่อเมาส์ hover */
        }

        /* การแสดงผล */
        .bg1 {
            background-image: url('web-design.png');
        }

        .bg2 {
            background-image: url('game-skill.png');
        }

        .bg3 {
            background-image: url('art-skill.png');
        }

        .bg4 {
            background-image: url('sport-skill.png');
        }

        /* จัดปุ่มกากบาทให้ไปอยู่ใต้ navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #333;
            color: white;
            padding: 15px;
            z-index: 100;
            transition: top 0.3s ease;
            /* แอนิเมชันการเลื่อน navbar */
        }

        /* เมื่อ fullscreen เปิดขึ้น navbar จะหายไป */
        .navbar.hidden {
            top: -80px;
            /* ซ่อน navbar โดยการย้ายไปข้างบน */
        }
    </style>
</head>

<body>
    

    <div class="content">
        <div class="header">
            <h1>Prap Skill</h1>
            <h3>Explore my skills</h3>
        </div>
    </div>

    <!-- กริดสำหรับ bg1, bg2, bg3, bg4 -->
    <div class="grid-card">
        <div class="box bg1" onclick="openFullscreen('bg1')">
            <h2>Web Skill</h2>
        </div>
        <div class="box bg2" onclick="openFullscreen('bg2')">
            <h2>Game Skill</h2>
        </div>
        <div class="box bg3" onclick="openFullscreen('bg3')">
            <h2>Art Skill</h2>
        </div>
        <div class="box bg4" onclick="openFullscreen('bg4')">
            <h2>Sport Skill</h2>
        </div>
    </div>

    <!-- Div สำหรับแสดง fullscreen -->
    <div id="fullscreenContainer" class="fullscreen" style="display: none;">
        <!-- ปุ่มกากบาท -->
        <div class="close-btn" onclick="closeFullscreen()">×</div>
        <div id="fullscreenContent">
            <!-- เนื้อหาภายในจะถูกแทนที่เมื่อคลิกที่ bg -->
        </div>
    </div>

    <script>
        function openFullscreen(skill) {
            // ซ่อน Navbar เมื่อเปิด fullscreen
            const navbar = document.querySelector('.navbar');
            navbar.classList.add('hidden'); // เพิ่มคลาส 'hidden' ให้ navbar หายไป

            // แสดง fullscreen
            const fullscreenContainer = document.getElementById('fullscreenContainer');
            fullscreenContainer.style.display = 'flex'; // เปิดการแสดง fullscreen
            fullscreenContainer.classList.add('show'); // เพิ่มคลาส 'show' เพื่อให้เกิดแอนิเมชันการขยาย

            // เพิ่มเนื้อหาภายใน fullscreen (สามารถเปลี่ยนแปลงได้ตามต้องการ)
            const content = document.getElementById('fullscreenContent');

            // กำหนดตำแหน่งข้อความให้ขยับไปซ้ายบน
            content.style.position = 'absolute';
            content.style.top = '0'; // ตั้งค่าเป็น 0 เพื่อให้พื้นที่เต็มหน้าจอ
            content.style.left = '0'; // ตั้งค่าเป็น 0 เพื่อให้พื้นที่เต็มหน้าจอ
            content.style.textAlign = 'left'; // จัดข้อความให้ชิดซ้าย
            // เปลี่ยนอักษรเป็นสีขาว
            content.style.color = 'white';

            // เพิ่ม background สำหรับ Web Skill
            content.style.backgroundImage = "url('matrix.png')";
            content.style.backgroundSize = 'cover'; // ให้ภาพเต็มพื้นที่
            content.style.backgroundPosition = 'center'; // จัดตำแหน่งภาพให้ตรงกลาง
            content.style.backgroundAttachment = 'fixed'; // ให้ภาพอยู่ที่พื้นหลังแบบคงที่
            content.style.width = '100vw'; // ให้ความกว้างของพื้นที่เต็มหน้าจอ
            content.style.height = '100vh'; // ให้ความสูงของพื้นที่เต็มหน้าจอ
            content.style.padding = '0'; // ไม่มีช่องว่างภายใน
            content.style.margin = '0'; // ไม่มีช่องว่างภายนอก

            // เช็คทักษะที่ถูกคลิก
            if (skill === 'bg1') {
                content.innerHTML = `
                    <h1>Web Skill</h1>
                    <p>Web design, HTML, CSS, JavaScript, React, and more!</p>
                    <h3>My web skill in This website I use Laravel framework To write and use HTML, CSS, and JavaScript to write this website</h3>
                    <div>
                        <img src="html.png" alt="HTML" style="width: 200px; height: auto; margin-right: 20px;">
                        <img src="css.png" alt="CSS" style="width: 340px; height: auto; margin-right: 20px;">
                        <img src="js.png" alt="JavaScript" style="width: 150px; height: auto;">
                    </div>
                `;

                // เพิ่ม background สำหรับ Web Skill
                content.style.backgroundImage = "url('matrix.png')";
            } else if (skill === 'bg2') {
                content.innerHTML = `
                    <h1>Game Skill</h1>
                    <p>Game development using Unity, C#, and more!</p>
                `;
            } else if (skill === 'bg3') {
                content.innerHTML = `
                    <h1>Art Skill</h1>
                    <p>Digital art, Photoshop, Krita, and more!</p>
                `;
            } else if (skill === 'bg4') {
                content.innerHTML = `
                    <h1>Sport Skill</h1>
                    <p>Taekwondo, Volleyball, Running, and more!</p>
                `;
            }
        }

        function closeFullscreen() {
            // แสดง Navbar กลับ
            const navbar = document.querySelector('.navbar');
            navbar.classList.remove('hidden'); // ลบคลาส 'hidden' เพื่อให้ Navbar กลับมา

            // ซ่อน fullscreen เมื่อคลิกปิด
            const fullscreenContainer = document.getElementById('fullscreenContainer');
            fullscreenContainer.classList.remove('show'); // ลบคลาส 'show' เพื่อทำให้สูมกลับไป
            setTimeout(() => {
                fullscreenContainer.style.display = 'none'; // ซ่อนหลังจากแอนิเมชันเสร็จ
            }, 500); // ใช้เวลาเท่ากับแอนิเมชัน
        }
    </script>





</body>

</html>

<?php echo $__env->make('layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\index\resources\views/Skill.blade.php ENDPATH**/ ?>