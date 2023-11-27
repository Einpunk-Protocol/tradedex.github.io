CREATE TABLE package1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    froms DECIMAL(10, 2) NOT NULL,
    tos DECIMAL(10, 2) NOT NULL,
    bonus DECIMAL(10, 2) NOT NULL,
    increase DECIMAL(5, 2) NOT NULL,
    duration INT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
    ewallet VARCHAR(255), -- Ethereum wallet address
    bwallet VARCHAR(255), -- Bitcoin wallet address
    pm VARCHAR(255), -- Perfect Money ID
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);