<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Submit me if you can !</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
    <link rel="stylesheet" href="./style.css">
    <style>
        #particles-js {
            height: 100%;
            width: 100%;
            background: #262626;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 125%;
        }

        select {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 125%;
        }

        #submit-btn {
            position: relative;
            top: -20px;
            left: 70px;
            background-color: #FF416C;
            text-align: center;
            width: auto;
        }

    </style>
</head>
<body>
    <div id="particles-js"></div>

    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data" name="suForm" id="supform">
                @csrf
                <h2>Submit me if you can!</h2>
                <input type="text" placeholder="Nom" id="name" name="name" onclick="resetBtn()" onchange="imggg()" maxlength="30" />
                <input type="email" placeholder="Email" id="email" name="email" onclick="resetBtn()" onchange="imggg2()" maxlength="30" />
                <input type="number" placeholder="Age" id="age" name="age" onclick="resetBtn()" onchange="imggg3()" min="10" max="100" />

                <select name="VIH1" id="VIH1" onchange="imggg4()">
                    <option value="">Quelle est la différence entre le VIH et le sida ?</option>
                    <option value="VIH1f1">Le VIH est la conséquence de la maladie du sida</option>
                    <option value="VIH1t" style="color: green;">Le VIH est le virus responsable de la maladie du sida.</option>
                    <option value="VIH1f2">C’est la même chose.</option>
                </select>

                <select name="VIH2" id="VIH2" onchange="imggg5()">
                    <option value="">LQuelle est l'efficacité du préservatif masculin ?</option>
                    <option value="VIH2f1">20%</option>
                    <option value="VIH2f2">50% </option>
                    <option value="VIH2t" style="color: green;">100%</option>
                </select>

                <select name="VIH3" id="VIH3" onchange="imggg6()">
                    <option value="">quels sont les modes de propagation du VIH ?</option>
                    <option value="VIH3t" style="color: green;">voie sexuel </option>
                    <option value="VIH3f1">La salive, les baisers, les larmes</option>
                    <option value="VIH3f2">a sueur</option>
                </select>

                <select name="VIH4" id="VIH4" onchange="imggg7()">
                    <option value="">Lorsqu’on pense avoir pris un risque :</option>
                    <option value="VIH4f1">On se lave immédiatement à l’eau très chaude pour éliminer le virus.</option>
                    <option value="VIH4f2">On attend des signes de la maladie avant d’aller voir son médecin.</option>
                    <option value="VIH4t" style="color: green;">On se rend le plus rapidement possible dans un hôpital pour évaluer la possibilité de prendre un traitement d’urgence.</option>
                </select>

                <select name="VIH5" id="VIH5" onchange="imggg8()">
                    <option value="">La meilleure façon de se protéger du VIH/sida c’est quand :</option>
                    <option value="VIH5f1"> La partenaire prend une pilule contraceptive ou utilise un spermicide.</option>
                    <option value="VIH5t" style="color: green;">On utilise un préservatif masculin ou féminin.</option>
                    <option value="VIH5f2">On superpose deux préservatifs.</option>
                </select>

                <br>
                <button type="submit" id="submit-btn" onmouseover="mouseOver()">Submit me ! </button>
            </form>
        </div>

        <!-- caractere ta3na  -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <!--<h1>Caractere!</h1>-->
                    <div class="face" id="face">
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

    </script>
    <script>
        function imggg() {
            const name = document.forms['suForm']['name'].value;
            if (name != "") {
                document.getElementById('face').style.backgroundImage = "url('01.svg')";
            }
        }

        function imggg2() {
            const email = document.forms['suForm']['email'].value;
            const emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            if (email.match(emailCheck)) {
                document.getElementById('face').style.backgroundImage = "url('02.svg')";
            }
        }

        function imggg3() {
            const age = document.forms['suForm']['age'].value;
            if ((age != "") && (parseInt(age) > 0) && (parseInt(age) < 100)) {
                document.getElementById('face').style.backgroundImage = "url('03.svg')";
            }
        }

        function imggg4() {
            const select1 = document.forms['suForm']['VIH1'].value;
            if (select1 == "VIH1t") {
                document.getElementById('face').style.backgroundImage = "url('04.svg')";
            }
        }

        function imggg5() {
            const select2 = document.forms['suForm']['VIH2'].value;
            if (select2 == "VIH2t") {
                document.getElementById('face').style.backgroundImage = "url('1.svg')";
            }
        }

        function imggg6() {
            const select3 = document.forms['suForm']['VIH3'].value;
            if (select3 == "VIH3t") {
                document.getElementById('face').style.backgroundImage = "url('2.svg')";
            }
        }

        function imggg7() {
            const select4 = document.forms['suForm']['VIH4'].value;
            if (select4 == "VIH4t") {
                document.getElementById('face').style.backgroundImage = "url('4.svg')";
            }
        }

        function imggg8() {
            const select5 = document.forms['suForm']['VIH5'].value;
            if (select5 == "VIH5t") {
                document.getElementById('face').style.backgroundImage = "url('7.svg')";
            }
        }

        document.querySelector("body").addEventListener("mousemove", eyeMove);

        function eyeMove() {
            var eyes = document.querySelectorAll('.eye');

            eyes.forEach(function(eye) {
                let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
                let y = (eye.getBoundingClientRect().top) + (eye.clientHeight / 2);

                let rad = Math.atan2(event.pageX - x, event.pageY - y);
                let rot = (rad * (180 / Math.PI) * -1) + 270;
                eye.style.transform = "rotate(" + rot + "deg)";
            });
        }

        var a = 0;

        function myFunction() {
            alert("I am an alert box!");
        }

        function mouseOver() {


            const name = document.forms['suForm']['name'].value;
            const email = document.forms['suForm']['email'].value;
            const age = document.forms['suForm']['age'].value;
            const select1 = document.forms['suForm']['VIH1'].value;
            const select2 = document.forms['suForm']['VIH2'].value;
            const select3 = document.forms['suForm']['VIH3'].value;
            const select4 = document.forms['suForm']['VIH4'].value;
            const select5 = document.forms['suForm']['VIH5'].value;





            const emailCheck = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

            if ((name == "" || age == "" || select1 != "VIH1t" || select2 != "VIH2t" || select3 != "VIH3t" || select4 != "VIH4t" || select5 != "VIH5t" || parseInt(age) < 0 || parseInt(age) > 100 || !email.match(emailCheck)) && a == 0) {
                buttonMoveLeft();
                a = 1;


                if (name == "") {
                    const name2 = document.getElementById('name');
                    name2.style.border = '0.5px solid red';
                } else {
                    const name2 = document.getElementById('name');
                    name2.style.border = '';
                }
                if (!email.match(emailCheck)) {
                    const email2 = document.getElementById('email');
                    email2.style.border = '0.5px solid red';
                } else {
                    const email2 = document.getElementById('email');
                    email2.style.border = '';
                }
                if ((age == "") || (parseInt(age) < 0) || (parseInt(age) > 100)) {
                    const age2 = document.getElementById('age');
                    age2.style.border = '0.5px solid red';
                } else {
                    const age2 = document.getElementById('age');
                    age2.style.border = '';
                }
                return false;
            }

            if ((name == "" || age == "" || select1 != "VIH1t" || select2 != "VIH2t" || select3 != "VIH3t" || select4 != "VIH4t" || select5 != "VIH5t" || parseInt(age) < 0 || parseInt(age) > 100 || !email.match(emailCheck)) && a == 1) {
                buttonMoveRight();
                a = 2;
                if (name == "") {
                    const name2 = document.getElementById('name');
                    name2.style.border = '0.5px solid red';
                } else {
                    const name2 = document.getElementById('name');
                    name2.style.border = '';
                }
                if (!email.match(emailCheck)) {
                    const email2 = document.getElementById('email');
                    email2.style.border = '0.5px solid red';
                } else {
                    const email2 = document.getElementById('email');
                    email2.style.border = '';
                }
                if ((age == "") || (parseInt(age) < 0) || (parseInt(age) > 100)) {
                    const age2 = document.getElementById('age');
                    age2.style.border = '0.5px solid red';
                } else {
                    const age2 = document.getElementById('age');
                    age2.style.border = '';
                }
                return false;
            }

            if ((name == "" || age == "" || select1 != "VIH1t" || select2 != "VIH2t" || select3 != "VIH3t" || select4 != "VIH4t" || select5 != "VIH5t" || parseInt(age) < 0 || parseInt(age) > 100 || !email.match(emailCheck)) && a == 2) {
                buttonMoveLeft();
                if (name == "") {
                    const name2 = document.getElementById('name');
                    name2.style.border = '0.5px solid red';
                } else {
                    const name2 = document.getElementById('name');
                    name2.style.border = '';
                }
                if (!email.match(emailCheck)) {
                    const email2 = document.getElementById('email');
                    email2.style.border = '0.5px solid red';
                } else {
                    const email2 = document.getElementById('email');
                    email2.style.border = '';
                }
                if ((age == "") || (parseInt(age) < 0) || (parseInt(age) > 100)) {
                    const age2 = document.getElementById('age');
                    age2.style.border = '0.5px solid red';
                } else {
                    const age2 = document.getElementById('age');
                    age2.style.border = '';
                }
                a = 1;
                return false;
            } else {

                // document.getElementById('submit-btn').click();  
                document.getElementById('submit-btn').style.cursor = 'pointer';
                return false;
            };

        };




        function buttonMoveLeft() {

            const button = document.getElementById('submit-btn');
            button.style.transform = 'translateX(-160%)';

        };


        function buttonMoveRight() {

            const button = document.getElementById('submit-btn');
            button.style.transform = 'translateX(0%)';

        };


        function resetBtn() {
            const button = document.getElementById('submit-btn');
            button.style.transform = 'translateX(0%)';
        };

    </script>

</body>
</html>
