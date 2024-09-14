# To-Do App & Object-Oriented Programming Tasks

This repository contains a simple To-Do application built using Laravel as well as solutions to a series of object-oriented programming tasks covering inheritance, interfaces, encapsulation, and polymorphism.

## Features

- Create, Read, Update, and Delete (CRUD) operations for a To-Do list.
- OOP tasks covering class inheritance, interface implementation, encapsulation, and polymorphism.

## Laravel To-Do App

The To-Do App provides basic CRUD functionality to manage tasks. It uses Blade for view rendering and Bootstrap for styling.

### Routes

- `/`: Demonstrates **Class Inheritance** by displaying a sample shape module.
- `/log`: Demonstrates **Interface Implementation** through logging messages.
- `/employee`: Demonstrates **Encapsulation** with an Employee management module.
- `/animals`: Demonstrates **Polymorphism** with animal sounds.
- `/todos`: Provides the main **CRUD functionality** for managing To-Do tasks.

## Object-Oriented Programming Tasks

### **Task 1: Class Inheritance**

Implemented classes to represent geometric shapes (such as circles and rectangles) with methods for calculating areas. This demonstrates inheritance by sharing common properties and methods among different shape classes.

### **Task 2: Interface Implementation**

Developed a logging system using interfaces. Various classes implement a logging interface, demonstrating how interfaces can standardize behavior across multiple implementations.

### **Task 3: Encapsulation**

Designed a class to manage employee data. This class securely manages employee salaries, demonstrating the principle of encapsulation by using getter and setter methods to control access to sensitive data.

### **Task 4: Polymorphism**

Created a set of animal classes that override a method for making sounds. This demonstrates polymorphism, as each animal class implements the same method differently.

## Requirements

- PHP 8.1 or higher
- Composer
- Laravel 10.x
- MySQL or any other database supported by Laravel
- Git

## Installation

Follow these steps to set up the project on your local machine:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/fahmidtasin/inilabs-task.git
    cd inilabs-task
    ```

2. **Install dependencies**:

   Run the following command to install all required dependencies:

    ```bash
    composer install
    ```

3. **Set up environment variables**:

   Copy the `.env.example` file to create your `.env` file:

    ```bash
    cp .env.example .env
    ```

   Update the `.env` file with your database credentials.

4. **Generate application key**:

   Run the following command to generate the application key:

    ```bash
    php artisan key:generate
    ```

5. **Run migrations**:

   Set up your database by running the migrations:

    ```bash
    php artisan migrate
    ```

6. **Serve the application**:

   Run the development server:

    ```bash
    php artisan serve
    ```

   Visit `http://localhost:8000` in your browser to view the application.

## Usage

- **Creating a Task**: Navigate to the `/todos/create` URL and fill out the form to create a new task.
- **Viewing Tasks**: The homepage displays all the tasks. Navigate to `/todos` to view them.
- **Editing a Task**: Click the edit button next to a task to update it.
- **Deleting a Task**: Click the delete button to remove a task.

## Contributing

If you'd like to contribute, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-branch`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
