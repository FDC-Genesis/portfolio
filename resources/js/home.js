$(document).ready(function() {
    tippy('.link', {
        placement: 'bottom',
    });
    // Toggle mode
    const toggle = $('.js-change-theme');
    const body = $('body');
    const profile = $('#profile');

    toggle.click(() => {
        if (body.classList.contains('text-gray-900')) {
            toggle.innerHTML = "☀️";
            body.classList.remove('text-gray-900');
            body.classList.add('text-gray-100');
            profile.classList.remove('bg-white');
            profile.classList.add('bg-gray-900');
        } else {
            toggle.innerHTML = "🌙";
            body.classList.remove('text-gray-100');
            body.classList.add('text-gray-900');
            profile.classList.remove('bg-gray-900');
            profile.classList.add('bg-white');
        }
    });

    $("#works").click(function(){
        window.location.href = worksLink;
    });
});