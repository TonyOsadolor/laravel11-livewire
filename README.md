<p align="center"><a href="https://github.com/TonyOsadolor/laravel11-livewire" target="_blank"><img src="https://raw.githubusercontent.com/livewire/livewire/main/art/logo.svg" width="200" height="auto"></a></p>

## Introduction
Livewire is a full-stack framework for Laravel that allows you to build dynamic UI components without leaving PHP.
<br>
Laravel Livewire is a framework for building Laravel powered frontends that feel dynamic, modern, and alive just like frontends built with modern JavaScript frameworks like Vue and React.
<br>
When using Livewire, you will create Livewire "components" that render a discrete portion of your UI and expose methods and data that can be invoked and interacted with from your application's frontend.

## How it works

<ol>
    <li>Open the website</li>
    <li>Create an Account using the Registration Form, or Use Social Media</li>
    <li>As an Admin, you can Add New Student for instance</li>
    <li>As an Admin, Edit Existing Student Record</li>
    <li>As an Admin, Delete Existing Student Record</li>
    <li>As an Admin, Assign Student with a Lecture Task</li>
    <li>And do more you could Imagine....</li>
</ol>

## Project Sponsors

No Sponsorship, it is for learning purpose only, you are welcome to mentor.

### Stacks

- **Backend : PHP / Laravel**
- **Frontend : Livewire - Bootstrap**
- **Database : MySQL**

## Contribution Guide
##### Setting up your workspace
Before running this app, locally make sure you have the following software installed:
<ul>
    <li>XAMPP/WAMP/LAMP or it's equivalent</li>
    <li>NPM</li>
    <li>Composer</li>
    <li>A Web Browser</li>
</ul>
Now, follow this steps to start contributing:
<ol>
    <li>Go to https://github.com/TonyOsadolor/laravel11-livewire and fork the repo.</li>
    <li>After forking, go to your github page. Clone your forked repo. Navigate to your desired folder in your local machine using your favourite CMD terminal. Run: <code>git clone https://github.com/< your github-username >/laravel11-livewire </code>.</li>
    <li>Run <code>cd laravel11-livewire</code></li>
    <li>Run <code>composer install</code></li>
    <li>Run <code>npm install</code></li>
    <li>Copy all the contents of the <code>.env.example</code> file. Create <code>.env</code> file and paste all the contents you copied from <code>.env.exmaple</code> file to your <code>.env</code> file.</li>
    <li>Run <code>php artisan key:generate --show</code> to retrieve a base64 encoded string for Laravel's APP_KEY in <code>.env</code></li>
    <li>Set your DB_DATABASE = <code>laravel11-livewire</code></li>
    <li>If you are using XAMPP , run it as an administrator. Start Apache and Mysql. Go to <code>localhost/phpmyadmin</code> and create new database and name it <code>laravel11-livewire</code>.</li>
    <li>When that is done, run <code>php artisan migrate</code> in your terminal to migrate all the necessary database tables into your local database.</li>
    <li>Run php artisan serve from your terminal and the app will be running on <code>http://127.0.0.1:8000/</code> on your browser</li>
</ol>
##### REMINDER on contributing:
<ol>
    <li>Always create branch for your contributions <code>git checkout -b &lt;branchname&gt;</code>.</li>
    <li>After you make changes:</li>
    <ul>
        <li><code> git add .</code></li>
        <li><code> git commit -m "some comments"</code></li>
        <li><code> git push origin < name of your branch > </code></li>
    </ul>
    <li>Create PR.</li>
</ol>

## Code of Conduct

In order to ensure that the Project is used for it rightful existence, please review and abide by the [Code of Conduct](#).

## Security Vulnerabilities

If you discover a security vulnerability within Project, please send an e-mail to Anthony Osadolor via [tonyentertain@gmail.com](mailto:tonyentertain@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
