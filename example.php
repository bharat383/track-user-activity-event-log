<!DOCTYPE html>
<html>
	<head>
		<title>Track User Activity : Bharat Parmar</title>
		<script src="js/jquery.min.js"></script>
	</head>
<body>

<h4>Example : Track User' Following Activity Screenshot</h4>
<ol>
	<li>Form Submit</li>
	<li>Form Data Clear</li>
	<li>Click on your Web Page</li>
	<li>Copy Web Page Content</li>
	<li>Print Web Page</li>
	<li>Right Click on Web Page</li>
</ol>
<p>Whenever the above events will be triggered, the screenshot of the webpage will be stored in the Screenshot Directory as well as the event log will be generated in event-log.log file in the same directory. Event Log will store data like Event Name, Screenshot Image File Name, Time and IP Address.</p>
<hr>
	<form method="post" enctype="multipar/form-data">
		<h3>Contact Us</h3>
		<table width="50%">
			<tr>
				<th>Full Name</th>
				<td><input type="text" name="full_name"></td>
			</tr>
			<tr>
				<th>Address</th>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<th>City</th>
				<td><input type="text" name="city"></td>
			</tr>
			<tr>
				<th>Contact Number</th>
				<td><input type="text" name="contact_number"></td>
			</tr>
			<tr>
				<th>Email</th>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<th>Message</th>
				<td><textarea name="message" cols="50" rows="10"></textarea></td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Send Message">
					<input type="reset" name="cancel" value="Cancel">
				</td>
			</tr> 
		</table>
	</form>

	<!-- BEGIN CODE FOR USER ACTIVITY LOG -->
		<div style="display:none;"></div><canvas id="image-canvas" style="display:none;"></canvas></div>
		<script type="text/javascript" src="js/html2canvas/html2canvas.js"></script>
		<script type="text/javascript" src="js/html2canvas/jquery.plugin.html2canvas.js"></script>
		<script type="text/javascript" src="js/trackuser.jquery.js"></script>
	<!-- END CODE FOR USER ACTIVITY LOG -->
</body>
</html>

