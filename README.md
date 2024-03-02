> Just use it as a PoC. Fork it ;)

<p align="center">
<img src="https://github.com/murdercode/yaTTa/raw/HEAD/art/banner.svg" width="100%" 
alt="YaTTA banner"></p>

[![Hits](https://hits.seeyoufarm.com/api/count/incr/badge.svg?url=https%3A%2F%2Fgithub.com%2Fmurdercode%2FyaTTA%2Fgjbae1212%2Fhit-counter&count_bg=%23EBB308&title_bg=%23555555&icon=&icon_color=%23E7E7E7&title=hits&edge_flat=false)]([https://hits.seeyoufarm.com](https://github.com/murdercode/yaTTA))
[![Pint](https://github.com/murdercode/yaTTA/actions/workflows/pint.yml/badge.svg)](https://github.com/murdercode/yaTTA/actions/workflows/pint.yml)
[![PHPStan](https://github.com/murdercode/yaTTA/actions/workflows/phpstan.yml/badge.svg)](https://github.com/murdercode/yaTTA/actions/workflows/phpstan.yml)
[![Maintainability](https://api.codeclimate.com/v1/badges/2aea30f3ca076bf01af5/maintainability)](https://codeclimate.com/github/murdercode/yaTTA/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/2aea30f3ca076bf01af5/test_coverage)](https://codeclimate.com/github/murdercode/yaTTA/test_coverage)
![License Mit](https://img.shields.io/github/license/murdercode/laravel-shortcode-plus)

[//]: # ([![Total Downloads]&#40;https://img.shields.io/packagist/dt/the-3labs-team/nova-github-cards.svg?style=flat-square&#41;]&#40;https://packagist.org/packages/the-3labs-team/nova-github-cards&#41;)


> **Note**
> The packet is not ready yet, but hey! click on the little star and stay updated. You also save a fairy if you do.

## What is YaTTa!?

**YaTTa!** (_formally Yet Another Talk To AI app_) is a hybrid software (both client and web) that allows interaction
with
an LLM (currently OpenAI).

<p align="center">
<img src="https://github.com/murdercode/yaTTa/raw/HEAD/art/demo.gif" width="100%" 
alt="YaTTA demo"></p>

It was born as a study project to experiment with some new technologies in the world of PHP (
specifically [NativePHP](https://nativephp.com/) and
[Livewire](https://livewire.laravel.com/) v3) while the whole thing is supported
by [Laravel Framework](https://laravel.com/) and [TailwindCSS](https://tailwindcss.com/).

Here are some pros:

- **Reduced costs**: compared to the ChatGPT Plus subscription, you will only use what you actually consume (often, in
  common usage, only a few cents per month). We also use a _compression algorithm_ to reduce the size of the requests (
  up
  to 50% less).
- **Offline support**: should you lose connectivity to the network, you can still access your message history. This is
  because your chats are saved locally.
- **Customisable**: we aim to create customised software for each user. Don't like black? Change it to white.
- **Open Source**: be assured that we do not put crap inside the source code. Even if you don't understand a thing about
  programming, you can always contribute

Anyway here are the **really strengths** that I think you will share:

- It is written in the language of the lambo-driving gods. VROOOM
- Black is elegant and with pink is even cooler. _Hi Barbie!_
- I can fill up my commit history and do the perfect

Jokes aside (but not much), I hope this project will be useful for those who want to experiment with all the cool things
that are coming out these days.

## What is it not?

**YaTTa! it is NOT** (or wants to be):

- _Yet another_ new super badass definitive client that will make ChatGPT, Bard and the like cry
- _Yet another_ ChatGPT iframe shoved into Electron and passed off as software
- _Yet another_ perfect project with a thousand abstract classes

It should be clear that YaTTa! began as a personal, unpaid project, scheduled at indecent hours and days (perhaps after
12 hours of work). You will forgive me if it does not follow the state of the art but, being open-source, any
contribution is welcome :)

## Client (Windows/Mac/Linux)

> **Note**
> The packet is not ready yet, but hey! click on the little star and stay updated. You also save a fairy if you do.

## Web version

> **Note**
> Packagist will be updated as soon as the project is ready for production. In the meantime, you can clone the
> repository.

You can clone the repository and run the following commands to get started:

```bash
composer install
npm install
npm run dev
```

You also need to migrate the database:

```bash
php artisan migrate
```

Now you can start the server with:

```bash
php artisan serve # for a web version
php artisan native:serve # for a client version
```

## Contributing

Thank you for considering contributing to YaTTa!. You can read the contribution guide [here](CONTRIBUTING.md).

## Security Vulnerabilities

If you discover a security vulnerability within YaTTa!, please check [here](SECURITY.md) for more information.

## License

YaTTa! is open-sourced software licensed under the [MIT license](LICENSE).


