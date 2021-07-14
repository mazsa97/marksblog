/**
 * = SCRIPT.JS
 *
 * THE SCRIPT FILE FOR THE WHOLE WEBSITE.
 *
 * ------------------------------------------------------------------------- */

/**
 * FUNCTION FOR ADMIN POST LIST SEARCH BAR.
 * ------------------------------------------------------------------------- */
function listPosts() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search-bar");
    filter = input.value.toUpperCase();
    table = document.getElementById("post-table");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }

    if ($('tr:visible').length <= 1) {
        $('#search-result-tr').css("display", "block");
    } else {
        $('#search-result-tr').css("display", "none");
    }
}



/**
 * FUNCTION FOR OPENING THE WEBSITE MENU.
 * ------------------------------------------------------------------------- */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    $(".sidenav-social-icons").fadeIn(1250);
}

/**
 * FUNCTION FOR CLOSING THE WEBSITE MENU.
 * ------------------------------------------------------------------------- */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    $(".sidenav-social-icons").hide();
}

/**
 * FUNCTION FOR CLOSING THE WEBSITE MENU, IF THE USER SCROLLED DOWN.
 * ------------------------------------------------------------------------- */
$(function() {
    var scrollTop = 0,
        diff = 5;
    $(window).scroll(function() {
        var currentScroll = $(this).scrollTop();
        if (Math.abs(scrollTop - currentScroll) >= diff) {
            if (currentScroll > scrollTop) {
                document.getElementById("mySidenav").style.width = "0";
            }
        }
    });
});

/**
 * FUNCTION FOR THE TOP OF THE PAGE BUTTON.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $(".top-of-page-button").click(function() {
        window.scrollTo(0, 0);
    });
});

/**
 * FUNCTION FOR OPENING THE WEBSITE MENU VISIBILITY.
 * ------------------------------------------------------------------------- */
$(window).scroll(function() {
    if ($(this).scrollTop() > 25) { // 25px from top
        $(".top-of-page-button").css("opacity", "1");
        $(".top-of-page-button").css('cursor', 'pointer');
    } else {
        $(".top-of-page-button").css("opacity", "0");
        $(".top-of-page-button").css('cursor', 'context-menu');
    }
});

/**
 * FUNCTION FOR PRINTING OUT THE CURRENT YEAR.
 * ------------------------------------------------------------------------- */
function print_currentYear() {
    document.write(new Date().getFullYear());
}

/**
 * FUNCTION FOR THE FACEBOOK SHARE BUTTON.
 * ------------------------------------------------------------------------- */
function facebookShare() {
    window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(window.location.href) + "&t=" + document.title, '',
        'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
    return false;
}

/**
 * FUNCTION FOR THE TWITTER SHARE BUTTON.
 * ------------------------------------------------------------------------- */
window.onload = function() {
    let t1 = "https://twitter.com/intent/tweet?url=";
    let t2 = window.location.href.toString();
    document.getElementById("twitter-share").href = t1.concat(t2);
}

/**
 * FUNCTION FOR THE ANIMATED FORM LABELS.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    var formFields = $('.form-field');

    formFields.each(function() {
        var field = $(this);
        var input = field.find('input');
        var label = field.find('label');

        function checkInput() {
            var valueLength = input.val().length;

            if (valueLength > 0) {
                label.addClass('freeze')
            } else {
                label.removeClass('freeze')
            }
        }

        input.change(function() {
            checkInput()
        })
    });
});



/**
 * FUNCTION FOR COUNTING HOW MANY MINUTE READ IS A POST.
 * ------------------------------------------------------------------------- */
$(function() {
    var txt = $(".post-full-content")[0].textContent;

    wordCount = txt.replace(/[^\w ]/g, "").split(/\s+/).length;

    var readingTimeInMinutes = Math.floor(wordCount / 228) + 1;
    var readingTimeAsString = readingTimeInMinutes + " minute read.";

    $('article .reading-time').html(readingTimeAsString);
});


/**
 * FUNCTION FOR THE REMAINING CHARACTER COUNTER.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $('#intro_txt').on('input', function() {
        var max = 250;
        var len = $(this).val().length;
        if (len >= max) {
            $('#char-left-intro').show();
            $('#char-left-intro').text('Limit reached!');
        } else {
            var char = max - len;
            $('#char-left-intro').show();
            $('#char-left-intro').text(char);
        }
        if (len < 1) {
            $('#char-left-intro').hide();
        }
    })
});

/**
 * FUNCTION FOR THE REMAINING CHARACTER COUNTER.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $('#label_txt').on('input', function() {
        var max = 120;
        var len = $(this).val().length;
        if (len >= max) {
            $('#char-left-label').show();
            $('#char-left-label').text('Limit reached!');
        } else {
            var char = max - len;
            $('#char-left-label').show();
            $('#char-left-label').text(char);
        }
        if (len < 1) {
            $('#char-left-label').hide();
        }
    })
});

/**
 * FUNCTION FOR THE REMAINING CHARACTER COUNTER.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $("#post-textarea").on('input', function() {
        var max = 120;
        var len = $(this).val().length;
        if (len >= max) {
            $('#char-left-main').show();
            $('#char-left-main').text('Limit reached!');
        } else {
            var char = max - len;
            $('#char-left-main').show();
            $('#char-left-main').text(char);
        }
        if (len < 1) {
            $('#char-left-main').hide();
        }
    })
});


/**
 * FUNCTION FOR THE PAGE PAGINATION.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    if ($(".index-pagination li").length > 3) {
        $(".index-pagination li").css("display", "inline-block");
        $(".index-pagination").css("background-color", "#333");
        $(".index-pagination").css("border-bottom", "2px solid rgba(95, 92, 53, 0.5)");
        $(".current-page").css("display", "block");
    } else {
        $(".index-pagination li").css("display", "none");
        $(".index-pagination").css("background-color", "transparent");
        $(".index-pagination").css("border-bottom", "none");
        $(".current-page").css("display", "none");
    }
});

/**
 * FUNCTION FOR POST SEARCHING.
 * ------------------------------------------------------------------------- */
$(document).ready(function(e) {
    $("#search").keyup(function() {
        $("#search-results").show();
        var x = $(this).val();
        $.ajax({
            type: 'GET',
            url: 'util/post-search.php',
            data: 'q=' + x,
            success: function(data) {
                $("#search-results").html(data);
            },
        });
    });
});

$(function() {
    $('body').on('keydown', '#search', function(e) {
        if (e.which === 32 && e.target.selectionStart === 0) {
            return false;
        }
    });
});

$(function() {
    $('body').on('keydown', '#search-bar', function(e) {
        if (e.which === 32 && e.target.selectionStart === 0) {
            return false;
        }
    });
});

/**
 * FUNCTION FOR THE SEARCH BAR BUTTONS.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {

    $("#search-icon").click(function() {
        $("#search").focus();
    });

    $('#search').focus(function() {
        $('#search-icon').fadeOut(500);
    }).focusout(function() {
        $('#search-icon').fadeIn(100);
    });

    $('#search').focusout(function() {
        if ($("#search").val().length !== 0) {
            $("#search").focus();
            $('#search-clear-button').fadeIn(500);
            $('#search-icon').hide();
        }
    });

    $('#search').focus(function() {
        $('#search-clear-button').fadeIn(500);
    }).focusout(function() {
        $('#search-clear-button').fadeOut(100);
    });

    $('#search').on('input', function() {
        $('#search-clear-button').fadeIn(500);
    });

    $("#search-clear-button").click(function() {
        $("#search").val('');
        document.getElementById("search-results").innerHTML = "";
    });
});

/**
 * FUNCTION FOR THE SEARCH BAR CLEAR FUNCTION.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $("#search-clear-button").click(function() {
        $("#search-bar").val('');
        document.getElementById("livesearch").innerHTML = "";
        document.getElementById("livesearch").style.border = "0px";
    });
});


/**
 * FUNCTION FOR THE SEARCH BAR CLEAR BUTTON.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $('#search-bar').focus(function() {
        $('#search-clear-button').fadeIn(500);
    }).focusout(function() {
        $('#search-clear-button').fadeOut(100);
    });
});

/**
 * FUNCTIONS FOR THE SEARCH BAR ICON.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $('#search-bar').focus(function() {
        $('#search-icon').fadeOut(500);
    }).focusout(function() {
        $('#search-icon').fadeIn(100);
    });
});

$(document).ready(function() {
    $("#search-icon").click(function() {
        $("#search-bar").focus();
    });
});

$(document).ready(function() {
    $('#search-bar').focusout(function() {
        if ($("#search-bar").val().length !== 0) {
            $("#search-bar").focus();
            $('#search-clear-button').show();
            $('#search-icon').hide();
        }
    });
});

/**
 * FUNCTION TO DISPLAY THE FILE'S NAME THAT WILL BE UPLOADED.
 * ------------------------------------------------------------------------- */
$(document).ready(function() {
    $('input[type="file"]').change(function(e) {
        var name = e.target.files[0].name;
        $("#file_name").text(name + ' will be uploaded.');

    });
});

/**
 * FUNCTION FOR CHECKING THE LOGIN FORM.
 * ------------------------------------------------------------------------- */
function checkForm() {
    var name = document.getElementById("username_field").value;
    var pwd = document.getElementById("password_field").value;
    var cansubmit = (name.length > 0 && pwd.length > 0);
    document.getElementById("login-button").disabled = !cansubmit;

};