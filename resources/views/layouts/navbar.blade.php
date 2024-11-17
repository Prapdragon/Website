<style>
  /* CSS สำหรับแอนิเมชันใน Navbar */
  .navbar-nav .nav-link {
      position: relative;
      padding: 10px 20px;
      text-decoration: none;
      color: white;
      font-size: 1.2rem;
      font-weight: bold;
      transition: all 0.3s ease; /* สร้างแอนิเมชันพื้นฐาน */
  }

  /* เมื่อคลิกที่ลิงก์ */
  .navbar-nav .nav-link.active {
      color: #ff6600; /* เปลี่ยนสีเมื่อคลิก */
      transform: scale(1.1); /* ขยายขนาดเมื่อคลิก */
  }

  /* เมื่อ hover ลิงก์ */
  .navbar-nav .nav-link:hover {
      color: #ff6600; /* เปลี่ยนสี */
      transform: scale(1.1); /* ขยายขนาดเมื่อ hover */
  }

  /* เพิ่ม effect ย้ายเส้นใต้เมื่อ hover */
  .navbar-nav .nav-link::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 2px;
      background-color: #ff6600;
      bottom: 0;
      left: 0;
      transform: scaleX(0);
      transform-origin: bottom right;
      transition: transform 0.25s ease-out;
  }

  .navbar-nav .nav-link:hover::after {
      transform: scaleX(1);
      transform-origin: bottom left;
  }

  /* CSS สำหรับการซูมที่ Home link */
  .navbar-brand {
      font-size: 1.5rem;
      transition: transform 0.3s ease; /* เพิ่มแอนิเมชันการซูม */
  }

  .navbar-brand:hover {
      transform: scale(1.2); /* ซูมขึ้น 1.2 เท่าของขนาดเดิม */
  }

  .navbar {
      background-color: #333;
  }
</style>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
          <!-- ลิงก์ Home -->
          <a class="navbar-brand" href="introduce">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav me-auto mb-2 mb-md-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="profile">Profile</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="grade">Grade</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="contact">Contact</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="skill">Skill</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                  </li>
              </ul>
              <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </div>
      </div>
  </nav>

  <!-- Bootstrap JS & Popper.js -->
  @vite(['resources/js/app.js'])
  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const navLinks = document.querySelectorAll('.navbar-nav .nav-link'); // เลือกลิงค์ทั้งหมดใน navbar

          navLinks.forEach(link => {
              link.addEventListener('click', function() {
                  // ลบคลาส 'active' ออกจากทุกลิงค์
                  navLinks.forEach(link => link.classList.remove('active'));

                  // เพิ่มคลาส 'active' ให้กับลิงค์ที่ถูกคลิก
                  this.classList.add('active');
              });
          });
      });
  </script>
</body>
