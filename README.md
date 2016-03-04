# Tardis Application

This is a demo project made out as an application form to apply for a position as the Doctor's new companion. 
If you don't know what Doctor Who is, please read up on the following [link](https://en.wikipedia.org/wiki/Doctor_Who). After that, I highly recommend you watch every single episode ever recorded!

## About the page

Entering the page you are asked to fill in an application form. Once this is done and you've clicked the Send application button, you are taken to a page where your answers are compiled. If something is wrong or missing, you are given the chance to go back to get it right or, if everything is to your liking, you can send the application off to be processed on the Tardis. _(Well, not really... But then again, who knows!)_

## Development

To start developing you need to create a database configuration file. You'll find a custom made template for this under **configuration_templates**. Just copy the template to a folder called **configuration** and rename the template **connectionInfo.php**. Fill in the required information like this:

```php
<?php
return array(
    "serverName" => "localhost",
    "username" => "johndoe",
    "password" => "whatever",
    "database" => "yourdatabase"
);
?>
```

All scripts in **database/scripts** must be applied in the order suggested by the prefixed number.

## Code structure

```
 - configuration  // The database configuration, use the template in the configuration_template folder
 - configuration_templates
 - database  // Data layer
 - - scripts  // SQL scripts to build the database
 - graphics  // Images used on the page
 - html_generators  // Partial views containing html segments
 - js  // JavaScript files
 - style  // CSS-files
```
