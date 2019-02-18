{\rtf1\ansi\ansicpg1252\deff0\nouicompat\deflang1033{\fonttbl{\f0\fnil\fcharset0 Calibri;}}
{\*\generator Riched20 10.0.17134}\viewkind4\uc1 
\pard\sa200\sl276\slmult1\f0\fs22\lang9 How to use application:\par
\tab When you write the URL for this application,http://ec2-18-222-46-151.us-east-2.compute.amazonaws.com/Mas2g2FinalProject/ , into your search bar you will be presented with a login for the application. Any user will be able to login to the application with the default username test and password pass. The user's login information is stored in an SQL table using a mySQL database server where the user with username test and password pass is created after the creation of the table where the user information is stored. After the user clicks the login button the form elements will be sent to php file config.php where we will use the post method to access the values that were entered in the username and password text field to check if the user currently exists in the database. If the user is not in the database, the user will be redirected to the login page where they will see an error message being displayed that says LogIn failed. After logging in, a new cookie will be created storing the user's id number, which will be deleted when the user logs out, then the user will be directed to a web page where they will see a conatiner that says drag video here. The user can drag one of the four images which is in the far left of this web page to the container to watch a trailer of the game the image is related to. Under the container the user will find three buttons. This drag is implemented using a jQuery UI function called draggable(), and the video is displayed on the container after the user "drops" the video in the container, which is implemented using a jQuery UI method called droppable(). One button is titled Game which will direct the user to a game that I call Low Grade Flappy Bird, that was mostly made using JavaScript and where jQuery code was used to apply styles to some html elements. The next button is called Home, which redirects the user to the home page. The next button is called Logout which will log the user out. These three buttons are visible in the Home page and the game page. The home page and the game page are both private content which is not available to users who do not have an account. After the user logs out there is a new php variable created called the logout variable which is set to true to indicate that the logout was successful. As soon as the logout variable is set to true the user cannot access the home page or the game page again. In the login form, the public still has access to the create account web page and the forgot password page. In the create account page the user sends information that is entered in the text field form elements of the page to a php file using the post method called createAccConfig.php, where there application creates a new user and inserts the information in the Players relation where the user's information is stored. \par
Requirement number 1:\par
\tab Your web page must use HTML5 and CSS3.\par
\tab My web application uses HTML5 in the following .php files for the page layout: createAcc.php, game.php, home.php, index.php and reset_pass.php. It also uses external CSS3 for createAcc.php, game.php, index.php and reset_pass.php and their corressponding CSS files are ca.css, style.css, login.css and rp.css. There is one file the uses internal CSS and that is home.php between lines 14-160.\par
Requirement number 2:\par
\tab The pages/sections that makeup the web application must have a consistent design / interface.\par
\tab My web application has a consistent design/ inerface, since all the pages have content and headers that are surrounded by a 5px solid orange border with a 5% border radius and they all have the same box shadow for the borders and they all have same text shadow for the text in their headers. The buttons throughout the application have an orange background with a 15% border radius. They all also have the same picture for their background.\par
Requirement number 3:\par
\tab The web application must be well-structured and logically organized.\par
\par
\tab The application is well structured snce it consists of multiple web pages with the same structure of a container div that contains all the elements that will be used in the forms or the game and since the all the publicly available pages are in the same format and all of the private pages have the same content. The div elements used in my application all have the same style and the borders of all the div elements also have the same style and the background is the same throughout the application.\par
Requirement number 4:\par
\tab The web application must have content or functions that are publicly available and content or functions that can only be accessed if authenticated (logged-in), public and private content.\par
\tab My web application has a login form in index.php that is the default page for anybody that wants to use the web application, the user can also access other pages where he or she can create an account by clicking the create account tag below the login button in the index.php web page or by clicking the word password below the create account tag in the index.php web page. The create account tag in the index.php web page should direct the user to a web page where they have a form to fill out to create a new user. The password tag in the index.php web page should direct the user to a form that they will fill out that should send the user an email of a temporary password that they will use. All of this content so far is publicly accessible to any user. The web application also has private content which is not publicly available such as the web pages with address game.php and home.php. In game.php the user can play a game that was made mostly with JavaScript and used jQuery to access certain document objects, this web page also consists of three buttons a Restart button, which will redirect the user to the web page they were just on to restart the game, a logout button, to send the user back to the login form, and a Home button to send the user to the home page. Another web page that is not publicly accessible is home.php, where the user can access the web page game.php by clicking a button named Game, which is right next to a Home button that redirects a user back to home.php,  next to it you also have a logout button for the user to logout of their session and be directed to the login form. In the home.php web page, they can also drag a small div object to another div to show a video.\par
Requirement number 5:\par
For the purpose of testing the login and accessing the protected login the following user ID and password must work for general access to protected content: User ID: test Password: pass.\par
This requirement is satisfied when we created the default user in our .sql file in line 12 where the tuple ('test','pass',1,'mas2g2@mail.missouri.edu','Test',0) is inserted to our relation Players(Username,Password,Email,Name,Score). This user should always exist in our application.\par
Requirement number 6:\par
The web application must utilize PHP and proper PHP techniques shown in class.\par
The following files use php in my web application: createAcc.php(lines 37-40), config.php (all lines), createAccConfig.php (all lines), forgot_pass.php (all lines), game.php (lines 7-14), game_data.php (all lines), home.php (lines 1-8), index.php (lines 1-5 and lines 40-47), and reset_pass.php (lines 28-32).\par
Requirement number 7:\par
You must use GET and POST.\par
My web application uses POST in index.php to pass information collected via a login form to a php file called config.php to check that a user with the specified username and password exists in the database. The POST method is also used for the form in the web page createAcc.php for collecting information about the new user to create a new user with a specified email, username, and password ( sensitive data ) that will be sent to createAccConfig.php to create a new user in SQL. The post method is also used for a form in reset_pass.php to send information such as username and email to php file forgot_pass.php for sending an email with a new password to the particular user.\par
The GET method is used in the index.php file to show in the URL  whether or not the log in worked by showing that a variable called login was set to false to show that the user was not successful logging in. When the user clicks logout in home.php or game.php the user is directed to index.php?logout=true. Here a new variable named logout has been created to show that the user has successfully logged out. The GET method is also used in game.php to update the score of the user in the game in the game.php web page.\par
\par
Requirement 8\par
You must use another form aside from the one for the login form.\par
My web application uses two more forms aside from the login form in the following web pages createAcc.php (lines 21-53), and reset_pass.php (lines 19-35)\par
Requirement 9\par
Any place where users can provide input you must supply appropriate and informative feedback if the information entered is not complete or correct.\par
My web application displays an error message in the web page index.php if the account with the entered username or password is not found. The message is displayed in red text under the password text field. The web application also displays an error message in createAcc.php under the confirm password text field if the entered confirm password and the password do not match. The web application also displays an error message in reset_pass.php if the account with the entered username and password is not found.\par
Requirement 10\par
The web application must contain a page where there are multiple photos presented on the page.\par
My web application contains multiple photos in the page home.php.\par
Requirement 11\par
The web application must contain a page that contains a YouTube or another video embedded in the page.\par
My web application uses youtube videos in web page home.php, that are displayed when you drag the images to the div that contains the header Drag Required Video\par
Requirement 12\par
The web application must utilize JavaScript and proper JavaScript techniques as shown in class.\par
The web application uses JavaScript in the file final.js.\par
Requirement 13\par
The web application must utilize jQuery and proper jQuery techniques as shown in class.\par
The web application uses jQuery in final.js in lines 7,8, 124.\par
Requirement 14\par
The web application must utilize jQuery UI or Bootstrap interface elements. \par
My web application uses jQuery UI in the page home.php in lines 199-209.\par
Requirement 15\par
The web application must utilize AJAX. \par
My web application uses AJAX in final.js in lines 152-161.\par
\par
}
 
# Web-Application-Game
# WebAppGame
