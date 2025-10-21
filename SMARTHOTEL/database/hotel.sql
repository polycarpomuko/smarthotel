CREATE DATABASE hotel;
use hotel;
CREATE TABLE bookings(

    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    checkin DATE,
    checkout DATE,
    room_type VARCHAR(50),
    created_at TIMESTAMP DEFAULT 
    CURRENT_TIMESTAMP
);