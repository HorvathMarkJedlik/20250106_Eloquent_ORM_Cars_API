**API (backend) telepítés:**
`php artisan install:api`

**Modell elnevezés:**
Modell neve: `Car` -> Tábla neve: `cars`

**Modell létrehozása:**
`php artisan make:model Car -mcf --api`

**Migráció létrehozása:**
`php artisan make:migration create_cars_table`
`php artisan make:migration add_color_column_to_cars_table`

**Migráció elnevezése:**
Derüljök ki a nevéből, hogy mit csinál a migráció!

**Migráció futtátása**:
`php artisan migrate`

Csak azokat a migrációkat futtatja, amelyeket még nem futtattunk.

**Utolsó migráció visszavonása**:
`php artisan migrate:rollback`

**Összes tábla törlése és az összes migráció futtatása**:
`php artisan migrate:fresh`

**Visszaadott adatok formázása**:
`php artisan make:resource CarResource`

**Adatbázisba adatok feltöltése**:
`php artisan db:seed`
`php artisan db:seed --class=CategorySeeder`

**Adatbázis törlése és összes migráció futtatása majd az adatok feltöltése**:
`php artisan migrate:fresh --seed`