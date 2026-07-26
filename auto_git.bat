@echo off
title Auto Git Backup (15 minutes)
echo =========================================
echo Auto Git Backup Started
echo Press Ctrl+C to stop this script.
echo =========================================

:loop
echo.
echo [%time%] Committing and pushing to Git...
git add .
git commit -m "Auto backup at %date% %time%"
git push origin main

echo.
echo [%time%] Done! Waiting 15 minutes for the next backup...
:: 900 seconds = 15 minutes
timeout /t 900 /nobreak

goto loop
