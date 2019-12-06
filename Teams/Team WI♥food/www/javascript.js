function meinefavoriten() {
    if (confirm("Melde dich an um deine Favoriten zu sehen!")) {
        window.location = "login.php"
    }
}

function eigeneRezepte() {
    if (confirm("Melde dich an um deine eigenen Rezepte hochladen zu können!")) {
        window.location = "login.php"
    }
}

function wochenplan() {
    if (confirm("Melde dich an um Rezepte zum Wochenplan hinzufügen zu können!")) {
        window.location = "login.php"
    }
}

function toBeAddedSoon() {
    alert("Diese Funktion wird in einem zukünftigen Update hinzugefügt!")

}

function addYourself() {
    if (confirm("Füge doch dein Lieblingsrezept selber hinzu!")) {
        window.location = "rezeptanlegen.php"
    }
}