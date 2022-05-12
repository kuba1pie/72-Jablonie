document
  .getElementById("numerKsiegiWieczystej")
  .addEventListener("change", ekw);

function ekw() {
  let string = document.getElementById("numerKsiegiWieczystej").value;
  let array, suma, kontrolna, schowek;

  array = string.substr(3, 5);
  schowek = Number(string) + 1;
  suma =
    array.charAt(0) * 3 +
    array.charAt(1) * 7 +
    array.charAt(2) * 1 +
    array.charAt(3) * 3 +
    array.charAt(4) * 7 +
    132;
  kontrolna = suma % 10;
  document.getElementById("kodWydzialu").value = "PL1Z";
  document.getElementById("cyfraKontrolna").value = kontrolna;
  document.getElementById("kryteriaWKW").submit();
}