RW server-side v. 0.01 alpha

///INSTALATION

Before using software you have to download and install XAMPP server or alternative (search on www.google.com) on your PC. (Download from: https://www.apachefriends.org/download.html)

Remove all content from XAMPP's x:\xampp\htdocs folder.

Clone server-side folder from GitHub into x:\xampp\htdocs folder.

Run XAMPP control panel start Apache and MySql. (If you get errors close software which uses 80, 443, 3306 ports. e.g. 'Skype')

Go to your browser and open localhost/phpmyadmin. Import provided database for login and rw(Randomwalk) or create new. 
To create new database for login and rw(Randomwalk) read db.md file

///USAGE

When database is created go to your browser and open 'http://localhost/randomwalk' (prefered browser 'Google Chrome', download from: https://www.google.com/chrome/browser/desktop/index.html)
!!! Internet connection on PC is required !!!

Register as a new user by pressing register on loaded page. (New user credentials will be stored in database)

After registration login with your credentials.

On the left side of window enter data which will be used in calculations.

Using drop down menu 'Select' you can choose values out of database.

On the left side of window you can enter new data and save it. New data will be stored in database. 

///UNFINISHED FUNCTIONALITY

After saving new data you have to refresh a page if you want to use that data.

Text fields don't have mask's. When you put in data be careful and don't put letter's in fields. 