function firstDayWeekInMonth(month,year) {
    return new Date(year, month, 1).getDay();
}

function teste(element) {
    
    var color= element.style.backgroundColor;    
    dayMark = element.id;  
    
    switch(color){
        case "rgb(72, 199, 142)":
            element.style.backgroundColor = null;
            element.style.color = "black";
        break;
        case "":
            var x =document.getElementsByClassName("cell");        
            var i;
            for (i = 0; i < x.length; i++) {
                x[i].style.backgroundColor = null;
                x[i].style.color = "black";
            }
            element.style.backgroundColor = "#48c78e";
            element.style.color = "white";
            document.getElementById("valorDataSelecionada").innerHTML = dayMark+'/'+(month+1);
            document.getElementById("agendamento").innerHTML = 'Agendamento<br/>Dia '+dayMark+'/'+(month+1)+' as 16:00';
        break;
    }
}
function diasNoMes(mes, ano) {
    var data = new Date(ano, mes, 0);
    return data.getDate();
}