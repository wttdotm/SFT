# SFT project

## Current Status:
alpha

## How it works:

0. User visits `main.html` which has an upload field and a image link to `SFT.png`
1. User uploads file
2. user clicks button to submit
3. button triggers upload.php
4.0 upload.php drops the file into the `uploads` folder
4.1 upload.php takes a random file from the `approved` folder and copies it to the `live` folder as `SFT.png`
5. upload.php directs the user to a new page with a success message

## Issues:
- Design needed (duh)
- Get rid of new upload page, but force hard refresh on submission (so the user sees that they have funged the SFT)
- Figure out some way to make the approval process super easy (maybe some automatically populated checkbox table that moves the files to the approved folder on check)