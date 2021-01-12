## Describing the current situation
We, as a team setting up our environment to startup our group project with the following developing members:
1. Sabri Said
2. Szenczi Boldizsar
3. Wan Shiyi
4. Yuldashov Rasul
5. Friedrichs Wade David
6. Silabela Mxolisi

We have agreed to develop a blog application,the application will let the user to become a blogger by allowing them to post thier content,Currently we are working on documentation which is an integral part of our application.This will give us ideas so that we will have a better understanding when it comes to implementation of our project.

## UI Plan

The interface will be a not so complicated one, a simple login screen only and a dashboard that will have buttons such as; add item, remove item, produce slip, etc. No database will be used since this is a small project, everything will be hardcoded into the project. With this simple design we aim to provide an easy interface that doesnt require much training leaving less stress on the owners to train new employees. 

the interface will be very simple,nice styled register and login and home page that will have some buttons and labels for like posting or deleting a post/picture or whatever the user can do.database as well to store the user information,with this project we will provide a simple design no matter how much training does it need,as long as it easy for the user to use.

## Use Cases

The users have to register and login first before they will lead to the home page.after loging in using a user id as well as password then they will be able to see the home dashboard.the admin can remove or edit user's profiles,while the bloggers can add or remove thier own posts.

* Only Admin can add/remove users.
* register screen will show the username,email,password,confirm password.
* The login screen will only show the ID label as well as password label.
* The dashboard will have text areas as well as buttons like post/submit_post...
* Users may logout using the button at the top corner.
* Users may add and remove posts.


## How the system should be and what it should not be  ?__

The system should be as simple as we can make it so that the user can easily use it,otherwise,it shouldn't be broken at any point,always working properly(maintenance) which means we should maintain our application to work properly and if any error shows up we have to catch it(for example : try,catch exception).

Data requirements must be accurate, reliable and true. When you make an action request, such as finding, deleting, modifying, and adding, you should ensure that the input data matches the database data. When meeting the user's request, the system should ensure that the data in response to the inspection rate and accuracy rate.

Time characteristics. 
In order to meet the user's efficient requirements, the response time of the data, the update processing time, the data conversion and transmission time, the running time should be within 1-5 seconds. When you need to interact with an external device, such as a printer, the response time may be long, but it should be within acceptable limits.

## User cases

- A visitor can become a blog user by register
- After loging in using a user id as well as password then the system gives blog user the appropriate permissions to operate on the blog site
- User exit: blog users who have logged in can exit and release their own information resources
- Blog users can publish their own articles, including topics, text, expressions, pictures and other information, the author through various elements to show their ideas. The system receives the information and stores it in the database on the server side
- Blog users can delete their own published articles and information, and the system will automatically delete these records in the server-side database
- In addition to querying, browsing and commenting articles, the system administrator of blog can also modify and delete all articles and comments in the system. These maintenance and management have the highest authority, and the system automatically updates the data in the server-side database
-Blog administrators can add and delete new  blog users. He can also add, delete and set the appearance of the blog home page, plug-ins and tools used by the blog

## Constrains__ :

Design Constraints imposes limitations on the following things:
* The running environment : Microsoft Visual Studio.
* The operating system : Microsoft Windows 10.
* the programming language, databases;
* coding standards;
* business logic, etc.
The application should have methods and function that can do all the operations needed like deleting or adding posts, updating...etc also,it should have generic classes and methods.

As per said in the requirement specification, the software must oblige the new requlations in the EU, namely GDPR. This means whatever data we collect from the user, must be treated with the upmost care. Also the user MUST explicitly accept the collection and use of his/her data.

As stated in the requirement specification, copyright content can be used for educational purposes. Although it varies country-by-country, if the original author/source must be stated or not. This would mean a great constraint on the system in case of commercialising the software. In case of free educational software, the differences between the countries does no concern us, we will only have to oblige to the laws in the country, where our organization is stated, and where the original source of the server side of the software is. Even if CDN is used, the original source is the one we have to oblige.

As per said in the requirement specification, whenever communications happen between the client and server side, the data should be sent in a json format. It is one of the most popular standards nowadays. If the communication happens on http/https protocol, it is also a good idea to use normalized url-s with it, similarly to a RESTful API.
