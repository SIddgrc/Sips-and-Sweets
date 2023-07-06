CREATE TABLE accounting_payable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    vendor_name VARCHAR(50),
    transaction_date3 DATE,
    amount3 DECIMAL(10, 2),
    payment_method3 VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
