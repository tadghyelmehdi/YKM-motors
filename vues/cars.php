<?php
ob_start();
?>
    <title>YKM Motors - Featured Cars</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap");

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      :root {
        --primary-color: #d40000;
        --secondary-color: #ff3737;
        --dark-color: #333;
        --light-color: #f5f5f5;
        --text-color: #555;
        --white: #fff;
      }

      body {
        background-color: var(--light-color);
        color: var(--dark-color);
        line-height: 1.6;
        overflow-x: hidden;
      }

      a {
        text-decoration: none;
        color: inherit;
      }

      .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .btn {
        display: inline-block;
        padding: 12px 25px;
        background: var(--primary-color);
        color: var(--white);
        border-radius: 5px;
        font-weight: 500;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
      }

      .btn:hover {
        background: #b30000;
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }

      .section-title {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
        font-size: 2.5rem;
        color: var(--primary-color);
        text-transform: uppercase;
      }

      .section-title:after {
        content: "";
        display: block;
        width: 80px;
        height: 4px;
        background: var(--primary-color);
        margin: 15px auto;
      }

      .featured-cars {
        padding: 80px 0;
        background-color: var(--white);
      }

      .cars-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
      }

      .car-card {
        background: var(--white);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .car-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
      }

      .car-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
      }

      .car-info {
        padding: 20px;
      }

      .car-info h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: var(--primary-color);
      }

      .car-specs {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
        color: var(--text-color);
      }

      .car-price {
        font-weight: bold;
        font-size: 1.2rem;
        color: var(--primary-color);
      }

      @media (max-width: 768px) {
        .menu-toggle {
          display: block;
        }
      }
    </style>
    <section class="featured-cars">
      <div class="container">
        <h2 class="section-title">Featured Vehicles</h2>
        <div class="cars-grid">
          <div class="car-card">
            <img
              src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
              alt="Luxury Sedan"
              class="car-img"
            />
            <div class="car-info">
              <h3>Premium Sedan</h3>
              <div class="car-specs">
                <span>2024 Model</span>
                <span>Automatic</span>
              </div>
              <div class="car-specs">
                <span>5 Seats</span>
                <span>Hybrid</span>
              </div>
              <div class="car-price">$45,999</div>
              <a
                href="index.php?action=order" class="btn"
                style="display: block; text-align: center; margin-top: 15px"
                >View Details</a>
            </div>
          </div>

          <div class="car-card">
            <img
              src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
              alt="Sports Car"
              class="car-img"
            />
            <div class="car-info">
              <h3>Performance Coupe</h3>
              <div class="car-specs">
                <span>2024 Model</span>
                <span>Automatic</span>
              </div>
              <div class="car-specs">
                <span>2 Seats</span>
                <span>Gasoline</span>
              </div>
              <div class="car-price">$68,999</div>
              <a
                href="index.php?action=order" class="btn"
                style="display: block; text-align: center; margin-top: 15px"
                >View Details</a
              >
            </div>
          </div>

          <div class="car-card">
            <img
              src="https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
              alt="Luxury SUV"
              class="car-img"
            />
            <div class="car-info">
              <h3>Luxury SUV</h3>
              <div class="car-specs">
                <span>2024 Model</span>
                <span>Automatic</span>
              </div>
              <div class="car-specs">
                <span>7 Seats</span>
                <span>Diesel</span>
              </div>
              <div class="car-price">$72,999</div>
              <a
                href="index.php?action=order" class="btn"
                style="display: block; text-align: center; margin-top: 15px"
                >View Details</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      document
        .querySelector(".menu-toggle")
        .addEventListener("click", function () {
          document.querySelector(".nav-links").classList.toggle("active");
        });
    </script>
  
<?php
$page = ob_get_clean();
?>