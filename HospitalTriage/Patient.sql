CREATE TABLE patients (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100),
    severity VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
