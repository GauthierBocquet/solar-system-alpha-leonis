

var listeResultat = document.getElementById("liste-resultat-recherche");
function recherche(){
    $(listeResultat).empty();
    var saisie = document.getElementsByClassName("input-recherche")[0].value;

    $.ajax({
        url : 'recherche_ajax.php?saisie='+saisie,
        type :'GET',
        dataType :'json',
        success : function(response){
            // for (id in response.planet) {
            //     display
            // }
            display(response);
        },
        error :function(jqXHR, textStatus, errorThrown){

        }
    });

}

function display(table){
    $(listeResultat).empty();
    for(astre in table.planet){
        var li = document.createElement('li');
        li.classList.add("item-rechercher");

        var a =document.createElement('a');
        a.setAttribute("href","info.php?planete="+table.planet[astre].nom);
        var p = document.createElement('p');
        p.classList.add("titre-item-recherche");
        p.innerText=table.planet[astre].nom;

        var ptags =document.createElement('p');
        ptags.innerText= table.planet[astre].tags;

        a.appendChild(p)
        a.appendChild(ptags);

        li.appendChild(a);
        if(astre < 2) {
            listeResultat.appendChild(li);
        }
    }
    for(astre in table.constellation){
        var li = document.createElement('li');
        li.classList.add("item-rechercher");

        var a =document.createElement('a');
        a.setAttribute("href","info.php?planete="+table.constellation[astre].nom);
        var p = document.createElement('p');
        p.classList.add("titre-item-recherche");
        p.innerText=table.constellation[astre].nom;

        var ptags =document.createElement('p');
        ptags.innerText= table.constellation[astre].tags;

        a.appendChild(p)
        a.appendChild(ptags);

        li.appendChild(a);
        if(astre < 4) {
            listeResultat.appendChild(li);
        }
    }
}