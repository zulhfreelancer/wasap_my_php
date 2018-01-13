### WhatsApp Redirect Script

This project is very simple. The script offers 2 options:

1. Display a link to user and let them manually click it to launch WhatsApp
2. Launch WhatsApp application straight away

#### Option 1 Flow

1. User fill in the form at `form.html` file
2. The form data get submitted to `process_form.php` file
3. The `process_form.php` file pass the data to `index.php` file
4. The `index.php` file process the data and display `WhatsApp Me` link to user
5. User click the link and launch the WhatsApp application

#### Option 2 Flow

1. User fill in the form at `form.html` file
2. The form data get submitted to `process_form.php` file
3. The `process_form.php` file pass the data to `index.php` file
4. The `index.php` file process the data and launch WhatsApp application

#### Bypass the Form aka WhatsApp Shortener Link

The main purpose of the `index.php` is to just accept URL parameters, process the data and display WhatsApp link or launch WhatsApp application straight away.

That means, we also can achieve the main objective (display WhatsApp link or launch WhatsApp application) if we are not using the `form.html`.

Just pass `/phoneNumber/textMessage` to the domain name. For example:

```
http://example.com/60101234567/hello
http://example.com/601012345678/hello
https://example.com/60101234567/hello
https://example.com/601012345678/hello
```

Depending on which option you choose inside the `index.php` script, it will display WhatsApp link or launch WhatsApp application for the user without requiring user to fill in the `form.html` in the first place. This acts like a shortener link service!

#### Important Notes

1. This projects assumes you are using Apache webserver
2. Your webserver needs to have `mod_rewrite` enabled
3. Not sure if it's already enabled or not? Check [here](http://schoolsofweb.com/how-to-check-if-mod_rewrite-is-enabled-on-server-in-php/)
4. If you are using shared hosting, please ask your web-hosting provider to enable `mod_rewrite` for your account
5. You must place the `.htaccess` file provided inside this project into the same folder that contains all the files inside this project

