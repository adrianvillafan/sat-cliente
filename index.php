
<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Encuesta</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body className='snippet-body'>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center align-items-center">

            <div class="col-md-6">

                <form id="regForm" action="feed.php" method="post">
                    <div style="margin: 0 auto; display: flex;justify-content: center;">
                        <img src="https://freskos.com.pe/wp-content/uploads/2019/01/logo-freskos-1-1-172x55.png" height="50%">
                    </div>

                    <div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span> </div>

                    <!-- Primera pregunta -->
                    <div class="tab">
                        <label class="container" style="text-align: center;">

                            <p>Tu opinión es muy importante para ayudarnos a mejorar</p>

                            <div style="margin-top:20px;width:100%;justify-content: center">
                                <table width="100%" border="0" cellpadding="0" cellspacing="0" id="tablaDatosIniciales" style="max-width:360px;display:inline-block;font-size:18px;margin-bottom:10px">
                                    <tbody>
                                        <tr>
                                            <td align="left" colspan="2" style="position:relative;padding-top:5px;width:360px">
                                                <select name="mozo" id="qumozoteatendi" tabindex="1" style="width:98%" class="form-control">
                                                    <option value="">¿Qué mozo te atendió?</option>
                                                    <option value="Albert Cortez">Albert Cortez</option>
                                                    <option value="Arelis Bohorquez">Arelis Bohorquez</option>
                                                    <option value="David Pachas">David Pachas</option>
                                                    <option value="José Mercado">José Mercado</option>
                                                    <option value="Mayra Contreras">Mayra Contreras</option>
                                                    <option value="Richard Medina">Richard Medina</option>
                                                    <option value="Steven Mariñas">Steven Mariñas</option>
                                                </select>
                                                <span class="tooltip"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div style="text-align:right;margin-right:15px">
                                    <button type="button" class="btnComenzar" onclick="nextPrev(1)">
                                        Comenzar
                                    </button>
                                </div>


                            </div>
                        </label>

                    </div>

                    <!- Segunda pregunta ->

                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>¿Qué tan satisfecho se encuentra con la atención de su mesero/a?</p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <div>
                                        <input id="badface1" type="radio" name="p1" value="bad" />
                                        <label for="badface1">
                                            <img class="btnComentario5 carita1" id="bad1" src="img/molesto.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%; ">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="norface1" type="radio" name="p1" value="normal" />
                                        <label for="norface1">
                                            <img class="btnComentario5 carita1" id="reg1" src="img/normal.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="hapface1" type="radio" name="p1" value="good" />
                                        <label for="hapface1">
                                            <img class="btnComentario5 carita1" id="good1" src="img/feliz.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>

                                    </div>
                                </div>
                            </label>


                        </div>

                        <!-- Tercera pregunta -->
                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>¿Qué tan satisfecho se encuentra con el tiempo en el que estuvo lista su comida?</p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <div>
                                        <input id="badface2" type="radio" name="p2" value="bad" />
                                        <label for="badface2">
                                            <img class="btnComentario5 carita1" id="bad1" src="img/molesto.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%; ">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="norface2" type="radio" name="p2" value="normal" />
                                        <label for="norface2">
                                            <img class="btnComentario5 carita1" id="reg1" src="img/normal.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="hapface2" type="radio" name="p2" value="good" />
                                        <label for="hapface2">
                                            <img class="btnComentario5 carita1" id="good1" src="img/feliz.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>

                                    </div>
                                </div>
                            </label>


                        </div>

                        <!-- Cuarta pregunta -->
                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>¿Qué tan satisfecho se encuentra con el sabor de su comida?</p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <div>
                                        <input id="badface3" type="radio" name="p3" value="bad" />
                                        <label for="badface3">
                                            <img class="btnComentario5 carita1" id="bad1" src="img/molesto.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%; ">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="norface3" type="radio" name="p3" value="normal" />
                                        <label for="norface3">
                                            <img class="btnComentario5 carita1" id="reg1" src="img/normal.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="hapface3" type="radio" name="p3" value="good" />
                                        <label for="hapface3">
                                            <img class="btnComentario5 carita1" id="good1" src="img/feliz.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>

                                    </div>
                                </div>
                            </label>


                        </div>

                        <!-- Quinta pregunta -->
                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>¿Qué tan satisfecho se encuentra con la variedad de platos de la carta?</p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <div>
                                        <input id="badface4" type="radio" name="p4" value="bad" />
                                        <label for="badface4">
                                            <img class="btnComentario5 carita1" id="bad1" src="img/molesto.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%; ">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="norface4" type="radio" name="p4" value="normal" />
                                        <label for="norface4">
                                            <img class="btnComentario5 carita1" id="reg1" src="img/normal.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="hapface4" type="radio" name="p4" value="good" />
                                        <label for="hapface4">
                                            <img class="btnComentario5 carita1" id="good1" src="img/feliz.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>

                                    </div>
                                </div>
                            </label>


                        </div>

                        <!-- Sexta pregunta -->
                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>¿Qué tan satisfecho se encuentra con el ambiente de nuestro establecimiento?
                                </p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <div>
                                        <input id="badface5" type="radio" name="p5" value="bad" />
                                        <label for="badface5">
                                            <img class="btnComentario5 carita1" id="bad1" src="img/molesto.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%; ">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="norface5" type="radio" name="p5" value="normal" />
                                        <label for="norface5">
                                            <img class="btnComentario5 carita1" id="reg1" src="img/normal.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>
                                    </div>

                                    <div>
                                        <input id="hapface5" type="radio" name="p5" value="good" />
                                        <label for="hapface5">
                                            <img class="btnComentario5 carita1" id="good1" src="img/feliz.png" onclick="nextPrev(1)" border="0" style="margin:8px; width: 100%;">
                                        </label>

                                    </div>
                                </div>
                            </label>


                        </div>
                        <!-- Rate pregunta -->
                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>En una escala de 0 a 10, ¿Con qué probabilidad recomendarías Freskos a tus familiares y amigos?</p>

                                <?php include 'ratenum.php'; ?>

                            </label>


                        </div>

                        <!-- Textbox pregunta -->

                        <div class="tab">

                            <label class="container" style="text-align: center;">

                                <p>Por favor cuéntanos, ¿Qué deberíamos hacer para mejorar?</p>

                                <div style="display:flex;margin-top:20px;width:100%;justify-content: center">

                                    <textarea name="feedback" class="form-control" rows="3" form="regForm"></textarea>

                                </div>
                                <br>
                                <div style="text-align:right;margin-right:15px">
                                    <button type="button" onclick="nextPrev(1)" class="btnComenzar">
                                        Continuar
                                    </button>
                                </div>

                            </label>

                        </div>

                        <!-- Textbox pregunta -->

                        <div class="tab">

                            <label class="container" style="text-align: center; margin: 40px auto;">

                                <p>¡Antes de terminar! Déjanos tus datos:</p>
                                <br>

                                <table width="100%" border="0" id="tablaDatos" style="max-width:360px;display:inline-block;font-size:18px;margin-bottom:10px">
                                    <tbody>
                                        <tr>
                                            <td align="left" colspan="2" style="position:relative;padding-top:5px;width:360px">
                                            <input type="text" name="nombre" style="width:46%; display:inline-block" onkeypress="len(45,this)" onkeyup="len(45,this)" placeholder="Nombre" tabindex="1" class="form-control " required><span class="tooltip"></span>
                                            <input type="text" name="apellido" class="form-control " style="margin-left:6%;width:46%; display:inline-block" onkeypress="len(45,this)" onkeyup="len(45,this)" placeholder="Apellido" tabindex="2" required>
                                            <span class="tooltip"></span></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="position:relative;padding-top:5px;width:360px">
                                            <input type="email" name="email" class="form-control " style="width:46%; display:inline-block" onkeypress="if (saltoCorreo(event)) return false; len(40,this);" onkeyup="len(40,this)" placeholder="E-mail" tabindex="3" required>
                                            <input type="tel" name="telefono" class="form-control " pattern="[0-9]{9}" placeholder="Número celular" style="margin-left:6%;width:46%; display:inline-block" onkeypress="len(45,this)" onkeyup="len(45,this)" tabindex="4" style="width:98%" required>
                                            <span style="width:8%;text-align:center;display:inline-block"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2" style="position:relative;padding-top:5px;width:360px">
                                            <span class="tooltip"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <br>
                                <div style="text-align:right;margin-right:15px">
                                    <button type="submit" class="btnComenzar">
                                          Enviar  
                                    </button>
                                </div>

                            </label>

                        </div>

                </form>
            </div>
        </div>
    </div>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript' src='#'></script>
    <script type='text/javascript'>
        //your javascript goes here
        var currentTab = 0;
        document.addEventListener("DOMContentLoaded", function(event) {


            showTab(currentTab);

        });


        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            var x = document.getElementsByClassName("tab");
            if (n == 1 && !validateForm()) return false;
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            if (currentTab >= x.length) {
                // document.getElementById("regForm").submit();
                // return false;
                //alert("sdf");
                document.getElementById("nextprevious").style.display = "none";
                document.getElementById("all-steps").style.display = "none";
                document.getElementById("register").style.display = "none";
                document.getElementById("register").style.display = "none";
                document.getElementById("text-message").style.display = "block";




            }
            showTab(currentTab);
        }

        function validateForm() {
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            for (i = 0; i < y.length; i++) {
                if (y[i].value == "") {
                    y[i].className += " invalid";
                    valid = false;
                }
            }
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
    <script type='text/javascript'>
        var myLink = document.querySelector('a[href="#"]');
        myLink.addEventListener('click', function(e) {
            e.preventDefault();
        });
    </script>

</body>

</html>