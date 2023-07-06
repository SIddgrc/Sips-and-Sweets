CREATE TABLE accounting_Sales (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(50),
    transaction_date4 DATE,
    quantity INT,
    price DECIMAL(10, 2),
    payment_method4 VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
