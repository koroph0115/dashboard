$(function () {
    /** Declaration des variables */
    const btnToggle = $("#btn-toggle"),
        appContainer = $("#app-container"),
        sideBar = $("#side-bar"),
        btnIcon = $("#btn-icon"),
        queryString="(max-width: 768px)",
        sideClass="sidebarhide",
        containerClass="sidebarextend",
        /**
         * @var icon1 {String}
         */
        icon1 = "icon-list2",
        /**
         * @var icon2 {String}
         */
        icon2 = "icon-arrow-right2";
    /** fin declaration  */
    /**
     * @description event click on btn-toggle
     * @var e {event}
     */
    btnToggle.click(function (e) {
        sideBar.toggleClass(sideClass);
        appContainer.toggleClass(containerClass);
        if (btnIcon.attr('class') === icon1) btnIcon.toggleClass(icon2).removeClass(icon1);
        else btnIcon.toggleClass(icon1).removeClass(icon2);
    });

    const query = window.matchMedia(queryString);
    query.addListener(function (e) {
        if (e.matches) {
            btnIcon.addClass(icon2).removeClass(icon1);
            sideBar.addClass(sideClass);
            appContainer.addClass(containerClass);

        } else {
            btnIcon.addClass(icon1).removeClass(icon2);
            sideBar.removeClass(sideClass);
            appContainer.removeClass(containerClass);
        }
    });


});

