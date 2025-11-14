# Website Status Check

## ✅ Server Status

The website server has been configured and should be running. Here's how to verify:

### Quick Check:

1. **Open your web browser**
2. **Navigate to:** `http://localhost:8000`
3. **You should see:** The IT Consultancy homepage

### If the server is NOT running:

#### Option 1: Use the Batch File (Easiest)
1. Double-click `start-server.bat` in the `suvarsha` folder
2. A command window will open showing the server status
3. Keep this window open while using the website
4. Open browser to `http://localhost:8000`

#### Option 2: Manual Start (Command Line)
1. Open Command Prompt or PowerShell
2. Navigate to the project folder:
   ```bash
   cd "C:\Users\athar\OneDrive\Desktop\Vinit Project\suvarsha"
   ```
3. Start the server:
   ```bash
   php -S localhost:8000 -t . router.php
   ```
4. Open browser to `http://localhost:8000`

#### Option 3: Use XAMPP/WAMP
1. Install XAMPP or WAMP
2. Copy `suvarsha` folder to `C:\xampp\htdocs\` (or `C:\wamp64\www\`)
3. Start Apache in XAMPP/WAMP Control Panel
4. Access: `http://localhost/suvarsha`

### Test Pages:

- Home: `http://localhost:8000/` or `http://localhost:8000/home`
- About: `http://localhost:8000/about`
- Services: `http://localhost:8000/services`
- Portfolio: `http://localhost:8000/portfolio`
- Blog: `http://localhost:8000/blog`
- Contact: `http://localhost:8000/contact`

### Troubleshooting:

**"Page not found" or 404 errors:**
- Make sure the server is running
- Check that you're using the correct URL
- Verify PHP is installed: Run `php -v` in command prompt

**"Database connection failed":**
- This is OK! The website will work without a database
- Some pages (Portfolio, Blog) will show "No data" messages
- To fix: Set up MySQL database and import `database/schema.sql`

**Server won't start:**
- Check if port 8000 is already in use
- Try a different port: `php -S localhost:8001 -t . router.php`
- Make sure PHP is installed and in your PATH

### Current Status:

✅ All files are in place
✅ Router configured for PHP built-in server
✅ Ready to run

**Next Step:** Double-click `start-server.bat` to start the server!

