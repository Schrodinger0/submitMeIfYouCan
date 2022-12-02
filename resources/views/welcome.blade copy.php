<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Submit me if you can !</title>
    <style>
        #particles-js {
            height: 100%;
            width: 100%;
            background: #262626;
        }
    </style>
</head>

<body>
    <div id="particles-js"></div>

    <div class="container" id="container">
        <div class="form-container sign-in-container">

            <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Submit me if you can !</h1>
                <div class="social-container">
                </div>
                <input type="text" name="name" placeholder="Nom" />
                <input type="email" name="email" placeholder="email" />
                <input type="number" name="age" placeholder="Age" />

                <select name="VIH1" id="VIH1">
                    <option value="">Quelle est la différence entre le VIH et le sida ?</option>
                    <option value="VIH1f1">Le VIH est la conséquence de la maladie du sida</option>
                    <option value="VIH1t">Le VIH est le virus responsable de la maladie du sida.</option>
                    <option value="VIH1f2">C’est la même chose.</option>

                </select>


                <select name="VIH2" id="VIH2">
                    <option value="">LQuelle est l'efficacité du préservatif masculin ?</option>
                    <option value="VIH2f1">20%</option>
                    <option value="VIH2f2">50% </option>
                    <option value="VIH2t">100%</option>

                </select>

                <select name="VIH3" id="VIH3">
                    <option value="">quels sont les modes de propagation du VIH ?</option>
                    <option value="VIH3t">voie sexuel </option>
                    <option value="VIH3f1">La salive, les baisers, les larmes</option>
                    <option value="VIH3f2">a sueur</option>

                </select>





                <select name="VIH4" id="VIH4">
                    <option value="">Lorsqu’on pense avoir pris un risque :
                    </option>
                    <option value="VIH4f1">On se lave immédiatement à l’eau très chaude pour éliminer le virus.</option>
                    <option value="VIH4f2">On attend des signes de la maladie avant d’aller voir son médecin.</option>
                    <option value="VIH4t">On se rend le plus rapidement possible dans un hôpital pour évaluer la
                        possibilité de prendre un traitement d’urgence.</option>

                </select>




                <select name="VIH5" id="VIH5">
                    <option value="">La meilleure façon de se protéger du VIH/sida c’est
                        quand :</option>
                    <option value="VIH5f1"> La partenaire prend une pilule contraceptive ou utilise un spermicide.
                    </option>
                    <option value="VIH5t">On utilise un préservatif masculin ou féminin.</option>
                    <option value="VIH5f2">On superpose deux préservatifs.
                    </option>

                </select>

                <div class="social-container">
                </div>
                <button>Submit me ! </button>
            </form>
        </div>

        <!-- caractere ta3na  -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <!--<h1>Caractere!</h1>-->
                    <div class="face">
                        <div class="eyes">
                            <div class="eye"></div>
                            <div class="eye"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script type="text/javascript" src="particles.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script>
        document.querySelector("body").addEventListener("mousemove",eyeMove);
    function eyeMove(){
        var eyes = document.querySelectorAll('.eye');

        eyes.forEach(function(eye){
            let x = (eye.getBoundingClientRect().left) + (eye.clientWidth/2);
            let y = (eye.getBoundingClientRect().top) + (eye.clientHeight/2);

            let rad = Math.atan2(event.pageX - x,event.pageY -y); 
            let rot = (rad * (180/Math.PI) * -1) + 270 ;
            eye.style.transform = "rotate("+rot+"deg)";
        });
    }
    </script>

</body>

</html>