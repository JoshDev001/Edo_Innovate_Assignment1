import CurrentLocation from "./CurrentLocation.js";
import { updateDom } from "./domFunctions.js";
const location = new CurrentLocation();
const API_KEY = "1f8f896b680ecc8409dd6e633f3a8ae1";

const initApp = () => {
  getDeviceLocation();

  const form = document.querySelector("form");
  form.addEventListener("submit", async (event) => {
    event.preventDefault();
    await search();
  });
};

const search = async () => {
  const searchBar = document.querySelector(".searchBar");

  try {
    const searchLocation = await fetch(
      `http://api.openweathermap.org/geo/1.0/direct?q=${searchBar.value}&appid=${API_KEY}`
    );

    const data = await searchLocation.json();

    await location.setCurrentWeather(data[0].lat, data[0].lon);
    updateDom(location.currentWeather);
  } catch (err) {
    console.log(err);
  }
};

// const getCurrentWeatherData = async () => {
//   //prettier-ignore
//   const weatherData = await fetch(`https://api.openweathermap.org/data/2.5/weather?lat=6.543810&lon=5.898714&appid=${API_KEY}`);
//   const data = await weatherData.json();
//   console.log(data);
// };
// getCurrentWeatherData();

const getDeviceLocation = () => {
  // check is the browser supports geolocation
  if (!navigator.geolocation) {
    alert("Your browser does not support geolocation");
    return;
  }

  // get the current device position
  navigator.geolocation.getCurrentPosition(geoSuccess, geoError);
};

const geoSuccess = async (locationData) => {
  const {
    coords: { latitude, longitude },
  } = locationData;
  await location.setCurrentWeather(latitude, longitude);

  updateDom(location.currentWeather);
};

const geoError = (err) => {
  console.log(err);
};

initApp();
