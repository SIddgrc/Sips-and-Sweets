CREATE TABLE accounting_receivable (
  id INT AUTO_INCREMENT PRIMARY KEY,
  customer_name2 VARCHAR(255) NOT NULL,
  transaction_date2 DATE NOT NULL,
  amount2 DECIMAL(10, 2) NOT NULL,
  payment_method2 VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
