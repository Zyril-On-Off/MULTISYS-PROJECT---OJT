# Final Project: Todo List with Sub Todos and Authentication

Welcome to our Final Project repository! This project was created during our time at Multisys as an OJT/Intern, aiming to demonstrate our understanding of Laravel, migrations, seeders, and JWT authentication while adhering to the SOLID principles.

<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 356.53 72.84"><path d="M259.33 25.77a4 4 0 0 0-2.91 1.23 4 4 0 0 0-1.19 2.91 3.78 3.78 0 0 0 2.29 3.54 52 52 0 0 0 6.57 2 16.73 16.73 0 0 1 7 3.5q3.27 3.12 3.27 8.86a13.73 13.73 0 0 1-13.73 13.73h-10.31A4.57 4.57 0 0 1 247 60a4.42 4.42 0 0 1-1.41-3.34v-.08a4.65 4.65 0 0 1 1.41-3.35 4.6 4.6 0 0 1 3.35-1.41H261a4 4 0 0 0 4.09-4.09 3.5 3.5 0 0 0-2.24-3.27c-.39-.18-2.6-.84-6.61-2a16.41 16.41 0 0 1-7-3.62q-3.25-3.18-3.26-9a13.76 13.76 0 0 1 13.73-13.73H267a4.85 4.85 0 0 1 4.8 4.8V21a4.41 4.41 0 0 1-1.42 3.35 4.62 4.62 0 0 1-3.38 1.42zm30.92 15.82a9.34 9.34 0 0 0 9.41 9.4 9.39 9.39 0 0 0 9.36-9.4V20.93a4.85 4.85 0 0 1 4.8-4.8h.08a4.38 4.38 0 0 1 3.34 1.42 4.59 4.59 0 0 1 1.42 3.38v37.66A18.07 18.07 0 0 1 312.8 72a18.24 18.24 0 0 1-13.14 5.59 20.47 20.47 0 0 1-10.75-2.91 18.69 18.69 0 0 1-7.16-7.6 4.62 4.62 0 0 1-.55-2.08 5.09 5.09 0 0 1 3.15-4.53l.16-.07a5.34 5.34 0 0 1 1.69-.28 4.49 4.49 0 0 1 1.69.32 4.68 4.68 0 0 1 2.44 2.24 9.61 9.61 0 0 0 3.78 3.81 10.75 10.75 0 0 0 5.55 1.5 9.55 9.55 0 0 0 9.36-9.4v-.32q-3.11 2.32-9.36 2.32a19.07 19.07 0 0 1-19.05-19V20.93a4.85 4.85 0 0 1 4.76-4.8h.12a4.57 4.57 0 0 1 3.35 1.42 4.62 4.62 0 0 1 1.41 3.38zm48.48-15.82a4 4 0 0 0-2.92 1.23 4.07 4.07 0 0 0-1.18 2.91 3.77 3.77 0 0 0 2.29 3.54 52 52 0 0 0 6.57 2 16.73 16.73 0 0 1 7 3.5q3.27 3.12 3.27 8.86A13.73 13.73 0 0 1 340 61.46h-10.28a4.57 4.57 0 0 1-3.35-1.46 4.43 4.43 0 0 1-1.37-3.3v-.08a4.66 4.66 0 0 1 1.42-3.39 4.6 4.6 0 0 1 3.35-1.41h10.66a4 4 0 0 0 4.09-4.09 3.5 3.5 0 0 0-2.24-3.27q-.6-.27-6.61-2a16.35 16.35 0 0 1-7-3.62q-3.25-3.18-3.26-9a13.76 13.76 0 0 1 13.73-13.73h7.24a4.85 4.85 0 0 1 4.8 4.8V21a4.41 4.41 0 0 1-1.42 3.35 4.62 4.62 0 0 1-3.38 1.41z" fill="#ec6b22" fill-rule="evenodd"></path><path d="M72.41 56.7A4.42 4.42 0 0 1 71 60a4.57 4.57 0 0 1-3.35 1.42h-.11A4.57 4.57 0 0 1 64.19 60a4.43 4.43 0 0 1-1.42-3.34v-21.6a18.3 18.3 0 0 1 5.55-13.38 18.24 18.24 0 0 1 13.38-5.55q9.36 0 14.12 6.22 4.73-6.23 14.09-6.22a18.24 18.24 0 0 1 13.38 5.55 18.3 18.3 0 0 1 5.55 13.38V56.7a4.54 4.54 0 0 1-1.38 3.3 4.61 4.61 0 0 1-3.39 1.42H124a4.83 4.83 0 0 1-4.76-4.76v-21.6a9.31 9.31 0 0 0-18.62 0V56.7a4.83 4.83 0 0 1-4.76 4.76h-.07A4.61 4.61 0 0 1 92.4 60a4.43 4.43 0 0 1-1.4-3.3V35.06a9.29 9.29 0 1 0-18.57 0zm73.93-14.25a9.39 9.39 0 1 0 18.77 0V20.93a4.85 4.85 0 0 1 4.8-4.8h.09a4.38 4.38 0 0 1 3.34 1.42 4.59 4.59 0 0 1 1.42 3.38v21.52a18.28 18.28 0 0 1-5.59 13.42 18.94 18.94 0 0 1-26.87 0 18.32 18.32 0 0 1-5.59-13.42V20.93a4.63 4.63 0 0 1 1.42-3.38 4.55 4.55 0 0 1 3.34-1.42h.12a4.57 4.57 0 0 1 3.35 1.42 4.62 4.62 0 0 1 1.41 3.38zM189.07 0a4.65 4.65 0 0 1 3.35 1.38 4.62 4.62 0 0 1 1.41 3.38V56.7a4.42 4.42 0 0 1-1.41 3.3 4.57 4.57 0 0 1-3.35 1.42H189a4.55 4.55 0 0 1-3.39-1.42 4.43 4.43 0 0 1-1.42-3.34V4.76a4.63 4.63 0 0 1 1.42-3.38A4.63 4.63 0 0 1 189 0zm19.09 0a4.64 4.64 0 0 1 3.34 1.38 4.63 4.63 0 0 1 1.42 3.38v11.37h5.9a4.85 4.85 0 0 1 4.76 4.8V21a4.41 4.41 0 0 1-1.42 3.35 4.58 4.58 0 0 1-3.34 1.41h-5.9V49.1a2.63 2.63 0 0 0 .78 1.9 2.66 2.66 0 0 0 2 .79h3.15a4.58 4.58 0 0 1 3.34 1.41 4.63 4.63 0 0 1 1.42 3.39v.08a4.39 4.39 0 0 1-1.45 3.33 4.55 4.55 0 0 1-3.34 1.42h-3.15a12.36 12.36 0 0 1-12.39-12.32V4.76a4.62 4.62 0 0 1 1.41-3.38A4.65 4.65 0 0 1 208 0zm27.26 16.13a4.41 4.41 0 0 1 3.35 1.42 4.62 4.62 0 0 1 1.41 3.38V56.7a4.83 4.83 0 0 1-4.76 4.76h-.08A4.59 4.59 0 0 1 232 60a4.39 4.39 0 0 1-1.42-3.34V20.93a4.85 4.85 0 0 1 4.8-4.8zm0-5.11a5.28 5.28 0 0 1-3.89-1.62 5.28 5.28 0 0 1-1.62-3.89 5.26 5.26 0 0 1 1.62-3.86 5.47 5.47 0 0 1 7.75 0 5.13 5.13 0 0 1 1.65 3.86 5.15 5.15 0 0 1-1.65 3.89 5.26 5.26 0 0 1-3.9 1.6" fill-rule="evenodd" fill="#d00a3f"></path><path fill="#fed24e" d="M0 18.74h15.87v42.73H0z"></path><path fill="#d0721b" d="M18.31 35.83h15.87v25.64H18.31z"></path><path fill="#d03d40" d="M36.63.42H52.5v61.04H36.63z"></path></svg>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

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

## Contributing
We welcome contributions to improve this project! If you'd like to contribute, please follow these steps:
1. Fork the repository.
2. Create a new branch: `git checkout -b feature/my-feature`.
3. Commit your changes: `git commit -am 'Add new feature'`.
4. Push to the branch: `git push origin feature/my-feature`.
5. Submit a pull request.

## Credits
This project was created by [Your Name] during their time as an OJT/Intern at Multisys.

## License
This project is licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute it as per the license terms.


