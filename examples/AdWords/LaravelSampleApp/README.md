# Laravel Sample Application

This is a sample application demonstrating how to use AdWords API in a Laravel
application.

## Preparations

We recommend using [Laravel Homestead](https://laravel.com/docs/5.2/homestead)
to satisfy all Laravel usage requirements. See
[this page](https://laravel.com/docs/5.2/homestead) for installation instructions.
If you're not using Homestead, make sure your web server has a document root set
to the location of this sample application.

## Instructions

1.  Run `git clone https://github.com/googleads/googleads-php-lib.git` at the
    command prompt.
1.  You'll get a **googleads-php-lib** directory that contains this sample
    application. Navigate to it by running `cd
    googleads-php-lib/examples/AdWords/LaravelSampleApp/`.
1.  Run `composer install` at the command prompt. This will install all
    dependencies needed for running this application.
    **WARNING**: Make sure you are in the directory of this sample application.
    If you run `composer install` from the root directory of this library, it
    will install dependencies for the library instead.
1.  Follow [Setting up your OAuth2 credentials](https://github.com/googleads/googleads-php-lib#setting-up-your-oauth2-credentials)
    if you haven't set up the credentials yet.
1.  Copy the sample [`adsapi_php.ini`](https://github.com/googleads/googleads-php-lib/blob/master/examples/AdWords/adsapi_php.ini)
    to the same location as this `README.md` file. Then, fill out the required
    properties as described in the file.
1.  You can now test the sample app by using the web browser at the URL you've
    set in your virtual machine or web server, e.g., `http://localhost`.

## Note

1.  Don't forget to follow instructions for configuring **Directory Permissions** on
    [this page](https://laravel.com/docs/5.2/installation), or you'll face
    file permission errors when running this sample application.
1.  In case you turn on logging and specify the log file paths in
    `adsapi_php.ini`, make sure that your web server has permission to
    write to those files too.

## License

*   The Laravel framework is open-sourced software licensed under the [MIT
    license](https://opensource.org/licenses/MIT).
*   The Google Ads API PHP client library is open-sourced under the [Apache License
    2.0](https://github.com/googleads/googleads-php-lib/blob/master/LICENSE).
