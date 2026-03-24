<?php
ob_start();
?>
    <title>YKM Motors - Contact Us</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
      @import url("https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap");

      /* Global Styles */
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

      /* Contact Section */
      .contact {
        padding: 80px 0;
        background-color: var(--light-color);
      }

      .contact-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
      }

      .contact-info {
        display: flex;
        flex-direction: column;
        gap: 30px;
      }

      .contact-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
      }

      .contact-icon {
        font-size: 1.5rem;
        color: var(--primary-color);
      }

      .contact-text h3 {
        font-size: 1.2rem;
        margin-bottom: 5px;
      }

      .contact-form .form-group {
        margin-bottom: 20px;
      }

      .contact-form input,
      .contact-form textarea {
        width: 100%;
        padding: 12px 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1rem;
      }

      .contact-form textarea {
        height: 150px;
        resize: vertical;
      }

      /* Responsive Design */
      @media (max-width: 768px) {
        .menu-toggle {
          display: block;
        }

        .contact-container {
          grid-template-columns: 1fr;
        }
      }
    </style>
  
    <!-- Contact Section -->
    <section class="contact">
      <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-container">
          <div class="contact-info">
            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div class="contact-text">
                <h3>Address</h3>
                <p>123 Automotive Avenue</p>
                <p>Motor City, MC 12345</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-phone-alt"></i>
              </div>
              <div class="contact-text">
                <h3>Phone</h3>
                <p>+212 666666666</p>
                <p>+212 666666666</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-envelope"></i>
              </div>
              <div class="contact-text">
                <h3>Email</h3>
                <p>info@ykmmotors.com</p>
                <p>sales@ykmmotors.com</p>
              </div>
            </div>

            <div class="contact-item">
              <div class="contact-icon">
                <i class="fas fa-clock"></i>
              </div>
              <div class="contact-text">
                <h3>Business Hours</h3>
                <p>Monday - Friday: 9am - 7pm</p>
                <p>Saturday: 9am - 1pm</p>
                <p>Sunday: Closed</p>
              </div>
            </div>
          </div>

          <div class="contact-form">
            <form action="#">
              <div class="form-group">
                <input type="text" placeholder="Your Name" required />
              </div>
              <div class="form-group">
                <input type="email" placeholder="Your Email" required />
              </div>
              <div class="form-group">
                <input type="text" placeholder="Subject" />
              </div>
              <div class="form-group">
                <textarea placeholder="Your Message" required></textarea>
              </div>
              <button type="submit" class="btn">Send Message</button>
            </form>
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