
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Submit me if you can !</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
<link rel="stylesheet" href="./style.css">
<style>
    #particles-js {
        height: 100%;
        width: 100%;
        background: #262626 ;
    }
</style>
</head>
<body>
<div id="particles-js"></div>

<div class="container" id="container">
<div class="form-container sign-in-container">
<form action="#">
<h1>Submit me if you can !</h1>
<div class="social-container">
</div>
<input type="text" placeholder="First Name" />
<input type="text" placeholder="Last Name" />
<input type="email" placeholder="Email" />
<input type="password" placeholder="Password" />
<div class="social-container">
</div>
<button>Submet me ! </button>
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
