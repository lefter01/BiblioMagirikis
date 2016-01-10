function insertOneMoreIngredient()
{
    var table = document.getElementById("ingredients");
    var row = table.insertRow(-1);
    var cell1 = row.insertCell(html.create());
    var cell2 = row.insertCell();
    cell1.innerHTML = "1";
    cell2.innerHTML = "NEW CELL2";
}

