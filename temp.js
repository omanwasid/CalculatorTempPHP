function fromCelcius(celcius) {

  celcius = parseFloat(celcius);
  document.getElementById("fahrenheit").value = (celcius * (9 / 5)) + 32;
  document.getElementById("kelvin").value = celcius + 273.15;
}

function fromFahrenheit(fahrenhite) {
  fahrenhite = parseFloat(fahrenhite);
  // document.getElementById("celcius").value = (fahrenhite * 1.8)+32;
  document.getElementById("celcius").value = (fahrenhite - 32) * 5 / 9;
  document.getElementById("kelvin").value = (fahrenhite - 32) * 5 / 9 + 273.15;
}

function fromKelvin(kelvin) {
  kelvin = parseFloat(kelvin);
  document.getElementById("celcius").value = kelvin - 273.15;
  document.getElementById("fahrenheit").value = (kelvin - 273.15) * 9 / 5 + 32;
}

