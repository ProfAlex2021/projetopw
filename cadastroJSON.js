var form;
window.onload = () => {
    form = document.querySelector("form:first-of-type");
    form.onsubmit = enviarJSON;
}

const enviarJSON = (e) => {
    e.preventDefault();

    let data = FormData(form);
    fetch(form.action,
        {
            header: form.method,
            body: data
        }
    ).then(resp => resp.text())
    .then(text => alert(text));
}