**API (backend) telepítés:**
`php artisan install:api`

**Modell elnevezés:**
Model neve: `Car` -> tábla neve: `cars`


**Modell létrehozása:**
`php artisan make:model -mcf --api  Car`

**Migráció elnevezése:**
Derüljön ki a nevéből, hogy mit csinál a migráció

**Migrációk futtatása:**
`php artisan migrate`

csak azokat a migrációkat futtatja, amelyeket még nem futtattunk.

**Migráció visszavonása:**
`php artisan migrate:rollback`

**Összes tábla törlése és az összes migráció lefuttatása:**
`php artisan migrate:fresh`

**Migráció létrehozása:**
`php artisan make:migration blablabal`