## Laravel 5.5

Mail test with server using various conditions:

    - With Tinker
    - With Crons
    - With Queue

## Installation

    - git pull
    - run composer install/update
    - give permission to bootstrap/log & storage directory : (chmod -R 777 ./storage ./bootstrap)
    - .env setup with mail and db configuration
    - key generate if not : (php artisan key:generate)
    - add/update mail address .env file (TEST_MAIL_TO=bharat@logisticinfotech.co.in)
    - php artisan migrate

    Thats it, now run url followed with /test-mail; /test-simple-mail



# Email Settings

#MAIL_DRIVER=smtp
MAIL_DRIVER=mail
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME="task.logistic.test@gmail.com"
MAIL_PASSWORD="task.logistic.test"
MAIL_ENCRYPTION=tls

\Mail::send([],[], function($message) { $message->to("chintan.adatiya@gmail.com")->subject("Testing email"); });