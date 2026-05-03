# Real Estate Web Application

## Overview

This is a simple real estate web application built with PHP and MySQL. The project is containerized using Docker, making it easy to run and deploy in a consistent environment.

## Live Demo

👉 https://fabijon-realestates.ct.ws/realestates.php

## Features

* Browse real estate listings
* View detailed property information
* Dynamic data from MySQL database
* Dockerized environment for easy setup

## Technologies Used

* PHP
* MySQL
* Docker
* HTML / CSS

## Run with Docker

### Requirements

* Docker installed

### Steps

1. Clone the repository
2. Navigate into the project folder
3. Run:

```bash
docker-compose up --build
```

4. Open in browser:

```
http://localhost
```

## Configuration

The project includes a database connection file (`db.php`) with demo credentials:

```php
username: admin
password: admin
```

⚠️ These credentials are for demonstration purposes only. Do not use them in production.

## Project Structure

* `realestates.php` – main page
* `db.php` – database connection
* `docker-compose.yml` – Docker setup
* `Dockerfile` – PHP container configuration
* `uploads/` – images (if used)

## Notes

* Containerized for consistent development environment
* Intended for learning and portfolio use
* Basic implementation without advanced security

## Author

Fabijon
