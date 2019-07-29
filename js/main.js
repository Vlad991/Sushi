
    var doc = document;

    var menuIcon = doc.getElementById("menu-icon");
    var closeHidingMenuElement = doc.getElementById("close-hiding-menu");
    var hidingMenu = doc.getElementById("hiding-menu");

    var showMenu = function () {
        hidingMenu.style.display = "block";
        console.log("show");
    };

    var hideMenu = function () {
        hidingMenu.style.display = "none";
        console.log("hide");
    };

    menuIcon.addEventListener('click', showMenu, false);
    closeHidingMenuElement.addEventListener('click', hideMenu, false);



