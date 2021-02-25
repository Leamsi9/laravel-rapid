## Laravel Rapid: A Minimum Viable Website in under 5 minutes with a single command.

The biggest barrier to building a personal website and starting blogging is the initial friction. It takes a while to learn your way around, configure, set up and style a CMS, Jamstack platform or your own website and database. This can mean other priorities win and the journey is interrupted. Laravel Rapid removes this friction.

With Laravel Rapid you could start a timer and, in under 5 minutes from absolute zero, have a personalised website, dockerised with a fully migrated database and a permissioned micro CMS, good enough for you to go live and start comfortably blogging. Being a Laravel scaffold, your Rapid website will be infinitely expandable into a full fledged site, a web application or SAAS in a familiar way. Whatever journey you have in mind, Laravel Rapid could be its first fully deployable increment, that elusive first step.


Laravel Rapid uses a CLI command (`rapid:site`) to receive basic details from you and generate a personalised website with Controller, Routes and Views and a bundled, modified version of [Wink](https://github.com/themsaid/wink) micro CMS, accessed via login with your email address and encrypted password.

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
- [Ismael Velasco](https://github.com/Leamsi9) - creator of Rapid
- [Mohamed Said](https://github.com/themsaid) - created Wink , which is, with minor modifications, the CMS used by Rapid.
- [All contributors](https://github.com/Leamsi9/laravel-rapid/contributors)

## Contributing

Contributions are extremely welcome, and there are a few good first issues. 

Check the [contribution guide](CONTRIBUTING.md).

## License

Laravel Rapid is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
