-- قاعدة بيانات مبدئية لمشروع فضفضة
CREATE DATABASE IF NOT EXISTS fadafada;
USE fadafada;

-- جدول المستخدمين
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    password VARCHAR(255),
    gender ENUM('ذكر', 'أنثى'),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- جدول الحجوزات
CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    session_type ENUM('text','audio','video'),
    gender ENUM('ذكر', 'أنثى'),
    save_session ENUM('yes','no'),
    duration INT,
    price DECIMAL(10,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
