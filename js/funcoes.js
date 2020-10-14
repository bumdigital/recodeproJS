function exibirCategoria(categoria) {
    let elementos = document.getElementsByClassName('estilop');
    console.log(elementos);
    contador = 0;
    while (contador < elementos.length) {
        console.log(elementos[contador].id);
        if (categoria == elementos[contador].id) {
            elementos[contador].style = "display: inline-block";
        } else {
            elementos[contador].style = "display:none";
        }
        contador++;
    }
}

let exibirTodos = () => {
    let elementos = document.getElementsByClassName('estilop');
    contador = 0;
    while (contador < elementos.length) {
        elementos[contador].style = "display: inline-block";
        contador++;
    }
}

let destaque = (imagem) => {
    console.log(imagem);
    if (imagem.width == 240) {
        imagem.width = 120; 
    } else {
        imagem.width = 240;
    }
}