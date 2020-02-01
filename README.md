# Paketin Seuranta Server
This server is made for Paketin Seuranta app.

*What's the server doing?*
- Pushing FCM Messages to users, so they can get the notifications

**Setup**
- Add a cron job i.e ```*/5 * * * *```, and set its executable: ```php /path/to/files/cron.php```
- Example cron (runs every five minutes): ```*/5 * * * * php /path/to/files/cron.php```
- Change ```FCM_SERVER_KEY``` to your own key in ```config/config.php```.

*What's Paketin Seuranta?*
- It's an app for tracking parcels: https://github.com/norkator/Paketin-Seuranta/
