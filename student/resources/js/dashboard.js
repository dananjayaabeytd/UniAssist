
//file loader and navbar acviate functionality 
$(document).ready(function () {
    // Handle navigation click event
    $(".side-navbar ul li a").click(function (e) {
        e.preventDefault();
        $(".side-navbar ul li a").removeClass("active");
        $(this).addClass("active");
        var url = $(this).attr("href");
        $(".content").load(url);
        // page title setup
        var filterWord = url.split('/').pop().split('.').shift();
        document.title = filterWord;
    });
    // Load initial content
    $(".side-navbar ul li a:first").click();
});


//responsive navbar
function toggleSidebar() {
    var sidebar = document.querySelector('.side-navbar');
    if (sidebar.style.right == 0 + 'px') {
        sidebar.style.right = -320 + 'px';
    } else {
        sidebar.style.right = 0 + 'px';
    }
}


