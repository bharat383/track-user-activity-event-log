# Track User Activity Log.

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

# How to use : 

1) Add canvas to your webpage in footer area with this code : 

<canvas id="image-canvas" style="display:none;"></canvas>

2) include following jquery files :

<script type="text/javascript" src="js/html2canvas/html2canvas.js"></script>
<script type="text/javascript" src="js/html2canvas/jquery.plugin.html2canvas.js"></script>
<script type="text/javascript" src="js/trackuser.jquery.js"></script>


