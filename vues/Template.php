<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YKM MOTORS</title>
    
    <style>
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
      header {
        background-color: var(--white);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
      }

      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
      }

      .logo {
        font-size: 2rem;
        font-weight: bold;
        color: var(--primary-color);
        text-transform: uppercase;
        letter-spacing: 2px;
        font-family: "Oswald", sans-serif;
      }

      .nav-links {
        display: flex;
        gap: 2rem;
        list-style: none;
      }

      .nav-links a {
        font-weight: 500;
        color: var(--text-color);
        transition: color 0.3s ease;
        position: relative;
      }

      .nav-links a:hover,
      .nav-links a.active {
        color: var(--primary-color);
      }

      .nav-links a:after {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        background: var(--primary-color);
        bottom: -5px;
        left: 0;
        transition: width 0.3s ease;
      }

      .nav-links a:hover:after,
      .nav-links a.active:after {
        width: 100%;
      }

      .menu-toggle {
        display: none;
        cursor: pointer;
        font-size: 1.5rem;
      }

      .search-bar {
        margin-left: 20px;
      }

      .search-bar input {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 200px;
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

      footer {
        background-color: #d40000;
        color: #fff;
        padding: 40px 0 20px;
        text-align: center;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }
      .search-btn {
        background-color: var(--primary-color);
        color: var(--white);
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
      }
    </style>
</head>

<body>
<header>
  <nav class="container">
    <div class="logo">
      <a href="index.php?action=home">YKM MOTORS</a>
    </div>
    <div class="menu-toggle">
      <i class="fas fa-bars"></i>
    </div>
    <ul class="nav-links">
      <li><a href="index.php?action=home">Home</a></li>
      <li><a href="index.php?action=cars">Cars</a></li>
      <li><a href="index.php?action=services">Services</a></li>
      <li><a href="index.php?action=about">About</a></li>
      <li><a href="index.php?action=contact">Contact</a></li>
    </ul>
    <div class="search-bar">
      <form method="get" action="index.php">
        <input type="text" name="search" placeholder="Search..." value="<?php echo isset($_GET['search']) ? ($_GET['search']) : ''; ?>">
        <button type="submit" class="search-btn">Search</button>
      </form>
    </div>
    <a href="index.php?action=login"><button class="btn">Login</button></a>
  </nav>
</header>

<?php echo $page; ?>

<footer>
  <div class="footer">
    <p>&copy; 2025 YKM Motors. All Rights Reserved. Driving excellence since 2005.</p>
  </div>
</footer>

</body>
</html>
