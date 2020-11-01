# opentracking
Logs users ip address and returns image

## STEPS 

### 1) CREATE Table structure

entry_id INT (primary, auto_increment),
ip_address VARCHAR(15),
time TIMESTAMP (CURRENT_TIMESTAMP) 

### 2) Update Connection and Image Settings in index.php

//Connection Settings
$servername = "";
$username = "";
$password = "";
$dbname = "";

//Image Settings
$image = "robo";
$image_type = "png";
 
### 3) Update URL in send_email.html with your hosting website 

<img src="http://yourwebsitehere.com/"/>

### 4) Open send_email.html and copy content (Ctrl A + Ctrl C) 

### 5) Paste html into email prospect

### 6) Table gets updated everytime user opens your email ;-D

