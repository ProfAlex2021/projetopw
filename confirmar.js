window.onload = () => {
    const formularios = document.querySelectorAll("td form");
    formularios.forEach(formulario => {
        formulario.onsubmit = (evento) => {
            const resposta = confirm("Deseja excluir o item selecionado?");
            if(resposta === false){
                evento.preventDefault();
            }
        };
    });
};