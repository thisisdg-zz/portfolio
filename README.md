# Portfolio

## Migrate/Run on Linux - MacOS

**Assuming you have lampp/xampp stack installed**

1. Run the services i.e. _cd /opt/lampp/_
   _sudo ./xampp start_
2. Go to Project directory and run _php artisan key:generate_ (this will generate a unique 64bit key)
3. Run `_php artisan migrate_` (if your terminal is throwing Exception that means you need to properly edit your _.env_ file)
4. Run `_php artisan:seed_` (Checks for any seeds and if found any it will seed)
5. Finally to execute, _php artisan serve_ (Make sure you do this in another terminal/bash/cmd because you need 1 more for running commands)
