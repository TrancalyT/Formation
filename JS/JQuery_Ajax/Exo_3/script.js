function changeCell(indexLine, indexCol, newText) {
    $("#myTable")
      .find("tr:eq(" + indexLine + ")")
      .find("td:eq(" + indexCol + ")")
      .text(newText);
  }
  
  $("#Change").click(function (e){
      indexLine = $("input[type=number][name=line]").val();
      indexCol = $("input[type=number][name=col]").val();
      newText = $("input[type=text][name=texte]").val();

      changeCell(indexLine, indexCol, newText);
  })