CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2)
);
INSERT INTO products (product_name, description, price)
VALUES ('Laptop', 'High performance laptop', 999.99),
       ('Smartphone', 'Latest model smartphone', 499.99),
       ('Headphones', 'Noise-cancelling headphones', 199.99);
