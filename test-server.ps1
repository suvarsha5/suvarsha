# Test Server Script
Write-Host "Starting PHP server..."
$serverProcess = Start-Process -FilePath "php" -ArgumentList "-S","localhost:8000","-t",".","router.php" -WorkingDirectory "C:\Users\athar\OneDrive\Desktop\Vinit Project\suvarsha" -PassThru -WindowStyle Hidden

Start-Sleep -Seconds 3

Write-Host "Testing website..."
try {
    $response = Invoke-WebRequest -Uri "http://localhost:8000/" -UseBasicParsing -TimeoutSec 5
    Write-Host "✓ SUCCESS: Website is working!" -ForegroundColor Green
    Write-Host "Status Code: $($response.StatusCode)"
    
    if ($response.Content -match '<title>(.*?)</title>') {
        Write-Host "Page Title: $($matches[1])"
    }
    
    Write-Host ""
    Write-Host "Your website is available at: http://localhost:8000" -ForegroundColor Cyan
    Write-Host ""
    Write-Host "Press any key to stop the server..."
    $null = $Host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
    Stop-Process -Id $serverProcess.Id -Force
} catch {
    Write-Host "✗ Error: $($_.Exception.Message)" -ForegroundColor Red
    Write-Host "Server Process ID: $($serverProcess.Id)"
    Stop-Process -Id $serverProcess.Id -Force -ErrorAction SilentlyContinue
}

