#!/bin/bash

# Function to generate a random alphanumeric string
generate_random_string() {
    local length=${1:-10}
    tr -dc 'A-Za-z0-9' < /dev/urandom | head -c "$length"
}

# Function to generate a random IP address
generate_random_ip() {
    echo "$((RANDOM % 256)).$((RANDOM % 256)).$((RANDOM % 256)).$((RANDOM % 256))"
}

# Function to generate a random 10-digit number
generate_random_number() {
    echo "$((RANDOM % 10000000000))" | awk '{printf "%010d\n", $0}'
}

# Number of iterations (change this to your desired number)
iterations=1000

# Loop to send requests
for ((i=1; i<=iterations; i++)); do
    # Generate values
    ddg1=$(generate_random_string 10)  # Similar to __ddg1
    username=$(generate_random_string 8)  # Random username
    ddg8=$(generate_random_string 12)  # Similar to __ddg8
    random_ip=$(generate_random_ip)  # Random IP address
    ddg10=$(generate_random_number)  # Random 10-digit number

    # Construct the cookie string
    cookies="__ddg1=${ddg1}; user=${username}; __ddg8=${ddg8}; __ddg9=${random_ip}; __ddg10=${ddg10}"

    # Send the curl request with the random cookies
    echo "Sending request $i with cookies: $cookies"
    curl -X POST -d "dog_name=Ника" -b "$cookies" https://fluxcompany.ru/QQ4rPOgs0VjTxwnghItswXOktlyeNXnmWMBTGMQJfP6uoyAu5HKhlHD1FJWTbXyBHVbvBU934xtma0yS5L8ukbbsd7LMXf3UloFE.php

    # Optional: wait for a second between requests
    sleep 1
done
