# Track User Activity Log

Track User Activity on your webpage whenever the user will click, double click, print, copy-paste, form submit and form reset.
This script will take screentshot of the webpage and add event log for the same which will store the event details, screenshot file name, time and the user's IP Address.

# Developed By : 
Bharat Parmar

# Version : 
1.0

# File Structure :
1) example.php  : Example Script file 

2) ajax/trackuser.php : Saving Screentshot image and adding event log.

3) screenshot/event-log.log : This file will store the data of the Event like Event Details, Screenshot File Name, Time and IP Address.

4) screenshot : this directory will store all the screenshots which will be taken on the below listed events.

- On Form Submit

- On Form Rest

- On Click 

- On Print

- On Right Click


# Requirements : 
1) PHP Version : 3.0 and above

# How It Works :

1) HTML to Canvas : Script will read the HTML code of the Web Page. 

2) HTML2Canvas Plugin : This plugin will generate Canvas content into the base64 data url of the image.

3) trackuser.php : Jquery send the Canvas Image Data URL to php file which will created new png image file. It will also store the event details, Time, Screenshot Image file name and IP Address.

4) "screenshot" directory should have writeable permission.

# How to use : 
Please check example.php.


