# Contributing

All contributions are welcomed. If it's your first time contributing to open source please don't hesitate and just open a Pull Request. Your suggestion/fix isn't stupid, I'll make sure I explain what's wrong with your PR if it wasn't accepted.

## Here are some points to consider:

- Your PR must be making only a single change, if you want to suggest multiple features or fix multiple issues please open separate PRs.
- If you have an idea that will require a lot of work, make sure you suggest it in a new [issue](https://github.com/Leamsi9/laravel-rapid/issues) first to make sure it's admired before investing time into it.
- Keep your code clean. Clean means you're proud of how it turned out.

## How to contribute:

Clone rapid on your machine, include it in your laravel application via composer using the Path Repository method:

Add this to your composer to JSON

```
"repositories": [
    {
        "type": "path",
        "url": "./../rapid"
    }
],
```

And when you require Rapid, add it like:

```
"Leamsi9/rapid": "*@dev"
```

Run `composer update` in your laravel project, then `php artisan rapid:install`, and then `php artisan rapid:migrate`. Now you have Rapid running in your laravel project using the files on your machine.

*[add yarn instructions]*


Any change you apply should reflect on the test laravel application you setup earlier.
