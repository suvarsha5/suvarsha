@echo off
echo ========================================
echo   IT Consultancy Website Server
echo ========================================
echo.
echo Starting PHP Built-in Server...
echo.
echo Website will be available at: http://localhost:8000
echo.
echo Press Ctrl+C to stop the server
echo.
cd /d "%~dp0"

REM Check if PHP is available
where php >nul 2>&1
if %ERRORLEVEL% NEQ 0 (
    echo ERROR: PHP is not found in PATH!
    echo.
    echo Please either:
    echo 1. Install PHP and add it to PATH, OR
    echo 2. Use XAMPP/WAMP and access via http://localhost/suvarsha
    echo.
    pause
    exit /b 1
)

echo PHP found! Starting server...
echo.
php -S localhost:8000 -t . router.php
pause

