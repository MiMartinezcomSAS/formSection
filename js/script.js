var d = document,
    next = d.getElementById("next"),
    contentQuestionAll = d.querySelectorAll('.content-questions'),
    dateSubmit = d.getElementById('date-submit'),
    numberContentQ = contentQuestionAll.length,
    actual = 1;
d.getElementById("content-" + actual).classList.add('show-questions');
next.addEventListener('click', nextQuestion);
prev.addEventListener('click', prevQuestion);
dateSubmit.addEventListener('click', dateCheck);
function nextQuestion(e) {

    e.preventDefault();
    d.getElementById("content-" + actual).classList.remove('show-questions');
    actual++;
    d.getElementById("content-" + actual).classList.add('show-questions');
    if (actual == numberContentQ) {
        next.classList.remove('show-inline')
    }
    if (actual == 2) {
        prev.classList.add('show-inline')
    }

}
function prevQuestion(e) {

    e.preventDefault();
    d.getElementById("content-" + actual).classList.remove('show-questions');
    actual--;
    d.getElementById("content-" + actual).classList.add('show-questions');
    if (actual == numberContentQ - 1) {
        next.classList.add('show-inline')
    }
    if (actual == 1) {
        prev.classList.remove('show-inline')
    }
}
function dateCheck(e) {
    e.preventDefault();
    var dayInput = document.getElementById("day").value;
    var monthInput = document.getElementById("month").value;
    var yearInput = document.getElementById("year").value;


    if (parseFloat(dayInput) != dayInput || parseFloat(monthInput) != monthInput || parseFloat(yearInput) != yearInput) {
        alert(' Fecha invalida');
    } else {
        var birthday = new Date(yearInput, monthInput, dayInput);
        var today = new Date();
        var years = today.getFullYear() - birthday.getFullYear();
        birthday.setFullYear(today.getFullYear());
        years = (today < birthday) ? years-- : years;

        if (years >= 18) {
            var contentDate = d.getElementById("date-form-content")
            contentDate.classList.add('hidden')
        } else {
            alert('Debes ser mayor de edad');
        }
    }


}
