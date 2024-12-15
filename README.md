# Fitness App

## Overview

This Fitness App is designed to help users track their health and fitness goals efficiently. It enables users to log their workouts, monitor nutrition, track sleep patterns, and a tutorial section for learning basic workouts, and assess their overall wellness through interactive features such as graphs and detailed statistics. The app also includes an admin section for managing users.

This project was created as a final group project for a Data Management class.

---

## Features

### User Functionality

- **Account Creation and Login**:
  Users must create an account or log in to access the app.

- **Workout and Nutrition Goals**:
  Users can set up personalized workout and nutrition goals.

- **Daily Tracking**:

  - Log completed workouts.
  - Input details of food consumed (calories, nutrition information).
  - Record sleep times.
  - Monitor mood changes.

- **Weather Information**:
  Users can check the weather directly in the app to plan outdoor activities.

- **Search and Filter**:

  - Search and filter options allow users to view specific stats, such as the highest calorie intake in a day.
  - Generate insights into health trends.

- **Data Visualization**:
  A graph displays the correlation between sleep and stress levels, helping users identify patterns in their health data.

- **Workout Tutorials**:
  Users can access a tutorial page that demonstrates basic workout techniques.

### Admin Functionality

- **Admin Dashboard**:
  - View all active users.
  - Monitor user activity, including whether they are logging workouts or food entries.

---

## How It Works

1. **User Setup**:

   - Register a new account or log in with existing credentials.
   - Upon successful login, users gain access to the app's full functionality.

2. **Setting Goals**:

   - Navigate to the Goals section to set workout and nutrition targets.

3. **Daily Logs**:

   - Use the tracking features to log daily activities such as workouts, meals, sleep, and mood.

4. **Analytics**:

   - Access personalized stats through the search and filter tools.
   - Review graphical representations of sleep and stress correlations.

5. **Admin Access**:

   - Admins log in using separate credentials.
   - The admin panel provides oversight of user activity and engagement.

6. **Tutorials**:

   - Explore the tutorial page to learn essential workout routines.

---

## Database and Backend

### Database Storage

The app uses **MySQL Workbench** for database management. User and admin information, along with activity logs, are stored in structured tables. The database ensures secure and efficient data storage and retrieval.

### Table Structures

#### Admin Table

| Column Name     | Data Type           | Description                  |
| --------------- | ------------------- | ---------------------------- |
| Admin\_id       | `int` (Primary Key) | Unique identifier for admin. |
| Username        | `varchar(50)`       | Admin's username.            |
| Password        | `varchar(50)`       | Admin's password.            |
| Email           | `varchar(100)`      | Admin's email address.       |
| Sex             | `char(1)`           | Admin's sex (e.g., M/F).     |
| Date\_of\_birth | `date`              | Admin's date of birth.       |
| Address         | `varchar(100)`      | Admin's physical address.    |

#### Body Size Table

| Column Name  | Data Type           | Description                            |
| ------------ | ------------------- | -------------------------------------- |
| BodySize\_id | `int` (Primary Key) | Unique identifier for body size entry. |
| User\_id     | `int`               | Foreign key linking to user.           |
| Date         | `date`              | Date of the record.                    |
| Height       | `decimal(5,2)`      | User's height.                         |
| Waist\_size  | `decimal(5,2)`      | Waist size measurement.                |
| Chest\_size  | `decimal(5,2)`      | Chest size measurement.                |
| Hip\_size    | `decimal(5,2)`      | Hip size measurement.                  |
| Arm\_size    | `decimal(5,2)`      | Arm size measurement.                  |
| Thigh\_size  | `decimal(5,2)`      | Thigh size measurement.                |

#### Mental Wellbeing Table

| Column Name       | Data Type           | Description                   |
| ----------------- | ------------------- | ----------------------------- |
| W\_id             | `int` (Primary Key) | Unique identifier for record. |
| User\_id          | `int`               | Foreign key linking to user.  |
| Mood              | `varchar(30)`       | User's mood.                  |
| Mood\_description | `varchar(255)`      | Description of mood.          |
| Stress\_level     | `int`               | Stress level rating.          |
| Date              | `date`              | Date of record.               |

#### Nutrition Tracker Table

| Column Name   | Data Type           | Description                            |
| ------------- | ------------------- | -------------------------------------- |
| Nutrition\_id | `int` (Primary Key) | Unique identifier for nutrition entry. |
| User\_id      | `int`               | Foreign key linking to user.           |
| Meal\_type    | `varchar(20)`       | Type of meal (e.g., breakfast).        |
| Calories      | `int`               | Calories consumed.                     |
| Protein       | `int`               | Protein intake (grams).                |
| Carbs         | `int`               | Carbohydrate intake (grams).           |
| Fats          | `int`               | Fat intake (grams).                    |
| Water         | `int`               | Water intake (ml).                     |
| Date\_time    | `datetime`          | Date and time of record.               |

#### Nutrition Goals Table

| Column Name         | Data Type           | Description                       |
| ------------------- | ------------------- | --------------------------------- |
| Nutrition\_goal\_id | `int` (Primary Key) | Unique identifier for goal entry. |
| User\_id            | `int`               | Foreign key linking to user.      |
| Nutrient            | `varchar(25)`       | Type of nutrient (e.g., protein). |
| Target\_amount      | `int`               | Target intake amount.             |
| Date\_set           | `date`              | Date the goal was set.            |
| Target\_date        | `date`              | Target completion date.           |
| Frequency           | `varchar(20)`       | Frequency of goal (e.g., daily).  |
| Priority            | `varchar(30)`       | Priority level of goal.           |
| Status              | `varchar(20)`       | Current status of goal.           |

#### Sleep Table

| Column Name    | Data Type           | Description                         |
| -------------- | ------------------- | ----------------------------------- |
| Sleep\_id      | `int` (Primary Key) | Unique identifier for sleep record. |
| User\_id       | `int`               | Foreign key linking to user.        |
| Sleep\_hours   | `decimal(3,1)`      | Total hours slept.                  |
| Sleep\_start   | `time`              | Time sleep started.                 |
| Sleep\_end     | `time`              | Time sleep ended.                   |
| Date           | `date`              | Date of record.                     |
| Notes          | `varchar(255)`      | Additional notes.                   |
| Sleep\_quality | `int`               | Quality rating (1-10).              |

#### User Table

| Column Name     | Data Type           | Description                 |
| --------------- | ------------------- | --------------------------- |
| Fname           | `varchar(25)`       | First name of user.         |
| Lname           | `varchar(25)`       | Last name of user.          |
| Username        | `varchar(50)`       | User's username.            |
| User\_id        | `int` (Primary Key) | Unique identifier for user. |
| Password        | `varchar(255)`      | User's password.            |
| Email           | `varchar(100)`      | User's email address.       |
| Date\_of\_birth | `date`              | User's date of birth.       |
| Address         | `varchar(100)`      | User's physical address.    |
| Sex             | `varchar(255)`      | User's sex.                 |

#### Workout Tracker Table

| Column Name      | Data Type           | Description                          |
| ---------------- | ------------------- | ------------------------------------ |
| Workout\_id      | `int` (Primary Key) | Unique identifier for workout entry. |
| User\_id         | `int`               | Foreign key linking to user.         |
| Workout\_type    | `varchar(100)`      | Type of workout performed.           |
| Duration         | `int`               | Duration of workout (minutes).       |
| Calories\_burned | `int`               | Calories burned during workout.      |
| Date\_time       | `datetime`          | Date and time of workout.            |
| Notes            | `varchar(500)`      | Additional notes.                    |

#### Workout Goals Table

| Column Name       | Data Type           | Description                       |
| ----------------- | ------------------- | --------------------------------- |
| Workout\_goal\_id | `int` (Primary Key) | Unique identifier for goal entry. |
| User\_id          | `int`               | Foreign key linking to user.      |
| Goal\_type        | `varchar(50)`       | Type of goal (e.g., duration).    |
| Target\_value     | `int`               | Target value for goal.            |
| Date\_set         | `date`              | Date the goal was set.            |
| Target\_date      | `date`              | Target completion date.           |
| Frequency         | `varchar(20)`       | Frequency of goal (e.g., weekly). |
| Priority          | `varchar(30)`       | Priority level of goal.           |
| Status            | `varchar(20)`       | Current status of goal.           |

### Backend Integration

The app uses **XAMPP** to run PHP scripts that handle server-side processing. PHP manages user authentication, data input/output, and secure communication with the MySQL database.

---



---

## Acknowledgments

This app was developed as a final group project for a Data Management class. Special thanks to all team members for their contributions and hard work.

