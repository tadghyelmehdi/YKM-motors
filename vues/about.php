<?php
ob_start();
?>
    
    <title>YKM Motors - About Us</title>
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

      .about {
        padding: 80px 0;
        background-color: var(--white);
      }

      .about-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 50px;
        align-items: center;
      }

      .about-text h2 {
        font-size: 2rem;
        margin-bottom: 20px;
        color: var(--primary-color);
      }

      .about-text p {
        margin-bottom: 15px;
      }

      .stats {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
        margin-top: 30px;
      }

      .stat-item {
        text-align: center;
      }

      .stat-number {
        font-size: 2.5rem;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 5px;
      }

      .stat-label {
        font-size: 0.9rem;
        color: var(--text-color);
      }

      .about-img {
        width: 100%;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }

      .team {
        padding: 80px 0;
        background-color: var(--white);
      }

      .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
      }

      .team-card {
        background: var(--white);
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        transition: transform 0.3s ease;
      }

      .team-card:hover {
        transform: translateY(-10px);
      }

      .team-img {
        width: 100%;
        height: 250px;
        object-fit: cover;
      }

      .team-info {
        padding: 20px;
      }

      .team-info h3 {
        font-size: 1.3rem;
        margin-bottom: 5px;
        color: var(--primary-color);
      }

      .team-info p.position {
        color: var(--text-color);
        font-style: italic;
        margin-bottom: 10px;
      }

      .team-info p.bio {
        font-size: 0.9rem;
        margin-top: 10px;
        line-height: 1.5;
      }

      .social-links {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-top: 15px;
      }

      .social-links a {
        color: var(--text-color);
        transition: color 0.3s ease;
      }

      .social-links a:hover {
        color: var(--primary-color);
      }

      @media (max-width: 992px) {
        .about-content {
          grid-template-columns: 1fr;
        }

        .about-img {
          order: -1;
        }
      }

      @media (max-width: 768px) {
        .menu-toggle {
          display: block;
        }
      }
    </style>
    <section class="about">
      <div class="container">
        <h2 class="section-title">About YKM Motors</h2>
        <div class="about-content">
          <div class="about-text">
            <h2>Our Story</h2>
            <p>
              Founded in 2005, YKM Motors started as a small dealership with
              just five cars in a modest showroom. Our passion for automobiles
              and commitment to honest business practices helped us grow into
              one of the region's most trusted names.
            </p>
            <p>
              Today we operate three state-of-the-art facilities serving
              thousands of satisfied customers.
            </p>
            <p>
              Our mission is to revolutionize the car buying experience by
              offering premium vehicles, transparent pricing, and customer
              service that puts you in the driver's seat of your dreams.
            </p>

            <div class="stats">
              <div class="stat-item">
                <div class="stat-number">15+</div>
                <div class="stat-label">Years Experience</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">200+</div>
                <div class="stat-label">Vehicles in Stock</div>
              </div>
              <div class="stat-item">
                <div class="stat-number">5000+</div>
                <div class="stat-label">Happy Customers</div>
              </div>
            </div>
          </div>
          <img
            src="https://images.unsplash.com/photo-1485291571150-772bcfc10da5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
            alt="YKM Motors Showroom"
            class="about-img"
          />
        </div>
      </div>
    </section>

    <section class="team">
      <div class="container">
        <h2 class="section-title">Our Leadership Team</h2>
        <div class="team-grid">
          <div class="team-card">
            <img src="download.png" alt="Youness Agrine" class="team-img" />
            <div class="team-info">
              <h3>Youness Agrine</h3>
              <p class="position">Co-Founder & CEO</p>
              <p class="bio">
                Visionary who started YKM Motors in 2005 with just 5 cars. His
                "customer-first" philosophy transformed our small showroom into
                three state-of-the-art facilities.
              </p>
              <div class="social-links">
                <a
                  href="https://www.instagram.com/you__nsse_ag_r/"
                  target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  href="https://www.linkedin.com/in/youness-agrine-4b957831a/"
                  target="_blank"
                  ><i class="fab fa-linkedin"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="team-card">
            <img src="download.png" alt="Kamal Boukari" class="team-img" />
            <div class="team-info">
              <h3>Kamal Boukari</h3>
              <p class="position">Co-Founder & Operations Director</p>
              <p class="bio">
                Architect of our award-winning service standards. Manages our
                200+ vehicle fleet and ensures every vehicle meets YKM's
                rigorous quality checks.
              </p>
              <div class="social-links">
                <a href="https://www.instagram.com/kam___al_07/" target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  href="https://www.linkedin.com/in/kamal-boukari-8b494b2a7/"
                  target="_blank"
                  ><i class="fab fa-linkedin"></i
                ></a>
              </div>
            </div>
          </div>

          <div class="team-card">
            <img src="download.png" alt="El Mehdi Tadghy" class="team-img" />
            <div class="team-info">
              <h3>Mehdi Tadghy</h3>
              <p class="position">Co-Founder & Finance Director</p>
              <p class="bio">
                Created our revolutionary no-haggle pricing model. Oversees all
                financial operations and developed our comprehensive warranty
                programs.
              </p>
              <div class="social-links">
                <a href="https://www.instagram.com/meh__di_tg/" target="_blank"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a
                  href="https://www.linkedin.com/in/tadghy-el-mehdi-a83874350/"
                  target="_blank"
                  ><i class="fab fa-linkedin"></i
                ></a>
              </div>
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
  </body>
  
<?php
$page = ob_get_clean();
?>
