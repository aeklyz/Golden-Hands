# Golden Hands Spa - Laravel Website

This README file provides step-by-step instructions on how to install and run the Golden Hands Spa Laravel website, including the setup for the chatbot AI.

## Prerequisites for website

- PHP (>= 8.0)
- Composer
- Node.js and npm
- MySQL or any other compatible database

### Composer and npm will install all dependencies needed for the website (e.g., Botman, Guzzle)

## Prerequisites for chatbot
- Python 3.x
- Flask
- Sentence-Transformers

---

## Installation Guide

### 1. Clone the Repository
```bash
git clone https://github.com/aeklyz/Golden-Hands.git
cd golden-hands-spa
```

### 2. Install Laravel Dependencies
```bash
composer install
```

### 3. Copy Environment File
```bash
cp .env.example .env
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Configure Database

Open the `.env` file and set up your database credentials:

```plaintext
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=golden_hands_spa
DB_USERNAME=root
DB_PASSWORD=password
```

### 6. Run Migrations
```bash
php artisan migrate
```

### 7. Install Node Modules and Compile Assets
```bash
npm install
npm run dev
```

### 8. Start Laravel Development Server
```bash
php artisan serve
```

---

## Chatbot AI Setup (Python Backend)

### 1. Navigate to the Chatbot Directory
```bash
cd chatbot
```

### 2. Create a Virtual Environment (Optional but Recommended)
```bash
python -m venv venv
source venv/bin/activate  # For macOS/Linux
venv\Scripts\activate    # For Windows
```

### 3. Install Python Dependencies
```bash
pip install flask sentence-transformers
```

### 4. Run the Python Chatbot Server
```bash
python bot.py
```

The chatbot server will run on `http://127.0.0.1:5000`.

### Other AI models may also be implemented through an API in the Chatbot controller

---

## Additional Commands

### Run Database Seeder to populate tables
```bash
php artisan test
```

### Run Laravel Tests for unit testing
```bash
php artisan test
```

### Clear Cache
```bash
php artisan cache:clear
```

---

## Conclusion

You have installed the Golden Hands Spa Laravel website. If you have any other issues, please refer to the official Laravel and Flask documentation.
