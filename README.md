Guestbook

Installation

-   run git clone git@github.com:johndug/guestbook.git
-	run composer update
- 	configure the .env file database connection and the database is labelled guestbook
-	run php artisan key:generate
-   in your mysql create a database called guestbook
-   run php artisan migrate and php artisan db:seed
-   your can run php artisan serve to launch the site on your localhost

The default admin details are as follows:
email: admin@webmail.com
password: password

You will have to load your own users who will can be registered
After registering a user login and add, edit ort delete from the guest book
Login as a admin and reply to the guest messages
