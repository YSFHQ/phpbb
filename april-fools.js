$(document).ready(function() {
    var now = new Date();
    if (now.getMonth() === 3 && now.getDate() === 1) {
        $("li.icon-page-aboutus").after('<li><label style="color: #ff0000; font-weight: bold; cursor: pointer;">Pirate Mode <input type="checkbox" name="piratemode" checked></label></li>');
        if (Cookies.get('ysfhq-aprilfools')=='false') {
            $('input[name="piratemode"]').prop('checked', false);
        } else if ($('input[name="piratemode"]').prop('checked')) {
            Cookies.set('ysfhq-aprilfools', true, { expires: 2 });
            pirateSpeak();
            var currlocation = window.location.href;
            setInterval(function () {
                if (currlocation != window.location.href) {
                    currlocation = window.location.href;
                    pirateSpeak();
                }
            }, 1000);
        }
        $('input[name="piratemode"]').click(function (e) {
            Cookies.set('ysfhq-aprilfools', $(e.target).prop('checked'), { expires: 2 });
            window.location.reload(false);
        });
    }
});

function pirateSpeak() {
    $('.postbody').each(function() {
        if (!$(this).prop('data-pirate')) {
            var words = $(this).html();
            // Always replace some words with pirate words
            words = words.replace(/ar/gi, "arrr");
            words = words.replace(/you/gi, "ye");
            words = words.replace(/your/gi, "yer");
            words = words.replace(/ for /g, " fer ");
            words = words.replace(/ to /gi, " ter ");
            words = words.replace(/ing/g, "in'");
            words = words.replace(/are/g, "be");
            words = words.replace(/ is /g, " be ");
            words = words.replace(/was/g, "be");
            words = words.replace(/the /g, "th'");
            words = words.replace(/hello/gi, "Ahoy");
            words = words.replace(/stop/gi, "avast");
            words = words.replace(/quickly/gi, "smartly");
            words = words.replace(/friend/gi, "matey");
            words = words.replace(/beer/gi, "grog");
            words = words.replace(/I'm/g, "I be");
            words = words.replace(/ yes /gi, " aye ");
            // More complicated regular expressions
            // match *-ed and replace it with be *ing
            //words = words.replace(/^/, "Arr, me hearties. ");
            words = words.replace(/(\w+)!\s/g, "$1! Yo ho ho! ");
            words = words.replace(/(\w+)ev(\w+)\s/g, "$1e'$2 ");
            // The order matters here
            words = words.replace(/was\s(\w+)ed\s/g, 'be $1ing ');
            words = words.replace(/was/gi, "wer");
            $(this).html(words);
            $(this).prop('data-pirate', 'arrr');
        }
    });
}
