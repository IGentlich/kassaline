
### Start
- `docker compose up`
- `php artisan migrate`

if an error occured during migration:
-  in .env file change `DB_HOST=db` to `DB_HOST=127.0.0.1`
- `php artisan migrate`
-  in .env file change `DB_HOST=127.0.0.1` back to `DB_HOST=db`

### phpMyAdmin
- URL: http://localhost:8080
- Server: `db`
- Username: `refactorian`
- Password: `refactorian`
- Database: `refactorian`
