# korbaconsulting.com-wordpress

## WordPress

### Required Configuration
The following constants need to be defined in your `wp-config.php` in order for the theme and plugins to function properly.
```sh
define('APP_ENV', '<development|production>');
define('RECAPTCHA_SITE_KEY', '<RECAPTCHA_SITE_KEY>');
define('RECAPTCHA_SECRET_KEY', '<RECAPTCHA_SECRET_KEY>');
define('RECAPTCHA_THRESHOLD', <0.0-1.0>);
```

## Static Assets

### Install Dependencies
Adds source dependencies for watching and building static assets (i.e. css, js and vendor).
```sh
npm install
```

### Watch Source Code
Automatically detects active changes and builds static assets (i.e. css and js).
```sh
npm run watch
```

### Build Static Assets
Builds static assets (i.e. css, js and vendor) from source code and adds source maps.
```sh
npm run build
```
If you wish to build only specific types of static assets you may optionally run: `npm run styles`, `npm run scripts` or `npm run vendor`
