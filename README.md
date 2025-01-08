# Classroom Management System

A Classroom Management System built with Laravel that facilitates the management of classrooms, courses, assignments, and uploads of course materials. The system supports role-based access for instructors, students, parents, and administrators.

## Table of Contents
- [Features](#features)
- [Technologies Used](#technologies-used)
<!-- - [Installation](#installation)
- [Contributing](#contributing)
- [License](#license) -->

## Features
- **User Roles**: Supports multiple user roles (Instructors, Students, Parents, Admins) with role-based access control.
- **Course Management**: Instructors can create and manage courses.
- **Assignments**: Create and manage assignments associated with courses.
- **File Uploads**: Instructors can upload course materials (PDFs, DOCX, PPTX) for students to access.
- **Grades Tracking**: Track student grades for different courses.
- **User Authentication**: Secure login and registration for users.

## Technologies Used
- **Laravel**: PHP framework for building web applications.
- **MySQL**: Database management system for storing application data.
- **Blade**: Templating engine for rendering views.
- **Bootstrap**: Front-end framework for responsive design (optional).
  
## Installation

### Prerequisites
Make sure you have the following installed:
- PHP (>= 8.3)
- Composer
- MySQL

### Steps
1. Clone the repository:
```bash
git clone https://github.com/mc-solo/class_admin.git
```

2. Install dependencies
```bash
# go to the project folder
cd path/to/class_admin

composer install
npm install
```
3. Set up your database configuration in the .env file:
```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

4. Generate Application key for .env 
```bash
php artisan key:generate
```

5. Run at localhost
```bash
npm run build
npm run dev
php artisan serve
```
### But it still is under construction for now 
<!--  -->