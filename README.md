Fitness App

Overview

This Fitness App is designed to help users track their health and fitness goals efficiently. It enables users to log their workouts, monitor nutrition, track sleep patterns, and a tutorial section for learning basic workouts, and assess their overall wellness through interactive features such as graphs and detailed statistics. The app also includes an admin section for managing users.

This project was created as a final group project for a Data Management class.

Features

User Functionality

Account Creation and Login:
Users must create an account or log in to access the app.

Workout and Nutrition Goals:
Users can set up personalized workout and nutrition goals.

Daily Tracking:

Log completed workouts.

Input details of food consumed (calories, nutrition information).

Record sleep times.

Monitor mood changes.

Weather Information:
Users can check the weather directly in the app to plan outdoor activities.

Search and Filter:

Search and filter options allow users to view specific stats, such as the highest calorie intake in a day.

Generate insights into health trends.

Data Visualization:
A graph displays the correlation between sleep and stress levels, helping users identify patterns in their health data.

Workout Tutorials:
Users can access a tutorial page that demonstrates basic workout techniques.

Admin Functionality

Admin Dashboard:

View all active users.

Monitor user activity, including whether they are logging workouts or food entries.

How It Works

User Setup:

Register a new account or log in with existing credentials.

Upon successful login, users gain access to the app's full functionality.

Setting Goals:

Navigate to the Goals section to set workout and nutrition targets.

Daily Logs:

Use the tracking features to log daily activities such as workouts, meals, sleep, and mood.

Analytics:

Access personalized stats through the search and filter tools.

Review graphical representations of sleep and stress correlations.

Admin Access:

Admins log in using separate credentials.

The admin panel provides oversight of user activity and engagement.

Tutorials:

Explore the tutorial page to learn essential workout routines.

Database and Backend

Database Storage

The app uses MySQL Workbench for database management. User and admin information, along with activity logs, are stored in structured tables. The database ensures secure and efficient data storage and retrieval.

Table Structures

Admin Table

Column Name

Data Type

Description

Admin_id

int (Primary Key)

Unique identifier for admin.

Username

varchar(50)

Admin's username.

Password

varchar(50)

Admin's password.

Email

varchar(100)

Admin's email address.

Sex

char(1)

Admin's sex (e.g., M/F).

Date_of_birth

date

Admin's date of birth.

Address

varchar(100)

Admin's physical address.

Body Size Table

Column Name

Data Type

Description

BodySize_id

int (Primary Key)

Unique identifier for body size entry.

User_id

int

Foreign key linking to user.

Date

date

Date of the record.

Height

decimal(5,2)

User's height.

Waist_size

decimal(5,2)

Waist size measurement.

Chest_size

decimal(5,2)

Chest size measurement.

Hip_size

decimal(5,2)

Hip size measurement.

Arm_size

decimal(5,2)

Arm size measurement.

Thigh_size

decimal(5,2)

Thigh size measurement.

Mental Wellbeing Table

Column Name

Data Type

Description

W_id

int (Primary Key)

Unique identifier for record.

User_id

int

Foreign key linking to user.

Mood

varchar(30)

User's mood.

Mood_description

varchar(255)

Description of mood.

Stress_level

int

Stress level rating.

Date

date

Date of record.

Nutrition Tracker Table

Column Name

Data Type

Description

Nutrition_id

int (Primary Key)

Unique identifier for nutrition entry.

User_id

int

Foreign key linking to user.

Meal_type

varchar(20)

Type of meal (e.g., breakfast).

Calories

int

Calories consumed.

Protein

int

Protein intake (grams).

Carbs

int

Carbohydrate intake (grams).

Fats

int

Fat intake (grams).

Water

int

Water intake (ml).

Date_time

datetime

Date and time of record.

Nutrition Goals Table

Column Name

Data Type

Description

Nutrition_goal_id

int (Primary Key)

Unique identifier for goal entry.

User_id

int

Foreign key linking to user.

Nutrient

varchar(25)

Type of nutrient (e.g., protein).

Target_amount

int

Target intake amount.

Date_set

date

Date the goal was set.

Target_date

date

Target completion date.

Frequency

varchar(20)

Frequency of goal (e.g., daily).

Priority

varchar(30)

Priority level of goal.

Status

varchar(20)

Current status of goal.

Sleep Table

Column Name

Data Type

Description

Sleep_id

int (Primary Key)

Unique identifier for sleep record.

User_id

int

Foreign key linking to user.

Sleep_hours

decimal(3,1)

Total hours slept.

Sleep_start

time

Time sleep started.

Sleep_end

time

Time sleep ended.

Date

date

Date of record.

Notes

varchar(255)

Additional notes.

Sleep_quality

int

Quality rating (1-10).

User Table

Column Name

Data Type

Description

Fname

varchar(25)

First name of user.

Lname

varchar(25)

Last name of user.

Username

varchar(50)

User's username.

User_id

int (Primary Key)

Unique identifier for user.

Password

varchar(255)

User's password.

Email

varchar(100)

User's email address.

Date_of_birth

date

User's date of birth.

Address

varchar(100)

User's physical address.

Sex

varchar(255)

User's sex.

Workout Tracker Table

Column Name

Data Type

Description

Workout_id

int (Primary Key)

Unique identifier for workout entry.

User_id

int

Foreign key linking to user.

Workout_type

varchar(100)

Type of workout performed.

Duration

int

Duration of workout (minutes).

Calories_burned

int

Calories burned during workout.

Date_time

datetime

Date and time of workout.

Notes

varchar(500)

Additional notes.

Workout Goals Table

Column Name

Data Type

Description

Workout_goal_id

int (Primary Key)

Unique identifier for goal entry.

User_id

int

Foreign key linking to user.

Goal_type

varchar(50)

Type of goal (e.g., duration).

Target_value

int

Target value for goal.

Date_set

date

Date the goal was set.

Target_date

date

Target completion date.

Frequency

varchar(20)

Frequency of goal (e.g., weekly).

Priority

varchar(30)

Priority level of goal.

Status

varchar(20)

Current status of goal.

Backend Integration

The app uses XAMPP to run PHP scripts that handle server-side processing. PHP manages user authentication, data input/output, and secure communication with the MySQL database.
