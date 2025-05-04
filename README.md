# 🛒 PHP E-Commerce Website

A PHP-based e-commerce website supporting user registration, login, cart management, checkout, and admin dashboard functionalities.

## 📁 Project Structure

```
├── admin/                # Admin dashboard & management
├── assets/               # Static resources
├── bootstrap-4.0.0/      # Bootstrap framework
├── charts/               # Charting libraries
├── classses/             # (Possibly meant to be 'classes') PHP classes
├── config/               # Configuration files
├── css/                  # Stylesheets
├── database/             # Database connection scripts
├── images/               # UI and product images
├── img/                  # Product / media images
├── inc/                  # PHP includes (header, footer, etc.)
├── js/                   # JavaScript files
├── PHPMailer/            # Email handling library
├── plugins/              # External plugins
├── styles/               # Custom styling
├── *.php                 # Core PHP logic files
```

## 🚀 Key Features

- 🧑‍💼 **User Authentication**  
  - Register (`register.php`)
  - Login (`login.php`, `check-login-ajax.php`)
  - Password Reset (`forgot-pass.php`, `reset_pass.php`)
  - Email Verification (`active_account.php`)

- 🛍️ **Shopping Cart**  
  - Add to cart (`addcart.php`)
  - View cart (`giohang.php`)
  - Checkout (`payment.php`)
  - Order history (`donhang.php`)

- 👤 **User Profile Management**  
  - Profile update (`profile.php`, `update_user_info.php`)

- 📬 **Email Support**  
  - Using PHPMailer (`PHPMailer/`, `email.php`)

- 📊 **Admin Panel**  
  - Admin management interface (`admin/`)
  - Statistics and charts (`charts/`)

## ⚙️ Installation & Setup

1. **Clone the repository**

```bash
git clone https://github.com/yourusername/your-repo.git
cd your-repo
```

2. **Set up your database**

- Import the SQL file from `database/` (if available)
- Configure connection details in `config/` (e.g., `config/db.php`)

3. **Configure SMTP (Optional)**

Edit `PHPMailer` settings in `email.php` to use your SMTP credentials.

4. **Run the project**

Place the folder in your local web server (e.g., `htdocs/` if using XAMPP), then visit:

```
http://localhost/your-repo/
```

## ✅ Requirements

- PHP 7.2+
- MySQL/MariaDB
- Apache/Nginx Server
- Composer (if dependencies needed)

## 📷 Screenshots

*(Add screenshots of the home page, cart, admin panel, etc.)*

## 📄 License

This project is licensed under the MIT License.
