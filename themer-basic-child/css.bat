@echo off
SET theme=%~dp0
cd "%theme%"
sass --update --style=compressed "%theme%sass/style.scss":"%theme%style.css"
