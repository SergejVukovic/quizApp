# quizApp

## Instalacija
 
 1. Skinite projekat sa githubu, preporucujem da to uradite putem git clone-a ili git init ... bez skidanja .zip file-a.
 2. Udjite unutar foldera i zatim pokrenite `Git Bash`
 3. Kada ste unutar foldera i imate otvoren terminal (Git Bash) ukucajte `composer install` komandu.
 4. Nakon instalacije paketa, napravite sebi bazu pod imenom `quizApp` i podesite `.env` file unutar projekta
 5. Pokrenite migracije
 6. Pokrenite seeder
 
 
 ## Zadaca
 
 Kreirati jedan Blade u kojem ce se izlistati svi kvizovi iz baze , sa mogucnosti da na klik dugmeta otvorimo samo taj jeda kviz na koji smo klinuli 
 npr. `Kviz: 'Geografija' [Preview] ` -> klikom na [Preview] dugme , otvorio bi se samo taj kviz na stranici a ostali bi nestali.
 
 ### Bonus 
 
 Kreirati formu za popunjavanje i upis kvizova u bazu.
 
 ### P.S.
 Imate vec kreirane controllere , modele, migracije, seedere, view-ove.
