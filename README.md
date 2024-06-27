
Installation and Configuration Guide
1. Clone the Repository
```bash
git clone <repository_url>
```
Replace `<repository_url>` with the actual URL of your repository.
2. Install Dependencies
```bash
composer install
```
If you haven't installed Composer yet, download it from getcomposer.org first.
3. Install Laravel UI Package
```bash
composer require laravel/ui
```
4. Dump Autoload
```bash
composer dump-autoload
```
5. Setup Environment Variables
Configure APIs and Service Credentials
Make sure to replace `GOOGLE_CLIENT_ID`, `GOOGLE_CLIENT_SECRET`, and `GOOGLE_REDIRECT_URL` with your actual Google API credentials.
Create a `.env` file in the root directory and add the following configuration:
```dotenv
DB_DATABASE=eyour_database_name
# Google API Credentials
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
GOOGLE_REDIRECT_URL=
```
Generate Laravel Application Key
```bash
php artisan key:generate
```
Migrate Database and Seed
```bash
php artisan migrate:fresh --seed
```
This will run the database migrations and seed initial data if any.

