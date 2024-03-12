 var count = 0;
function toggleChart() {
 
  let chart1 = document.getElementById("chart1");
  let chart2 = document.getElementById("chart2");
  let chart3 = document.getElementById("chart3");
  let chart4 = document.getElementById("chart4");
  let chart5 = document.getElementById("chart5");
  if (count % 2 == 0) {
    console.log(count);
    chart1 = document.getElementById("chart1").style.width = "50%";
    chart2 = document.getElementById("chart2").style.width = "20%";
    chart3 = document.getElementById("chart3").style.width = "80%";
    chart4 = document.getElementById("chart4").style.width = "65%";
    chart5 = document.getElementById("chart5").style.width = "42%";
    count+=1;
  } else {
    console.log(count);
    chart1 = document.getElementById("chart1").style.width = "10%";
    chart2 = document.getElementById("chart2").style.width = "10%";
    chart3 = document.getElementById("chart3").style.width = "10%";
    chart4 = document.getElementById("chart4").style.width = "10%";
    chart5 = document.getElementById("chart5").style.width = "10%";
    count+=1;
  }
}
