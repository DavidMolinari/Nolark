
window.addEventListener("load", function() {

    window.document.querySelector("#btn_calculer").addEventListener("click", function() {

      const salaireFix = 1100.0;

      var S20Vendus = parseInt(window.document.querySelector("#S20").value);
      var XSpiritVendus = parseInt(window.document.querySelector("#XSpirit").value);
      var MultitecVendus = parseInt(window.document.querySelector("#Multitec").value);
      var ancienneteNbr = parseInt(window.document.querySelector("#anciennete").value);

      var total = salaireFix + comissionx5(XSpiritVendus) +
comissionS20(S20Vendus) + comissionMulti(MultitecVendus) + aciennete(ancienneteNbr, salaireFix);

alert("la remuneration totale est : " + total + "€");
}, false);


// Fonction Calcul de comission des casques X5, en parametres le nombre de casques vendus
function comissionx5(nb){
  if(nb<50) return 0;
  else {
    return 350.0*0.06*nb;
}}

// Fonction Calcul de comission des casques S20, en parametres le nombre de casques vendus
function comissionS20(nb){
  return nb*140.0*0.02;
}

// Fonction Calcul de comission des casques Multitec, en parametres le nombre de casques vendus
function comissionMulti(nb){
  if(nb <= 20) {
    return nb*180.0*0.04;}
  else if (nb <= 50)
  {
    return ((20 * 180.0*0.04) + ((nb - 20) * 180.00*0.06));
    }
  else
  { return (20*180.0*0.04) + (30*180.00*0.06) + ((nb - 50) * 180.0*0.1);
}
}
// Fonction Calcul de comission d'ancienneté  : Le nombre d'année et le salaire fixe en param
function aciennete(nbAnnee, salaireFix){
  if (nbAnnee <= 5)
  { return 0.0; }
  else if (nbAnnee > 5 && nbAnnee <= 10)
  { return salaireFix * 0.03;
    }
  else return salaireFix * 0.06;

}
}, false);
