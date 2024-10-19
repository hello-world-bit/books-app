# Book Management App

A full-stack book management application built with Vue.js on the frontend and Laravel 8 on the backend. Users can perform CRUD (Create, Read, Update, Delete) operations on a collection of books. This app supports search, sorting, and other features for managing book data efficiently.

## Features

- Add, edit, delete, and view books.
- Search for books by title or author.
- Sort books by published date or genre.
- Responsive UI built with Vue.js.
- Backend powered by Laravel 8.
- SweetAlert2 used for alerts and confirmations.

## Tech Stack

- **Frontend**: Vue.js
- **Backend**: Laravel 8
- **Database**: MySQL (or database of your choice)
- **Styling**: Bootstrap 4, custom CSS

## Getting Started

Follow these instructions to get a copy of the project up and running on your local machine.

### Prerequisites

You need to have the following installed on your machine:

- [Node.js](https://nodejs.org/en/) (for frontend)
- [Composer](https://getcomposer.org/) (for Laravel)
- [XAMPP or similar](https://www.apachefriends.org/index.html) (for MySQL)
- [Git](https://git-scm.com/) (optional, for version control)

### Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/hello-world-bit/books-app.git
   cd book-management-app

2. **Install dependencies:**:

   ```bash
   composer install

 
3. **Copy .env.example to .env and update the database credentials:**:

   ```bash
    cp .env.example .env
   
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password



4. **Generate the application key:**:

   ```bash
   php artisan key:generate

 

5. **Run the migrations to set up the database schema:**:

   ```bash
   php artisan migrate
 

6. **Start the Laravel development server:**:

   ```bash
   php artisan serve

 

7. **Open a new Terminal**:

 

8. **Navigate to the frontend directory:**:

   ```bash
   cd books-frontend

 

9. **Install dependencies:**:

   ```bash
   npm install

 
10. **Run the Vue.js development server:**:

   ```bash
   npm run serve


