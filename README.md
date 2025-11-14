# IT Consultancy Website - Pure PHP

A professional, modern static website for IT consultancy built with Pure PHP (no framework), featuring custom routing, PDO database connectivity, and a responsive design.

## Features

- ✅ **Custom Routing System** - Clean URLs without framework overhead
- ✅ **PDO Database Integration** - Secure database connectivity with MySQL/PostgreSQL
- ✅ **Responsive Design** - Mobile-first approach with Tailwind CSS
- ✅ **Contact Form** - Fully functional with validation and database storage
- ✅ **Portfolio/Case Studies** - Dynamic project showcase
- ✅ **Blog System** - Content management for blog posts
- ✅ **Testimonials** - Client feedback display
- ✅ **Modern UI/UX** - Professional design with smooth animations

## Technology Stack

- **Backend**: Pure PHP 7.4+
- **Database**: MySQL 8+ / PostgreSQL
- **Frontend**: HTML5, Tailwind CSS (CDN), Vanilla JavaScript
- **Server**: Apache with mod_rewrite

## Requirements

- PHP 7.4 or higher
- MySQL 8+ or PostgreSQL 12+
- Apache web server with mod_rewrite enabled
- PDO extension enabled

## Installation

### 1. Clone or Download

Download the project files to your web server directory (e.g., `htdocs`, `www`, or your domain folder).

### 2. Database Setup

1. Create a new database:
```sql
CREATE DATABASE it_consultancy_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

2. Import the schema:
```bash
mysql -u your_username -p it_consultancy_db < database/schema.sql
```

3. (Optional) Import sample data:
```bash
mysql -u your_username -p it_consultancy_db < database/seed.sql
```

### 3. Configure Database

Edit `config/database.php` and update your database credentials:

```php
define('DB_HOST', 'localhost');
define('DB_NAME', 'it_consultancy_db');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
```

### 4. Configure Site Settings

Edit `config/config.php` to customize:
- Site name
- Site URL
- Contact email
- Contact phone

### 5. Set Permissions

Ensure the web server has read permissions on all files and write permissions on directories that need it (if any).

### 6. Apache Configuration

Make sure `.htaccess` is enabled in your Apache configuration. If not, add this to your `httpd.conf` or virtual host:

```apache
<Directory "/path/to/your/site">
    AllowOverride All
    Require all granted
</Directory>
```

## Project Structure

```
.
├── assets/
│   ├── css/
│   │   └── style.css          # Custom CSS styles
│   └── js/
│       └── main.js            # JavaScript functionality
├── config/
│   ├── config.php             # Application configuration
│   └── database.php           # Database connection
├── database/
│   ├── schema.sql             # Database schema
│   └── seed.sql               # Sample data
├── includes/
│   ├── header.php             # Site header
│   └── footer.php             # Site footer
├── pages/
│   ├── home.php               # Homepage
│   ├── about.php              # About page
│   ├── services.php           # Services page
│   ├── portfolio.php          # Portfolio page
│   ├── blog.php               # Blog listing
│   ├── contact.php            # Contact page
│   └── 404.php                # 404 error page
├── .htaccess                  # URL rewriting rules
├── index.php                  # Main router
└── README.md                  # This file
```

## Usage

### Adding New Pages

1. Create a new PHP file in the `pages/` directory
2. Add the route in `index.php`:

```php
$router->addRoute('your-page', function() {
    require PAGES_PATH . '/your-page.php';
});
```

### Database Queries

Use PDO for all database operations:

```php
$pdo = getDBConnection();
$stmt = $pdo->prepare("SELECT * FROM table WHERE id = ?");
$stmt->execute([$id]);
$result = $stmt->fetch();
```

### Adding Blog Posts

Insert directly into the database:

```sql
INSERT INTO posts (title, slug, content, excerpt, author, published_at) 
VALUES ('Title', 'slug', 'Content', 'Excerpt', 'Author', NOW());
```

## Customization

### Styling

- Tailwind CSS is loaded via CDN in `includes/header.php`
- Custom styles can be added to `assets/css/style.css`
- You can replace Tailwind with Bootstrap by updating the CDN link

### Colors

The site uses a blue color scheme. To change colors:
1. Update Tailwind classes in PHP files
2. Or configure Tailwind custom colors in `includes/header.php`

## Security Features

- ✅ PDO prepared statements (SQL injection prevention)
- ✅ Input validation and sanitization
- ✅ XSS protection with `htmlspecialchars()`
- ✅ Security headers in `.htaccess`
- ✅ File access protection

## Deployment

### Shared Hosting

1. Upload all files via FTP/SFTP
2. Ensure `.htaccess` is uploaded
3. Update database credentials in `config/database.php`
4. Import database schema

### VPS/Cloud

1. Clone repository or upload files
2. Set proper file permissions
3. Configure Apache/Nginx virtual host
4. Set up SSL certificate (Let's Encrypt recommended)

## Troubleshooting

### URLs not working (404 errors)

- Ensure mod_rewrite is enabled: `sudo a2enmod rewrite`
- Check `.htaccess` file exists and is readable
- Verify Apache `AllowOverride All` is set

### Database connection errors

- Verify database credentials in `config/database.php`
- Check database server is running
- Ensure database exists and user has permissions

### CSS/JS not loading

- Check file paths in `includes/header.php`
- Verify `ASSETS_PATH` constant is correct
- Check file permissions

## Support

For issues or questions:
- Check the code comments
- Review PHP error logs
- Ensure all requirements are met

## License

This project is open source and available for use in your projects.

## Credits

- Tailwind CSS: https://tailwindcss.com
- Font Awesome: https://fontawesome.com

