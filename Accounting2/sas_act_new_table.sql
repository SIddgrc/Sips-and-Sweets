CREATE TABLE accounting_payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_name1 VARCHAR(255) NOT NULL,
  transaction_date1 DATE NOT NULL,
  amount1 DECIMAL(10, 2) NOT NULL,
  payment_method1 VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
