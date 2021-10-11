var day_of_week = new Array('Dom','Seg','Ter','Qua','Qui','Sex','Sab');
var month_of_year = new Array('Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro');


var Calendar = new Date();

var year = Calendar.getFullYear();       // Retorna o ano
var month = Calendar.getMonth() ;    // Retorna mes (0-11)
var today = Calendar.getDate();     // Retorna dias (1-31)
var weekday = Calendar.getDay();   // Retorna dias (1-31)
var diasNoMes = diasNoMes(month, year);
var firstday = firstDayWeekInMonth(Calendar.getMonth(), Calendar.getFullYear());
var dayMark = today;


console.log("year:"+year)
console.log("month:"+(month+1))
console.log("month:"+(month_of_year[month]))
console.log("today:"+today)
console.log("weekday:"+weekday)
console.log("weekday:"+day_of_week[(weekday-1)])
console.log("diasNoMes:"+(diasNoMes))
console.log("firstday:"+firstday);






var DAYS_OF_WEEK = 6;    // "constant" para o numero de dias na semana
var DAYS_OF_MONTH = 31;    // "constant" para o numero de dias no mes
var cal;    // Usado para imprimir na tela

Calendar.setDate(1);    // Comecar o calendario no dia '1'
Calendar.setMonth(month);  


qtdSemanas = diasNoMes/6
