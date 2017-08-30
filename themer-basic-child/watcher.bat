@echo off
SET theme=%~dp0
cd "%theme%"
sass --watch --style=compressed "%theme%sass/style.scss":"%theme%style.css"
