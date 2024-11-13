# PHP CRUD Web Application

This is a sample PHP CRUD (Create, Read, Update, Delete) web application. It allows users to perform basic database operations on a test database using PHP and MySQL.

## Features

- Create new records
- Read existing records
- Update existing records
- Delete records

## Prerequisites

To run this application, you need to have the following installed:

- [XAMPP](https://www.apachefriends.org/index.html) (or any other PHP server)
- PHP 7.0 or higher
- MySQL

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/your-repo-name.git

2. **Move the project to the XAMPP htdocs directory:**

- Copy the cloned folder to your XAMPP installation directory, typically located at C:\xampp\htdocs\ on Windows.

3. **Set up the database:**

- Open phpMyAdmin by navigating to http://localhost/phpmyadmin/.
- Create a new database (e.g., test_db).
- Import the SQL file located in the project folder (if provided) to set up the initial database structure and data.

4. **Configure the database connection:**

- Open the connection.php file (or equivalent) in the project directory and update the database credentials if necessary:

5. **Start the XAMPP server:**

- Open the XAMPP Control Panel.
- Start the Apache and MySQL services.

6. **Access the application:**

- Open your web browser and navigate to: http://localhost/your-repo-name/
