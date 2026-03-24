<?php
ob_start();
?>
    <title>YKM Motors - Our Services</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
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

      .services {
        padding: 80px 0;
        background-color: var(--light-color);
      }

      .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
      }

      .service-card {
        background: var(--white);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        padding: 30px 20px;
        transition: transform 0.3s ease;
      }

      .service-card:hover {
        transform: translateY(-10px);
      }

      .service-icon {
        font-size: 3rem;
        color: var(--primary-color);
        margin-bottom: 20px;
      }

      .service-card h3 {
        font-size: 1.5rem;
        margin-bottom: 15px;
      }

      @media (max-width: 768px) {
        .menu-toggle {
          display: block;
        }
      }
    </style>

    <section class="services">
      <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-car"></i>
            </div>
            <h3>Vehicle Sales</h3>
            <p>
              Browse our extensive collection of premium vehicles with
              transparent pricing and expert guidance.
            </p>
            <a href="index.php?action=order"><button class="btn">Learn More</button></a>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-tools"></i>
            </div>
            <h3>Maintenance</h3>
            <p>
              Professional maintenance services to keep your vehicle performing
              at its best for years to come.
            </p>
            <a href="index.php?action=order"><button class="btn">Learn More</button></a>
          </div>

          <div class="service-card">
            <div class="service-icon">
              <i class="fas fa-paint-roller"></i>
            </div>
            <h3>Customization</h3>
            <p>
              Personalize your vehicle with our premium customization options
              and accessories.
            </p>
            <a href="index.php?action=order"><button class="btn">Learn More</button></a>
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