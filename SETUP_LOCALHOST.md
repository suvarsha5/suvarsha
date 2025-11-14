# How to Run Website on Localhost

## Option 1: PHP Built-in Server (Easiest - No Installation Needed)

### Prerequisites
- PHP 7.4+ installed on your system
- MySQL/MariaDB installed (for database)

### Steps:

1. **Open Command Prompt or PowerShell**
   - Press `Win + R`, type `cmd` or `powershell`, press Enter

2. **Navigate to your project folder**
   ```bash
   cd "C:\Users\athar\OneDrive\Desktop\Vinit Project\suvarsha"
   ```

3. **Start PHP Built-in Server**
   ```bash
   php -S localhost:8000
   ```
   
   **Note:** The built-in server doesn't support `.htaccess`, so use this alternative router:
   ```bash
   php -S localhost:8000 -t . router.php
   ```

4. **Open your browser**
   - Go to: `http://localhost:8000`
   - You should see your website!

5. **To stop the server**
   - Press `Ctrl + C` in the terminal

---

## Option 2: XAMPP (Recommended for Windows)

### Installation:

1. **Download XAMPP**
   - Visit: https://www.apachefriends.org/
   - Download XAMPP for Windows
   - Install it (usually to `C:\xampp`)

2. **Start Services**
   - Open XAMPP Control Panel
   - Start **Apache** and **MySQL** services

3. **Copy Project Files**
   - Copy your `suvarsha` folder to: `C:\xampp\htdocs\`
   - Or create a symbolic link

4. **Access Website**
   - Open browser: `http://localhost/suvarsha`
   - Or if you renamed it: `http://localhost/your-folder-name`

---

## Option 3: WAMP Server

1. Download WAMP from: https://www.wampserver.com/
2. Install and start Apache + MySQL
3. Copy project to `C:\wamp64\www\suvarsha`
4. Access: `http://localhost/suvarsha`

---

## Database Setup (Required for Full Functionality)

### Using XAMPP/WAMP MySQL:

1. **Open phpMyAdmin**
   - XAMPP: `http://localhost/phpmyadmin`
   - WAMP: `http://localhost/phpmyadmin`

2. **Create Database**
   - Click "New" in left sidebar
   - Database name: `it_consultancy_db`
   - Collation: `utf8mb4_unicode_ci`
   - Click "Create"

3. **Import Schema**
   - Select `it_consultancy_db` database
   - Click "Import" tab
   - Choose file: `database/schema.sql`
   - Click "Go"

4. **Import Sample Data (Optional)**
   - Still in `it_consultancy_db`
   - Click "Import" tab again
   - Choose file: `database/seed.sql`
   - Click "Go"

5. **Update Database Config**
   - Edit `config/database.php`
   - Update credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_NAME', 'it_consultancy_db');
   define('DB_USER', 'root');        // Default XAMPP/WAMP user
   define('DB_PASS', '');            // Usually empty for XAMPP/WAMP
   ```

### Using Command Line MySQL:

```bash
# Navigate to project folder
cd "C:\Users\athar\OneDrive\Desktop\Vinit Project\suvarsha"

# Import schema
mysql -u root -p < database/schema.sql

# Import sample data
mysql -u root -p it_consultancy_db < database/seed.sql
```

---

## Quick Start Checklist

- [ ] PHP installed (check: `php -v` in command prompt)
- [ ] MySQL installed and running
- [ ] Database created and schema imported
- [ ] Database credentials updated in `config/database.php`
- [ ] Server started (PHP built-in or XAMPP/WAMP)
- [ ] Browser opened to `http://localhost:8000` (or your port)

---

## Troubleshooting

### "Page not found" errors
- Make sure you're accessing the correct URL
- Check that Apache/mod_rewrite is enabled (for XAMPP/WAMP)
- For PHP built-in server, use `router.php` method

### Database connection errors
- Verify MySQL is running
- Check database credentials in `config/database.php`
- Ensure database exists: `it_consultancy_db`

### Port already in use
- Change port: `php -S localhost:8001` (use different number)
- Or stop the service using that port

### CSS/JS not loading
- Check browser console (F12) for errors
- Verify file paths in `includes/header.php`
- Clear browser cache

---

## Testing the Website

Once running, test these pages:
- Home: `http://localhost:8000/` or `http://localhost:8000/home`
- About: `http://localhost:8000/about`
- Services: `http://localhost:8000/services`
- Portfolio: `http://localhost:8000/portfolio`
- Blog: `http://localhost:8000/blog`
- Contact: `http://localhost:8000/contact`

