window.onload = function () {
    let doc = document;

    let menuIcon = doc.getElementById("menu-icon");
    let closeHidingMenuElement = doc.getElementById("close-hiding-menu");
    let hidingMenu = doc.getElementById("hiding-menu");

    let showMenu = function () {
        hidingMenu.style.display = "block";
    };

    let hideMenu = function () {
        hidingMenu.style.display = "none";
    };

    menuIcon.addEventListener('click', showMenu, false);
    closeHidingMenuElement.addEventListener('click', hideMenu, false);

    let navMenuIcon = doc.getElementById("nav-menu-icon");
    let navMenu = doc.getElementById("nav-menu");

    let showNavMenu = function () {
        navMenu.style.display = "block";
    };

    let hideNavMenu = function () {
        navMenu.style.display = "none";
    };

    let doNavMenu = function () {
        if (getComputedStyle(navMenu).display == "none") {
            showNavMenu();
        } else {
            hideNavMenu();
        }
    };

    navMenuIcon.addEventListener('click', doNavMenu, false);

    $("#searchIconOpen").click(function () {
        $("#searchBlock").removeClass("hide");
    });

    $('body').click(function (event) {
        let target = $(event.target);
        if (!$("#searchBlock").hasClass("hide")) {
            if (!target.is("#searchBlock div") && !target.is("#searchIconOpen") && !target.is("#searchBlockInput") && !target.is("#searchBlockForm")) {
                $("#searchBlock").addClass("hide");
            }
        }
    });

    function scrollToAnchor(aid){
        let id = "#" + aid;
        let aTag = $(id);
        $('html, body').animate({scrollTop: aTag.offset().top},'slow');
    }

    $("#anchor").click(function () {
        scrollToAnchor("headAnchor");
    });
}
