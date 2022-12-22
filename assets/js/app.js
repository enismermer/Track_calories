console.log("wesh les JS !");
console.log("Welcome to Chart.js !")
console.log("Par ici les dév JS, je compte sur vous !")




const ctx = document.getElementById('myChart');

var chart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['Big Mac', 'Pain au chocolat', 'Pâtes carbonara'],
    datasets: [{
      label: '',
      data: [400,250,1200],
      borderWidth: false,
      hoverOffset:20,
      backgroundColor: [
        "#FF5E5B",
        "#D8D8D8",
        "#FFED66",
        "#00CECB",
        "#FFED66",
      ],
    }]
  },
  options: {
    responsive:true,
    cutout:"90%",
    plugins:{
        legend:false,
    },
    layout:{
        padding:20
    }
  }
});


// elle va se défiler de 170 à 180 selon la taille
function sliderChangeSize(val) {
  document.getElementById("outputSize").innerHTML = val;
}


// elle va se défiler de 60 à 80 selon le poids
function sliderChangeWeight(val) {
  document.getElementById("outputWeight").innerHTML = val;
}



function addData() {
  var food = document.getElementById("food").value;
  var calories = document.getElementById("calories").value; 

  chart.data.labels.push(food);
  chart.data.datasets.forEach((dataset) => {
      dataset.data.push(calories);
  });
  chart.update();
}