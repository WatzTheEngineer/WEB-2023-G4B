#S01E01

???

#S01E02

- All is about calling method on a class object, in each exemple it create a SomeClass exemple and call one of it's method

Note :
- The database method require msql installed and a database set up with
- All the generated file (google_content and generated_image) are in the generated file
- In the Util folder, it sould have a police.ttf (any police can work)

#S01E03

???

#S01E04

got to /common/S01E04-05/iut-pw-symphony-laravel/
type : "php artisan serve"

------------------------------------------

got to /common/S01E04-05/iut-pw-symphony-symphony/public/
type : "php -S 127.0.0.1:8000"

------------------------------------------

To scan file to the get errors :

go to /common/S01E04-05/
type : "php vendor/bin/phpstan analyse --level <file_to_scan>"

Exemples :
- php vendor/bin/phpstan analyse --level max iut-pw-part1
- php vendor/bin/phpstan analyse --level max iut-pw-laravel
- php vendor/bin/phpstan analyse --level max iut-pw-symphony

#S01E05

installs :
- in "/common/S01E04-05" type : "composer require --dev phpunit/phpunit"

to run tests :
- go to "/common/S01E04-05"
- phpunit