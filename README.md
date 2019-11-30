# Portfolio

## Migrate/Run on Linux - MacOS

**Assuming you have lampp/xampp stack installed**

1. Run the services i.e. `cd /opt/lampp/`
   `sudo ./xampp start`
2. Go to Project directory and run _php artisan key:generate_ (this will generate a unique 64bit key)
3. Run `php artisan migrate` (if your terminal is throwing Exception that means you need to properly edit your `.env` file)
4. Run `php artisan:seed` (Checks for any seeds and if found any it will seed)
5. Finally to execute, `php artisan serve` (Make sure you do this in another terminal/bash/cmd because you need 1 more for running commands)
