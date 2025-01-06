**API (backend) telepítés:**
`php artisan install:api`

**Modell elnevezés:**
Model neve: `Car` -> tábla neve: `cars`


**Modell létrehozása:**
`php artisan make:model -mcf --api  Car`

**Migrációk futtatása:**
`php artisan migrate`

csak azokat a migrációkat futtatja, amelyeket még nem futtattunk.

**Migráció visszavonása:**
`php artisan migrate:rollback`