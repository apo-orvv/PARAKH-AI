Title: 

## GitHub README

### Overview

This repository contains the source code for an adaptive MCQ testing system for PARAKH, a large-scale program to assess and improve the skills of engineering students in India. The system uses machine learning to select questions based on the user's performance and abilities, ensuring an appropriate level of difficulty and a personalized learning experience.

### Features

* Pre-assessment: Creates a baseline knowledge assessment using MCQs to understand users' initial knowledge levels.
* Actual test customization: Delivers customized MCQ assessments based on the pre-assessment results, considering factors like time per question, difficulty, malpractice detection through camera, and correctness. Utilizes machine learning for question selection.
* Continuous adaptation: Implements dynamic adjustments in question difficulty and content based on user progress, ensuring an adaptive learning experience.
* User feedback: Collects user feedback to enhance system performance and question quality, facilitating continuous improvement.
* Adaptability for all domains of assessment

### Technology Stack

* ML Dependencies: YOLOv3, DNN, Tensorflow, Scikit-Learn, OpenCV
* PHP WebApp: JS, Bootstrap, jQuery
* Architecture: MVC
* Database: MySQL
* Hosting Service: WAMP Server
* Framework: Flask (Integration of Python Dependencies)

### Installation

To install and run the system, follow these steps:

1. Clone the repository:

```
git clone 
```

2. Install the dependencies:

```
pip install -r requirements.txt
```

3. Start the MySQL server:

> **WAMP Server:**

1. Start WAMP Server.
2. Open the WAMP Server dashboard.
3. Click the **Start** button next to **MySQL**.

> **Other:**

```
mysql -u root -p
```

Enter your MySQL password when prompted.

4. Create a database for the system:

```
CREATE DATABASE ;
```

5. Import the database schema:

```
mysql  < .sql
```

6. Start the Flask server:

```
python app.py
```

7. Access the system in your web browser at `http://localhost:5000`

### Usage

To use the system, follow these steps:

1. Create a user account.
2. Take the pre-assessment.
3. Start the actual test.
4. Answer the questions to the best of your ability.
5. The system will dynamically select the next question based on your performance.
6. Once you have completed the test, you will receive a score report.

### Feedback

I'd appreciate any feedback you have on the system. Please feel free to create an issue on this repository or send an email at [apoorvdsp@gmail.com]

### Future Work

I plan to continue developing the system in the following ways:

* Use NLP to find the difficulty of a question from the text and consider it as an addon to the existing factors for computation of difficulty normalization.
* Redefine the prototype towards the product generation based on Agile Methodology.
* Find the correlation between each of the options and use it wisely for next question prediction.
* Retrieve feedbacks for normalized difficulties, in order to improve model accuracy.
* Work on areas of R&D.
* Analyse various research papers to find & work on future developments.
* Use Firebase as Database.
