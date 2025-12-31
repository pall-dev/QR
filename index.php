<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STRONG!</title>
<style>
body {
    margin: 0;
    height: 100vh;
    background: black;
    display: flex;
    justify-content: center;
    align-items: center;
}
img {
    max-width: 100%;
}
</style>
</head>
<body onclick="playMusic()">

<img src="WhatsApp Image 2025-12-31 at 10.03.33.png">

<audio id="music" loop>
    <source src="ssstik.io_1767148862860.mp3" type="audio/mpeg">
</audio>

<script>
let played = false;
function playMusic() {
    if (!played) {
        document.getElementById("music").play();
        played = true;
    }
}
</script>

</body>
</html>
