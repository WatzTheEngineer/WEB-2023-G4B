cd ".\common\S01E04-05"
pause
php vendor/bin/phpstan analyse --level max iut-pw-part1
pause
php vendor/bin/phpstan analyse --level max iut-pw-laravel/app
pause
php vendor/bin/phpstan analyse --level max iut-pw-symfony/src
pause