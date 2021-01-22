## WIP: Minimum Viable Website and CMS: A command line and front end wrapper for Wink micro-CMS. 

### Set up a fully function blog site and CMS in under 5 minutes

#### Generates Controller, Routes and Views linked to Wink posts.

## Installation instructions

To take Rapid for a spin, download a new installation of Laravel by typing the following into your terminal:
```
curl -s https://laravel.build/rapidtest | bash

```
You can replace `rapidtest` with any name for your test app.

The command will download a new installation of Laravel, with a docker container through the Laravel Sail package.

When the download has ended, cd into your app folder, in the example above `rapidtest/`

Run the following command in your terminal:
```
bash vendor/bin/sail up'
```
This will power up the docker containers, making your app live on `http://localhost`.

Next, run 
```
bash vendor/bin/sail composer require leamsi9/rapid'
```
This will install this package in your Laravel app.

Finally, run this command and answer the questions in your terminal.

```
bash vendor/bin/sail artisan rapid:site'
```
Go back to localhost and hard refresh, and you should be redirected to `/blog` with a template.

If you now go to `localhost/wink` you will be able to log in and write a blog post, that will appear on your `localhost/blog` page.

## Credits
- [Ismael Velasco](https://github.com/Leamsi9)
- [Mohamed Said](https://github.com/themsaid) - created Wink , that is, with minor modifications, the CMS used by Rapid.
- [All contributors](https://github.com/Leamsi9/laravel-rapid/contributors)

Special thanks to [Caneco](https://twitter.com/caneco) for the logo ✨

## Contributing

Check the [contribution guide](CONTRIBUTING.md).

## License

Wink is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
