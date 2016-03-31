
window.addEventListener("load", function () {
    
    const salaireFix = 1100.0;
    
    const ancien1 = 5;
    const ancien2 = 10
    
    const nbVenteX5 = 50;
    const nbVenteMulti20 = 20;
    const nbVenteMulti50= 50;
    const nbVenteMulti51 = 51;
    
    const commX5 = 0.06;
    const commS20 = 0.02;
    const commMulti20 = 0.04;
    const commMult50 = 0.06;
    const commMulti51 = 0.1;
    
    
    const prixX5 = 350.0;
    const prixS20 = 140.0;
    const prixMulti = 180.0;

    var cellules = document.querySelectorAll(".simulationForm");


    for (var i = 0; i < cellules.length; i++) {
        cellules[i].addEventListener("keyup", function () {

            var S20Vendus = parseInt(window.document.querySelector("#S20").value);
            var XSpiritVendus = parseInt(window.document.querySelector("#XSpirit").value);
            var MultitecVendus = parseInt(window.document.querySelector("#Multitec").value);
            var ancienneteNbr = parseInt(window.document.querySelector("#anciennete").value);

            var total = salaireFix + comissionx5(XSpiritVendus) +
                    comissionS20(S20Vendus) + comissionMulti(MultitecVendus) + aciennete(ancienneteNbr, salaireFix);

            console.log(total);
            document.getElementById("result_total").value = total;

        }, false);
    }


// Fonction Calcul de comission des casques X5, en parametres le nombre de casques vendus
    function comissionx5(nb) {
        if (nb < nbVenteX5)
            return 0;
        else {
            return prixX5 * commX5 * nb;
        }
    }

// Fonction Calcul de comission des casques S20, en parametres le nombre de casques vendus
    function comissionS20(nb) {
        return nb * prixS20 * commS20;
    }

// Fonction Calcul de comission des casques Multitec, en parametres le nombre de casques vendus
    function comissionMulti(nb) {
        if (nb <= nbVenteMulti20) {
            return nb * prixMulti * commMulti20;
        }
        else if (nb <= nbVenteMulti50)
        {
            return ((nbVenteMulti20 * prixMulti * commMulti20) + ((nb - nbVenteMulti20) * prixMulti * commMult50));
        }
        else
        {
            return (nbVenteMulti20 * prixMulti * commMulti20) + ((commMult50-nbVenteMulti20) * prixMulti * commMult50) + ((nb - nbVenteMulti50) * prixMulti * commMulti51);
        }
    }
// Fonction Calcul de comission d'ancienneté  : Le nombre d'année et le salaire fixe en param
    function aciennete(nbAnnee, salaireFix) {
        if (nbAnnee <= ancien1)
        {
            return 0.0;
        }
        else if (nbAnnee > ancien1 && nbAnnee <= ancien2)
        {
            return salaireFix * 0.03;
        }
        else
            return salaireFix * 0.06;

    }
}, false);
