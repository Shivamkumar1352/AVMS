# Apartment Visitor Management System (AVMS)

The **Apartment Visitor Management System (AVMS)** is a web-based application designed to streamline visitor management in residential complexes. It enhances security by replacing traditional paper logs with a digital system.

## Features

- **Visitor Registration**: Capture visitor details such as name, contact info, and purpose of visit.
- **Pass Generation**: Generate unique visitor passes for quick verification.
- **Real-Time Monitoring**: Track visitor entries and exits efficiently.
- **Reports & Analytics**: Access detailed visitor logs for security assessments.
- **User Authentication**: Secure admin login for managing visitor records.

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL

## Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Shivamkumar1352/AVMS.git
   ```
2. **Setup the Database**:
   - Create a new MySQL database named `avmsdb`.
   - Import `avmsdb.sql` into the database.
3. **Configure the Application**:
   - Update `includes/config.php` with database credentials.
4. **Deploy the Application**:
   - Place files in the web server's root directory (`htdocs` for XAMPP).
   - Start the server and visit `http://localhost/AVMS`.

## Usage

- **Admin Login**:
  - URL: `http://localhost/AVMS/admin`
  - Default credentials (change after first login):
    - **Username**: admin
    - **Password**: admin123
- **Manage Visitors**:
  - Add new visitors, generate passes, and track visitor logs.
  - Use search functionality for quick access to records.

## Contributing

Contributions are welcome! Fork the repository and submit a pull request with improvements.

## License

This project is licensed under the **MIT License**.

---
*Note: This project aims to digitalize visitor management in residential complexes.*
