# Final Project: Todo List with Sub Todos and Authentication

Welcome to my Final Project repository! This project was created during our time at Multisys as an OJT/Intern, aiming to demonstrate our understanding of Laravel, migrations, seeders, and JWT authentication while adhering to the SOLID principles.

[![Multisys Logo](Multisys.png)](https://www.multisyscorp.com/)

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

## Overview
This project is a Todo List application with the ability to create sub-todos, manage tasks efficiently, and secure user authentication through JWT tokens.

## Features
- **Todo Management**: Create, update, delete todos.
- **Sub Todo Relationship**: Each todo can have multiple sub-todos.
- **User Authentication**: Secure login, logout, and registration using JWT authentication.
- **SOLID Principle**: The codebase is designed following the SOLID principles for better maintainability and extensibility.

## Technologies Used
- **Laravel**: A powerful PHP framework for building web applications.
- **JWT Auth**: JSON Web Tokens for user authentication.
- **MySQL**: Database management system for storing todo and user data.

## Setup Instructions
1. Clone the repository: `git clone https://github.com/your-username/todolist.git`
2. Navigate to the project directory: `cd todolist`
3. Install dependencies: `composer install`
4. Set up environment variables by copying the `.env.example` file to `.env`: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`
6. Set up your database credentials in the `.env` file.
7. Run migrations to create the necessary tables: `php artisan migrate`
8. Seed the database with sample data: `php artisan db:seed --class=UsersTableSeeder`, `php artisan db:seed --class=TodoSeeder`, `php artisan db:seed --class=SubtodoSeeder`.
9. Start the development server: `php artisan serve`

## Signal Towers Visualization

```html
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Signal Towers</title>
<style>
  :root {
    --tower-width: 2.5rem;
    --tower-height: 20rem;
    --signal-bar-height-yellow: 6rem;
    --signal-bar-height-orange: 3.5rem;
    --signal-bar-height-red: 9.2rem;
    --animation-duration: 1s;
  }

  html {
    font-size: 16px; /* Base font size */
  }

  .tower-container {
    display: flex;
    justify-content: center;
    align-items: flex-end;
    height: 12.5rem; /* 200px converted to rem */
    margin-top: 3.125rem; /* 50px converted to rem */
  }

  .tower {
    width: var(--tower-width);
    background-color: #f0f0f0;
    margin: 0 0.3125rem; /* 5px converted to rem */
    position: relative;
    display: flex;
    align-items: flex-end;
    animation-duration: var(--animation-duration);
    animation-timing-function: ease-in-out;
    animation-fill-mode: forwards;
  }

  .yellow {
    background-color: yellow;
    animation-name: yellowAnimation;
  }

  .orange {
    background-color: orange;
    animation-name: orangeAnimation;
  }

  .red {
    background-color: red;
    animation-name: redAnimation;
  }

  .signal-bar {
    height: var(--signal-bar-height-yellow);
  }

  .tower.orange .signal-bar {
    height: var(--signal-bar-height-orange);
  }

  .tower.red .signal-bar {
    height: var(--signal-bar-height-red);
  }

  @keyframes yellowAnimation {
    0%, 100% {
      height: var(--signal-bar-height-yellow);
    }
    25% {
      height: 0;
    }
    50% {
      height: var(--signal-bar-height-yellow);
    }
    75% {
      height: var(--signal-bar-height-orange);
    }
  }

  @keyframes orangeAnimation {
    0%, 100% {
      height: var(--signal-bar-height-orange);
    }
    25% {
      height: var(--signal-bar-height-yellow);
    }
    50% {
      height: var(--signal-bar-height-red);
    }
    75% {
      height: var(--signal-bar-height-orange);
    }
  }

  @keyframes redAnimation {
    0%, 100% {
      height: var(--signal-bar-height-red);
    }
    25% {
      height: var(--signal-bar-height-orange);
    }
    50% {
      height: var(--signal-bar-height-yellow);
    }
    75% {
      height: var(--signal-bar-height-red);
    }
  }
</style>
</head>
<body>
  <div class="tower-container">
    <div class="tower yellow">
      <div class="signal-bar"></div>
    </div>
    <div class="tower orange">
      <div class="signal-bar"></div>
    </div>
    <div class="tower red">
      <div class="signal-bar"></div>
    </div>
  </div>
</body>
</html>
