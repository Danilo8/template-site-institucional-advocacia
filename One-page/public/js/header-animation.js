$(function () {

    var jElement = $('#header');

    $(window).scroll(function () {
        if ($(this).scrollTop() == 0) {
            jElement.css({
                'background-color': 'rgba(0,0,0,0.1)',
                'box-shadow': '',
            });
        } else {
            jElement.css({ 
                'background-color': '#343a40',
                'box-shadow': 'black 0px 0px 5px 0px',
                'text-shadow': ''
            });
        }
    });
    $(window).ready(function () {
        if ($(this).scrollTop() == 0) {
            jElement.css({
                'background-color': 'rgba(0,0,0,0.1)',
                'box-shadow': '',
            });
        } else {
            jElement.css({ 
                'background-color': '#343a40',
                'box-shadow': 'black 0px 0px 5px 0px',
                'text-shadow': ''
            });
        }
    });
});