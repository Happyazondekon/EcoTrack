# EcoTrack Project

## Overview
EcoTrack is an application designed to help users measure, track, and reduce their carbon footprint. The platform provides tools to calculate emissions, explore informative articles, participate in ecological projects, and make donations to support carbon reduction initiatives. It is built with Laravel for the backend and React for the frontend, offering a modern, responsive, and interactive user experience.

---

## Features

### Core Features
- **Carbon Calculator**
  - Calculate carbon emissions based on various categories (e.g., travel, home energy use).
  - Provide actionable recommendations for reduction.

- **Articles Section**
  - Browse and read articles related to sustainability and environmental conservation.
  - Search functionality to find specific topics of interest.

- **Donation Page**
  - Support ecological projects through one-time or recurring donations.
  - Include options for tribute donations with personalized messages.

- **User Dashboard**
  - Track past activities, calculations, and donations.
  - Manage user profile and preferences.

### Additional Features
- **Multi-language Support**
- **Responsive Design** for mobile and desktop users.
- **Secure Authentication** with password encryption using Jasypt.
- **Admin Panel** for managing articles, users, and donations.

---

## Technologies Used

### Backend
- **Laravel**
  - RESTful API for handling user data, articles, and donations.
  - Database management and migrations.

### Frontend
- **React**
  - User interface components.
  - State management and interactivity.
  
### Database
- **MySQL**
  - Store user data, articles, and donation records.

### Styling
- **Ant Design** for UI components.
- **TailwindCSS** for custom styling.

### Other Tools
- **Axios** for API calls.
- **Inertia.js** for seamless page transitions.
- **Stripe/PayPal** for payment integration.

---

## Setup Instructions

### Prerequisites
- PHP 8.x
- Composer
- Node.js (v16.x or higher)
- MySQL
- NPM or Yarn

### Installation

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-repo/ecotrack.git
   cd ecotrack
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment variables:**
   - Copy `.env.example` to `.env`:
     ```bash
     cp .env.example .env
     ```
   - Set up database credentials, mail settings, and API keys in `.env`.

4. **Run migrations and seed the database:**
   ```bash
   php artisan migrate --seed
   ```

5. **Build frontend assets:**
   ```bash
   npm run dev
   ```

6. **Start the development server:**
   ```bash
   php artisan serve
   ```

7. **Access the application:**
   Open your browser and navigate to `http://localhost:8000`.

---

## Folder Structure

```
EcoTrack/
├── app/          # Laravel application files
├── public/       # Public assets
├── resources/    # React components and views
├── routes/       # Application routes
├── database/     # Migrations and seeders
├── tests/        # Test cases
├── package.json  # Frontend dependencies
├── webpack.mix.js# Laravel Mix configuration
└── .env.example  # Environment variable example
```

---

## Contributing

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature/your-feature-name
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add your message here"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/your-feature-name
   ```
5. Open a pull request.

---

## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

---

## Contact
For inquiries or support, contact the project team at [support@ecotrack.com](mailto:support@ecotrack.com).

