<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/SI-RPL-2023/SI4408_B_FOOD-RESCUE/blob/master/public/images/logo2.svg" width="400" alt="Laravel Logo"></a></p>

# FoodRescue

FoodRescue This is a website that receives food items that are approaching their expiration date, and processes them into ready-to-eat meals. It also provides recipes using ingredients that can be selected by Users. This Project is built with [Laravel](https://laravel.com/) Framework and [Flowbite Tailwind UI Component](https://flowbite.com/docs/getting-started/laravel/) for Front-End Framework.

# About Us

We're Group 265 from class SI4408. Bachelor of Information Systems Telkom University batch 44. Our Members are consist of :

| No  | Name                                                                         | NIM        | Role                |
| --- | ---------------------------------------------------------------------------- | ---------- | ------------------- |
| 1   | [Ariadani Dwi Fathurrahman](https://www.instagram.com/ariadanidf/)           | 1202202071 | ``Project Manager`` |
| 2   | [Almira Syamsi Nur Insan](https://www.instagram.com/almiraasy/)              | 1202200164 | ``Analyst``         |
| 3   | [Ario Kusuma Purboyo](https://www.instagram.com/ariokusuma/)                 | 1202204123 | ``Programmer``      |
| 4   | [Apriani Nur Raina](https://www.instagram.com/anraina_/)                     | 1202200195 | ``Programmer``      |
| 5   | [Bagas Distyo Utomo](https://www.instagram.com/bagasdistyo/)                 | 1202201372 | ``Programmer``      |
| 6   | [Divani Azza Nabilla M.](https://www.instagram.com/divaniazza_/)             | 1202200127 | ``Programmer``      |
| 7   | [Dewa Cetra Prabasworo Puspito](https://www.instagram.com/dewacetra.p.7402/) | 1202200039 | ``Programmer``      |
| 8   | [Noor Panca Maulana](https://www.instagram.com/noorpancamaulana/)            | 1202204283 | ``Programmer``      |

# Installation
## Prerequisite
*(Using MacOS? You can install it using [Homebrew](https://brew.sh/) )*
- PHP >= 8
- [Composer](https://getcomposer.org/) 
- [NodeJS](https://nodejs.org/en/download)
- [Flowbite](https://nodejs.org/en/download) *(Installed and run via NodeJS)*
- [XAMPP](https://www.apachefriends.org/download.html) or [DBeaver](https://dbeaver.io)


## Serve the Application
*Run the following commands on your terminal, git bash, or PowerShell*

- Clone this Project
```bash
git clone https://github.com/SI-RPL-2023/SI4408_B_FOOD-RESCUE.git
```

- Modify the .env file <br>
*Configure the .env file according to Your local Database System*
```bash
DB_PORT= <your_mysql_port>
DB_DATABASE= <your_database_name>
```

- Install Composer
```bash
composer install
```

- Generate Key
```bash
php artisan key:generate
```

- Migrate Database
```bash
php artisan migrate
```

- Link Storage
```bash
php artisan storage:link
```

- Install Tailwind Css and Flowbite using NPM:
```bash
npm install -D tailwindcss postcss autoprefixer flowbite
```

- Run the laravel server
```bash
php artisan serve
```

- Run the Flowbite Vite
```bash
npm run dev
```

Thank You

