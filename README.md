## 🩸 Blood Bank Management System
A web-based Blood Bank Management System designed to streamline blood donor registrations, blood requests, and blood inventory management. Built with PHP, HTML/CSS, and MySQL as the backend database.

## 📌 Features

- 👤 Donor registration & blood group selection
- 🔍 Search and request blood by group
- 📦 Blood stock/inventory management
- 🛠️ Admin dashboard to manage requests & stock
- 🧾 Contact page and public information

## 🛠️ Tech Stack

| Technology | Purpose             |
|------------|---------------------|
| HTML/CSS   | Frontend/UI Design  |
| PHP        | Backend Scripting   |
| MySQL      | Relational Database |
| XAMPP      | Localhost Server    |


## 💾 Setup Instructions
✅ 1. Clone the Repository
bash
Copy
Edit
git clone https://github.com/arunk0508/Blood_bank_management.git
cd blood-bank-management

✅ 2. Import the Database
Start XAMPP and run Apache and MySQL

Open phpMyAdmin at http://localhost/phpmyadmin

Click Import

Choose the file:

pgsql
Copy
Edit
/database/blood_bank.sql
Click Go

This will import the necessary tables and dummy data.

✅ 3. Configure DB Connection
In the file dbconnect.php, update these values if needed:

php
Copy
Edit
$servername = "localhost";
$username = "root";
$password = "";      // Add your MySQL password if set
$database = "blood_bank";

## 🚀Run the Project
Move the folder to:

C:\xampp\htdocs\

Visit:
http://localhost/blood_bank_management

