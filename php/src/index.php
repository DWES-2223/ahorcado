<!DOCTYPE html>
<html xml:lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Enunciat</title>
        </style>
    </head>
    <body>
        <h1>Enunciat Exàmen</h1>
        <ol>
            <li>Exercisi 1. (2,5p)
                <ul>
                    <li>Crear la classe Ofegat amb les següents propietats:
                        String $paraula,Array $lletres, int $errades i una statica que es $max_errades</li>
                    <li>$max_errades és per defecte 7</li>
                    <li>Al constructor soles se li pasa la paraula</li>
                    <li>Mètode __toString() -> Mostra la paraula amb les lletres descobertes i
                        amb _ per a les no descobertes</li>
                    <li>Mètode novaLletra($lletra) -> Guarda una lletra.
                        Si la lletra ja estava triada o no està en la paraula incrementa les errades</li>
                    <li>Mètode fiJoc() -> Mira si ha acabat.</li>
                </ul>
            </li>
            <li>Exercisi 2. inici.php i logout.php (1p)
                <ul>
                    <li>Inici: Arreplega el nom d'usuari i el guarda en la sessio</li>
                    <li>Inicialitza l'objecte ahorcado amb un paraula</li>
                    <li>Modifica la variable estàtica $max_errades dependent
                        del nivell (0-10 , 1-8 , 2-7, 3-6, 4-5)</li>
                    <li>Passa a la pàgina ofegat.php</li>
                    <li>logout: acaba el joc i torna a inici. Esborra totes les variables de sessió.</li>
                </ul>
            </li>
            <li>Exercisi 3. Ofegat.php (3p)
                <ul>
                    <li>Mostra la capçalera amb el nom de l'usuari</li> (0,25p)
                    <li>Pinta l'estat actual de l'ahorcado (__toString)</li> (0,25p)
                    <li>Formulari on es possa la lletra</li>
                    <li>Continua fins que acaba</li> (2p)
                    <li>Si es guanya es guarda en el fitxer de log el nom, paraula i errades</li> (0,5p)
                </ul>
            </li>
            <li>Exercisi 4. Scrapping (2p)
                <ul>
                    <li>Crear la classe Generador amb les següents propietats: String array $paraules</li>
                    <li>El constructor acceptarà un array de paraules,
                        si és null l'omplirà de paraules que agafarà des de
                        https://rodamots.cat/tema/regionalismes/paraules-i-expressions-valencianes/
                    </li>
                    <li>Només agafarà les que no tinguen espais</li>
                    <li>El mètode aleatori estrau una paraula aleatoriament de l'array</li>
                </ul>
            </li>
            <li>Exercisi 5. Continuat del joc
                <ul>
                    <li>Quan un jugador acaba un joc, se li dona l'oportunitat de continuar indefinidament</li>
                    <li>Es portarà un registre de les partides jugades, les guanyades i les perdudes</li>
                </ul>
            </li>
        </ol>
    </body>
</html>
