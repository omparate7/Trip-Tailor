# Trip-Tailor

Trip-Tailor is a PHP + MySQL web application for planning personalized trips.  
Users can sign up, select destinations, build itineraries, and review expected costs based on selected attractions.

## Project Scope
This project was developed as part of the **CS2003 DBMS** course.

## Features
- User authentication (sign up, login, forgot password)
- Profile management
- Destination and attraction exploration
- Itinerary creation and saving
- Cost estimation from selected attractions
- Feedback and reporting modules
- Admin pages for managing users, destinations, and reports

## Tech Stack
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP
- **Database:** MySQL / MariaDB

## Repository Structure (High-Level)
- `/php` – core backend handlers and user flows
- `/admin_pages` – admin-specific pages and management modules
- `/css` – stylesheets
- `/scripts` – client-side JavaScript
- `/database/trip_tailor.sql` – database schema + seed data

## Setup Instructions
### Prerequisites
- PHP 8.x
- MySQL or MariaDB
- Apache (or XAMPP/WAMP/LAMP stack)

### 1) Import the database
1. Create/import the database using:
   - `database/trip_tailor.sql`
2. Confirm database name is `trip_tailor`.

### 2) Configure database connection
Update DB credentials in:
- `php/connection.php`

Default values in the repository:
- host: `localhost`
- user: `root`
- password: *(empty)*
- database: `trip_tailor`

### 3) Run the app
1. Place the project in your web server root (for example, `htdocs` if using XAMPP).
2. Start Apache and MySQL.
3. Open:
   - `http://localhost/Trip-Tailor/Login.html`

## Contributors
- [Vinay Surwase](https://github.com/VinaySurwase)
- [Taanvi Khevaria](https://github.com/taanvi2205)
- [M. Gowthami](https://github.com/Gowwwthami)
- [Om Parate](https://github.com/omparate7)
- [Raja Kumar](https://github.com/raja5583)

## License
Academic project. Intended for educational use.
