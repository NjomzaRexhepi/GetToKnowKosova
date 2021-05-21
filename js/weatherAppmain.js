
var Submit=document.querySelector('.submitW');
var p_first=document.querySelector('.p-first');
var p_second=document.querySelector('.p-second');
var p_third = document.querySelector('.p-third');
var inputValue = document.querySelector('.inputValue');
var button = document.querySelector('.button');
var span_1 = document.querySelector('#span-1');
var span_2 = document.querySelector('#span-2');

var createdElement = document.createElement("i");
document.getElementById("weather-icon").appendChild(createdElement);
var weather_icon=document.getElementById("weather-icon").children;

Submit.addEventListener('click', function(){
    fetch('https://api.openweathermap.org/data/2.5/weather?q='+inputValue.value+'&appid=7fb295a957002553fdb349ef6ec67521')
    .then(response => response.json())
    /*.then(data => console.log(data))*/
    .then(data => {
        var mainStatus = data['weather'][0]['main'];
        var n = data['main']['temp'].valueOf();
        p_first.innerHTML = (n.toFixed(0)-273).toString(10);

        if(inputValue.value == "Malisevo"){
            p_third.innerHTML = "Malishev&#235;";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }else if(inputValue.value == "Pristina"){
            p_third.innerHTML = "Prishtin&#235;";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }else if(inputValue.value == "Prizren"){
            p_third.innerHTML = "Prizren";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }else if(inputValue.value == "Pec"){
            p_third.innerHTML = "Pej&#235;";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }else if(inputValue.value == "Ferizaj"){
            p_third.innerHTML = "Ferizaj";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }else if(inputValue.value == "Kacanik"){
            p_third.innerHTML = "Ka&#231;anik";
            span_1.style.display = "block";
            span_2.style.display = "block";
        }
    
        p_second.innerHTML = data['weather'][0]['description'];
        if(mainStatus == "Clouds"){
            weather_icon[0].setAttribute("class", "fas fa-cloud")
            weather_icon[0].setAttribute("style", "color: #afc3cc;")
        }else if(mainStatus == "Snow"){
            weather_icon[0].setAttribute("class", "far fa-snowflake")
            weather_icon[0].setAttribute("style", "color: #fff5f5;")
        }else if(mainStatus == "Rain"){
            weather_icon[0].setAttribute("class", "fas fa-cloud-showers-heavy")
            weather_icon[0].setAttribute("style", "color: #00BFFF;")
            
        }else if(mainStatus == "Sunny"){
            weather_icon[0].setAttribute("class", "fas fa-sun")
            weather_icon[0].setAttribute("style", "color: RGB(251, 172, 19, .75);")
        }else if(mainStatus != "Sunny" && mainStatus == "Clear"){
            weather_icon[0].setAttribute("class", "fas fa-moon")
            weather_icon[0].setAttribute("style", "color: RGB(244,241,201, .8);")
        }
        
    })
    
    .catch(err => alert("Wrong city name!"))
})
