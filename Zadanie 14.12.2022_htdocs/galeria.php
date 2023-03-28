<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl7.css">
</head>
<body>
    
    <div id="baner">
        <h2>Galeria miejsc ciekawych</h2>
    </div>

    <div id="glowny">
        <span id="zdjecieglowny"><img src="lanzarotte.jpg" alt="galeria"></span>
    </div>

    <div id="lewy">
        <h3>Przeglądaj zdjęcia</h3>
        <img id="lanzarotte" src="lanzarotte.jpg" alt="lanzarotte">
        <img id="pekin" src="pekin.jpg" alt="pekin">
        <img id="serengeti" src="serengeti.jpg" alt="serengeti">
        <img id="wenecja" src="wenecja.jpg" alt="wenecja">
        <img id="tajlandia" src="tajlandia.jpg" alt="tajlandia">
    </div>

    <div id="prawy">

            <p>Polub nas</p>
                <form method="POST" action="dodawanie.php">
                    <span id="wybor"><input type="text" name="zdjecie" value="lanzarotte"></span>
                <button type="submit">
                    
                <span id="serce"><img src="icon-off.png" onClick="iconon()"></span></button>
                </form>



            <span id="polubienia"></span>


            <a href="https://pixabay.com" target="_BLANK">Odkryj więcej zdjęć</a>
    </div>

    <div id="stopka">
        Autor: 123671235
    </div>

<script>

        document.getElementById("lanzarotte").onclick = zmianalanzarotte;
        document.getElementById("pekin").onclick = zmianapekin;
        document.getElementById("serengeti").onclick = zmianaserengeti;
        document.getElementById("wenecja").onclick = zmianawenecja;
        document.getElementById("tajlandia").onclick = zmianatajlandia;

    function zmianalanzarotte(){
        document.getElementById("zdjecieglowny").innerHTML = '<img src="lanzarotte.jpg" alt="galeria">';
        document.getElementById("polubienia").innerHTML = "Polubienia dla Lanzarotte: ";
        document.getElementById("wybor").innerHTML = '<input type="text" name="zdjecie" value="lanzarotte">';
    }
    function zmianapekin(){
        document.getElementById("zdjecieglowny").innerHTML = '<img src="pekin.jpg" alt="galeria">';
        document.getElementById("polubienia").innerHTML = "Polubienia dla Pekin: ";
        document.getElementById("wybor").innerHTML = '<input type="text" name="zdjecie" value="pekin">';
    }
    function zmianaserengeti(){
        document.getElementById("zdjecieglowny").innerHTML = '<img src="serengeti.jpg" alt="galeria">';
        document.getElementById("polubienia").innerHTML = "Polubienia dla Serengeti: ";
    }
    function zmianawenecja(){
        document.getElementById("zdjecieglowny").innerHTML = '<img src="wenecja.jpg" alt="galeria">';
        document.getElementById("polubienia").innerHTML = "Polubienia dla Wenecja: ";
    }
    function zmianatajlandia(){
        document.getElementById("zdjecieglowny").innerHTML = '<img src="tajlandia.jpg" alt="galeria">';
        document.getElementById("polubienia").innerHTML = "Polubienia dla Tajlandia: ";
    }

	function iconon(){
	document.getElementById("serce").innerHTML = '<img onClick="iconoff()" src="icon-on.png">';
    }

	function iconoff(){
	document.getElementById("serce").innerHTML = '<img onClick="iconon()" src="icon-off.png">';
	}

</script>





</body>
</html>