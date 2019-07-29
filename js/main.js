
    var doc = document;

    var menuIcon = doc.getElementById("menu-icon");
    var closeHidingMenuElement = doc.getElementById("close-hiding-menu");
    var hidingMenu = doc.getElementById("hiding-menu");

    var showMenu = function () {
        hidingMenu.style.display = "block";
    };

    var hideMenu = function () {
        hidingMenu.style.display = "none";
    };

    menuIcon.addEventListener('click', showMenu, false);
    closeHidingMenuElement.addEventListener('click', hideMenu, false);

    var navMenuIcon = doc.getElementById("nav-menu-icon");
    var navMenu = doc.getElementById("nav-menu");

    var showNavMenu = function () {
        navMenu.style.display = "block";
    };

    var hideNavMenu = function () {
        navMenu.style.display = "none";
    };

    var doNavMenu = function () {
        if (getComputedStyle(navMenu).display == "none") {
            showNavMenu();
        } else {
            hideNavMenu();
        }
    };

    navMenuIcon.addEventListener('click', doNavMenu, false);

