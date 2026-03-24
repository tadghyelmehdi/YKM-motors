# YKM Motors — Automotive Management Website

A PHP web application for a car dealership. It allows customers to browse vehicles and lets admins manage the car inventory.

## Tech Stack

- **Backend:** PHP (MVC pattern)
- **Database:** MySQL via PDO
- **Frontend:** HTML, CSS, JavaScript
- **Fonts/Icons:** Google Fonts (Poppins, Oswald), Font Awesome 5

## Features

- Home page with hero section
- Browse car listings
- Search cars by name
- Car details view
- Admin: Add, edit, and delete cars
- Contact and Services pages
- Responsive design (mobile-friendly)

## Project Structure

```
YKM motors/
├── index.php           # Main router (front controller)
├── model_public.php    # All database functions (CRUD)
├── back.jpg            # Hero background image
└── vues/
    ├── Template.php    # Navbar & footer layout
    ├── home.php        # Landing page
    ├── cars.php        # Car listings
    ├── order.php       # Admin car management panel
    ├── vModify.php     # Edit car form
    ├── search.php      # Search results
    ├── login.php       # Admin login
    ├── services.php    # Services page
    ├── about.php       # About page
    └── contact.php     # Contact page
```

## URL Routing

The app uses a single entry point (`index.php`) with GET parameters:

| URL | Page |
|-----|------|
| `index.php` | Home |
| `index.php?action=cars` | Car listings |
| `index.php?action=order` | Admin panel |
| `index.php?action=search&search=bmw` | Search results |
| `index.php?action=login` | Admin login |
| `index.php?action=about` | About |
| `index.php?action=contact` | Contact |
| `index.php?action=services` | Services |

## Setup & Installation

### Prerequisites
- PHP 7.4+
- MySQL 5.7+
- Apache (XAMPP or WAMP recommended)

### Database Setup

```sql
CREATE DATABASE cars_table;
USE cars_table;

CREATE TABLE cars (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  model VARCHAR(100),
  year INT,
  price DECIMAL(10,2),
  color VARCHAR(50)
);
```

### Configure DB Connection

Edit `model_public.php`:

```php
$user = 'root';
$password = 'your_password';
$db = 'mysql:host=localhost;dbname=cars_table';
```

### Run Locally

1. Place the project folder in your web server root (e.g. `htdocs/` for XAMPP)
2. Start Apache and MySQL
3. Import the SQL schema
4. Visit: `http://localhost/YKM motors/index.php`

## Author

Developed as a PHP academic project by theD26.