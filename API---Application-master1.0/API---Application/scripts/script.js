//@Title: PROJETO DE BANCO DE DADOS - REMUNERAÇÃO SERVIDORES PÚBLICOS
//@Athor: VINÍCIUS LESSA
//@Course: BANCO DE DADOS 1
//@Location: FATEC - SÃO ROQUE

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart01);
google.charts.setOnLoadCallback(drawChart02);

// ******* GRÁFICO DE BARRAS ******** //

function drawChart01() {

  var objAjax = new XMLHttpRequest();
 
  objAjax.open('GET','http://servidoresspfatec.orgfree.com/scripts/requisit.php?graph=bar');
  
  objAjax.send();

  let div = document.getElementById('piechart02');  
  div.innerHTML = "<div style='margin-top: 35%; margin-left: 37%;' class='lds-dual-ring'>";
  
  objAjax.onload = function(){      
    
    //div.innerHTML = "";

    console.log(objAjax.responseText);

    let jsonTexto = JSON.parse(objAjax.responseText);
    
    var data = google.visualization.arrayToDataTable([
      ["Ano", "Valor", { role: "style" } ],
      ["CPS 04/2019", 79744211                    ,  "lightblue"],
      ["CPS 05/2019", parseInt(jsonTexto.maio)    ,  "lightblue"], //79745216.00
      ["CPS 06/2019", parseInt(jsonTexto.junho)   ,  "lightblue"], //79745216.00
      ["CPS 07/2019", parseInt(jsonTexto.julho)   ,  "lightblue"], //77388021.0
      ["CPS 08/2019", parseInt(jsonTexto.agosto)  ,  "lightblue"], //79871102.00
      ["CPS 09/2019", parseInt(jsonTexto.setembro),  "lightblue"]  //79871102.00
    ]);

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
                    { calc: "stringify",
                      sourceColumn: 1,
                      type: "string",
                      role: "annotation" },
                    2]);

    var options = {
      title: "Remuneração - CENTRO PAULA SOUZA - 2019",
      width: 920,
      height: 500,
      bar: {groupWidth: "80%"},
      legend: { position: "none" },
    };
    var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
    chart.draw(view, options);
  }
}

// ******* GRÁFICO DE PIZZA ******** //


function drawChart02() { 

  var objAjax = new XMLHttpRequest();

  objAjax.open('GET','http://servidoresspfatec.orgfree.com/scripts/requisit.php?graph=ball');
  objAjax.send();

  let div = document.getElementById('loader02');  
  div.innerHTML = "<div style='margin-top: 18%; margin-left: 38%;' class='lds-dual-ring'>";

  objAjax.onload = function(){      

    div.innerHTML = "";

    console.log(objAjax.responseText);

    let jsonTexto = JSON.parse(objAjax.responseText);
     
    var data2 = google.visualization.arrayToDataTable([      
      ['Orgão', 'Valor'],	  
	  ['CEETEPS'        , parseInt(jsonTexto.CPS)     ], //79871102.00
	  ['POLICIA MILITAR', parseInt(jsonTexto.pm)      ], //339193381.00
      ['DETRAN'         , parseInt(jsonTexto.detran)  ], //8537592.00
      ['EDUCAÇÃO'       , parseInt(jsonTexto.educacao)], //708365211.00"
      ['GOVERNO'        , parseInt(jsonTexto.governo) ]  //6029295.00
    ]);
  
  var options2 = {
    // Legenda
    legend: {position: 'bottom', textStyle: {color: 'black', fontSize: 14, bold: true, fontName: 'Source Sans Pro'}},  
    // Área do Gráfico
    chartArea:{left:70,top:80,width:'80%',height:'70%'},  
    pieSliceText: 'label',
    // Título
    title: 'GASTOS COM REMUNERAÇÃO DOS SERVIDORES PÚBLICOS (2019/Setembro)', TextStyle: {fontSize: 14, bold: true, fontName: 'Source Sans Pro'},
    pieStartAngle: 0,
    fontSize: 15,  
    is3D: true,
  };
  
    var chart2 = new google.visualization.PieChart(document.getElementById('piechart02'));
    chart2.draw(data2, options2);    
  }
}