
// class LinkSelected
// {
//     constructor ($select){
//         this.$select = $select;
//         this.$select.addEventListener('change', this.OnChange)
//     }

//     OnChange(e){
//         let request = JSON.parse(data);
//         request.open('GET', this.$select.getAttribute())
//     }
// }

const selectMarques = $("#marques");
const selectModeles = $("#modeles");

$.ajax(
    'traitement.php',
    {
        success : function(data)
        {
            const marques = JSON.parse(data);
            marques.forEach(marque => {
                const newOption = $("<option>").text(marque.marque).val(marque.marque);
                selectMarques.append(newOption);
            });    
        },
        error : function()
        {
            console.error("Erreur lors de l'appel AJAX");
        }
    }
);

selectMarques.change(function(e){

    const marqueSelected = $("#marques option:selected").val();
    $.ajax(
        'traitement.php?marque=' + marqueSelected,
    {
        success : function(data)
        {
            const modeles = JSON.parse(data);
            selectModeles.empty();
            selectModeles.append($("<option>").text("Sélectionnez un modèle").val(""))
            modeles.forEach(modele => {
                const newOption = $("<option>").text(modele.modele).val(modele.modele);
                selectModeles.append(newOption);
            });   
        },
        error : function()
        {
            console.error("Erreur lors de l'appel AJAX");
        }
    }
    )
});