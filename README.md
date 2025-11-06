# 🐙 gitREposByPhp

A simple PHP project that fetches GitHub user repositories using the **GitHub API** and stores user information in a **MySQL database**.

---

## 🚀 Features

- Search for any GitHub username.
- Fetch public repositories count via GitHub REST API.
- Store username and repository count in a MySQL database.
- Simple, clean HTML + PHP form interface.

---

## 🧩 Project Structure


---

## ⚙️ How It Works

1. The user enters a GitHub username in the form.
2. The script sends a request to:
3. The API response (in JSON) is decoded in PHP.
4. The repository count is calculated.
5. Data is inserted into the MySQL database.

---

## 🧠 Requirements

- PHP 8+
- MySQL or MariaDB
- XAMPP or any local web server
- Internet connection (for GitHub API access)
- js

---

## 🛠️ Setup Instructions

1. Clone this repository:
```bash
git clone https://github.com/FlapJack990/gitREposByPhp.git
```

2. Move the folder into your XAMPP directory:
```link
C:\programs\XAMPP\htdocs\gitREposByPhp
```

3. Create a MySQL database (e.g., github_users) and run:
```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    gitUser VARCHAR(255) NOT NULL,
    repos_count INT DEFAULT 0
);
```

4. Update your database credentials in conn.php:
```php
$conn = mysqli_connect('localhost', 'root', '', 'github_users');
```

5. Open your browser and go to:
```link
http://localhost/gitREposByPhp/
```

6. Screenshot (Optional)
<img width="1280" height="920" alt="REPOs - Google Chrome 11_6_2025 2_25_53 PM" src="https://github.com/user-attachments/assets/fb2b1946-c7aa-4254-a695-3e7704d5e8f0" />
<img width="1280" height="920" alt="REPOs - Google Chrome 11_6_2025 2_25_12 PM" src="https://github.com/user-attachments/assets/16e6a275-5398-4463-8be0-28bd66ee52d3" />
<img width="1280" height="920" alt="REPOs - Google Chrome 11_6_2025 1_42_50 PM" src="https://github.com/user-attachments/assets/3877a599-924c-4b7a-9eef-e032b0398b17" />



Author

FlapJack990


License

This project is licensed under the MIT License — feel free to use and modify it.
