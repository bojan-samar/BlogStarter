function scrollIntoView(id) {
    let element = document.querySelector(id);
    element.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
}

function input_length(id, max_length) {

    const el = document.querySelector('#' + id);
    let elLength = el.value.length;
    const lenOutput = document.querySelector('#' + id + '-length');
    lenOutput.textContent = elLength;

    el.addEventListener('input', function () {
        elLength = this.value.length;
        lenOutput.textContent = elLength;

        if (elLength > max_length) {
            if (!lenOutput.classList.contains('text-danger')) {
                lenOutput.classList.add('text-red-600', 'font-bold')
            }
        } else {
            if (lenOutput.classList.contains('text-danger')) {
                lenOutput.classList.remove('text-red-600', 'font-bold')
            }
        }
    })




}
