# Laravel Portfolio Website

A modern portfolio website built with Laravel 12 and Tailwind CSS, featuring a responsive design, dark mode support, and contact form functionality.

## Prerequisites

Before you begin, ensure you have the following installed:
- PHP >= 8.2
- Composer
- Node.js >= 18
- npm (Node Package Manager)
- MySQL or any other database supported by Laravel

## Installation Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Souvik1502/Laravel_Portfolio.git
   cd Laravel_Portfolio
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Set Up Environment File**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure Database**
   - Open `.env` file and update the database credentials:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=your_database_name
     DB_USERNAME=your_database_username
     DB_PASSWORD=your_database_password
     ```

5. **Configure Mail Settings**
   - Update the mail configuration in `.env` for the contact form:
     ```
     MAIL_MAILER=smtp
     MAIL_HOST=your_mail_host
     MAIL_PORT=your_mail_port
     MAIL_USERNAME=your_mail_username
     MAIL_PASSWORD=your_mail_password
     MAIL_ENCRYPTION=tls
     MAIL_FROM_ADDRESS=your_email@example.com
     MAIL_FROM_NAME="${APP_NAME}"
     ```

6. **Install Node Dependencies**
   ```bash
   npm install
   ```

7. **Build Assets**
   ```bash
   npm run build
   ```

8. **Run Database Migrations**
   ```bash
   php artisan migrate
   ```

9. **Create Storage Link**
   ```bash
   php artisan storage:link
   ```

## Running the Application

1. **Start the Development Server**
   ```bash
   php artisan serve
   ```

2. **Start Vite Development Server (in a separate terminal)**
   ```bash
   npm run dev
   ```

The application will be available at `http://localhost:8000`

## Features

- Responsive Design
- Dark Mode Support
- Animated Sections with AOS
- Contact Form with Email Integration
- Modern UI with Tailwind CSS
- Portfolio Project Showcase
- Skills Grid
- About Section
- Social Links Integration

## Project Structure

- `resources/views/layouts/master.blade.php` - Main layout template
- `resources/views/partials/` - Component partials (navigation, hero, about, etc.)
- `resources/css/app.css` - Main CSS file with Tailwind imports
- `resources/js/app.js` - Main JavaScript file
- `app/Http/Controllers/ContactController.php` - Contact form handling
- `app/Mail/ContactFormMail.php` - Contact form email template

## Customization

1. **Updating Content**
   - Edit blade files in `resources/views/partials/` to update section content
   - Modify `resources/css/app.css` for styling changes
   - Update `tailwind.config.js` for theme customization

2. **Adding New Sections**
   - Create new blade files in `resources/views/partials/`
   - Include them in `resources/views/welcome.blade.php`

3. **Modifying Email Templates**
   - Edit `resources/views/emails/contact-form.blade.php`

## Troubleshooting

If you encounter any issues:

1. **Assets Not Loading**
   ```bash
   npm run build
   php artisan cache:clear
   php artisan view:clear
   ```

2. **Database Issues**
   ```bash
   php artisan migrate:fresh
   ```

3. **Composer Issues**
   ```bash
   composer dump-autoload
   ```

## Contributing

Feel free to fork this repository and submit pull requests for any improvements.

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Contact

For any queries or support, please use the contact form on the website or create an issue in this repository.
