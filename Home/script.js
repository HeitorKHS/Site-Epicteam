const produtoPromocaoImagem = document.getElementById("img-promocao");
const produtoPromocaoNome = document.querySelector(".slide--imagem .slide--imagem__detalhes h2");
const produtoPromocaoPrecoAntigo = document.querySelector(".slide--imagem .slide--imagem__detalhes .slide--imagem__preco del");
const produtoPromocaoPrecoNovo = document.querySelector(".slide--imagem .slide--imagem__detalhes .slide--imagem__preco strong");

const openModalButton = document.querySelector("#open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton, closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});

let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextImage();
}, 2200)

function radioselect(radioselect)
{
    if(radioselect == 1)
    {
        produtoPromocaoImagem.src = "../img/promocao/produto1.jpg";
        produtoPromocaoNome.innerHTML = "Grand Theft Auto";
        produtoPromocaoPrecoAntigo.innerHTML = "R$ 82,00";
        produtoPromocaoPrecoNovo.innerHTML = "R$ 41,00";

        count = radioselect;
    }
    else if(radioselect == 2) 
    {
        produtoPromocaoImagem.src = "../img/promocao/produto2.jpg";
        produtoPromocaoNome.innerHTML = "Fifa 2023";
        produtoPromocaoPrecoAntigo.innerHTML = "R$ 349,00";
        produtoPromocaoPrecoNovo.innerHTML = "R$ 122,50";

        count = radioselect;
    }   
    else if(radioselect == 3)
    {
        produtoPromocaoImagem.src = "../img/promocao/produto3.jpg";
        produtoPromocaoNome.innerHTML = "Hogwarts Legacy";
        produtoPromocaoPrecoAntigo.innerHTML = "R$ 600,00";
        produtoPromocaoPrecoNovo.innerHTML = "R$ 230,20";

        count = radioselect;
    }
    else if(radioselect == 4)
    {
        produtoPromocaoImagem.src = "../img/promocao/produto4.jpg";
        produtoPromocaoNome.innerHTML = "Outlast";
        produtoPromocaoPrecoAntigo.innerHTML = "R$ 122,00";
        produtoPromocaoPrecoNovo.innerHTML = "R$ 50,00";

        count = radioselect;
    }
    else if(radioselect == 5)
    {
        produtoPromocaoImagem.src = "../img/promocao/produto5.jpg";
        produtoPromocaoNome.innerHTML = "God Of War";
        produtoPromocaoPrecoAntigo.innerHTML = "R$ 77,00";
        produtoPromocaoPrecoNovo.innerHTML = "R$ 42,00";

        count = radioselect;
    }
}

function nextImage()
{
    count++;
    if(count>5) count=1;
    document.getElementById("radio"+count).checked = true;

    radioselect(count);
}