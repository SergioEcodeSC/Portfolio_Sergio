@echo off
cd /d C:\MAMP\htdocs\Portfolio
sass --no-source-map --watch --style=compressed scss/style.scss css/style.css
pause