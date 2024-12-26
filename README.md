# Event Management API

An API to manage events, allowing users to register for events and receive email reminders. This project is part of the **Master Laravel and PHP: Build 5 Real-World Projects! Learn PHP From Scratch!** course on Udemy.

---

## Features

- **Event Management**: Add, update, view, and delete events.
- **User Registration**: Users can register for specific events.
- **Email Notifications**: Automatic email reminders sent to registered users before the event starts.
- **Authentication**: Secure API endpoints using Laravel Sanctum.
- **Scalable Design**: Built with RESTful principles for easy integration.

---

## Prerequisites

- PHP >= 8.1
- Composer
- Laravel >= 11.x
- MySQL database
- Insomnia for api test

---

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-username/event-management-api.git
   cd event-management-api
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   ```

3. **Set Up Environment**:
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Configure database and mail settings in the `.env` file.

4. **Generate Application Key**:
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**:
   ```bash
   php artisan migrate
   ```

6. **Seed the Database**:
   ```bash
   php artisan db:seed
   ```

7. **Start the Server**:
   ```bash
   php artisan serve
   ```

---

## API Endpoints

### Authentication
- **Login**: `POST /api/login`
- **Logout**: `POST /api/logout`

### Events
- **List Events**: `GET /api/events`
- **Create Event**: `POST /api/events` (Admin only)
- **View Event**: `GET /api/events/{id}`
- **Update Event**: `PUT /api/events/{id}` (Admin only)
- **Delete Event**: `DELETE /api/events/{id}` (Admin only)

### Attendees
- **List Attendees**: `GET /api/events{id}/attendees`
- **View Attendee**: `GET /api/events/{id}/attendees/{attendee}`

### Event Registration
- **Register for Event**: `POST /api/events/{id}/attendee`

---

## Email Notifications

- Email reminders are sent automatically one day before the event.
- Configure your SMTP settings in the `.env` file:
  ```env
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.example.com
  MAIL_PORT=587
  MAIL_USERNAME=your-email@example.com
  MAIL_PASSWORD=your-password
  MAIL_ENCRYPTION=tls
  MAIL_FROM_ADDRESS=your-email@example.com
  MAIL_FROM_NAME="Event Management"
  ```

---

## Scheduling

The `app:send-event-reminders` command is scheduled to run daily and send email reminders for upcoming events.

- **Command**:
  ```bash
  php artisan app:send-event-reminders
  ```

- **Scheduler**:
  Add the following cron job to your server:
  ```bash
  * * * * * php /path-to-your-project/artisan schedule:run >> /dev/null 2>&1
  ```

---


## Technologies Used

- **Backend**: Laravel 11
- **Database**: MySQL
- **Authentication**: Laravel Sanctum
- **Mailing**: Laravel Mail
- **Scheduler**: Laravel Task Scheduling

---

## Future Enhancements

- Add push notifications for reminders.
- Implement a front-end dashboard for event management.
- Support for multiple languages.

---

## License

This project is open-source and available under the [MIT License](LICENSE).

---

## Acknowledgements

This project is part of the **Master Laravel and PHP: Build 5 Real-World Projects! Learn PHP From Scratch!** course on Udemy. Special thanks to the instructor for the guidance provided throughout the course.

