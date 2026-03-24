<?php
ob_start();
?>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YKM Motors - Premium Automotive Solutions</title>
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

      .hero {
    background: 
    linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
    url('back.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  height: 80vh;
  display: flex;
  align-items: center;
  text-align: center;
  color: var(--white);
}

      .hero-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
      }

      .hero h1 {
        font-size: 3.5rem;
        margin-bottom: 20px;
        text-transform: uppercase;
        font-family: "Oswald", sans-serif;
      }

      .hero p {
        font-size: 1.2rem;
        margin-bottom: 30px;
      }

      @media (max-width: 768px) {
        .menu-toggle {
          display: block;
        }

        .nav-links {
          position: fixed;
          top: 70px;
          left: -100%;
          width: 100%;
          height: calc(100vh - 70px);
          background: var(--white);
          flex-direction: column;
          align-items: center;
          padding: 40px 0;
          transition: left 0.3s ease;
        }

        .nav-links.active {
          left: 0;
        }

        .hero h1 {
          font-size: 2.5rem;
        }

        .section-title {
          font-size: 2rem;
        }
      }
    </style>
    <section class="hero" id="home" >
      <div class="hero-content">
        <h1>Premium Automotive Excellence</h1>
        <p>
          Discover the finest selection of luxury and performance vehicles with
          unmatched service and expertise.
        </p>
        <a class="btn" href="index.php?action=cars">Explore Our Collection</a>
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