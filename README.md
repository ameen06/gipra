## Gipra Test Project

Laravel project done for evaluating skillset.

## Contents


[⚙️ Clonning the Project](#clone-the-project)

[🛠️ Setup](#setup)

[👩‍💻 Installation](#installation)

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Clone the Project

You can clone the project by using this command:

``` bash
git clone https://github.com/ameen06/gipra.git
```

This will create a new subfolder with the source of the project

## Setup

Below are other packages and direction to setup the project;

### Database

Create new database and add the credentials to *.env* file

### Image Library

I use **[ImageKit](https://imagekit.io/)** for storing images. They have really good & simple APIs we can use. And it is totally free!.
We have to use their PHP SDK to their service. Instead doing everything in the bare PHP way, we can do that by the Laravel way (Using Laravel Flysystem).
To do so, we install the [ImageKit Adapter](https://github.com/TaffoVelikoff/imagekit-adapter) Package by TaffoVelikoff.

**To use their service we need to add API keys to the _.env_ file**. Add this to your *.env* file
```php
IMAGEKIT_PUBLIC='public_GlOm8dzvbmaRUBPdsfef7IpJdQ8='
IMAGEKIT_PRIVATE='private_6N4sBUV6Y4D7FIq1MIOV+j9h3eQ='
IMAGEKIT_ENDPOINT='https://ik.imagekit.io/k4cixy45r'
```

### User Role Management

To make manage user permissions and roles easier and fast I use the [Spatie Laravel Permission](https://spatie.be/docs/laravel-permission/v5/introduction) package.

## Installation

First let's install composer packages. To do so, run the command:
```bash
composer install
```

Next we have to install npm packages. To do so, run the command:
```bash
npm install
```

Then Generate the App Key using this command:
```bash
php artisan key:generate
```

Finally we have to migrate the tables. With that we have to seed user roles too, because when a user register to the application the roles should be already there.
```bash
php artisan migrate --seed --seeder=RoleSeeder
```

**Now we are ready to use the application.** You can run _npm run dev_ and _php artisan serve_ and use the application.
