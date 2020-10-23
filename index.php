<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="temp.css">
    <script src="jquery-3.5.1.js"></script>
    <script src="temp.js"></script>

    <title>Temperature-Converter</title>
</head>

<body>
    <div id="kea">
        <div id="form">
            <header>
                <h1><b>Temperature-Converter</b></h1>
            </header>
        </div>
        <div id="fieldset">
            <fieldset ALIGN="center">
            <?php 
             global $celcius,$fahrenheit,$kelvin;

             //print_r($_REQUEST);
            if(isset($_REQUEST['docaltemp'])){
               
           

                if(isset($_REQUEST['celcius']) && !empty($_REQUEST['celcius'])){
                    $celcius=$_REQUEST['celcius'];
                    fromCelcius($celcius);
                }else if(isset($_REQUEST['fahrenheit']) && !empty($_REQUEST['fahrenheit'])){
                    $fahrenheit=$_REQUEST['fahrenheit'];
                    fromFahrenheit($fahrenheit);
                }else if(isset($_REQUEST['kelvin']) && !empty($_REQUEST['kelvin'])){
                    $kelvin=$_REQUEST['kelvin'];
                    fromKelvin($kelvin);
                }

               
            }

            function fromCelcius($celcius1) {

                global $celcius,$kelvin,$fahrenheit;
                 $celcius= floatval($celcius1);

                 $fahrenheit= ($celcius * (9 / 5)) + 32;

                
                  $kelvin = $celcius + 273.15;
              }
              
              function fromFahrenheit($fahrenheit1) {
                global $celcius,$kelvin,$fahrenheit;

                 $fahrenheit = floatval($fahrenheit1);
                // document.getElementById("celcius").value = (fahrenhite * 1.8)+32;
                  $celcius = ($fahrenheit - 32) * 5 / 9;
                 $kelvin= ($fahrenheit - 32) * 5 / 9 + 273.15;
              }
              
              function fromKelvin($kelvin1) {
                global $celcius,$kelvin,$fahrenheit;
                 $kelvin = floatval($kelvin1);
                 $celcius= $kelvin - 273.15;
                 $fahrenheit= ($kelvin - 273.15) * 9 / 5 + 32;
              }
                   
          
            ?>
                <form name="Tamp-calculator" action='index.php' method='post'> 
                    <label for="celcius">Celcius Conver To-From:</label><br><br>
                    <input type="number" id="celcius" placeholder="Celcius" name="celcius"
                    value='<?php echo $celcius ?>'><br><br>

                    <label for="fahrenheit">Fahrenheit Convert To-From:</label><br><br>
                    <input type="number" id="fahrenheit" placeholder="Fahrenheit" name="fahrenheit"
                    value='<?php echo $fahrenheit ?>'><br><br>

                    <label for="kelvin">Kelvin Convert To-From:</label><br><br>
                    <input type="number" placeholder="Kelvin" id="kelvin" name="kelvin"
                        value='<?php echo $kelvin?>'><br><br>


                    <button type="submit" name='docaltemp'>Calculate</button><br><br>
                   
                </form>

            </fieldset>
        </div>
    </div>

</body>
    <div id ="footer">
    <footer text align = "center">&#169;Muhammad Al Mahmud Wasid</footer>
    </div>
</html>