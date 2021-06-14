$("#Go").click(function (e){

    nbrLine = $("input[type=number][name=line]").val();
    nbrCol = $("input[type=number][name=col]").val();

    for (i = 1; i <= nbrLine; i++){
        if (i == 1){
            $( "#headTable" ).append( "<tr class='trhead'></tr>" );
        }
            $( "#bodyTable" ).append( "<tr class='tr'></tr>" );
            for (j = 0; j <= nbrCol; j++){

                if (j == 0 && i == 1){
                    $(".trhead:last-child").append("<th>#Ligne</th>");
                    $( ".tr:last-child" ).append( "<th>"+i+"</th>" );
                } else if (j == 0 && i != 1) {
                    $( ".tr:last-child" ).append( "<th>"+i+"</th>" );
                } else if (i != 1){
                    $( ".tr:last-child" ).append( "<td></td>" );
                } else {
                    $(".trhead:last-child").append("<th> Colonne numéro " + j +"</th>");
                    $( ".tr:last-child" ).append( "<td></td>" );
                    
                }
            }
    }
    $(".create").hide("fast");
    $(".insert").show("slow");
})



$("#Go2").click(function (e){
    indexLine = (($("input[type=number][name=lineText]").val()) - 1);
    indexCol = (($("input[type=number][name=colText]").val()) - 1 );
    newText = $("input[type=text][name=texte]").val();
    changeCell(indexLine, indexCol, newText);
})

function changeCell(indexLine, indexCol, newText) {
    $("#bodyTable")
      .find("tr:eq(" + indexLine + ")")
      .find("td:eq(" + indexCol + ")")
      .text(newText);
  }