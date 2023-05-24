let count = 1;
document.getElementById("radio1").checked = true;

setInterval(function(){
    nextImage();
}, 2200)

function radioselect(radioselect)
{
    if(radioselect == 1)
    {
        document.getElementById("img-promocao").src = "img/promocao/produto1.jpg";
        count = radioselect;
    }
    else if(radioselect == 2) 
    {
        document.getElementById("img-promocao").src = "img/promocao/produto2.jpg";
        count = radioselect;
    }   
    else if(radioselect == 3)
    {
        document.getElementById("img-promocao").src = "img/promocao/produto3.jpg";
        count = radioselect;
    }
    else if(radioselect == 4)
    {
        document.getElementById("img-promocao").src = "img/promocao/produto4.jpg";
        count = radioselect;
    }
    else if(radioselect == 5)
    {
        document.getElementById("img-promocao").src = "img/promocao/produto5.jpg";
        count = radioselect;
    }
}

function nextImage()
{
    count++;
    if(count>5) count=1;
    document.getElementById("radio"+count).checked = true;
    document.getElementById("img-promocao").src = "img/promocao/produto"+count+".jpg";
}