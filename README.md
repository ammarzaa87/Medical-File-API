In the MedLife project that exists in this repository ( https://github.com/ammarzaa87/MedLife.git ) and everything is well explained. The main point in this project is to achieve a medical file that is shared between hospitals. 

to achieve that a database created with 2 tables:

1- user table that is responsible for who has access to add. (I created 2 users: medlife which is our project and any hospital).
MedLife has a password med123
Anyhospital has a password any123

2- file table contains ssn of patient, doctor nb, date , diagnosis, and prescription.

To add to this API you must be authenticated.

The POST API to add is https://med-lifee.000webhostapp.com/api/add.php and it takes the below attributes:

![image](https://user-images.githubusercontent.com/76926016/175818983-6d6992a6-6e36-46a2-83ff-12c35c4ee31b.png)

The get API is this URL (https://med-lifee.000webhostapp.com/api/get.php?ssn=1234) with ssn passed to it and it returns information abouut this patient.

This project is used in MEDLIFE ( https://github.com/ammarzaa87/MedLife.git ) to get data about patient and to add data to database by using our passowrd(med123)
