CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sname VARCHAR(255) NOT NULL,
    wl DECIMAL(10, 2) NOT NULL,
    rb DECIMAL(10, 2) NOT NULL,
    currency VARCHAR(50) NOT NULL,
    branch VARCHAR(255) NOT NULL,
    bname VARCHAR(255) NOT NULL,
    baddress TEXT NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    title VARCHAR(255) NOT NULL,
    logo VARCHAR(255),
    cy INT NOT NULL
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    token VARCHAR(10) NOT NULL,
    refcode VARCHAR(10) NOT NULL,
    referred VARCHAR(255),
    bonus VARCHAR(255)
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    refcode VARCHAR(10),
    referred INT,
    phone VARCHAR(15),
    country VARCHAR(255),
    address TEXT,
    profit DECIMAL(10, 2),
    refbonus DECIMAL(10, 2),
    walletbalance DECIMAL(10, 2),
    session VARCHAR(255),
    verify INT,
    package VARCHAR(255),
    pm VARCHAR(255),
    eth VARCHAR(255),
    btc VARCHAR(255),
    2fa INT
);
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
CREATE TABLE wbtc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    wal VARCHAR(255) NOT NULL,  -- BTC/ETH/PM address
    moni DECIMAL(10, 2) NOT NULL,  -- Amount
    mode VARCHAR(20) NOT NULL,  -- Payment mode (e.g., BTC, ETH, PM)
    status VARCHAR(20) NOT NULL,  -- Status (e.g., pending, completed)
    tnx VARCHAR(255) NOT NULL,  -- Transaction ID
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    2fa INT NOT NULL,
    refcode VARCHAR(255),
    referred INT,
    profit DECIMAL(10, 2),
    refbonus DECIMAL(10, 2),
    walletbalance DECIMAL(10, 2),
    session VARCHAR(255),
    verify INT,
    package VARCHAR(255),
    pm VARCHAR(255),
    eth VARCHAR(255),
    btc VARCHAR(255),
    phone VARCHAR(20),
    country VARCHAR(255),
    address VARCHAR(255)
);
CREATE TABLE withdrawal_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    amount DECIMAL(10, 2) NOT NULL,
    mode VARCHAR(10) NOT NULL,
    status VARCHAR(20) NOT NULL,
    tnx_id VARCHAR(50) NOT NULL,
    wallet_details TEXT NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (email) REFERENCES users(email)
);
CREATE TABLE btc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    usd DECIMAL(10, 2) NOT NULL,
    btc DECIMAL(10, 8) NOT NULL,
    eth DECIMAL(10, 8) NOT NULL,
    status VARCHAR(20) NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    refcode VARCHAR(255),
    referred VARCHAR(255),
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE user_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(255) NOT NULL,
    package_name VARCHAR(255) NOT NULL,
    package_investment DECIMAL(10, 2) NOT NULL,
    package_bonus DECIMAL(10, 2) NOT NULL,
    package_duration INT NOT NULL,
    package_activation_date DATE,
    package_status ENUM('Active', 'Inactive') NOT NULL,
    FOREIGN KEY (user_email) REFERENCES users(email)
);
CREATE TABLE package1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(255) NOT NULL,
    froms DECIMAL(10, 2) NOT NULL,
    tos DECIMAL(10, 2) NOT NULL,
    duration INT NOT NULL,
    bonus DECIMAL(10, 2) NOT NULL,
    increase DECIMAL(5, 2) NOT NULL
);
CREATE TABLE user_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_email VARCHAR(255) NOT NULL,
    package_name VARCHAR(255) NOT NULL,
    increase DECIMAL(10, 2) NOT NULL,
    bonus DECIMAL(10, 2) NOT NULL,
    duration INT NOT NULL,
    from_amount DECIMAL(10, 2) NOT NULL,
    activation_status INT NOT NULL,
    activation_date TIMESTAMP,
    create_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_email) REFERENCES users(email)
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    walletbalance DECIMAL(10, 2) NOT NULL,
    profit DECIMAL(10, 2) NOT NULL,
    activate INT NOT NULL,
    pdate DATETIME NOT NULL,
    duration INT NOT NULL,
    increase DECIMAL(5, 2) NOT NULL,
    usd DECIMAL(10, 2) NOT NULL
);

CREATE TABLE user_packages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    pname VARCHAR(255) NOT NULL,
    froms DECIMAL(10, 2) NOT NULL,
    tos DECIMAL(10, 2) NOT NULL,
    duration INT NOT NULL,
    bonus DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    fname VARCHAR(255),
    lname VARCHAR(255),
    session INT,
    pdate DATE,
    duration INT,
    increase DECIMAL(10, 2),
    usd DECIMAL(10, 2),
    activate INT,
    walletbalance DECIMAL(10, 2),
    profit DECIMAL(10, 2)
);

CREATE TABLE payment_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    usd DECIMAL(10, 2) NOT NULL,
    btc DECIMAL(20, 8),
    eth DECIMAL(20, 8),
    status VARCHAR(255) NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    date DATETIME NOT NULL
);
-- Table structure for the users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    pdate DATE,
    duration INT,
    increase DECIMAL(10, 2),
    usd DECIMAL(10, 2),
    session INT,
    walletbalance DECIMAL(10, 2),
    profit DECIMAL(10, 2),
    refcode VARCHAR(255),
    referred INT,
    username VARCHAR(255)
);

-- Table structure for the btc table
CREATE TABLE btc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usd DECIMAL(10, 2) NOT NULL,
    btctnx VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    status VARCHAR(255) NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    refcode VARCHAR(255) NOT NULL,
    referred INT NOT NULL,
    date DATETIME DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE payment_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    usd DECIMAL(10, 2) NOT NULL,
    btc DECIMAL(10, 8) NOT NULL,
    eth DECIMAL(10, 8) NOT NULL,
    status ENUM('pending', 'approved', 'completed') NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
^^^^^
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    walletbalance DECIMAL(10, 2) DEFAULT 0.00,
    refbonus DECIMAL(10, 2) DEFAULT 0.00,
    refcode VARCHAR(255),
    profit DECIMAL(10, 2) DEFAULT 0.00,
    pname VARCHAR(255),
    phone VARCHAR(20),
    address VARCHAR(255),
    country VARCHAR(255),
    active TINYINT(1) DEFAULT 0,
    status TINYINT(1) DEFAULT 0
);

CREATE TABLE messageadmin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    title VARCHAR(255) NOT NULL,
    image VARCHAR(255),
    status INT DEFAULT 0,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    image TEXT, -- You may adjust the data type to store image filenames
    verify TINYINT DEFAULT 0, -- 0 for unverified, 1 for verified
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    refcode VARCHAR(255),
    pname VARCHAR(255),
    usd DECIMAL(10, 2), -- Adjust the data type for USD
    duration INT,
    increase DECIMAL(5, 2), -- Adjust the data type for percentage
    session TINYINT,
    activate TINYINT,
    pdate DATE,
    walletbalance DECIMAL(10, 2), -- Adjust the data type for wallet balance
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    refcode VARCHAR(255) NOT NULL,
    pname VARCHAR(255) NOT NULL,
    percentage DECIMAL(10, 2) DEFAULT 0.00,
    session TINYINT DEFAULT 0,
    walletbalance DECIMAL(10, 2) DEFAULT 0.00,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    activate TINYINT DEFAULT 0,
    pdate DATE DEFAULT '0',
    duration INT DEFAULT 0,
    increase INT DEFAULT 0,
    usd DECIMAL(10, 2) DEFAULT 0.00
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255),
    lname VARCHAR(255),
    username VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    walletbalance DECIMAL(10, 2),
    refbonus DECIMAL(10, 2),
    refcode VARCHAR(255),
    profit DECIMAL(10, 2),
    pname VARCHAR(255),
    phone VARCHAR(255),
    address VARCHAR(255),
    country VARCHAR(255),
    active TINYINT DEFAULT 0,
    status TINYINT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE package1 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pname VARCHAR(255) NOT NULL,
    froms DECIMAL(10, 2) NOT NULL,
    tos DECIMAL(10, 2) NOT NULL,
    bonus DECIMAL(10, 2) NOT NULL,
    increase DECIMAL(5, 2) NOT NULL,
    duration INT NOT NULL,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    verify TINYINT(1) DEFAULT 0,
    confirm TINYINT(1) DEFAULT 0
);
CREATE TABLE investors (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    verify TINYINT(1) NOT NULL DEFAULT 0,
    confirm TINYINT(1) NOT NULL DEFAULT 0,
    session TINYINT(1) NOT NULL DEFAULT 0
);
CREATE TABLE investor_packages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    pname VARCHAR(255) NOT NULL,
    increase DECIMAL(5, 2) NOT NULL,
    usd DECIMAL(10, 2) NOT NULL,
    pdate DATE NOT NULL,
    duration INT NOT NULL,
    activate TINYINT(1) NOT NULL DEFAULT 0
);
CREATE TABLE investor_packages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    username VARCHAR(255) NOT NULL,
    pname VARCHAR(255) NOT NULL,
    increase DECIMAL(5, 2) NOT NULL,
    percentage DECIMAL(10, 2) NOT NULL,
    activation_date DATE,
    end_date DATE,
    days_to_end INT,
    amount_invested DECIMAL(10, 2),
    status TINYINT(1) NOT NULL,
    daily_profit DECIMAL(10, 2),
    total_plan_profit DECIMAL(10, 2)
);
CREATE TABLE private_messages (
    id INT PRIMARY KEY AUTO_INCREMENT,
    sender_email VARCHAR(255) NOT NULL,
    recipient_email VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    msg_id VARCHAR(10) NOT NULL,
    date_sent TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE adminmessage (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    msgid VARCHAR(10) NOT NULL
);
CREATE TABLE package1 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    pname VARCHAR(255) NOT NULL,
    increase DECIMAL(5,2) NOT NULL,
    bonus DECIMAL(5,2) NOT NULL,
    duration INT NOT NULL,
    froms DATE NOT NULL,
    tos DATE NOT NULL
);

CREATE TABLE package2 (
    id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    pname VARCHAR(255) NOT NULL,
    increase DECIMAL(5,2) NOT NULL,
    bonus DECIMAL(5,2) NOT NULL,
    duration INT NOT NULL,
    froms DATE NOT NULL,
    tos DATE NOT NULL
);

-- Create similar tables for Package3 and Package4
CREATE TABLE btc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    eth DECIMAL(18, 8) NOT NULL,
    usd DECIMAL(18, 2) NOT NULL,
    btctnx VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    status VARCHAR(20) NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE btc (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    usd DECIMAL(18, 2) NOT NULL,
    btc DECIMAL(18, 8) NOT NULL,
    eth DECIMAL(18, 8) NOT NULL,
    tnxid VARCHAR(255) NOT NULL,
    referred VARCHAR(255),
    status VARCHAR(20) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (email) REFERENCES users(email)
);
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    2fa INT NOT NULL, -- To store the 2FA status, where '0' means 2FA is not active and '1' means 2FA is active
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE admin (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    ewallet VARCHAR(255), -- Ethereum wallet address
    bwallet VARCHAR(255), -- Bitcoin wallet address
    pm VARCHAR(255), -- Perfect Money ID
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
