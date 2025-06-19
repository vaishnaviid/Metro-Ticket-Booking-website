# 🚇 Metro Ticket Booking Website 🌐🎫

This project is a fully functional and dynamic web-based metro ticket booking system designed to simplify the process of reserving metro tickets online. It is developed using HTML, CSS, and JavaScript for the frontend, and PHP for the backend logic. A MySQL database is used to store user bookings and travel details securely. The application is deployed on a Linux-based AWS EC2 instance, using the Nginx web server for handling web traffic efficiently. To enable seamless interaction between the PHP scripts and the MySQL database, the required PHP-MySQL connector is installed and configured. The entire system is structured to ensure modularity, clean UI, and real-time responsiveness, making it an ideal example of a cloud-hosted LEMP (Linux, Nginx, MySQL, PHP) stack project.

## 🔧 Tech Stack

- **Frontend**: HTML, CSS, JavaScript  
- **Backend**: PHP  
- **Database**: MySQL  
- **Hosting**: AWS EC2 (Linux)  
- **Web Server**: Nginx  

---

## 🚀 Features

- Dynamic metro ticket booking with source and destination input.
- Real-time form submission and server-side processing.
- PHP-based backend with MySQL database integration.
- Clean and responsive user interface.
- Hosted securely on an EC2 instance with Nginx.

---

## ☁️ Deployment on AWS EC2 (LEMP Stack)

### 1. Launch EC2 Instance  
OS: **Linux**
- Open the following ports in your security group:
  - `22` (SSH)
  - `80` (HTTP)
  - `3306` (MySQL, *only if remote access is required.. not recommended for public access*)

### 2. Install LEMP stack in Linux Server
- Nginx
- Mysql
- php
- php-mysql connector

Install, Start and Enable all the services.

### 3. Create files
- index. html – Landing page
- style.css – Styling
- script.js – Frontend logic
- book.php – Handles booking requests
- metro.db – MySQL database schema

To add images from local to EC2 server use scp command.

### 4. SSH into Instance  
```bash
ssh -i "your-key.pem" ec2-user@your-ec2-public-ip



