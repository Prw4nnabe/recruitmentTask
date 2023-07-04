# Backend/Full-stack recruitment task

This is a solution for recruitment task

# User Management System

This is a simple user management system that allows you to add and remove users. It uses a JSON file to store user data.

## Features

- Add a new user with name, username, email, address, phone, and company name.
- Remove an existing user from the system.
- Display a table of all users with their information.

## Installation

1. Clone the repository: `git clone https://github.com/your-username/user-management-system.git`
2. Navigate to the project directory.
3. Ensure that you have PHP installed on your system.
4. Start a local development server. For example, using PHP's built-in server: `php -S localhost:8000`

## Usage

1. Access the application in your web browser at `http://localhost:8000`.
2. The homepage will display a table with existing users, if any.
3. To add a new user, fill in the required fields in the "Add user" form and click the "Add user" button.
4. To remove a user, click the "Remove" button next to the respective user in the table.

## Folder Structure

- `dataset/`: Contains the JSON file (`users.json`) to store user data.
- `partials/`: Contains PHP files for handling user actions (`addUser.php`, `removeUser.php`).
- `index.php`: The main entry point of the application.
- `style.css`: CSS file for styling the application.

## Acknowledgments

- This project was created as a recruitment task.
