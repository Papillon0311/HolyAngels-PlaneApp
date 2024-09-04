CREATE TABLE planeapp.activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    description TEXT NOT NULL,
    timestamp DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
INSERT INTO planeapp.activities (user_id, description) VALUES (1, 'Logged in'), (1, 'Updated profile');
