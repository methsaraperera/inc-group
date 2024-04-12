# INC Grade Management System

## Introduction 🚀
This project is developed as part of the Tech Innovation Lab Internship at BMCC Tech Learning Community by [Developer 1] and [Developer 2]. The client for this project is CUNY Borough of Manhattan Community College, New York, NY.

## Purpose 🎯
The purpose of this project is to create a centralized solution for managing, resolving, and monitoring INC grades issued to BMCC students.

## What is INC Grade? ❓
INC, or Incomplete grade, is issued to students when their coursework is incomplete, but there is a reasonable expectation that they can achieve a passing grade by completing the missing assignments. Students must agree with the instructor to complete the missing work before the INC deadline, which is published on the BMCC Academic Calendar. If the missing work is completed successfully, the "INC" grade is reverted to a passing grade. However, if no change is made by the deadline, the "INC" grade reverts to an "FIN" (Fail Incomplete).

## Roles in the Application 👥

### Student 🎓
- Has agreed with the instructor to proceed with completing the coursework.
- Upon assignment to a class:
  - Can view assigned INC classes.
  - Can view assigned coursework that needs to be completed.
  - Can turn in assignments for review by the instructor.

### Instructor 👩‍🏫
- Can request to assign students an INC grade and class.
- Can create new classes and assignments.
- Can assign coursework to students.
- Can review turned-in assignments and assign a grade or request resubmission.
- Can view student completion progress.
- Can request to assign final grades.

### Department Chairperson 🤵‍♂️
- Can approve or decline student INC grade requests.
- Can comment on decisions regarding declining INC grade requests.
- Can approve or decline final grades assigned by instructors.
- Can comment on decisions regarding declining final grades.

### INC Administrative Officer 📊
- Can monitor the performance of the program.

### Registrar 📊
- Can view students with INC grades assigned and use the data to update the administration system.
- Can view when grades are assigned to students and use the data to update the administration system.

## Conclusion 📝
This INC Grade Management System aims to streamline the process of managing incomplete grades, facilitating communication between students, instructors, department chairpersons, administrative officers, and the registrar's office at BMCC.



## Project Presentation
https://docs.google.com/presentation/d/1dzw-Ac4YdqpA1DPqyT51CJ1cJouLfDsJhO5-TkNjLbg/edit?usp=sharing

## Project Live Preview
https://inc.methsara.tech/

## Current Progress
_Dictonary:_
> **✓** : Completed | **✕** : Not Started | **UD** : Under Development | **-** : Not Applicable\
> Prot: Prototype | UI : User Interface | DB : Data Base / Backend | Integration: Integration of user interface with data base and other backend components

| Feature | Prot. | UI | DB | Integration |
|----------------------------|-------|----|----|-------------|
|Home Page|✓|✓|-|-|
|Informational Pages|✓|✓|-|-|
|Student Signup|✓|✓|✓|✓|
|Student Login|✓|✓|✓|✓|
|Student Dashboard|✓|✓|✓|✓|
|Instructor Login|✓|✓|✓|✓|
|Instructor Dashboard|✓|✓|✓|✓|
|Chairperson Login|UD|✕|✕|✕|
|Chairperson Dashboard|UD|✕|✕|✕|
|Performance Monitor Login|UD|✕|✕|✕|
|Performance Monitor Dashboard|UD|✕|✕|✕|
|Bursar Login|UD|✕|✕|✕|
|Bursar Dashboard|UD|✕|✕|✕|
|AI Chatbot - General|-|✓|-|-|
|AI Chatbot - Advanced|-|✕|✕|✕|
|Email Notification System|✕|✕|✕|✕|

## Login Roles
|Role|ID|Code|
|-----|:-----:|:----|
|Bursar|0|rep|
|Instructor|1|ins|
|Student|2|stu|

## External Libraries and Extensions
Quill JS Rich Text Editor Version 2.0.0-rc.2 - https://quilljs.com/ .\
IBM watsonx Assistant Lite


