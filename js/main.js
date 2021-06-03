let itemsCarton = [];
let cod = 0;
for (let i = 0; i < 25; i++) {
    let number = NumeroAleatorio();
    if (itemsCarton.includes(number)) {
        i--;
    }else{
        cod += number;
        itemsCarton.push(number);
    }
}

let array = document.getElementById("form");
array.innerHTML += `<input name="array" type="hidden" value="${itemsCarton}">`
let listar = document.getElementById("listado");
let codigo = document.getElementById("codigo");
CrearIndentidad(codigo,cod,identy);
itemsCarton.forEach(function(elemento, indice, itemsCarton) {
    console.log(elemento, indice);
    listar.innerHTML += `<spam class="items"><img class="" src="img/${elemento}.png" alt="abreojo" width="100" height="100"></spam>`;
    // listar.innerHTML += `<spam class="item">${elemento}</spam>`
})
console.log("Numeros para el Carton");
console.log(itemsCarton.length);