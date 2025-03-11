# ROSCA Savings Platform

## Overview
The **ROSCAs Savings Platform** is a Laravel-based application designed to facilitate rotating savings and credit associations (ROSCAs), commonly known as *ajo* or *esusu*. This platform allows users to create savings pools, invite participants, track contributions, and automate payouts in a cyclic manner.

## Features
- **User Registration & Authentication**: Secure user sign-up and login.
- **Dashboard**: Manage savings pools and track transactions.
- **Create & Join Pools**: Users can create and invite others to savings pools.
- **Participant Approval**: Pool creators must approve participants before they join.
- **Automated Contributions & Payouts**: System ensures timely deposits and scheduled payouts.
- **Deposit Reminders**: Email notifications to remind participants of due contributions.
- **Cycle-Based Distributions**: Payouts are rotated among members in a predefined order.
- **Unique Usernames**: Each user gets a unique identifier stored in the pool table.

## Installation
### Prerequisites
Ensure you have the following installed:
- PHP (>=8.1)
- Composer
- Laravel (latest version)
- PostgreSQL
- Node.js & npm (for frontend assets)

### Steps
1. Clone the repository:
   ```sh
   git clone https://github.com/....
   ```
2. Install dependencies:
   ```sh
   composer install
   npm install && npm run dev
   ```
3. Set up the environment:
   ```sh
   cp .env.example .env
   ```
   - Update database credentials in `.env`

4. Generate application key:
   ```sh
   php artisan key:generate
   ```
5. Run migrations:
   ```sh
   php artisan migrate --seed or php artisan migrate
   ```
6. Start the development server:
   ```sh
   php artisan serve
   ```

## Usage
- Register or log in to your account.
- Create a savings pool and set up deposit cycles.
- Invite participants and approve join requests.
- Make contributions and receive payouts in a rotating manner.

## License
This project is licensed under the MIT License.


