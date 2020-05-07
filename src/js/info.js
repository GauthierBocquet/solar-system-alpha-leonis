

window.onload =initCarousel;

function initCarousel() {
    var nom = document.getElementById("nom").innerHTML.trim();
    if(nom != null){
        $.ajax({
            url : 'carousel_images_ajax.php?astre='+nom,
            type :'GET',
            dataType :'json',
            success : function(response){
                setCarousel(response,nom);
            },
            error :function(jqXHR, textStatus, errorThrown){

                alert(jqXHR.responseText);
            }
        });
    }
}

function setCarousel(urls,nom){
    var indicators = document.getElementsByClassName("carousel-indicators")[0];
    var carouselInner=document.getElementsByClassName("carousel-inner")[0];

    for(url in urls){
        var li = document.createElement('li');
        li.setAttribute('data-target','#myCarousel');
        li.setAttribute('data-slide-to',url);
        if(url == 0){
            li.classList.add('active');
        }
        indicators.appendChild(li);

        var div = document.createElement('div');
        div.setAttribute('class','item');
        var img = document.createElement('img');
        img.setAttribute('src',"../assets/img/"+nom+"/"+urls[url])
        img.setAttribute('alt','Image '+nom);
        if(url == 0){
            div.classList.add('active');
        }
        div.appendChild(img);
        carouselInner.appendChild(div);
    }
}

function addtofav(id,astre){

    $.ajax({
        url : 'add_to_favorite_ajax.php?id='+id+'&astre='+astre,
        type :'GET',
        dataType :'json',
        success : function(response){
            if(!response.ok){
                alert("erreur lors de l'ajout au favoris");
            }
        },
        error :function(jqXHR, textStatus, errorThrown){

            alert("erreur ajax");
        }
    });

}