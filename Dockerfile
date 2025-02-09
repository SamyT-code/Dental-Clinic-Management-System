# Use an official PHP runtime as a parent image
FROM php:8.2-apache

# Install system dependencies for PostgreSQL
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pgsql pdo pdo_pgsql

# Set the working directory
WORKDIR /var/www/html

# Copy the project files into the container
COPY PHP/ /var/www/html/

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
