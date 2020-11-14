# Opentracking

Logs users ip address and returns image.

## Steps

#### 1) CREATE Table structure

```sql
CREATE TABLE access_info(
   entry_id INT NOT NULL AUTO_INCREMENT,
   ip_address VARCHAR(15) NOT NULL,
   time_checked TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
   PRIMARY KEY ( entry_id )
);

```

#### 2) Update Connection and Image Settings in index.php

```php
//Connection Settings
$servername = "";
$username = "";
$password = "";
$dbname = "";

//Image Settings
$image = "robo";
$image_type = "png";
```

#### 3) Update URL in send_email.html with your hosting website 

```html
<img src="http://yourwebsitehere.com/"/>
```

#### 4) Open send_email.html and copy content (Ctrl A + Ctrl C) 

#### 5) Paste html into email prospect

#### 6) Table gets updated every time user opens your email >;-}
