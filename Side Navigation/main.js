function getID(id) {
    document.getElementById(id);
}

function openNav() {
    getID("mySidenav").style.width = "250px";
    getID("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    getID("mySidenav").style.width = "0";
    getID("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
}