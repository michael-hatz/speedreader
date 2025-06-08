# RSVP-Speedreader

## What is it? 
It is a simple Rapid Serial Visual Presentation (RSVP) speedreader. 

# speed v1.html 

![grafik](https://github.com/user-attachments/assets/e9f577f2-ba8f-4636-a889-d088b11da29c)
The older version without server components. Saves everything as cookie

You can use this here: https://erdx.de/speed.html

# speed.html
![grafik](https://github.com/user-attachments/assets/8eb92e45-301b-455d-8b90-602aca85864b)

Put this one (and the php files) onto a folder at your server and it will track your reading progress on the server and allow you to upload files, which are stored on directly on the server

**Warning**: There is no access control implemented, be sure to set a .htaccess file to prevent copyright strikes

# Features
* Set reading speed 
* Fullscreen mode
* Dark mode
* Save reading progress into local storage/cookie
* Save remaining text as .txt
* "Read for 5 minutes" without ability to pause or set custom amount of minutes
* Mobile: Swype up/down on left side of screen to increase/decrease reading speed
* Mobile: Swype up/down on right side of screen to increase/decrease font size
* Mobile: Touch on the Text to pause/unpause
* Upload txt/docx Files
* Tracks reading progress (Total words read/current session/words remaining/time remaining)
* << Goes back one sentence
* If you're using [Nachrichtensortiermaschine](https://github.com/michael-hatz/nachrichtensortiermaschine/) and its nice "send unread articles as txt" feature, you can use >> to go to the next article

# Additional features of server version
* Ability to upload multiple txt files (no docx or ePub upload here, just convert your files with Calibre)
* Read where you want: Reading progress in those files is tracked on the server
* Reading progress is also tracked directly on the server
* Mobile: Implemented WakeLog API, which prevents mobile phones from switching off the display 
