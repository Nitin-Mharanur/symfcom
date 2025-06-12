CREATE TABLE IF NOT EXISTS addresses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(100),
    phone VARCHAR(20),
    pincode VARCHAR(10),
    address_line1 VARCHAR(255),
    address_line2 VARCHAR(255),
    city VARCHAR(100),
    state VARCHAR(100),
    country VARCHAR(100),
    type ENUM('shipping', 'billing') DEFAULT 'shipping',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
